<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function getMenu()
    {
        $categories = Category::all();
        return view('menu')->withCategories($categories);
    }
}
