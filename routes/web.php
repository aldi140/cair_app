<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BPKBMobilController;
use App\Http\Controllers\BPKBMotorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPengajuanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MerkMobilController;
use App\Http\Controllers\MerkMotorController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PropertiController;
use App\Http\Controllers\SertifikasiController;
use App\Http\Controllers\TentangKamiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('pengajuan', PengajuanController::class);
Route::get('/bpkb-mobil', [BPKBMobilController::class, 'index'])->name('bpkb-mobil');
Route::get('/bpkb-motor', [BPKBMotorController::class, 'index'])->name('bpkb-motor');
Route::get('/properti', [PropertiController::class, 'index'])->name('properti');
Route::get('/sertifikasi', [SertifikasiController::class, 'index'])->name('sertifikasi');
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');


// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('mobil', MobilController::class);
    Route::resource('merk-mobil', MerkMobilController::class);
    Route::resource('merk-motor', MerkMotorController::class);
    Route::resource('motor', MotorController::class);
    Route::get('pengajuan-mobil', [DataPengajuanController::class, 'dataMobil'])->name('pengajuan-mobil');
    Route::get('pengajuan-mobil-show/{id}', [DataPengajuanController::class, 'dataMobil'])->name('pengajuan-mobil-show');
    Route::get('pengajuan-motor', [DataPengajuanController::class, 'dataMotor'])->name('pengajuan-motor');
    Route::get('pengajuan-property', [DataPengajuanController::class, 'dataProperty'])->name('pengajuan-property');
    Route::get('pengajuan-sertifikasi', [DataPengajuanController::class, 'dataSertifikasi'])->name('pengajuan-sertifikasi');
});


// Route Ajax
Route::prefix('ajax')->name('ajax.')->group(function () {
    Route::get('merk', [AjaxController::class, 'getMerk'])->name('merk');
    Route::get('mobil', [AjaxController::class, 'getMobil'])->name('mobil');
    Route::get('merk-motor', [AjaxController::class, 'getMerkMotor'])->name('merk-motor');
    Route::get('motor', [AjaxController::class, 'getMotor'])->name('motor');
    Route::get('provinsi', [AjaxController::class, 'getProvinsi'])->name('provinsi');
    Route::get('kota', [AjaxController::class, 'getKota'])->name('kota');
    Route::get('kecamatan', [AjaxController::class, 'getKecamatan'])->name('kecamatan');
    Route::get('kelurahan', [AjaxController::class, 'getKelurahan'])->name('kelurahan');
});




// Redirection jika tidak sesuai rute
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});



// Route untuk logout yang diarahkan ke login
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');