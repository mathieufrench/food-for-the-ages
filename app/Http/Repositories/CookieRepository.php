<?php

namespace App\Http\Repositories;

use App\Models\Cookie;
use Illuminate\Support\Collection;

class CookieRepository
{
    public function getById($id): Cookie
    {
        return Cookie::findOrFail($id);
    }

    public function getAll(): Collection
    {
        return Cookie::all();
    }

    public function getByValue($value): Cookie
    {
        return Cookie::where("cookie_value", $value)->first();
    }

    public function getMeals(
        Cookie $cookie,
        int $limit = null): Collection
    {
        if ($cookie) {
            return $cookie->meals()->orderBy('submissions.updated_at', 'desc')->limit($limit)->get();
        }
        return new Collection();
    }

    public function getMealsByValue($value): Collection
    {
        $record = $this->getByValue($value);
        return $this->getMeals($record);
    }

    public function getMealsById($value): Collection
    {
        $record = $this->getById($value);
        return $this->getMeals($record);
    }

    public function saveCookie(?String $value, ?Int $age): Cookie
    {
        $cookie = Cookie::firstOrNew(['cookie_value' => $value]);

        if (isset($value) && !$cookie->exists){
            $cookie->cookie_value = $value;
        }

        if (isset($age) ){
            $cookie->age = $age;
        }

        $cookie->save();

        return $cookie;
    }

    
}