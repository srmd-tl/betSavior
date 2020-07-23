<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TeamApiService
{
    /*Returns The Team Details*/
    public function team($team)
    {

        $result = Http::get("https://www.thesportsdb.com/api/v1/json/1/searchteams.php?t={$team}");

        return $result->json();

    }
}
