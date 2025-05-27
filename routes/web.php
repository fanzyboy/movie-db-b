<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', [MovieController::class,'index']);
Route::get('/movie/{id}/{slug}', [MovieController::class,'detail_movie']);
Route::get('/movie/create', [MovieController::class,'create'])->middleware('auth');
Route::post('/movie/store', [MovieController::class,'store'])->middleware('auth');
Route::get('/login', [AuthController::class,'formLogin'])->name('login');
Route::post('/login', [AuthController::class,'Login'])->name('login');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // arahkan ke homepage
})->name('logout');
