<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelAgen extends Model
{
	protected $table = 'dataAgen';
    protected $fillable = ['idAgen','namaAgen','alamatAgen','username','password','latitude','longtitude','level','status'];
}
