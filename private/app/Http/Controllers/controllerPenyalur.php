<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelAgen;
use App\DataPenyalur;
use Storage;

class controllerPenyalur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        	
		//return "Hai, ini method index yang dipanggil dari controller BelajarController";
		$agen = ModelAgen::where('status','1')->get();
		$penyalur = DataPenyalur::where('status','1')->get();
		//$agen = Agen::all();
		//return view('pages.penyalur', compact('agen'));
		return view('pages.penyalur', compact('agen','penyalur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
		DataPenyalur::create([
			'idAgen' => request('idAgen'),
			'idPenyalur' => request('idPenyalur'),
			'namaPenyalur' => request('namaPenyalur'),
			'alamatPenyalur' => request('alamatPenyalur'),
			'kuota' => request('kuota'),
			'latitude' => request('latitude'),
			'longtitude' => request('longtitude'),
			'status' => '1'
		]);
		return redirect('dataPenyalur')->with('sukses', 'Data Berhasil Ditambah');
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
	
    public function hapus($id)
    {
        //
		$agen = ModelAgen::find($id);
		$penyalur = DataPenyalur::find($id);
		return view('pages/hapus',compact('agen','penyalur'));
    }
	
    public function editHapus(Request $request, $id)
    {
        //$agen = DataAgen::find($id);
		/*Agen::table('agens')->where('id',$request->id)->update([
			'status' => '0'
		]);*/
		DataPenyalur::where("id",$id)->update([
			'status' => $request-> status = 0
		]);
		return redirect('dataPenyalur')->with('sukses', 'Data Telah Hapus');
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
		$agen = ModelAgen::where('status','1')->get();
		$penyalur = DataPenyalur::find($id);
		return view('pages/editPenyalur',compact('agen','penyalur'));
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
		//$agen = DataAgen::where('status','1')->get();
		$penyalur = DataPenyalur::find($id);
		$penyalur->update($request->all());
		return redirect('dataPenyalur')->with('sukses', 'Data Berhasil Edit');

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
