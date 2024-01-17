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
            ['name' => 'Spaghetti with Meatballs', 'meal_age_bracket' => 'adult'],
            ['name' => 'Chicken Alfredo', 'meal_age_bracket' => 'adult'],
            ['name' => 'Tuna Salad Sandwich', 'meal_age_bracket' => 'adult'],
            ['name' => 'Grilled Cheese Sandwich', 'meal_age_bracket' => 'child'],
            ['name' => 'Macaroni and Cheese', 'meal_age_bracket' => 'child'],
            ['name' => 'Chicken Nuggets', 'meal_agez_bracket' => 'child'],
        ]);
    }
}
