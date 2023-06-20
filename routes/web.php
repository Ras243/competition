<?php

use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\PendaftarController;
use App\Models\DaftarLomba;
use App\Models\PendaftarModel;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/welcome', function () {
    return view('welcome');
})->middleware('guest');

Route::get('/', function () {
    return view('welcome_arsha');
})->middleware('guest');

Route::get('/masuk', function () {
    return view('form.masuk');
})->middleware('guest')->name('login');

Route::get('/daftar', function () {
    return view('form.daftar');
});
Route::get('/home', function () {
    return view('home');
})->middleware('auth');
Route::get('/admin', function () {
    return view('form.admin');
});
Route::post('/registrasi', [RegistrasiController::class, 'store']);
Route::post('/validasiLogin', [LoginController::class, 'validasi']);

Route::get('/login-admin', function () {
    return view('login-admin');
});
Route::get('/login-user', function () {
    return view('login-user');
});


Route::group(['middleware' => ['role:admin']], function(){ 
    // Route::resource('admin-presensi', PresensiController::class);
    // Route::resource('admin-riwayat', RiwayatPresensiController::class);
    // Route::resource('admin-anggota', AnggotaController::class);
});

Route::group(['middleware' => ['role:user']], function(){ 
    // Route::resource('user-presensi', PresensiController::class);
    // Route::resource('user-riwayat', RiwayatPresensiController::class);
    // Route::resource('user-anggota', AnggotaController::class);
});

Route::get('/logout', [LoginController::class, 'logout']);

// ROUTE DAFTAR LOMBA
Route::resource('/daftarLomba', App\Http\Controllers\LombaController::class);
Route::get('/daftar_lomba', [LombaController::class, 'index'])->name('daftarLomba.daftar_lomba');


// ROUTE PENDAFTAR LOMBA
Route::resource('/pendaftarLomba', App\Http\Controllers\PendaftarController::class);
Route::get('/pendaftar_lomba', [PendaftarController::class, 'index'])->name('pendaftarLomba.pendaftar_lomba');
Route::get('/form_pendaftar/{id}', function ($id) {
    $daf_lomba = DaftarLomba::find($id);
    return view('pendaftarLomba.form_pendaftar',compact('daf_lomba'));
});
Route::post('/registrasi', [PendaftarController::class, 'namaMetode'])->name('registrasi');

Route::get('/detail_pendaftaran', function () {
    $pendaftaran = PendaftarModel::where('id_user', Auth::user()->id)->first();
    return view('detail_pendaftaran', compact(['pendaftaran']));
});
Route::post('/daftar_store',[PendaftarController::class,'store']);


Route::get('/arsha', function () {
   return view('arsha');
});
