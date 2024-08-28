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
use App\Http\Controllers\AnswerStoreController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ReportController;




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

Route::get('/', function () {
    return view('home', ['title' => 'Homepage', 'active' => 'homepage']); });

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
Route::get('/musthalah-al-hadits', function () {
    return view('user.kitab.musthalah-al-hadits'); })->name('user.kitab.musthalah-al-hadits');
Route::get('/sanad-dan-matan', function () {
    return view('user.kitab.sanad-dan-matan');
})->name('user.kitab.sanad-dan-matan');
Route::get('/klasifikasi', function () {
    return view('user.kitab.klasifikasi.klasifikasi');
})->name('user.kitab.klasifikasi.klasifikasi');
Route::get('/klasifikasi/klasifikasi2', function () {
    return view('user.kitab.klasifikasi.klasifikasi2');
})->name('user.kitab.klasifikasi.klasifikasi2');
Route::get('/klasifikasi/klasifikasi3', function () {
    return view('user.kitab.klasifikasi.klasifikasi3');
})->name('user.kitab.klasifikasi.klasifikasi3');
Route::get('/klasifikasi/klasifikasi4', function () {
    return view('user.kitab.klasifikasi.klasifikasi4');
})->name('user.kitab.klasifikasi.klasifikasi4');
Route::get('/user/kitab/cabang', function () {
    return view('user.kitab.cabang');
})->name('user.kitab.cabang');
Route::get('/user/kitab/kitab-kitab/kitab', function () {
    return view('user.kitab.kitab-kitab.kitab');
})->name('user.kitab.kitab-kitab.kitab');
Route::get('/user/kitab/kitab-kitab/kitabsekunder', function () {
    return view('user.kitab.kitab-kitab.kitabsekunder');
})->name('user.kitab.kitab-kitab.kitabsekunder');

Route::get('/user/kitab/pilihan', function () {
    return view('user.kitab.pilihan');
})->name('user.kitab.pilihan');
Route::get('/user/kitab/cabang2', function () {
    return view('user.kitab.cabang2');
})->name('user.kitab.cabang2');
Route::get('/user/kitab/kitab-kitab/primer', function () {
    return view('user.kitab.kitab-kitab.primer');
})->name('user.kitab.kitab-kitab.primer');
Route::get('/user/kitab/kitab-kitab/primer2', function () {
    return view('user.kitab.kitab-kitab.primer2');
})->name('user.kitab.kitab-kitab.primer2');
Route::get('/user/kitab/kitab-kitab/primer3', function () {
    return view('user.kitab.kitab-kitab.primer3');
})->name('user.kitab.kitab-kitab.primer3');
Route::get('/user/kitab/kitab-kitab/primer4', function () {
    return view('user.kitab.kitab-kitab.primer4');
})->name('user.kitab.kitab-kitab.primer4');


// Route::get('surah', [QuranController::class, 'quran'])->name('surah');
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

//materivideo
Route::get('/videos', 'VideoController@index')->name('video.index');
Route::any('/videos/create', 'VideoController@create')->name('video.create');
Route::any('/videos/store', 'VideoController@store')->name('video.store');
Route::any('/videos/show/{id}', 'VideoController@show')->name('video.show');
Route::any('/videos/edit/{id}', 'VideoController@edit')->name('video.edit');
Route::any('/videos/destroy/{id}', 'VideoController@destroy')->name('video.destroy');
Route::any('/videos/update/{id}', 'VideoController@update')->name('video.update');

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.dashboard');

//ustaz
Route::get('/dashboard/ustaz', [UstazController::class, 'index'])->name('dashboard.ustaz.index');

//murid
Route::get('/dashboard/murid', [MuridController::class, 'index'])->name('dashboard.murid.index');

//admin
Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard.admin.index');

//post
Route::get('/dashboard/post', [PostController::class, 'index'])->name('dashboard.post.index');

//kategori
Route::get('/dashboard/kategori', [KategoriController::class, 'index'])->name('dashboard.kategori.index');

//report
Route::get('/dashboard/report', [ReportController::class, 'index'])->name('dashboard.report.index');

//profil
Route::get('/profile', [ProfileController::class, 'index'])->name('userprofile.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [JawabanController::class, 'index'])->name('home');

//livechat
Route::get('/livechat', [LivechatController::class, 'index'])->name('livechat.index');


//answerstore

Route::get('/answerstore', [AnswerStoreController::class, 'index'])->name('user.answerstore');

//notifikasi
Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('user.notifikasi.notifikasi');

//profile
Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile.index');
