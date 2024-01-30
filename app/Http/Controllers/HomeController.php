<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\Meals\AdultMeal;
use App\Services\Meals\ChildMeal;
use Illuminate\Routing\Controller;
use App\Services\MealDbApi\MealDbApi;
use Illuminate\Support\Facades\Cookie;
use App\Http\Repositories\CookieRepository;
use Illuminate\Foundation\Validation\ValidatesRequests;


class HomeController extends Controller
{
    use ValidatesRequests;
    private CookieRepository $cookieRepository;

    public function __construct(CookieRepository $cookieRepository)
    {
        $this->cookieRepository = $cookieRepository;
    }

    public function showAgeForm(Request $request)
    {
        if (!$cookieValue = $this->getCookieValue($request)) {
            $cookieValue = Str::random(40);
            Cookie::queue('user_cookie', $cookieValue, 60 * 24 * 365); // Expires in 1 year

            $this->cookieRepository->saveCookie(
                value: $cookieValue,
            );
        }

        $cookie = $this->cookieRepository->getByValue($cookieValue);
        $lastThree = $this->cookieRepository->getMeals(
            cookie: $cookie,
            limit: 3
        );

        return view('age_form', ['last_three_meals' => $lastThree]);
    }

    public function storeAge(Request $request)
    {
        $this->validate($request, [
            'age' => 'required|numeric|integer|min:1|max:150', // Validation rules
        ]);
        $this->cookieRepository->saveCookie(
            value: $this->getCookieValue($request),
            age: $request->input('age'),
        );

        return redirect()->route('home.result')->with('success','');
    }

    public function result(Request $request)
    {
        $cookie = $this->cookieRepository->getByValue(
            $this->getCookieValue($request)
        );

        if ($cookie->age >= 18) {
            $mealType = new AdultMeal();
        } else {
            $mealType = new ChildMeal();
        }

        $meal = $mealType->findRandomMeal();
        $api = new MealDbApi();
        $recipes = $api->searchMealsAndProcess($meal->api_search);
        
        $submission = new Submission([
            'meal_id' => $meal->id,
            'cookie_id' => $cookie->id,
        ]);
        $submission->save();

        $recipe = $recipes['meals'][0] ?? null;

        return view('show_meal', [
            'meal' => $meal, 
            'recipe' => $recipe,
            'meal_notification' => $mealType->noticeMessage()]);
    }

    protected function getCookieValue($request)
    {
        return $request->cookie('user_cookie');
    }
}
