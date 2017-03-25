<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;


class ruanganController extends Controller
{
    public function awal()
    {
    return view ('ruangan.awal',['data'=>Ruangan::all()]);
	}
	public function tambah(){
		return view ('ruangan.tambah');
	}
	public function simpan(Requests $input)
	{
		$ruangan = new Ruangan();
		$ruangan->title = $input->title;
		$informasi= $ruangan->save() ? 'Berhasil simpan data' : 'gagal simmpan data';
		return redirect('ruangan')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$ruangan =ruangan::find($id);
		return view('ruangan.edit')->with(array('ruangan'=>$ruangan));
		}
	public function lihat($id)
	{
		$ruangan =ruangan::find($id);
		return view('ruangan.lihat')->with(array('ruangan'=>$ruangan));
		}
	public function update($id,Request $input)
	{
		$ruangan =ruangan::find($id);
		$ruangan->username =$input->username;
		$ruangan->password =$input->password;
		$informasi = $ruangan->save() ? 'Berhasil update data ' : 'gagal update data';
		return redirect('ruangan')->with(['informasi'=>$informasi]);
		}
	public function hapus($id)
	{
		$ruangan = ruangan::find($id);
		$informasi = $ruangan->delete() ? 'berhasil hapus data ' : 'gagal hapus data';
		return redirect('ruangan')->with(['informasi'=>$informasi]);		
	}
}
