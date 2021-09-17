<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            "titre" => "Portfolio",
            "img1" =>"img/portfolio/cabin.png",
            "img2" => "img/portfolio/cake.png",
            "img3" => "img/portfolio/circus.png",
            "img4" => "img/portfolio/game.png",
            "img5" =>  "img/portfolio/safe.png",
            "img6" => "img/portfolio/submarine.png"
        ]);
    }
}
