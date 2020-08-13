<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TheOddsApiSercice
{
    public function odds($sport)
    {
        $response = Http::get("https://api.the-odds-api.com/v3/odds/?sport={$sport}&region=us&mkt=h2h&apiKey=833c0c72c4a33d12ad8d58c3096f8bc7");
        return $response;
    }

     public function spreads($sport)
    {
        $response = Http::get("https://api.the-odds-api.com/v3/odds/?sport={$sport}&region=us&mkt=spreads&apiKey=833c0c72c4a33d12ad8d58c3096f8bc7");
        return $response;
    }
     public function totals($sport)
    {
        $response = Http::get("https://api.the-odds-api.com/v3/odds/?sport={$sport}&region=us&mkt=totals&apiKey=833c0c72c4a33d12ad8d58c3096f8bc7");
        return $response;
    }
}
