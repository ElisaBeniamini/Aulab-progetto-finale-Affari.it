<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BasicController::class, 'homepage'])
    ->name('homepage');


Route::resource('announcement', AnnouncementController::class);





//Start-Rotte-Annunci.
Route::resource('/announcement', AnnouncementController::class);
//End-Rotte-Annunci.
