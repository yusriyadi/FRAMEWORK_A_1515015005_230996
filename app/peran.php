<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Peran extends Model
{
	Protected $table ='peran';
	
	public function pengguna()
	{
		return $this -> belongsToMany(Pengguna::class);// many to many dengan model pengguna 

	}

}


?>