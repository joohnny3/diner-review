@extends('layouts.app')

@section('content')
    <h1 class="mb-3 text-2xl">{{ $diner->title }} </h1>
    <form action="{{ route('diners.reviews.store', $diner) }}" method="POST">
        @csrf
        {{-- <label for="rating"></label>
        <select name="rating" id="rating" class="input mb-4" required>
            <option value="">選擇分數</option>
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}">
                    {{ $i }}
                </option>
            @endfor
        </select> --}}
        <div class="stars mb-8 text-center">
            @for ($i = 1; $i <= 5; $i++)
                <span class="star text-3xl text-gray-400 cursor-pointer" style="padding:0 8px"
                    data-value="{{ $i }}"><i class="fa-solid fa-star"></i></span>
            @endfor
            <input type="hidden" name="rating" id="rating" value="">
        </div>
        <label for="review"></label>
        <textarea name="review" placeholder="詳細說明你在這間餐廳的親身體驗" id="review" required class="input mb-4" style="height:250px"></textarea>

        <div class="flex justify-end">
            <button type="button" class="btn mr-3" onclick="window.history.back();">取消</button>
            <button type="submit" class="btn">張貼</button>
        </div>
    </form>
    <script>
        document.querySelectorAll('.star').forEach(star => {
            star.addEventListener('click', function(e) {
                let value = this.dataset.value;
                document.getElementById('rating').value = value;

                document.querySelectorAll('.star').forEach(s => {
                    s.classList.remove('selected');
                });
                for (let i = 1; i <= value; i++) {
                    document.querySelector(`.star[data-value="${i}"]`).classList.add('selected');
                }
            });
        });
    </script>
@endsection
