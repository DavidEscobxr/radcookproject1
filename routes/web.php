<?php

use App\Http\Controllers\IngredientController;
use App\Http\Controllers\LoginV2Controller;
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
Route::get('/learn', function () {
    return view('learn');
});
Route::get('/prueba', function () {
    return view('prueba');
});

// Auth::routes();

Route::get('login', [LoginV2Controller::class, 'showLoginForm'])->name('showLoginForm');
Route::post('login', [LoginV2Controller::class, 'login'])->name('login');
Route::post('logout', 'Api\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);
Route::resource('recipes', RecipeController::class);
Route::resource('ingredients', IngredientController::class);
