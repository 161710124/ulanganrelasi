<?php
use App\Mahasiswa;
use App\Wali;
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
Route::get('amin', function() {
$mahasiswa = Mahasiswa::where('nis', '=', '13')->first();
		return $mahasiswa->wali->nama;
	});
