<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCreate()
    {
        return view('category.create');
    }

    public function postCreate(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('txtName');
        $category->save();
        return redirect()->route('category.list');
    }

    public function getList()
    {
        $categories = Category::all();
        return view('category.list')->withCategories($categories);
    }

    public function getEdit(Category $category)
    {
        return view('category.edit')->withCategory($category);
    }

    public function putEdit(Request $request, Category $category)
    {
        $category->name = $request->input('txtName');
        $category->save();
        return "GELUKT!";
    }

    public function getDelete(Category $category)
    {
        // return view('category.delete')->withCategory($category);
        return view('category.delete', ['category' => $category]);
    }

    public function deleteDelete(Category $category)
    {
        $category->delete();
        return redirect()->route('category.list');
    }
}
