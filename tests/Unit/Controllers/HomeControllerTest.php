<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Models\Meal;
use App\Models\Cookie;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testShowAgeForm()
    {
        $response = $this->get(route('home'));
        $this->assertEquals(200, $response->status());
    }

    public function testStoreAge()
    {

        $response = $this->withCookie('user_cookie', 'mock_cookie_value')
            ->post(route('home.store'), ['age' => 25]);

        $response->assertRedirect(route('home.result'));

        $this->assertDatabaseHas('cookies', ['cookie_value'=>'mock_cookie_value', 'age' => 25]);
    }

    public function testAdultResult()
    {
        Meal::factory()->create(['meal_age_bracket' => 'adult']);
        $cookie = Cookie::factory()->create(['age'=>30]);
        $response = $this->withCookie('user_cookie', $cookie->cookie_value)->get('/result');
        
        $this->assertEquals(200, $response->status());
    }

    public function testChildResult()
    {
        Meal::factory()->create(['meal_age_bracket' => 'child']);
        $cookie = Cookie::factory()->create(['age'=>3]);
        $response = $this->withCookie('user_cookie', $cookie->cookie_value)->get('/result');
        
        $this->assertEquals(200, $response->status());
    }

    public function testAdultResultForChildFails()
    {
        Meal::factory()->create(['meal_age_bracket' => 'adult']);
        $cookie = Cookie::factory()->create(['age'=>3]);
        $response = $this->withCookie('user_cookie', $cookie->cookie_value)->get('/result');
        
        $this->assertEquals(500, $response->status());
    }
}