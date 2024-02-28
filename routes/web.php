<?php

use App\Http\Controllers\JawabanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MateriVideoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){ return view('home',[ 'title' => 'Homepage', 'active' => 'homepage']);});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/home', function () { return view('home');})->name('home');

Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');

Route::get('/jawaban', [JawabanController::class, 'index'])->name('jawaban.index');



Route::get('/materivideo', [MateriVideoController::class, 'index'])->name('materivideo.index');



