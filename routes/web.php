<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;
Route::get('/aaa', function () {
    return view('test');
});


Route::get('/' ,[Frontpages::class,'home'])->name('home');
Route::get('/Docter',[Frontpages::class,'Docter'])->name('Docter');
Route::get('/Services' ,[Frontpages::class,'Services'])->name('Services');
Route::get('/Pages' ,[Frontpages::class,'Pages'])->name('Pages');
Route::get('/Blogs' ,[Frontpages::class,'Blogs'])->name('Blogs');
Route::get('/ContactUs' ,[Frontpages::class,'ContactUs'])->name('ContactUs');
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
