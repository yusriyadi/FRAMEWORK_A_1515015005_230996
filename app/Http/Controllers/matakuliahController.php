<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahController extends Controller
{
    
 public function awal()
    {
    return "Hello dari matakuliahController";
	}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan()
	{
    $matakuliah = new Matakuliah();
		$matakuliah->title='PBO';
		$matakuliah->keterangan= 'wajib';
		$matakuliah->save();
		return "data dengan nama {$matakuliah->title} telah disimpan";
	}
}
