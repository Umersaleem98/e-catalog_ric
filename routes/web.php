<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;






Route::get('/', [HomeController::class, 'index']);
Route::get('/about_us', [HomeController::class, 'about_us']);


Route::get('/students', [StudentController::class, 'index']);
// Route::get('/student_stories/{id}', [StudentController::class, 'stuedent_stories']);
Route::get('/student_stories', [StudentController::class, 'stuedent_stories']);
Route::get('/student_stories_indiviual/{id}', [StudentController::class, 'stuedent_stories_ind']);



Route::get('/dashbaord', [authController::class, 'index']);
