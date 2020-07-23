<?php

namespace App\Http\Controllers;

use App\Services\NewsApiService;
use App\Services\TeamApiService;
use App\Services\TheOddsApiSercice;
use App\Sport;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    protected $newsApi;
    protected $teamApi;
    protected $oddsService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(NewsApiService $newsApi, TheOddsApiSercice $oddsService, TeamApiService $teamApi)
    {
        $this->middleware('auth');
        $this->newsApi     = $newsApi;
        $this->teamApi     = $teamApi;
        $this->oddsService = $oddsService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $news    = [];
        $odds    = $this->oddsService->odds($request->sport ?? "basketball_nba");
        $matches = [];
        if ($odds->json()) {
            $matches = collect($odds->json()["data"]);
            $match   = ($matches[0]);
            // dd($matches);

        }
        $data = ($this->newsApi->news());
        if ($data["totalResults"] > 0) {
            $news = $data["articles"];
        }
    
        return view('index', ["news" => $news, "matches" => $matches, "sports" => Sport::all(), "match" => $match,"teamApi"=>  $this->teamApi]);
    }
    public function fetchOdds()
    {

        $headers = array(
            'apikey' => '042aa7c0-c513-11ea-bab0-75cc4e6b0be7',
        );
        $data = [
            'sport'   => 'soccer',
            'country' => 'england',
            'league'  => 'soccer-england-premier-league',
        ];

        $response = Http::get('https://api.the-odds-api.com/v3/odds/?sport=UPCOMING&region=us&mkt=h2h&apiKey=833c0c72c4a33d12ad8d58c3096f8bc7');

        dd($response->json());

    }
}
