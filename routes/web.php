<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

Route::get('/books/{book}/reviews/create', [ReviewController::class, 'create'])->name('books.reviews.create');
Route::post('/books/{book}/reviews', [ReviewController::class, 'store'])->name('books.reviews.store');

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);
