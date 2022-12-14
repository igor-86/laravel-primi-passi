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
    $data = [
        "pageTitle" => "The Logo",
        "info" => "First",
        "links" => [
            [
                "name" => "Home",
                "coll" => "home"
            ],
            [
                "name" => "About",
                "coll" => "about"
            ],

        ]
    ];
    return view('home', $data);
})->name("home");

Route::get('/about', function () {
    $data = [
        "pageTitle" => "The Logo",
        "info" => "First",
        "links" => [
            [
                "name" => "Home",
                "coll" => "home"
            ],
            [
                "name" => "About",
                "coll" => "about"
            ],

        ]
    ];
    return view('about', $data);
})->name("about");
