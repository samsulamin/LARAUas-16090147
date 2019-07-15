<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPenyalur extends Model
{
	protected $table = 'penyalur';
    protected $fillable = ['idAgen','idPenyalur','namaPenyalur','alamatPenyalur','kuota','latitude','longtitude','status'];
}
