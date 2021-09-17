<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('navbars')->insert([
            [
                "titre"=>"Start Bootstrap",
                "nav1"=>"Portfolio",
                "nav2"=>"About",
                "nav3"=>"Contact"
            ]
        ]);
    }
}
