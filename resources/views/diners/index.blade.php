@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2xl">Restaurants</h1>

    <form action=""></form>

    <ul>
        @forelse ($diners as $diner)
        <li class="mb-4">
            <div class="diner-item">
              <div
                class="flex flex-wrap items-center justify-between">
                <div class="w-full flex-grow sm:w-auto">
                  <a href="#" class="diner-title">diner Title</a>
                  <span class="diner-author">by Piotr Jura</span>
                </div>
                <div>
                  <div class="diner-rating">
                    3.5
                  </div>
                  <div class="diner-review-count">
                    out of 5 reviews
                  </div>
                </div>
              </div>
            </div>
          </li>
        @empty
        <li class="mb-4">
            <div class="empty-diner-item">
              <p class="empty-text">No diners found</p>
              <a href="#" class="reset-link">Reset criteria</a>
            </div>
          </li>
        @endforelse
    </ul>
@endsection
