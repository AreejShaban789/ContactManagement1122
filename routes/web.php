<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/',[ContactController::class,'index'])->name('contact.index');
Route::get('/create1',[ContactController::class,'create'])->name('contact.create');
Route::post('/store',[ContactController::class,'store'])->name('contact.store');
Route::get('/edit/{id}', [ContactController::class,'edit'])->name('contact.edit');
Route::post('/update/{id}', [ContactController::class,'update'])->name('contact.update');
Route::get('/delete/{id}', [ContactController::class,'delete'])->name('contact.delete');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
