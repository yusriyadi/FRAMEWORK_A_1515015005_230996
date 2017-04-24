<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\JadwalRequest;
use App\jadwal_matkul;
use App\mahasiswa;
use App\ruangan;
use App\dosen_matakuliah;

class jadwal_matkulController extends Controller
{
	protected $guarded=['id'];
     public function awal()
	{
	$semuaJadwalMatakuliah=jadwal_matkul::all();
    return view('jadwal_matkul.awal',compact('semuaJadwalMatakuliah'));
	}
	public function tambah(){
		$mahasiswa = new mahasiswa;
		$ruangan = new ruangan;
		$dosen_matakuliah= new dosen_matakuliah;
		return view ('jadwal_matkul.tambah',compact('mahasiswa','ruangan','dosen_matakuliah'));
	}
	public function simpan(JadwalRequest $input)
	{
		$jadwal_matkul=new jadwal_matkul($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
		if($jadwal_matkul->save())$this->informasi="jadwal mahasiswa berhasil di simpan";
		return redirect('jadwal_matkul')->with(['informasi'=>$this->informasi]);
	}
	public function edit($id)
	{
		$jadwal_matkul=jadwal_matkul::find($id);
		$mahasiswa= new mahasiswa;
		$ruangan=new ruangan;
		$dosen_matakuliah=new dosen_matakuliah;
		return view('jadwal_matkul.edit',compact('mahasiswa','ruangan','dosen_matakuliah','jadwal_matkul'));
	}
	public function lihat($id)
	{
		$jadwal_matkul= jadwal_matkul::find($id);
		return view('jadwal_matkul.lihat')->with(array('jadwal_matkul'=>$jadwal_matkul));
	}
	public function update($id, jadwalRequest $input)
	{
		$jadwal_matkul=jadwal_matkul::find($id);
		$jadwal_matkul->ruangan_id=$input->ruangan_id;
		$jadwal_matkul->dosen_matakuliah_id=$input->dosen_matakuliah_id;
		$jadwal_matkul->mahasiswa_id=$input->mahasiswa_id;
		$informasi=$jadwal_matkul->save()? 'berhasil di update' : 'gagal update data';
		return redirect('jadwal_matkul')->with(['informasi'=>$informasi]);
	}
	public function hapus($id)
	{
		$jadwal_matkul=jadwal_matkul::find($id);
		$informasi=$jadwal_matkul->delete()? 'berhasil hapus' : 'gagal hapus data';
		return redirect('jadwal_matkul')->with(['informasi'=>$informasi]);
	}


}
