<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table ='dosen_matakuliah';
	protected $fillable =['dosen_id','matakuliah_id'];

	public function dosen()
    {
    	return $this->belongsTo(Dosen::class); //one to one ke model dosen
    }

    public function matakuliah()
    {
    	return $this->belongsTo(Matakuliah::class); //one to one ke model matakuliah
    }

    public function jadwal_matkul()
    {
    	return $this->hasMany(Jadwal_Matkul::class); //one to many ke model dosen
    }

}
