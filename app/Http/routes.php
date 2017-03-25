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
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('ruangan','ruangancontroller@awal');
Route::get('ruangan/tambah','ruangancontroller@tambah');
Route::post('ruangan/simpan','ruangancontroller@simpan');
Route::get('ruangan/edit/{ruangan}','ruangancontroller@edit');
Route::post('ruangan/edit/{ruangan}','ruangancontroller@update');
Route::get('ruangan/lihat/{ruangan}','ruangancontroller@lihat');
Route::get('ruangan/hapus/{ruangan}','ruangancontroller@hapus');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/lihat/{matakuliah}','matakuliahController@lihat');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');



Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','dosenController@tambah');
Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa/tambah','mahasiswaController@tambah');
Route::get('dosen_matakuliah','dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahController@tambah');
Route::get('jadwal_matakuliah','jadwal_matkulController@awal');
Route::get('jadwal_matakuliah/tambah','jadwal_matkulController@tambah');



// Route::get('pengguna/simpan','PenggunaController@simpan');
