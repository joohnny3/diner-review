<?php

use App\Http\Controllers\DinerController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('diners.index');
});

Route::resource('diners', DinerController::class)->only(['index', 'show']);

Route::resource('diners.reviews', ReviewController::class)->scoped(['review' => 'diner'])->only(['create', 'store']);
