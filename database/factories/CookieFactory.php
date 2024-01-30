<?php

namespace Database\Factories;

use App\Models\Cookie;
use Illuminate\Database\Eloquent\Factories\Factory;

class CookieFactory extends Factory
{
    protected $model = Cookie::class;

    public function definition(): array
    {
        return [
            'age' => fake()->randomNumber(2, true),
            'cookie_value' => fake()->text(40),
        ];
    }
}
