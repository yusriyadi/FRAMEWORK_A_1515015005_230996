<?php


use App\pengguna;


Route::get('/', function () {
    return view('yusriyadi');
});
Route::auth();
// Route::get('/public', function () {
//     return "Nama : yusriyadi <br> Nim : 1515015005";
// });
// Route::get('pengguna/{pengguna}', function ($pengguna) {
//     return "<h1>Hallo sayang dari $pengguna <h1>";
// });
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','dosenController@tambah');

Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa/tambah','mahasiswaController@tambah');

Route::get('matakuliah','matakuliahController@awal');
Route::get('matakuliah/tambah','matakuliahController@tambah');

Route::get('ruangan','ruanganController@awal');
Route::get('ruangan/tambah','ruanganController@tambah');

Route::get('dosen_matakuliah','dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahController@tambah');

Route::get('jadwal_matkul','jadwal_matkulController@awal');
Route::get('jadwal_matkul/tambah','jadwal_matkulController@tambah');
// Route::get('pengguna/simpan','PenggunaController@simpan');
