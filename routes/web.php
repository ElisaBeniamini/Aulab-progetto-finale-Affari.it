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


Route::resource('announcement', AnnouncementController::class);


Route::get('/category/{category}', [BasicController::class, 'categoryShow'])->name('categoryShow');


Route::get('/detail/announcement/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');

//Start-Rotte-Annunci.
Route::resource('/announcement', AnnouncementController::class);
//End-Rotte-Annunci.

//*Home revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');

//*Accetta annuncio
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class,'acceptAnnouncement'])->name('revisor.accept_announcement');
//*Rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->name('revisor.reject_announcement');