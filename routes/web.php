<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::resource('/students',UsersController::class);