<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table ='dosen_matakuliah';
	protected $fillable =['dosen_id','matakuliah_id'];

	public function dosen()
    {
    	return $this->belongsTo(Dosen::class,"dosen_id"); //one to one ke model dosen
    }

    public function matakuliah()
    {
    	return $this->belongsTo(Matakuliah::class,"matakuliah_id"); //one to one ke model matakuliah
    }

    public function jadwal_matkul()
    {
    	return $this->hasMany(Jadwal_Matkul::class,"dosen_matakuliah_id");
    }
      public function listDosenDanMatakuliah(){
        $out = [];
        foreach ($this->all() as $dsnmtk) {
            $out[$dsnmtk->id] = "{$dsnmtk->dosen->nama} (matakuliah {$dsnmtk->matakuliah->title})";
        }
        return $out;
    }

}
