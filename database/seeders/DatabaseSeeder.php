<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ساخت یک سری کتاب
        Book::factory(100)->create()->each(function ($book) {

            // نقدهای خوب
            Review::factory()
                ->count(random_int(3, 10))
                ->good()
                ->for($book)
                ->create();

            // نقدهای متوسط
            Review::factory()
                ->count(random_int(3, 10))
                ->average()
                ->for($book)
                ->create();

            // نقدهای بد
            Review::factory()
                ->count(random_int(3, 10))
                ->bad()
                ->for($book)
                ->create();
        });
    }
}
