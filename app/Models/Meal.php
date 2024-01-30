<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\MealFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meal extends Model
{
    use HasFactory;
    public function submissions()
    {
        return $this->hasMany(Submission::class, 'meal_id');
    }

    protected static function newFactory()
    {
        return MealFactory::new();
    }
}