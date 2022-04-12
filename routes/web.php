<?php

use App\http\Controllers\MahasiswaController;
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

Route::view('master','Template/master');

// Route Untuk Mahasiswa
Route::get('data-mahasiswa',[MahasiswaController::class,'index']);
Route::get('add-mahasiswa',[MahasiswaController::class,'create']);

//tugas menampilkan dan menambah data
Route::view('master','tema/master');

Route::get('bayu', 'BayuController@index');
Route::get('bayu.add', 'BayuController@create')->name('bayu.create');
Route::post('bayu/store', 'BayuController@store')->name('bayu.store');
