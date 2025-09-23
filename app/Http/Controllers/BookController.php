<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // لیست کتاب‌ها
    public function index(Request $request)
    {
        $title = $request->input('title');
        $filter = $request->input('filter', '');

        $books = Book::when(
            $title,
            fn($query, $title) => $query->title($title)
        );

        $books = match ($filter) {
            'popular_last_month' => $books->popularLastMonth(),
            default => $books->latest()->withAvgRating()->withReviewsCount()
        };

        $cacheKey = 'books:' . $filter . ':' . $title;
        $books = cache()->remember($cacheKey, 3600, fn() => $books->get());

        return view('books.index', ['books' => $books]);
    }

    // نمایش یک کتاب خاص با Reviewها
    public function show(int $id)
    {
        $cacheKey = 'book:' . $id;

        $book = cache()->remember(
            $cacheKey,
            3600,
            fn() =>
                Book::with([
                    'reviews' => fn($query) => $query->latest()
                ])->withAvgRating()->withReviewsCount()->findOrFail($id)
        );

        return view('books.show', ['book' => $book]);
    }
}
