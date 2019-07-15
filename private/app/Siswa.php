<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
	protected $table = 'siswa';
	protected $primarykey = 'id';
    protected $fillable = [
		'nama',
		'username',
		'password',
		'statusUser'
	];
	public function get_user(){
		return $this->hasMany('App\\login','login','id');
	}
}
