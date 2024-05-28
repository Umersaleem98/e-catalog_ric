<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\HostelController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;

// Home Screens
Route::get('/', [HomeController::class, 'index']);
Route::get('/about_us', [HomeController::class, 'about_us']);
Route::get('/out_team', [TeamController::class, 'team']);

Route::get('/students', [StudentController::class, 'index']);

// Stories screens
Route::get('/student_stories', [StudentController::class, 'stuedent_stories']);
Route::get('/student_stories_indiviual/{id}', [StudentController::class, 'stuedent_stories_ind']);

Route::get('/payment/{id}', [PaymentController::class, 'payment_index']);
Route::post('/payments', [PaymentController::class, 'store']);

// Funds the project routes

Route::get('/select_project', [HostelController::class, 'select_project_fund']);
Route::get('/fund_project/{id}', [HostelController::class, 'fund_project_screen']);
Route::get('/payments_project/{id}', [HostelController::class, 'payments_project']);
// Route::get('/mosque_project', [FundController::class, 'mosque_project']);


// Dashboard Screens Routes
Route::get('/dashbaord', [authController::class, 'index']);
