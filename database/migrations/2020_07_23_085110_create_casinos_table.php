<?php

use App\Casino;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casinos', function (Blueprint $table) {
            $table->id();
            $table->string('nice');
            $table->string('path');
            $table->timestamps();
        });

        /*Seed*/
        $data = [
            ["nice" => "BetOnline.ag", "path" => "https://bettingsitesusa.net/wp-content/uploads/2018/06/betonline-logo-center-top.png"],
            ["nice" => "Betfair", "path" => "https://www.ssa-data.com/media/58845/betfair-res-2.png"],
            ["nice" => "Bookmaker.eu", "path" => "https://www.guide2gambling.in/wp-content/uploads/2019/05/bookmaker-eu-logo-transparent.png"],
            ["nice" => "Bookmaker", "path" => "https://www.guide2gambling.in/wp-content/uploads/2019/05/bookmaker-eu-logo-transparent.png"],
            ["nice" => "Bovada", "path" => "https://bestbitcoinexchange.com/wp-content/uploads/2018/07/goodsportsbooks-bovada-logo-300x164.png"],
            ["nice" => "DraftKings", "path" => "https://www.nicepng.com/png/detail/872-8720801_draftkings-sportsbook-logo.png"],
            ["nice" => "FanDuel", "path" => "https://www.onlinegamblingsites.com/wp-content/uploads/2019/04/fanduel-pennsylvania-online-sportsbook.png"],
            ["nice" => "GTbets", "path" => "https://www.sportsbettingnerds.com/wp-content/uploads/2019/05/gtbetslogo.png"],
            ["nice" => "Intertops", "path" => "https://storage.sbcevents.com/assets/2018/01/Intertops-Vector-Logo-English-1.png"],
            ["nice" => "MyBookie.ag", "path" => "https://www.sportsbookpromocodes.com/wp-content/uploads/2017/01/sportsbookpromocodes-mybookie-logo.png"],
            ["nice" => "PointsBet", "path" => "https://prnewswire2-a.akamaihd.net/p/1893751/sp/189375100/thumbnail/entry_id/1_5c5on2ba/def_height/240/def_width/640/version/100011/type/1"],
            ["nice" => "PointsBet (US)", "path" => "https://prnewswire2-a.akamaihd.net/p/1893751/sp/189375100/thumbnail/entry_id/1_5c5on2ba/def_height/240/def_width/640/version/100011/type/1"],
            ["nice" => "Unibet", "path" => "https://leagueoflegends-betting.com/wp-content/uploads/2016/07/Unibet-Logo-white-500x200.png"],
            ["nice" => "William Hill (US)", "path" => "https://www.williamhillplc.com/media/10432/classic-stacked.jpg"],
            ["nice" => "LowVig.ag", "path" => "https://ui.lowvig.ag/images/promotions/mit-240-poster-home-video.jpg"],
        ];
        Casino::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casinos');
    }
}
