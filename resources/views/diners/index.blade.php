@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2xl">Restaurants</h1>

    <form action="{{ route('diners.index') }}" method="GET" class="mb-4 flex items-center space-x-2">
        <input type="text" name="title" placeholder="搜尋餐廳" value="{{ request('title') }}" class="input h-10">
        <input type="hidden" name="filter" value="{{ request('filter') }}" />
        <button type="submit" class="btn h-10">Search</button>
        <a href="{{ route('diners.index') }}" class="btn h-10">Clear</a>
    </form>

    <ul>
        @forelse ($diners as $diner)
            <li class="mb-4">
                <div class="diner-item">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="w-full flex-grow sm:w-auto">
                            <a href="{{ route('diners.show', $diner) }}" class="diner-title">
                                {{ $diner->title }}
                            </a>
                            <span class="diner-author">addr. {{ $diner->address }} </span>
                        </div>
                        <div>
                            <div class="diner-rating">
                                {{ number_format($diner->reviews_avg_rating, 1) }}
                            </div>
                            <div class="diner-review-count"></div>
                            out of {{ $diner->reviews_count }}
                            {{ Str::plural('review', $diner->reviews_count) }}
                        </div>
                    </div>
                </div>
                </div>
            </li>
        @empty
            <li class="mb-4">
                <div class="empty-diner-item">
                    <p class="empty-text">No restaurants found</p>
                    <a href="{{route('diners.index')}}" class="reset-link">Reset criteria</a>
                </div>
            </li>
        @endforelse
    </ul>
@endsection
