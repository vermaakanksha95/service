<?php

use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//return view('welcome');
//});

Route::prefix("user")->group(function () {});
Route::prefix("admin")->group(function () {
    Route::get("/", [AdminController::class, "dashboard"])->name("admin.dashboard");
});

Route::get('/', function () {
    return view('home');
})->name('homepage');
Route::get('login', function () {
    return view('login');
})->name('login');
Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('blog', function () {
    return view('blog');
})->name('blog');
Route::get('faq', function () {
    return view('faq');
})->name('faq');
Route::get('booking', function () {
    return view('booking');
})->name('booking');


   
