<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
	protected $table = 'login';
	protected $primarykey = 'id';
    protected $fillable = [
		'nama',
		'username',
		'password',
		'level',
		'status'
	];
}
