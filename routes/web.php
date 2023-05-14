<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AwpProject;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;


// Route::get('/', function () {
//     dispatch(new App\Jobs\BulkInsertJob());
//     return view('welcome');
// });

Route::get('/index',[AwpProject::class,'index'])->name('index');

Route::get('/customer',[AwpProject::class,'customer'])->name('customer');
Route::get('/employee',[AwpProject::class,'employee'])->name('employee');
Route::get('/fuel',[AwpProject::class,'fuel'])->name('fuel');
Route::get('/discounts',[AwpProject::class,'discounts'])->name('discounts');
Route::post('/create-customer',[AwpProject::class,'createCustomer'])->name('create-customer');

Route::get('/update-customer/{id}',[AwpProject::class,'updateCustomer'])->name('update-customer');

Route::post('/create-employee',[AwpProject::class,'createEmployee'])->name('create-employee');

Route::post('/login',[AwpProject::class,'login'])->name('login');

Route::get('/delete/{id}',[AwpProject::class,'delete'])->name('delete');

Route::get('/',[AwpProject::class,'index'])->name('index');
Route::get('/',[AwpProject::class,'dashboard'])->name('dashboard');
Route::get('/page',[AwpProject::class,'page'])->name('page');
Route::get('/update/{id}',[AwpProject::class,'update'])->name('update');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');