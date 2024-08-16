<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashBoardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dasboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::get('/login', [AdminController::class, 'index']);
Route::post('/login', [AdminController::class, 'store'])->name('login.process');
Route::get('/dasboard', [DashBoardController::class, 'index'])->name('dasboard');
 Route::get('/create', [AdminController::class, 'link'])->name('link.process');

  Route::get('/create', [AdminController::class,'MakeUp'])->name('MakeUp'); 
  Route::get('/create', [AdminController::class, 'link'])->name('users.create');

Route::post('/create', [AdminController::class, 'MakeUp'])->name('users.MakeUp');
Route::get('/show', [AdminController::class, 'show'])->name('userShow');

Route::get('/show/{id}', [AdminController::class, 'show'])->name('show');
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('users.edit');
Route::put('/edit/{id}', [AdminController::class, 'update'])->name('users.update');
Route::delete('/edit{id}', [AdminController::class, 'destroy'])->name('users.destroy');

Route::get('/logout', [AdminController::class, 'logout'])->name('user.logout');

Route::get('/connect', [AdminController::class, 'connect'])->name('user.connect');






