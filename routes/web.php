<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangcontroller;
use App\Http\Controllers\dashboard;

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
Route::get('/create', function () {
  
    return "ini halaman tambah data";
});

Route::get('/read-dua', function () {
   
    return "ini halaman tampilkan data";
});
Route::get('/barang/{jenis?}', function ($jenis=null) {
   if ($jenis == null) return "ndadapi jenisnya";
   return "baranya adalah : " . $jenis;
});

Route::get('/indek', [barangcontroller::class, 'index']);
Route::get('/baru/{barang?}', [barangcontroller::class, 'carabaru']);
Route::get('/dashboard', [dashboard::class, 'dashboard']);
Route::get('/data', [dashboard::class, 'tampil']);
Route::get('/login', [dashboard::class, 'login']);
Route::get('/create', [dashboard::class, 'create']);
Route::get('/edit', [dashboard::class, 'edit']);


//ROUTE CRUD

Route::get('/tambah', [dashboard::class, 'tambah']);
Route::post('/read', [dashboard::class, 'read']);

Route::get('/delete/{id}', [dashboard::class, 'delete']);

Route::put('/update/{id}', [dashboard::class, 'update']);
Route::get('/edit-data/{id}', [dashboard::class, 'editform']);