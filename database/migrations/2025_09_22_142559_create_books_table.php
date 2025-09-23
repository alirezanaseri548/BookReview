<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();

            // عنوان کتاب
            $table->string('title');

            // نویسنده کتاب
            $table->string('author');

            $table->timestamps(); // زمان ساخت و بروزرسانی
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
