<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proproduct = new Product();
        $proproduct->name = "Plakkaas";
        $proproduct->price = "10";
        $proproduct->category_id = "2";
        $proproduct->save();
    
    }
}