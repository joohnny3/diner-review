<?php

namespace App\Http\Controllers;

use App\Models\Diner;
use Illuminate\Http\Request;

class DinerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = $request->input('title');
        $filter = $request->input('filter', '');

        $diners = Diner::when(
            $title,
            fn ($query, $title) => $query->title($title)
        );

        $diners = match ($filter) {
            'popular_last_month' => $diners->popularLastMonth(),
            'popular_last_6months' => $diners->popularLast6Months(),
            'highest_rated_last_month' => $diners->highestRatedLastMonth(),
            'highest_rated_last_6months' => $diners->highestRatedLast6Months(),
            default => $diners->latest()
        };
        $diners = $diners->get();

        return view('diners.index', ['diners' => $diners]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Diner $diner)
    {
        return view(
            'diners.show',
            [
                'diner' => $diner->load([
                    'reviews' => fn ($query) => $query->latest()
                ])
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
