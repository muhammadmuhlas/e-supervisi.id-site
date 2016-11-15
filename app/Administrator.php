<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $table = 'data_administrator';
	
	protected $fillable = [
		'name'
	];
}
