<?php 

namespace App\Services;

use App\Models\Meal;

interface Meals
{
    public function findRandomMeal(): Meal;

    public function noticeMessage(): string;
}