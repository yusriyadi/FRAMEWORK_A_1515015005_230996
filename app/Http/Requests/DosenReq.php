<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DosenReq extends Request
{
    public function authorize()
    {
    	return true;
    }

    public function rules()
    {
    	$validasi = [
     	'nama'=>'Required',
        'nip'=>'Required',
        'alamat'=>'Required',
    	];
    	return $validasi;
    }
}
