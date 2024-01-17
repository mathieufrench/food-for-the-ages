<?php

namespace App\Services\Meals;

use App\Services\Meals;
use App\Models\Meal;

class ChildMeal implements Meals
{
    public function findRandomMeal(): Meal
    {
        return Meal::where('meal_age_bracket', 'child')
            ->inRandomOrder()
            ->first();
    }

    public function noticeMessage(): string 
    {
        return "Ask an adult for help if you decide to make this!";
    }
}