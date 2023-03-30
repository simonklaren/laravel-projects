<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ToDoListController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/todolist', [ProjectController::class, 'show'])->name('todolist');
});


Route::get('/project/create',[ProjectController::class, 'showCreate'])->name('newProject');
Route::post('/project/create',[ProjectController::class, 'doAddNewProject'])->name('doAddNewProject');

Route::get('/project/{id}',[ProjectController::class, 'showProject'])->name('showProject');


Route::get('/todolist/create/{id}',[ToDoListController::class, 'showCreate'])->name('newToDoList');
Route::post('/todolist/create',[ToDoListController::class, 'doAddNewToDoList'])->name('doAddNewToDoList');

Route::get('/todolist/items/{id}',[ToDoListController::class, 'showToDoList'])->name('showToDoList');
