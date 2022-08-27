<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AdminController;



Route::prefix('dashboard-admin')->group(function(){
    Route::get('/', [AdminController::class, 'index']);

});
