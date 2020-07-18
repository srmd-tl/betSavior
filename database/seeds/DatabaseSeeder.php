<?php

use App\Sport;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*Sport Table Seeder*/
        $data = [
            [
                "sport_nice" => "NBA",
                "sport_key"  => "basketball_nba",
            ],
            [
                "sport_nice" => "NFL",
                "sport_key"  => "americanfootball_nfl",
            ],
            [
                "sport_nice" => "NHL",
                "sport_key"  => "icehockey_nhl",
            ],
            [
                "sport_nice" => "MLB",
                "sport_key"  => "baseball_mlb",
            ],
            [
                "sport_nice" => "NCAAF",
                "sport_key"  => "americanfootball_ncaaf",
            ],
        ];
        Sport::insert($data);
        // $this->call([UsersTableSeeder::class]);
    }
}
