<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/danhmuc', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('/projectDetail/{id}', [App\Http\Controllers\ProductController::class, 'projectDetail'])->name('projectDetail');

Route::get('/ourteam', [App\Http\Controllers\OurTeamController::class, 'index'])->name('ourteam');
