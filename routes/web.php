<?php

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
    return view('home');
})->name("back");

Route::get("/benvenuto", function () {
    return view('benvenuto');
})->name("benvenuto");

Route::get("/chi_sono", function () {
    return view('chi_sono');
})->name("chi_sono");

Route::get("/cosa_faccio", function () {
    return view('cosa_faccio');
})->name("cosa_faccio");

Route::get("/developed_skills", function () {
    return view('developed_skills');
})->name("developed_skills");

Route::get("/special_thanks", function () {
    return view('special_thanks');
})->name("special_thanks");
