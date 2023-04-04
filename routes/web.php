<?php

use App\Http\Controllers\Authorization;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/login',[Authorization::class,'login_show']);
Route::get('/register',[Authorization::class,'register_show']);
Route::post('/login',[Authorization::class,'login'])->name('login');
Route::post('/register',[Authorization::class,'register'])->name('register');
Route::resource('users', UsersController::class);   