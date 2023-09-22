<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);
Route::resource('recipes', RecipeController::class);
Route::resource('ingredients', IngredientController::class);

Route::resource('forum', App\Http\Controllers\ForumController::class);

Route::resource('Coment_forum', App\Http\Controllers\ComentForumController::class);
Route::resource('Coment_recipes', App\Http\Controllers\ComentRecipeController::class);
