<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Voorgerechten";
        $category->save();

        $category = new Category();
        $category->name = "Hoofdgerechten";
        $category->save();

        $category = new Category();
        $category->name = "Diner";
        $category->save();

        $category = new Category();
        $category->name = "Warme dranken";
        $category->save();

        $category = new Category();
        $category->name = "Frisdranken";
        $category->save();

        $category = new Category();
        $category->name = "Bieren";
        $category->save();

        $category = new Category();
        $category->name = "Wijnen";
        $category->save();
    }
}
