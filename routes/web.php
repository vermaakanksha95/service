<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CabController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//return view('welcome');
//});

Route::prefix("user")->group(function () {});
Route::prefix("admin")->group(function () {
    Route::get("/", [AdminController::class, "dashboard"])->name("admin.dashboard");
    Route::resources([
        'cabs'=>CabController::class,
    ]);
});

Route::get('/', function () {
    return view('home');
})->name('homepage');

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

Route::prefix("auth")->group(function(){
    Route::controller(AuthController::class)->group(function(){
    Route::match(["get","post"],"/login","login")->name("auth.login");
    Route::match(["get","post"],"/register","register")->name("auth.register");
    Route::get("/logout","logout")->name("auth.logout");
    });
});
Route::get('book-details', function () {
    return view('book-details');
})->name('book-details');


   
