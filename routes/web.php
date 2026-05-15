<?php

use Illuminate\Support\Facades\Route;




Route::get("/", [App\Http\Controllers\loginController::class, 'home']);
Route::get("/login", [App\Http\Controllers\loginController::class, "login"]);
Route::post("/login", [App\Http\Controllers\loginController::class, 'autenticate']);



