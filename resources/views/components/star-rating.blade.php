<div class="flex">
  @for ($i = 1; $i <= 5; $i++)
    @if ($i <= round($rating))
      ⭐
    @else
      ☆
    @endif
  @endfor
</div>
