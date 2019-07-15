<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPenyalur;

class agenPenyalurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		
		$agenPenyalur = DataPenyalur::where('status','1')->get();
		return view('Agen.agenPenyalur', compact('agenPenyalur'));
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
		return redirect('agenPenyalur')->with('sukses', 'Data Berhasil Ditambah');
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
		$agenPenyalur = DataPenyalur::find($id);
		return view('Agen.agenPenyalurEdit',compact('agenPenyalur'));
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
		$agenPenyalur = DataPenyalur::find($id);
		$agenPenyalur->update($request->all());
		return redirect('agenPenyalur')->with('sukses', 'Data Berhasil Edit');
    }
	
    public function hapus($id)
    {
        //
		$agenPenyalur = DataPenyalur::find($id);
		return view('agen.agenPenyalurHapus',compact('agenPenyalur'));
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
