<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('profile')
        ->controller(ProfileController::class)
        ->name('profile.')
        ->group(function(){

    Route::get('/', 'getUser')->name('user');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contactStore')->name('contact.store');

    Route::get('subjects', 'getUserSubjects')->name('user.subjects');

});


