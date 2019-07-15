<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distribusi;
use App\ModelAgen;
use App\Datapenyalur;

class controllerDistribusi extends Controller
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
		$distribusi = Distribusi::where('status','1')->get();
		return view('pages.distribusi',compact('agen','penyalur','distribusi'));
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
		Distribusi::create([
			'idAgen' => request('idAgen'),
			'namaPenyalur' => request('namaPenyalur'),
			'tanggal' => request('tanggal'),
			'realisasi' => request('realisasi'),
			'status' => '1'
		]);
		return redirect('dataDistribusi')->with('sukses', 'Data Distribusi Berhasil Ditambah');
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
		$agen = ModelAgen::where('status','1')->get();
		$penyalur = DataPenyalur::where('status','1')->get();
		$distribusi = Distribusi::where('status','1')->get();
		$distribusiEdit = Distribusi::find($id);
		return view('pages.editDistribusi',compact('agen','penyalur','distribusi','distribusiEdit'));
    }
	
	
    public function hapus($id)
    {
        //
		$agen = ModelAgen::where('status','1')->get();
		$penyalur = DataPenyalur::where('status','1')->get();
		$distribusi = Distribusi::where('status','1')->get();
		$distribusiHapus = Distribusi::find($id);
		return view('pages.hapusDistribusi',compact('agen','penyalur','distribusi','distribusiHapus'));
    }
	
	
    public function hapusData(Request $request, $id)
    {
        //
		$distribusi = Distribusi::find($id);
		Distribusi::where("id",$id)->update([
			'status' => $request-> status = 0
		]);
		return redirect('dataDistribusi')->with('sukses', 'Data Telah Hapus');
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
		$agen = ModelAgen::where('status','1')->get();
		$penyalur = DataPenyalur::where('status','1')->get();
		$distribusi = Distribusi::where('status','1')->get();
		$distribusiEdit = Distribusi::find($id);
		$distribusiEdit->update($request->all());
		return redirect('dataDistribusi')->with('sukses', 'Data Berhasil Diupdate');
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
