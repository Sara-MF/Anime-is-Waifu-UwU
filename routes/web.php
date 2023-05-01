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
Route::get('/empty', [ListController::class, 'empty']);
Route::get('/watching', [ListController::class, 'watching']);
Route::get('/completed', [ListController::class, 'completed']);

// Login
Route::get('/register', [LoginController::class, 'register']);
Route::get('/forgotPassword', [LoginController::class, 'forgotPassword']);
Route::get('/resetedPassword', [LoginController::class, 'resetedPassword']);

// Profile
Route::get('/editProfile', [ProfileController::class, 'editProfile']);
Route::get('/changeStyle', [ProfileController::class, 'changeStyle']);

// Other
Route::get('/thanks', [OthersController::class, 'thankful']);
Route::get('/notFound', [OthersController::class, 'notFound']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
