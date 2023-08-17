@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2xl">{{ $diner->title }} </h1>
    <form action="{{ route('diners.reviews.store', $diner) }}" method="POST">
        @csrf
        <label for="rating"></label>
        <select name="rating" id="rating" class="input mb-4" required>
            <option value="">選擇分數</option>
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}">
                    {{ $i }}
                </option>
            @endfor
        </select>
        <label for="review"></label>
        <textarea name="review" placeholder="詳細說明你在這間餐廳的親身體驗" id="review" required class="input mb-4" style="height:250px"></textarea>

        <div class="flex justify-end">
            <button type="submit" class="btn">張貼</button>
        </div>
    </form>
@endsection
