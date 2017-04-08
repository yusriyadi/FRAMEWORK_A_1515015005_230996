<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{

    protected $table ='mahasiswa';
	protected $fillable =['nama','nim','alamat','pengguna_id'];
	
	public function pengguna()
	{
		return $this ->belongsTo(Pengguna::class); //relasi one to one dengan model pengguna
	}

	 public function jadwal_matkul()
    {
    	return $this->hasMany(Jadwal_Matkul::class,"dosen_matakuliah_id");//relasi one to many  dengan model jadwal_matakuliah
 
    }
    public function getUsernameAttribute()
    {
    	return $this->pengguna->username;
    }
     public function listMahasiswaDanNim(){
        $out = [];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }

}

