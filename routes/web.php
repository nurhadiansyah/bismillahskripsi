<?php



use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataIbuController;
use App\Http\Controllers\DataAnakController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\DataKadercontroller;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\TimbangAnakController;
use App\Http\Controllers\JenisImunisasiController;




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
    return view('layouts/master');
});

//master data penjalur
Route::get('masterdataibu', function () { return view('layouts.ibu.mdataibu');});
Route::get('masterdataanak', function () { return view('layouts.anak.mdataanak');});
Route::get('masterdatakader', function () { return view('layouts.kader.mdatakader');});
Route::get('masterjenisimunisasi', function () { return view('layouts.jenisimunisasi.mjenisimunisasi');});

// penimbangan penjalur
Route::get('timbanganak', function () { return view('layouts.timbang.ptimbangananak');});
Route::get('datatimbang', function () { return view('layouts.datatimbang.pdatatimbang');});
Route::get('datastatusgizi', function () { return view('layouts.gizi.pdatagizi');});

// main penjalur
Route::get('imunisasi', function () { return view('layouts.imunisasi.imunisasi');});
Route::get('laporan', function () { return view('layouts.laporan.laporan');});
Route::get('datauser', function () { return view('layouts.user.datauser');});
Route::get('dashboard', function () { return view('layouts.dasboard.dasboard');});

//data create
Route::get('createdataibu', function () { return view('layouts.ibu.createdataibu');});
Route::get('createdataanak', function () { return view('layouts.anak.createanak');});
Route::get('createkader', function () { return view('layouts.kader.createkader');});
Route::get('creatimunisasi', function () { return view('layouts.imunisasi.createimunisasi');});

//controler
Route::resource('ibus', DataIbuController::class);
Route::resource('anaks', DataAnakController::class);
Route::resource('Jimunisasi', JenisImunisasiController::class);
Route::resource('datakaders', DataKadercontroller::class);


Route::resource('tanak', TimbangAnakController::class);
Route::resource('Imunisasis', ImunisasiController::class);
Route::resource('duser', DataUserController::class);

// route untuk cetak

Route::get('cetakanak','DataAnakController@CetakAnak')->name('cetakanak');
