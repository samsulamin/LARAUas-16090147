<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
	protected $table = 'distribusi';
    protected $fillable = ['idAgen','namaPenyalur','tanggal','realisasi','status'];
}
