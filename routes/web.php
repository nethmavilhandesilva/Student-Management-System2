<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', function() {
    return view('dashboard.welcome');
})->name('home')->middleware('auth');

Route::get('/', function () {
    return view('dashboard.welcome'); 
})->name('welcome');
Route::get('/dashboard/{BranchId}', [DashboardController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//students
Route::get('/Students/{BranchId}', [StudentsController::class, 'index'])->name('students.index');
