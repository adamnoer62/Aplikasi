<?php

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
    return view('auth/login');
});
Route::get('/register-perusahaan', [App\Http\Controllers\Auth\RegisterperusahaanController::class, 'showRegistrationForm'])->name('registerperusahaan');
Route::post('/register-perusahaan', [App\Http\Controllers\Auth\RegisterperusahaanController::class, 'create'])->name('register-perusahaan');
Route::get('/pelamar/{id}/download', 'PelamarController@download')->name('download');
// Route::get('dashboard', function () {
//     return view('dashboard/index');
// });
// Route::get('fakultas', function () {
//     return view('fakultas/index');
// });
// Route::get('lokasi', function () {
//     return view('lokasi/index');
// });
// Route::get('keahlian', function () {
//     return view('keahlian/index');
// });
// Route::get('lowongan', function () {
//     return view('lowongan/index');
// });
// Route::get('pekerjaan', function () {
//     return view('pekerjaan/index');
// });
// Route::get('pelamar', function () {
//     return view('pelamar/index');
// });
// Route::get('perusahaan', function () {
//     return view('perusahaan/index');
// });
// Route::get('studi', function () {
//     return view('studi/index');
// });
// Route::group(['middleware'=>['auth','checkRole:Admin']],function() {
    Auth::routes();
    Route::get('login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
    Route::resource('dashboard', 'dashboardController')->middleware('auth');
Route::resource('fakultas', 'fakultasController')->middleware('auth');
Route::resource('keahlian', 'keahliancontroller')->middleware('auth');
Route::resource('lokasi', 'lokasicontroller')->middleware('auth');
Route::resource('lowongan', 'lowongancontroller')->middleware('auth');
Route::resource('pekerjaan', 'pekerjaancontroller')->middleware('auth');
Route::resource('pelamar', 'pelamarcontroller')->middleware('auth');
Route::resource('perusahaan', 'perusahaancontroller')->middleware('auth');
Route::resource('studi', 'studicontroller')->middleware('auth');
Route::resource('kategori', 'kategoricontroller')->middleware('auth');


Route::group(['middleware'=>['auth','checkRole:Admin']],function() {
Route::resource('dashboard', 'dashboardController');
Route::resource('fakultas', 'fakultasController');
Route::resource('keahlian', 'keahliancontroller');
Route::resource('lokasi', 'lokasicontroller');
Route::resource('lowongan', 'lowongancontroller');
Route::resource('pekerjaan', 'pekerjaancontroller');
Route::resource('pelamar', 'pelamarcontroller');
Route::resource('perusahaan', 'perusahaancontroller');
Route::resource('studi', 'studicontroller');
Route::put('lowongan/{id}/updatestatus', 'LowonganController@updateStatus')->name('lowongan.updatestatus');
Route::put('pelamar/{id}/updatestatus', 'pelamarcontroller@updateStatus')->name('pelamar.updatestatus');
Route::resource('kategori', 'kategoricontroller');
});
Route::group(['middleware'=>['auth','checkRole:Admin,User,Perusahaan']],function() {
    Route::resource('dashboard', 'dashboardController');
    // Route::resource('pekerjaan', 'pekerjaancontroller');
    Route::resource('pelamar', 'pelamarcontroller');
    Route::resource('lowongan', 'lowongancontroller');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

