<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
	protected $table = 'agen';
    protected $fillable = ['idAgen','namaAgen','alamatAgen','username','password','latitude','longtitude','status'];
}
