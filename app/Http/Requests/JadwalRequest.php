<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class JadwalRequest extends Request
{
    public function authorize()
    {
    	return true;
    }

    public function rules()
    {
    	$validasi = [
     	'ruangan_id'=>'required',
        'dosen_matakuliah_id'=>'required',
        'mahasiswa_id'=>'required',
    	];
    	return $validasi;
    }
}
