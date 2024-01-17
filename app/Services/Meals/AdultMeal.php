<?php

namespace App\Services\Meals;

use App\Services\Meals;
use App\Models\Meal;

class AdultMeal implements Meals
{
    public function findRandomMeal(): Meal
    {
        return Meal::where('meal_age_bracket', 'adult')
            ->inRandomOrder()
            ->first();
    }

    public function noticeMessage(): string 
    {
        return "Take care when using knives";
    }
}