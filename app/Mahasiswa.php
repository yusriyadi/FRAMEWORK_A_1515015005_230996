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
    	return $this->hasMany(Jadwal_Matkul::class);//relasi one to many  dengan model jadwal_matakuliah
 
    }
}
