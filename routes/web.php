<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[appcontroller::class,'index'])->name('index');
Route::get('/portfolio',[appcontroller::class,'portfolio'])->name('portfolio');
Route::get('/about',[appcontroller::class,'about'])->name('about');
Route::get('/contact',[appcontroller::class,'contact'])->name('contact');
