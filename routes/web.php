<?php

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

<<<<<<< HEAD


Route::get('/', [BasicController::class, 'homepage'])
    ->name('homepage');
=======
Route::get('/', function () {
    return view('welcome');
});

//Start-Rotte-Annunci.
Route::resource('/announcement',AnnouncementController::class);
//End-Rotte-Annunci.
>>>>>>> 0964f4dbea41093d6133fe7b1ac317dddb0e8cc9
