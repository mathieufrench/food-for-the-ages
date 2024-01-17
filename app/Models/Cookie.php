<?php

namespace App\Models;

use App\Models\Meal;
use App\Models\Submission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cookie extends Model
{
    use HasFactory;

    protected $fillable = ['cookie_value'];

    public function submissions()
    {
        return $this->hasMany(Submission::class, 'cookie_id');
    }
    public function meals()
    {
        return $this->hasManyThrough(
            Meal::class,
            Submission::class,
            'cookie_id',
            'id',
            'id',
            'meal_id'
        );
    }
}
