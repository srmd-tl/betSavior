<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class NewsApiService
{
    /*Returns The Latest Sports News*/
    public function news()
    {
        $today = Carbon::now()->toDateString();
        $result = Http::get("http://newsapi.org/v2/everything?language=en&q=sports&from={$today}&sortBy=publishedAt&apiKey=b136c267efd8442480cfe31a5c1e865c");

        return $result->json();

    }
}
