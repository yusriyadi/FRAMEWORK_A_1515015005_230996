<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenController extends Controller
{
    public function awal()
    {
    return "Hello dari dosenController";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan()
	{
		$dosen = new Dosen();
		$dosen->nama='yusri';
		$dosen->nip= '14415';
		$dosen->alamat='jl delima dalam';
		$dosen->pengguna_id='3';
		$dosen->save();
		return "data dengan nama {$dosen->nama} telah disimpan";
	}
}
