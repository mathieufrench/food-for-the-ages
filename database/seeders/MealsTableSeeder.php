<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('meals')->insert([
            ['name' => 'Spaghetti with Meatballs', 'meal_age_bracket' => 'adult', 'api_search' => 'spaghetti'],
            ['name' => 'Chicken Alfredo', 'meal_age_bracket' => 'adult', 'api_search' => 'alfredo'],
            ['name' => 'Tuna Salad Sandwich', 'meal_age_bracket' => 'adult', 'api_search' => 'sandwich'],
            ['name' => 'Grilled Cheese Sandwich', 'meal_age_bracket' => 'child', 'api_search' => 'sandwich'],
            ['name' => 'Macaroni and Cheese', 'meal_age_bracket' => 'child', 'api_search' => 'grilled%20mac%20and%20cheese'],
            ['name' => 'Chicken Nuggets', 'meal_age_bracket' => 'child', 'api_search' => 'kentucky%20fried%20chicken'],
        ]);
    }
}
