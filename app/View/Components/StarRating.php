<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StarRating extends Component
{
    public $rating;

    public function __construct($rating)
    {
        $this->rating = $rating;
    }

    public function render()
    {
        return view('components.star-rating');
    }
}
