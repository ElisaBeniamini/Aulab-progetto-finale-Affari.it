<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BasicController;
use App\Models\Announcement;
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
Route::get('/category/{category}', [AnnouncementController::class, 'categoryShow'])->name('categoryShow');











//Start-Rotte-Annunci.
Route::resource('/announcement', AnnouncementController::class);
//End-Rotte-Annunci.
