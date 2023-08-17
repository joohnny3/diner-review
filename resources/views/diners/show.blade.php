@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h1 class="top-0 mb-2 text-2xl">{{ $diner->title }}</h1>

        <div class="diner-info">
            <div class="diner-address mb-4 text-lg font-semibold">{{ $diner->address }}</div>
            <div class="diner-rating flex items-center">
                <div class="mr-2 text-sm font-medium text-slate-700">
                    <x-star-rating :rating="$diner->reviews_avg_rating" />
                </div>
                <span class="diner-review-count text-sm text-gray-500">
                    {{ $diner->reviews_count }} {{ Str::plural('review', 5) }}
                </span>
            </div>
        </div>
    </div>

    <div>
        <h2 class="mb-4 text-xl font-semibold">評論</h2>
        <ul>
            @forelse ($diner->reviews as $review)
                <li class="diner-item mb-4">
                    <div>
                        <div class="mb-2 flex items-center justify-between">
                            <div class="font-semibold">
                                <x-star-rating :rating="$review->rating" />
                            </div>
                            <div class="diner-review-count">
                                {{ $review->created_at->format('M j, Y') }}</div>
                        </div>
                        <p class="text-gray-700">{{ $review->review }}</p>
                    </div>
                </li>
            @empty
                <li class="mb-4">
                    <div class="empty-diner-item">
                        <p class="empty-text text-lg font-semibold">沒有評論</p>
                    </div>
                </li>
            @endforelse
        </ul>
    </div>
@endsection
