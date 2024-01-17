<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'cookie_id',
        'meal_id'
    ];

    public function user()
    {
        return $this->belongsTo(Cookie::class, 'cookie_id');
    }

    public function meal()
    {
        return $this->belongsTo(Meal::class, 'meal_id');
    }   
}