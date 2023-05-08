<?php

use App\Models\dish;
use App\Models\restaurant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticationSessionController;

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
Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/mision', function () {
    return view('mision');
})->name('mision');

Route::get('/what_do_we', function () {
    return view('what_do_we');
})->name('what_do_we');

Route::get('/our_restaurants', function () {
    return view('our_restaurants');
})->name('our_restaurants');

Route::get('/more_information', function () {
    return view('more_information');
})->name('more_information');


Route::get('/', function () {
    return view('base');
})->name('dashboard')->middleware('auth');


Route::resource('dish', DishController::class);
Route::resource('restaurant', RestaurantController::class);


Route::get('/login', [AuthenticationSessionController::class, 'getLogin'])->name('auth.login');
Route::post('/login', [AuthenticationSessionController::class, 'startSession'])->name('login');

Route::post('logout', [AuthenticationSessionController::class, 'endSession'])->name('auth.logout');


Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
