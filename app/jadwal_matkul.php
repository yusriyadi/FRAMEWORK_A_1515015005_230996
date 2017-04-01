<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matkul extends Model
{
    protected $table ='jadwal_matakuliah';
	protected $fillable =['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

  public function mahasiswa()
    {
    	return $this->belongsTo(Mahasiswa::class); //one to many dengan model mahasiswa (foreign key)
    }
 
    public function dosen_matakuliah()
    {
    	return $this->belongsTo(Dosen_Matakuliah::class); //one to many dengan model dosen_matakuliah (foreign key)
    }

    public function ruangan()
    {
    	return $this->belongsTo(Ruangan::class); //one to many dengan model ruangan (foreign key)

    }

}
