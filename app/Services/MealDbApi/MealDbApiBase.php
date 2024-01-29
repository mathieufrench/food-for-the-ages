<?php

namespace App\Services\MealDbApi;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

abstract class MealDbApiBase
{
    protected string $apiKey;
    protected string $baseUrl;
    public function __construct()
    {
        $config = Config::get('services.mealdb');
        $this->apiKey = $config['api_key'];
        $this->baseUrl = $config['base_url'];
    }

    protected function makeApiRequest(string $endpoint, array $params = []): array
    {
        $response = Http::get($this->baseUrl . '/' . $endpoint, array_merge($params, [
            'apikey' => $this->apiKey,
        ]));

        $this->handleResponseErrors($response);

        Log::debug($response);
        return $response->json();
    }

    private function handleResponseErrors($response)
    {
        if ($response->failed()) {
            throw new Exception('API request failed with status code: ' . $response->status());
        }

        if ($response->status() === 429) {
            throw new Exception('API rate limit exceeded. Please try again later.');
        }
    }
}
