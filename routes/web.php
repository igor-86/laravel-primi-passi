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
    $pageTitle = "Benvenuto nella home";
    return view('home', compact("pageTitle"));
});

Route::get('/about', function () {
    $pageAbout = "Pagina About ora";
    return view('about', compact("pageAbout"));
})->name("about");
