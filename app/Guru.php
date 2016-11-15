<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
	protected $table = 'data_guru';
	
	protected $fillable = [
		'name'
	];
}
