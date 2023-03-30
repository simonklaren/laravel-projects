<?php

use App\Http\Controllers\bucketlistController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\bucketlistItemController;
use App\Models\BucketList;
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

Route::get('/bucketlist/create', [bucketlistController::class, 'getCreate'])->name('bucketlist.create');
Route::post('/bucketlist/create', [bucketlistController::class, 'postCreate'])->name('bucketlist.create.post');
Route::get('/bucketlist/list', [bucketlistController::class, 'getList'])->name('bucketlist.list');
Route::get('/bucketlist/edit/{bucketlist}', [bucketlistController::class, 'getEdit'])->name('bucketlist.edit');
Route::put('/bucketlist/edit/{bucketlist}', [bucketlistController::class, 'putEdit'])->name('bucketlist.edit.put');
Route::get('/bucketlist/delete/{bucketlist}', [bucketlistController::class, 'getDelete'])->name('bucketlist.delete');
Route::delete('/bucketlist/delete/{bucketlist}', [bucketlistController::class, 'deleteDelete'])->name('bucketlist.delete.delete');

Route::get('/bucketlist_item/create', [bucketlistItemController::class, 'getCreate'])->name('bucketlist_item.create');
Route::post('/bucketlist_item/create', [bucketlistItemController::class, 'postCreate'])->name('bucketlist_item.create.post');
Route::get('/bucketlist_item/list', [bucketlistItemController::class, 'getList'])->name('bucketlist_item.list');
Route::get('/bucketlist_item/edit/{bucketlist_item}', [bucketlistItemController::class, 'getEdit'])->name('bucketlist_item.edit');
Route::put('/bucketlist_item/edit/{bucketlist_item}', [bucketlistItemController::class, 'putEdit'])->name('bucketlist_item.edit.put');
Route::get('/bucketlist_item/delete/{bucketlist_item}', [bucketlistItemController::class, 'getDelete'])->name('bucketlist_item.delete');
Route::delete('/bucketlist_item/delete/{bucketlist_item}', [bucketlistItemController::class, 'deleteDelete'])->name('bucketlist_item.delete.delete');


Route::get('/bucketlist_all', [MenuController::class, 'getBucketlistAll'])->name('getMenu');
