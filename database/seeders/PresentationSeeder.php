<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('presentations')->insert([
            [
                'img' => 'avataaars.svg',
                'titre'=> 'Start Bootstrap',
                'description' => 'Graphic Artist - Web Designer - Illustrator',
            ]
        ]);
    }
}
