<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\OthersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login.index');
});

// List
Route::get('/empty', [ListController::class, 'empty'])->name("list.empty");
Route::get('/watching', [ListController::class, 'watching'])->name("list.watching");
Route::get('/completed', [ListController::class, 'completed'])->name("list.completed");

// Login
Route::get('/register', [LoginController::class, 'register'])->name("login.register");
Route::get('/forgotPassword', [LoginController::class, 'forgotPassword'])->name("login.forgotPassword");
Route::get('/resetedPassword', [LoginController::class, 'resetedPassword'])->name("login.resetedPassword");

// Profile
Route::get('/editProfile', [ProfileController::class, 'editProfile'])->name("profile.editProfile");
Route::get('/changeStyle', [ProfileController::class, 'changeStyle'])->name("profile.changeStyle");

// Other
Route::get('/thanks', [OthersController::class, 'thankful'])->name("thankful");
Route::get('/notFound', [OthersController::class, 'notFound'])->name("notFound");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
