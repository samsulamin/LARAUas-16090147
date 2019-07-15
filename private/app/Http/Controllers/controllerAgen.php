<?php

namespace App\Http\Controllers;

use App\DataAgen;
use App\ModelAgen;
use App\UserLogin;
use App\Login;
use Illuminate\Http\Request;
use Storage;

class controllerAgen extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        	
		
    }
	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agen = ModelAgen::where('status','1')->get();
		//$agen = Agen::all();
		return view('pages.agen', compact('agen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		ModelAgen::create([
			'idAgen' => request('idAgen'),
			'namaAgen' => request('namaAgen'),
			'alamatAgen' => request('alamatAgen'),
			'username' => request('idAgen'),
			'password' => request('idAgen'),
			'latitude' => request('latitude'),
			'longtitude' => request('longtitude'),
			'level' => 'agen',
			'status' => '1'
		]);
		UserLogin::create([
			'nama' => request('namaAgen'),
			'email' => request('idAgen'),
			'password' => bcrypt ($request->idAgen),
			'level' => 'agen',
			'status' => '1'
		]);
		return redirect('dataAgen')->with('sukses', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		$agen = ModelAgen::find($id);
		return view('pages/editAgen',['agen' => $agen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		$agen = ModelAgen::find($id);
		$agen->update($request->all());
		return redirect('dataAgen')->with('sukses', 'Data Berhasil Diupdate');
	}
	//
	//
	//
    public function editStatus($id)
    {
        //
		$agen = ModelAgen::find($id);
		return view('pages/editStatus',['agen' => $agen]);
    }

    public function deaktivasi(Request $request, $id)
    {
        //
		$agen = ModelAgen::find($id);
		/*Agen::table('agens')->where('id',$request->id)->update([
			'status' => '0'
		]);*/
		ModelAgen::where("id",$id)->update([
			'status' => $request-> status = 0
		]);
		return redirect('dataAgen')->with('sukses', 'Data Telah Hapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		
    }
}
