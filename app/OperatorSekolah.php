<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperatorSekolah extends Model
{
	protected $table = 'data_operator_sekolah';
	
	protected $fillable = [
		'name'
	];
}
