<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;

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

Route::resource('todolist', TodolistController::class);

// Route::get('todolist/create', [TodolistController::class, 'create']);
// Route::get('todolist/show', [TodolistController::class, 'show']);
// Route::get('todolist/edit', [TodolistController::class, 'edit']);
