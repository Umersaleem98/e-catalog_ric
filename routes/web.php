<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\HostelController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EndowmentController;
use App\Http\Controllers\CredentialController;
use App\Http\Controllers\SignatureStoryController;

// Home Screens
Route::get('/', [HomeController::class, 'index']);
Route::get('/r_m_o', [HomeController::class, 'r_m_o_page']);
Route::get('/about_us', [HomeController::class, 'about_us']);
Route::get('/contact_us', [HomeController::class, 'contact_us']);
Route::get('/meet_out_team/{id}', [TeamController::class, 'meet_team']);
Route::get('/students', [StudentController::class, 'index']);

// Stories screens
Route::get('/student_stories', [StudentController::class, 'stuedent_stories']);
Route::get('/student_stories_indiviual/{id}', [StudentController::class, 'stuedent_stories_ind']);

Route::get('/payment/{id}', [PaymentController::class, 'payment_index']);
Route::get('/Make_a_Pledge/{id}', [PaymentController::class, 'Make_a_Pledge']);
Route::post('/payments', [PaymentController::class, 'store']);

Route::get('endowment_model', [EndowmentController::class, 'index']);
Route::get('support_for_one_year', [EndowmentController::class, 'one_year']);
Route::get('support_for_four_year', [EndowmentController::class, 'four_year']);
Route::get('perpetual_seat_your_name', [EndowmentController::class, 'perpetual_seat']);
Route::get('zakat_for_students', [EndowmentController::class, 'zakat']);
Route::get('Make_a_Pledge', [EndowmentController::class, 'pledge_payments']);
Route::get('payment', [EndowmentController::class, 'payments']);


// Funds the project routes

Route::get('/select_project', [HostelController::class, 'select_project_fund']);
Route::get('/fund_project/{id}', [HostelController::class, 'fund_project_screen']);
Route::get('/payments_project/{id}', [HostelController::class, 'payments_project']);
// Route::get('/mosque_project', [FundController::class, 'mosque_project']);


// Dashboard Screens Routes
Route::get('/dashboard', [authController::class, 'index']);


Route::get('/students_get', [authController::class, 'view_data']);
Route::get('/add_students', [authController::class, 'store']);
Route::get('/students_edit/{id}', [authController::class, 'edit']);
Route::post('/students_update/{id}', [authController::class, 'update']);
// Route::get('/students_add', [authController::class, 'store']);

// signature storires Routes
Route::get('/signature_stories', [SignatureStoryController::class, 'index']);
Route::post('/signature_stories_store', [SignatureStoryController::class, 'store']);
Route::get('/signature_stories_list', [SignatureStoryController::class, 'show']);
Route::get('/signature_stories_edit/{id}', [SignatureStoryController::class, 'edit']);
Route::post('/signature_stories_update/{id}', [SignatureStoryController::class, 'update']);
Route::get('/signature_stories_delete/{id}', [SignatureStoryController::class, 'destroy']);
// index route
Route::get('/signrature_program', [SignatureStoryController::class, 'signrature_program']);

// Team routes
Route::get('/add_team', [TeamController::class, 'index']);
Route::post('/add_team_member', [TeamController::class, 'store']);
Route::get('/team_list', [TeamController::class, 'show']);
Route::get('/edit/{id}', [TeamController::class, 'edit']);
Route::post('/update/{id}', [TeamController::class, 'update']);
Route::get('/delete/{id}', [TeamController::class, 'delete']);


Route::get('/our_team', [TeamController::class, 'team']);

Route::get('login', [CredentialController::class, 'index']);
Route::post('login', [CredentialController::class, 'login']);
Route::post('logout', [CredentialController::class, 'logout'])->name('logout');
