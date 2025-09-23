<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author'];

    // رابطه با Reviewها
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // اسکوپ جستجو بر اساس عنوان
    public function scopeTitle($query, $title)
    {
        return $query->where('title', 'like', "%{$title}%");
    }

    // اسکوپ محاسبه میانگین امتیاز
    public function scopeWithAvgRating($query)
    {
        return $query->withAvg('reviews', 'rating');
    }

    // اسکوپ شمارش نظرات
    public function scopeWithReviewsCount($query)
    {
        return $query->withCount('reviews');
    }

    // اسکوپ مقبولیت ماه گذشته
public function scopePopularLastMonth($query)
{
    return $query
        ->withReviewsCount()
        ->withAvgRating()
        ->whereMonth('created_at', now()->month)
        ->orderBy('reviews_count', 'desc')
        ->orderBy('reviews_avg_rating', 'desc');
}

}
