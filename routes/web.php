<?php

use App\Http\Controllers\DataMaster;
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
});

Route::get('/datamaster/perusahaan', [DataMaster::class, 'Perusahaan'])->name('datamaster.perusahaan');
Route::get('/datamaster/pendidikan', [DataMaster::class, 'Lembaga'])->name('datamaster.lembagapendidikan');
Route::get('/datamaster/bank', [DataMaster::class, 'Bank'])->name('datamaster.bank');
Route::get('/datamaster/rumahsakit', [DataMaster::class, 'RumahSakit'])->name('datamaster.rumahsakit');
