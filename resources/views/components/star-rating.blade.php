@if ($rating)
  @for ($i = 1; $i <= 5; $i++)
    {!! $i <= round($rating) ? '<i class="fa-solid fa-star" style="color: #f6d813;"></i>' : '<i class="fa-regular fa-star" style="color: #f6d813;"></i>' !!}
  @endfor
@else
  沒有評論
@endif