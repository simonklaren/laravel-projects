<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dagen = [


            [
                'id' => "1",
                'dag' => "maandag",
            ],

           
            [
                'id' => "2",
                'dag' => "dinsdag",
            ],

            
            [
                'id' => "3",
                'dag' => "woensdag",
            ],


            [
                'id' => "4",
                'dag' => "donderdag",
            ],


            [
                'id' => "5",
                'dag' => "vrijdag",
            ],


            [
                'id' => "6",
                'dag' => "zaterdag",
            ],

            
            [
                'id' => "7",
                'dag' => "zondag",
            ],


        ];

        DB::table('dagen')->insert($dagen);
    }
}
