<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function submissions()
    {
        return $this->hasMany(Submission::class, 'meal_id');
    }
}