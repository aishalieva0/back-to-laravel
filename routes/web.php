<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('home', [PageController::class, 'home']);
Route::get('about', [PageController::class, 'about']);

Route::resource('posts', PostController::class);

