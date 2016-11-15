<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengawasSekolah extends Model
{
	protected $table = 'data_pengawas_sekolah';
	
	protected $fillable = [
		'name'
	];
}
