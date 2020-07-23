<?php

namespace App\Http\Controllers;

use App\Casino;
use App\Game;
use App\Services\TeamApiService;
use App\Services\TheOddsApiSercice;
use App\Sport;
use Illuminate\Http\Request;

class GameController extends Controller
{
    protected $teamApi;
    protected $oddsService;
    public function __construct(TheOddsApiSercice $oddsService,TeamApiService $teamApi)
    {
        $this->teamApi     = $teamApi;
        $this->oddsService = $oddsService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $odds    = $this->oddsService->odds($request->sport ?? "basketball_nba");
        $casinos = Casino::pluck('path', 'nice');
        $matches = [];
        if ($odds->json()) {
            $matches = collect($odds->json()["data"]);
            $match   = ($matches[0]);
            // dd($matches);

        }

        return view('game', ["matches" => $matches, "sports" => Sport::all(), "match" => $match, 'casinos' => $casinos,"teamApi"=>  $this->teamApi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param   $game
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $game)
    {
        $odds    = $this->oddsService->odds($request->sport);
        $casinos = Casino::pluck('path', 'nice');

        $match = [];
        if ($odds->json()) {
            $matches = collect($odds->json()["data"]);
            $match   = ($matches[$game]);

        }
        return view('game', ["matches" => $matches, "match" => $match, "sports" => Sport::all(), 'casinos' => $casinos,"teamApi"=>  $this->teamApi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
