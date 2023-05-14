<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\Quiz2;
use App\Http\Controllers\Awp;
use App\Http\Controllers\AwpProject;

Route::get('/', function () {
    dispatch(new App\Jobs\BulkInsertJob());
    return view('welcome');
});



Route::get('/',[AwpProject::class,'index'])->name('index');
Route::post('/create',[AwpProject::class,'create'])->name('create');
Route::get('/home',[AwpProject::class,'home'])->name('home');
Route::get('/about',[AwpProject::class,'about'])->name('about');
Route::get('/contact',[AwpProject::class,'contact'])->name('contact');



// Route::get('/return',[Awp::class,'returnInsert'])->name('returnInsert');

// Route::post('/save-awp',[Awp::class,'create'])->name('save-awp');




// todo => Cp-2 
// Route::post('/save-data',[DataController::class,'save'])->name('save-data');

// todo => Assignment 2

// Route::get('/',[Quiz2::class,'index'])->name('index');

// // todo => create student data 
// Route::post('/save-student-data',[StudentController::class,'create'])->name('save-student-data');

// // todo => update student data 

// Route::post('/update/{id}',[StudentController::class,'update'])->name('update');

// // todo => create delete data 

// Route::get('/delete',[Quiz2::class,'delete'])->name('delete');