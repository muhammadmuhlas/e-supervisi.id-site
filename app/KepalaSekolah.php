<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KepalaSekolah extends Model
{
	protected $table = 'data_kepala_sekolah';
	
	protected $fillable = [
		'name'
	];
}
