<?php

use App\SocialMedia;
use Illuminate\Database\Seeder;

class SocialMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name" => "facebook", "logo" => '<a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>',
            ],
            [
                "name" => "twitter", "logo" => '<a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>',
            ],
            [
                "name" => "instagram", "logo" => '<a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>',
            ],
        ];
        SocialMedia::insert($data);
    }
}
