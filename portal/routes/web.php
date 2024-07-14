<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserController;

Auth::routes();

Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard')->middleware('auth');
Route::get('/user-profile', [UserProfileController::class, 'edit'])->name('user-profile.edit')->middleware('auth');
Route::post('/user-profile', [UserProfileController::class, 'update'])->name('user-profile.update')->middleware('auth');

Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
