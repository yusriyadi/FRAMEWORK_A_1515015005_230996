<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table='pengguna';
    //protected $fillable=['username','password'];

    public function mahasiswa()
    {
    	return $this ->hasOne(mahasiswa::class); //one to one dengan model mahaisswa
    }

    public function dosen()
    {
    	return $this->hasOne(Dosen::class); // one to one dengan model dosen
        
    }
    public function peran()
    {
    	return $this->belongsToMany(Peran::class); //many to many dengan model peran 
    }
}
