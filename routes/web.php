<?php

use Illuminate\Support\Facades\Route;




Route::get("/", [App\Http\Controllers\loginController::class, 'home'])->name('site.home');
Route::get("/login", [App\Http\Controllers\loginController::class, "login"])->name('site.login');
Route::post("/login", [App\Http\Controllers\loginController::class, 'autenticate'])->name('auth.login');

Route::middleware("auth")->group(function(){
    Route::get('/dashboard', [App\Https\Controllers\SiteController::class, 'dashboard'])->name('site.dashboard');
        Route::post("/logout", [App\Http\Controllers\loginController::class, 'logout'])->middleware(middleware: 'auth');

});



