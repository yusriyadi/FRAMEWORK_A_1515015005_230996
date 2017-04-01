<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Dosen extends Model
{
	protected $table ='dosen';
	protected $fillable =['nama','nip','alamat','pengguna_id'];
	public function pengguna()
	{
		return $this->belongsTo(Pengguna::class);//one to one ke model pengguna
	}
	public function dosen_matakuliah()
	{
		return $this->hasMany(dosen_matakuliah::class); //one to many ke model dosen matakuliah
	}
}
