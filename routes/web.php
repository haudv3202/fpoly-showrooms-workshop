<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('/loginGoogle', [App\Http\Controllers\LoginController::class, 'loginGoogle'])->name('loginGoogle');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'index']);
Route::get('/register', [App\Http\Controllers\LoginController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\LoginController::class, 'register']);


// Route::get('/loginGoogle', function () {
//     return Socialite::driver('google')->redirect();
// })->name('loginGoogle');
Route::get('/auth/callback', [App\Http\Controllers\LoginController::class, 'show']);


Route::get('/ourteam', [App\Http\Controllers\OurTeamController::class, 'index'])->name('ourteam');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('directory', App\Http\Controllers\DirectoryController::class);

Route::get('directory-update', [App\Http\Controllers\DirectoryController::class, 'update'])->name('directory-update');
Route::post('directory-update',  [App\Http\Controllers\DirectoryController::class, 'update']);
Route::get('/danhmuc', [App\Http\Controllers\DirectoryController::class, 'directory'])->name('directory');
Route::post('search',  [App\Http\Controllers\ProjectController::class, 'search'])->name('search');

Route::resource('project', App\Http\Controllers\ProjectController::class);
Route::get('project-deleteImage/{id}', [App\Http\Controllers\ProjectController::class, 'destroyImage'])->name('project-deleteImage');;

Route::resource('banner', App\Http\Controllers\BannerController::class);
// Route::get('directorys-details', [App\Http\Controllers\DirectoryController::class, 'details'])->name('directorys-details');
// Route::get('directorys-edit', [App\Http\Controllers\DirectoryController::class, 'edit'])->name('directorys-edit');
// Route::get('directorys-create', [App\Http\Controllers\DirectoryController::class, 'create'])->name('directorys-create');

// Route::prefix('projects')->group(function () {
//     Route::get('project-list', [ProjectController::class, 'index'])->name('project-list');
//     Route::get('project-details', [ProjectController::class, 'details'])->name('project-details');
//     Route::get('project-edit', [ProjectController::class, 'edit'])->name('project-edit');
//     Route::get('project-create', [ProjectController::class, 'create'])->name('project-create');
// });


Route::resource("accounts", \App\Http\Controllers\AccountController::class);
Route::post('accounts/{account}', [\App\Http\Controllers\AccountController::class, 'update'])->name('accounts.update');

Route::get('contact-list', [App\Http\Controllers\ContactController::class, 'index'])->name('contact-list');
Route::get('contact-edit', [App\Http\Controllers\ContactController::class, 'edit'])->name('contact-edit');
Route::get('contact-create', [App\Http\Controllers\ContactController::class, 'create'])->name('contact-create');


//Route::get('ourteam-list', [App\Http\Controllers\OurTeamController::class, 'index'])->name('ourteam-list');
//Route::get('ourteam-edit/{id}', [App\Http\Controllers\OurTeamController::class, 'edit'])->name('ourteam-edit');
//Route::get('ourteam-create', [App\Http\Controllers\OurTeamController::class, 'create'])->name('ourteam-create');
//Route::get('ourteam-details', [App\Http\Controllers\OurTeamController::class, 'details'])->name('ourteam-details');
Route::resource("ourteams", \App\Http\Controllers\OurTeamController::class);
Route::post('ourteams/addMembers', [\App\Http\Controllers\OurTeamController::class, 'addMembers'])->name('ourteams.addMembers');
Route::post('ourteams/deleteMembers', [\App\Http\Controllers\OurTeamController::class, 'deleteMembers'])->name('ourteams.deleteMembers');
Route::get('viewMore/{id}', [\App\Http\Controllers\OurTeamController::class, 'viewMore'])->name('viewMore');

Route::resource('history', App\Http\Controllers\HistoryController::class);


Route::resource('layout', App\Http\Controllers\LayoutController::class);

Route::get('layout-update', [App\Http\Controllers\LayoutController::class, 'update'])->name('layout-update');
Route::post('layout-update',  [App\Http\Controllers\LayoutController::class, 'update']);
