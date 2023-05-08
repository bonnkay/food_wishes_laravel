<?php

use App\Models\dish;
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

Route::get('/dish', function () {
    return view('admon_dishes', [
        'dishes' => dish::all()
    ]);
});

Route::get('/rest', function () {
    return view('admon_restaurants', [
        'dishes' => dish::all()
    ]);
});