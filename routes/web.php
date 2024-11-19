<?php

use App\Http\Controllers\annonces;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('annonce', annonces::class);
