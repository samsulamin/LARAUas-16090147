<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
	protected $table = 'users';
    protected $fillable = [
		'nama',
		'email',
		'password',
		'level',
		'status'
	];
}
