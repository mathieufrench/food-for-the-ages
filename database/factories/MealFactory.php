<?php

namespace Database\Factories;

use App\Models\Meal;
use Illuminate\Database\Eloquent\Factories\Factory;

class MealFactory extends Factory
{
    protected $model = Meal::class;

    public function definition(): array
    {
        return [
            'meal_age_bracket' => fake()->randomElement(['adult' ,'child']),
            'name' => fake()->text(10),
            'api_search' => fake()->text(10),
        ];
    }
}
