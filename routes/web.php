<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\BranchersController;
use App\Http\Controllers\CourseController;


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
Route::get('/Students/create/{BranchId}', [StudentsController::class, 'create'])->name('students.create');
Route::post('/students', [StudentsController::class, 'store'])->name('students.store');
Route::delete('/students/{id}/{BranchId}', [StudentsController::class, 'destroy'])->name('students.destroy');
Route::get('/students/{id}/edit/{BranchId}', [StudentsController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}/{BranchId}', [StudentsController::class, 'update'])->name('students.update');  // Add BranchId here

//Teachers
Route::get('/Teachers/{BranchId}', [TeachersController::class, 'index'])->name('teachers.index');
Route::get('/Teachers/create/{BranchId}', [TeachersController::class, 'create'])->name('teachers.create');
Route::post('/Teachers', [TeachersController::class, 'store'])->name('teachers.store');
Route::delete('/Teachers/{id}/{BranchId}', [TeachersController::class, 'destroy'])->name('teachers.destroy');
Route::get('/Teachers/{id}/edit/{BranchId}', [TeachersController::class, 'edit'])->name('teachers.edit');
Route::put('/Teachers/{id}/{BranchId}', [TeachersController::class, 'update'])->name('teachers.update');  // Add BranchId here
//Branches
Route::get('/Branches/{BranchId}', [BranchersController::class, 'index'])->name('branches.index');
Route::get('/Branches/create/{BranchId}', [BranchersController::class, 'create'])->name('branches.create');
Route::post('/Branches', [BranchersController::class, 'store'])->name('branches.store');
Route::delete('/Branches/{id}/{BranchId}', [BranchersController::class, 'destroy'])->name('branches.destroy');
//Courses
Route::get('/Courses/{BranchId}', [CourseController::class, 'index'])->name('courses.index');
Route::get('/Courses/create/{BranchId}', [CourseController::class, 'create'])->name('courses.create');
Route::post('/Courses', [CourseController::class, 'store'])->name('courses.store');
Route::delete('/Courses/{id}/{BranchId}', [CourseController::class, 'destroy'])->name('courses.destroy');
