<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('test', [ProfileController::class, 'getInfo']);
