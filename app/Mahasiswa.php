<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
	protected $fillable = array('nama', 'nis');
		public function wali() {
		return $this->hasOne('App\Wali', 'id_mahasiswa');
    }
}
