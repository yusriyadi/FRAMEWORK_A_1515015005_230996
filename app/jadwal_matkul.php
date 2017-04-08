<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matkul extends Model
{
    protected $table ='jadwal_matakuliah';
	protected $fillable =['mahasiswa_id','ruangan_id','dosen_matakuliah_id','dosen_id'];

  public function mahasiswa()
    {
    	return $this->belongsTo(mahasiswa::class,"mahasiswa_id"); //one to many dengan model mahasiswa (foreign key)
    }
 
    public function dosen_matakuliah()
    {
    	return $this->belongsTo(dosen_Matakuliah::class,"dosen_matakuliah_id"); //one to many dengan model dosen_matakuliah (foreign key)
    }

    public function ruangan()
    {
    	return $this->belongsTo(Ruangan::class,"ruangan_id"); //one to many dengan model ruangan (foreign key)

    }

}
