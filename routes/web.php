<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Admincontroller;


Route::get('/', function () {
    return view('home');})->name('homepage');;

Route::prefix('admin')->name('admin.')->group(function(){
Route::get('',[Admincontroller::class,'index'])->name('index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
