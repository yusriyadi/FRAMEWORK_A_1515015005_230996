<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MahasiswaRequest;
use App\Http\Requests;
use App\mahasiswa;
use App\Pengguna;

class mahasiswaController extends Controller
{
	protected $informasi ='gagal melakukan aksi';
	public function awal ()
		{
			// return "hello dari mhs";
			$semuaMahasiswa =Mahasiswa::all();
			return view('mahasiswa.awal',compact('semuaMahasiswa'));
		}
	public function tambah()
	{
		return view('mahasiswa.tambah');
	}

	public function simpan(MahasiswaRequest $input)
	{
		$pengguna=new Pengguna($input->only('username','password'));
		if($pengguna->save())
		{
			$mahasiswa=new Mahasiswa();
			$mahasiswa->nama=$input->nama;
			$mahasiswa->nim=$input->nim;
			$mahasiswa->alamat=$input->alamat;
			if($pengguna->mahasiswa()->save($mahasiswa)) $this->informasi='berhasil simpan data';
		}
		return redirect ('mahasiswa')->with(['informasi'=>$this->informasi]);
	}
	public function edit($id)
	{
		$mahasiswa=Mahasiswa::find($id);
		return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
	}
	public function lihat($id)
	{
		$mahasiswa =Mahasiswa::find($id);
		return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
	}
	public function update($id, MahasiswaRequest $input)
	{
		$mahasiswa=Mahasiswa::find($id);
		$pengguna=$mahasiswa->pengguna;
		$mahasiswa->nama=$input->nama;
		$mahasiswa->nim=$input->nim;
		$mahasiswa->alamat=$input->alamat;
		$mahasiswa->save();
		if(!is_null($input->username))
		{
			$pengguna->fill($input->only('username'));
			if(!empty($input->password))
			{
				$pengguna->password=$input->password;
			}
			if($pengguna->save())
			{
				$this->informasi='berhasil simpan data';
			}
			else
			{
				$this->informasi ='gagal simpan data ';
			}
		}
		return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
	}
	public function hapus($id)
	{
		$mahasiswa =Mahasiswa::find($id);
		if($mahasiswa->pengguna()->delete())
		{
			if($mahasiswa->delete())
			{
				$this->informasi='berhsil hapus data';
			}
		}
		return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);		
	}

 //     public function awal()
 //    {
 //    return "Hello dari dmahasiswa Controller";
	// }
	// public function tambah(){
	// 	return $this->simpan();
	// }
	// public function simpan()
	// {
	// 	$mahasiswa = new Mahasiswa();
	// 	$mahasiswa->nama='yusriyadi';
	// 	$mahasiswa->nim= '14415';
	// 	$mahasiswa->alamat='jl delima dalam';
	// 	$mahasiswa->pengguna_id='1';
	// 	$mahasiswa->save();
	// 	return "data dengan nama {$mahasiswa->nama} telah disimpan";
	// }
}
