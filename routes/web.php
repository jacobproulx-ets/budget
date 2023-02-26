<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get("/", fn() => File::get(public_path('index.html')));
Route::get("/{ignored1}", fn() => File::get(public_path('index.html')));
Route::get("/{ignored1}/{ignored2}", fn() => File::get(public_path('index.html')));

Route::controller(UsersController::class)->group(function () {
    Route::post("api/v1/users/login", "login");
});
