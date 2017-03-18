<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;


class dosen_matakuliahController extends Controller
{
    public function awal()
    {
    return "Hello dari dosen matkul Controller";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan()
	{
    $d = new dosen_matakuliah();
		$d->dosen_id='1';
		$d->matakuliah_id='1';
		$d->save();
		return "data dengan title {$d->dosen_id} telah disimpan";
	}
}
