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
		return $this->hasMany(dosen_matakuliah::class,"dosen_id"); //one to many ke model dosen matakuliah
	}
	 public function getUsernameAttribute(){
        return $this->pengguna->username;
    }
	 public function listdosenDanNIP(){
        $out = [];
        foreach ($this->all() as $dsn) {
            $out[$dsn->id]="{$dsn->nama} ({$dsn->nip})";
        }
        return $out;
    }
}
