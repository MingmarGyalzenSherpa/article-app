<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard')->middleware(['auth']);

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');

Route::get('/register', [HomeController::class, 'register'])->name('register');

Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');