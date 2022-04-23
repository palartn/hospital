<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Admincontroller;


Route::get('/', function () {
    return 'HomePage';})->name('homepage');;

Route::prefix('admin')->name('admin.')->group(function(){
Route::get('',[Admincontroller::class,'index'])->name('index');
});

