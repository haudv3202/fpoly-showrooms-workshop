<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProjectController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('directorys-list', [App\Http\Controllers\DirectoryController::class, 'index'])->name('directorys-list');
// Route::get('directorys-details', [App\Http\Controllers\DirectoryController::class, 'details'])->name('directorys-details');;
// Route::get('directorys-edit', [App\Http\Controllers\DirectoryController::class, 'edit'])->name('directorys-edit');;
// Route::get('directorys-create', [App\Http\Controllers\DirectoryController::class, 'create'])->name('directorys-create');;

// Route::prefix('projects')->group(function () {
//     Route::get('project-list', [ProjectController::class, 'index'])->name('project-list');
//     Route::get('project-details', [ProjectController::class, 'details'])->name('project-details');
//     Route::get('project-edit', [ProjectController::class, 'edit'])->name('project-edit');
//     Route::get('project-create', [ProjectController::class, 'create'])->name('project-create');
// });
Route::get('project-list', [App\Http\Controllers\ProjectController::class, 'index'])->name('project-list');
Route::get('project-edit', [App\Http\Controllers\ProjectController::class, 'edit'])->name('project-edit');;
Route::get('project-create', [App\Http\Controllers\ProjectController::class, 'create'])->name('project-create');;


Route::get('account-list', [App\Http\Controllers\AccountController::class, 'index'])->name('account-list');
Route::get('account-edit', [App\Http\Controllers\AccountController::class, 'edit'])->name('account-edit');;
Route::get('account-create', [App\Http\Controllers\AccountController::class, 'create'])->name('account-create');;

Route::get('contact-list', [App\Http\Controllers\ContactController::class, 'index'])->name('contact-list');
Route::get('contact-edit', [App\Http\Controllers\ContactController::class, 'edit'])->name('contact-edit');;
Route::get('contact-create', [App\Http\Controllers\ContactController::class, 'create'])->name('contact-create');;

Route::get('banner-list', [App\Http\Controllers\BannerController::class, 'index'])->name('banner-list');
Route::get('banner-edit', [App\Http\Controllers\BannerController::class, 'edit'])->name('banner-edit');;
Route::get('banner-create', [App\Http\Controllers\BannerController::class, 'create'])->name('banner-create');;

Route::get('ourteam-list', [App\Http\Controllers\OurTeamController::class, 'index'])->name('ourteam-list');
Route::get('ourteam-edit', [App\Http\Controllers\OurTeamController::class, 'edit'])->name('ourteam-edit');;
Route::get('ourteam-create', [App\Http\Controllers\OurTeamController::class, 'create'])->name('ourteam-create');;
Route::get('ourteam-details', [App\Http\Controllers\OurTeamController::class, 'details'])->name('ourteam-details');;
