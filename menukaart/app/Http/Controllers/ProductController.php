<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getCreate()
    {
        $categories = Category::all();
        return view('product.create')->withCategories($categories);
    }

    public function postCreate(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('txtName');
        $product->price = $request->input('txtPrice');
        $product->category_id = $request->input('selCategory');
        $product->save();
        return "Gelukt!";
    }

    public function getList()
    {
        $products = Product::all();
        return view('product.list')->withProducts($products);
    }

    public function getEdit(Product $product)
    {
        $categories = Category::all();
        return view('product.edit')->withProduct($product)->withCategories($categories);
    }

    public function putEdit(Request $request, Product $product)
    {
        $product->name = $request->input('txtName');
        $product->price = $request->input('txtPrice');
        $product->category_id = $request->input('selCategory');
        $product->save();
        return "Gelukt!";
    }

    public function getDelete(Product $product)
    {
        // return view('product.delete')->withProduct($product);
        return view('product.delete', ['product' => $product]);
    }

    public function deleteDelete(Product $product)
    {
        $product->delete();
        return redirect()->route('product.list');
    }
}
