<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matkul;

class jadwal_matkulController extends Controller
{
     public function awal()
    {
    return "Hello dari jadwal matkul Controller";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan()
	{
    $jadwal = new jadwal_matkul();
		$jadwal->mahasiswa_id='1';
		$jadwal->ruangan_id='1';
		$jadwal->dosen_matakuliah_id='1';
		$jadwal->save();
		return "data jadwal telah disimpan";
	}
}
