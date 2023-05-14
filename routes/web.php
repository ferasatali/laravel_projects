<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\Quiz2;
use App\Http\Controllers\Awp;
use App\Http\Controllers\AwpProject;
use App\Http\Controllers\AuthController;

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

