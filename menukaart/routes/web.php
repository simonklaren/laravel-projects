<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/category/create', [CategoryController::class, 'getCreate'])->name('category.create');
Route::post('/category/create', [CategoryController::class, 'postCreate'])->name('category.create.post');
Route::get('/category/list', [CategoryController::class, 'getList'])->name('category.list');
Route::get('/category/edit/{category}', [CategoryController::class, 'getEdit'])->name('category.edit');
Route::put('/category/edit/{category}', [CategoryController::class, 'putEdit'])->name('category.edit.put');
Route::get('/category/delete/{category}', [CategoryController::class, 'getDelete'])->name('category.delete');
Route::delete('/category/delete/{category}', [CategoryController::class, 'deleteDelete'])->name('category.delete.delete');

Route::get('/product/create', [ProductController::class, 'getCreate'])->name('product.create');
Route::post('/product/create', [ProductController::class, 'postCreate'])->name('product.create.post');
Route::get('/product/list', [ProductController::class, 'getList'])->name('product.list');
Route::get('/product/edit/{product}', [ProductController::class, 'getEdit'])->name('product.edit');
Route::put('/product/edit/{product}', [ProductController::class, 'putEdit'])->name('product.edit.put');

Route::get('/menu', [MenuController::class, 'getMenu'])->name('getMenu');
