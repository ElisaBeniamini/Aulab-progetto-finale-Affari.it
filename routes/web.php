<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\RevisorController;
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
<<<<<<< HEAD


Route::resource('announcement', AnnouncementController::class);


Route::get('/category/{category}', [AnnouncementController::class, 'categoryShow'])->name('categoryShow');
=======
Route::get('/category/{category}', [BasicController::class, 'categoryShow'])
    ->name('categoryShow');
>>>>>>> d0d703213d9abed032e9fab730ce4e3e5bc982b8


Route::get('/detail/announcement/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');






//Start-Rotte-Annunci.
Route::resource('/announcement', AnnouncementController::class);
//End-Rotte-Annunci.

//*Home revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');