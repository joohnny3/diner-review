@extends('layouts.app')

@section('content')
    <h1 class="mb-5 text-4xl animate__animated animate__fadeInDown" style="font-family: 'Lobster', cursive;">
        <i class="fa-solid fa-utensils fa-xs" style="color: #0c0c0e;"></i> Restaurants
    </h1>

    <form action="{{ route('diners.index') }}" method="GET" class="mb-4 flex items-center space-x-2">
        <input type="text" name="title" placeholder="搜尋餐廳" value="{{ request('title') }}" class="input h-10">
        <input type="hidden" name="filter" value="{{ request('filter') }}" />
        <button type="submit" class="btn h-10"><i class="fa-solid fa-magnifying-glass"></i></button>
        <a href="{{ route('diners.index') }}" class="btn h-10"><i class="fa-solid fa-xmark"></i></a>
    </form>

    <div class="filter-container mb-4 flex">
        @php
            $filters = [
                '' => '最新開幕',
                'popular_last_month' => '過去 𝟭 個月熱門',
                'popular_last_6months' => '過去 𝟲 個月熱門',
                'highest_rated_last_month' => '過去 𝟭 個月高分',
                'highest_rated_last_6months' => '過去 𝟲 個月高分',
            ];
        @endphp

        @foreach ($filters as $key => $label)
            <a href="{{ route('diners.index', [...request()->query(), 'filter' => $key]) }}"
                class="{{ request('filter') === $key || (request('filter') === null && $key === '') ? 'filter-item-active' : 'filter-item' }}">
                {{ $label }}
            </a>
        @endforeach
    </div>

    <ul>
        @forelse ($diners as $diner)
            <li class="mb-4">
                <div class="diner-item hover:bg-slate-50">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="w-full flex-grow sm:w-auto">
                            <a href="{{ route('diners.show', $diner) }}" class="diner-title">
                                {{ $diner->title }}
                            </a>
                            <span class="diner-address">addr. {{ $diner->address }} </span>
                        </div>
                        <div>
                            <div class="diner-rating">
                                <x-star-rating :rating="$diner->reviews_avg_rating" />
                            </div>
                            <div class="diner-review-count"></div>
                            {{ $diner->reviews_count }}
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
                    <a href="{{ route('diners.index') }}" class="reset-link">Reset criteria</a>
                </div>
            </li>
        @endforelse
    </ul>
@endsection
