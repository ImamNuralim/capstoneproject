<?php

use App\Http\Controllers\JawabanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MateriVideoController;
use App\Http\Controllers\HadithController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KitabController;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\UstazController;
use App\Http\Controllers\LiveChatController;




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

//login
Route::get('/login', [LoginController::class, 'index'])->name('auth.login');

//register
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('auth.register');


//materivideo
Route::get('/materivideo', [MateriVideoController::class, 'index'])->name('materivideo.index');

//kitab
Route::get('/kitab', [KitabController::class, 'index'])->name('kitab.index');
Route::get('/surah', [QuranController::class, 'quran'])->name('kitab.surah');
Route::get('/hadith', [HadithController::class, 'hadith'])->name('hadith');

// Route::get('surah', [QuranController::class, 'quran'])->name('surah');
Route::get('/dashboard', function(){
    return view('dashboard.index');
});

//materivideo
Route::get('/videos','VideoController@index')->name('video.index');
Route::any('/videos/create','VideoController@create')->name('video.create');
Route::any('/videos/store','VideoController@store')->name('video.store');
Route::any('/videos/show/{id}','VideoController@show')->name('video.show');
Route::any('/videos/edit/{id}','VideoController@edit')->name('video.edit');
Route::any('/videos/destroy/{id}','VideoController@destroy')->name('video.destroy');
Route::any('/videos/update/{id}','VideoController@update')->name('video.update');

//dashboard admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.dashboard');

//ustaz

Route::get('/dashboard/ustaz', [UstazController::class, 'index'])->name('dashboard.ustaz');

//profil
Route::get('/profile', [ProfileController::class, 'index'])->name('userprofile.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [JawabanController::class, 'index'])->name('home');

//livechat
Route::get('/livechat', [LivechatController::class, 'index'])->name('livechat.index');
