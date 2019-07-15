<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelAgen;
use App\DataPenyalur;

class peta extends Controller
{
    //
	public function index()
    {
		$agen = ModelAgen::where('status','1')->get();
		$penyalur = DataPenyalur::where('status','1')->get();
		//$agen = Agen::all();
		//return view('pages.penyalur', compact('agen'));
		return view('biasa.peta', compact('agen','penyalur'));
    }
}
