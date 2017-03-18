<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswaController extends Controller
{
     public function awal()
    {
    return "Hello dari dmahasiswa Controller";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan()
	{
		$mahasiswa = new Mahasiswa();
		$mahasiswa->nama='yusriyadi';
		$mahasiswa->nim= '14415';
		$mahasiswa->alamat='jl delima dalam';
		$mahasiswa->pengguna_id='1';
		$mahasiswa->save();
		return "data dengan nama {$mahasiswa->nama} telah disimpan";
	}
}
