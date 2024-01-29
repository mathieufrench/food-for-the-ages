<?php

namespace App\Services\MealDbApi;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;
use App\Services\MealDbApi\MealDbApiBase;

class MealDbApi extends MealDbApiBase
{
    public function searchMeals(string $query): array
    {
        return $this->makeApiRequest('search.php', [
            's' => $query
        ]);
    }

    public function searchMealsAndProcess($string)
    {
        try {
            $meals = $this->searchMeals($string);
            return $meals;
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}