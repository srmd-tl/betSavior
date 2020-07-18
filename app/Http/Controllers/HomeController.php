<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
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
