<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
     protected $table ='ruangan';
	//protected $fillable =['title'];

     public function jadwal_matkul()
    {
    	return $this->hasMany(Jadwal_Matkul::class); //one to many dengan model jadwal_matakuliah
    }
}
