@extends('layouts.app')

@section('content')
  {{-- عنوان صفحه --}}
  <h1 class="mb-10 text-2xl">Books</h1>

  {{-- فرم جستجوی عنوان کتاب --}}
  <form method="GET" action="{{ route('books.index') }}" class="mb-4 flex items-center space-x-2">
    <input type="text" name="title" placeholder="Search by title"
      value="{{ request('title') }}" class="input h-10" />
    {{-- نگهداری فیلتر قبلی در صورت جستجو --}}
    <input type="hidden" name="filter" value="{{ request('filter') }}" />
    <button type="submit" class="btn h-10">Search</button>
    <a href="{{ route('books.index') }}" class="btn h-10">Clear</a>
  </form>

  {{-- لینک‌های فیلتر کتاب‌ها --}}
  <div class="filter-container mb-4 flex">
    @php
      $filters = [
          '' => 'Latest',
          'popular_last_month' => 'Popular Last Month',
          'popular_last_6months' => 'Popular Last 6 Months',
          'highest_rated_last_month' => 'Highest Rated Last Month',
          'highest_rated_last_6months' => 'Highest Rated Last 6 Months',
      ];
    @endphp

    @foreach ($filters as $key => $label)
      <a href="{{ route('books.index', [...request()->query(), 'filter' => $key]) }}"
        class="{{ request('filter') === $key || (request('filter') === null && $key === '') ? 'filter-item-active' : 'filter-item' }}">
        {{ $label }}
      </a>
    @endforeach
  </div>

  {{-- لیست کتاب‌ها --}}
  <ul>
    @forelse ($books as $book)
      <li class="mb-4">
        <div class="book-item">
          <div class="flex flex-wrap items-center justify-between">
            <div class="w-full flex-grow sm:w-auto">
              <a href="{{ route('books.show', $book) }}" class="book-title">{{ $book->title }}</a>
              <span class="book-author">by {{ $book->author }}</span>
            </div>
            <div>
              <div class="book-rating">
                <x-star-rating :rating="$book->reviews_avg_rating" />
              </div>
              <div class="book-review-count">
                out of {{ $book->reviews_count }} {{ Str::plural('review', $book->reviews_count) }}
              </div>
            </div>
          </div>
        </div>
      </li>
    @empty
      <li class="mb-4 text-center p-6 bg-yellow-100 rounded-lg">
        <p class="text-xl font-semibold mb-3">📚 کتابی پیدا نشد</p>
        <a href="{{ route('books.index') }}"
           class="btn bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
          نمایش همه کتاب‌ها
        </a>
      </li>
    @endforelse
  </ul>
@endsection
