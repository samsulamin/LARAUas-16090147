<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\ModelAgen;
use App\DataPenyalur;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$agen = ModelAgen::where('status','1')->get();
		$penyalur = DataPenyalur::where('status','1')->get();
		//$agen = Agen::all();
		//return view('pages.penyalur', compact('agen'));
		return view('Biasa.index', compact('agen','penyalur'));
    }
	
	public function sign()
	{
		$agen = ModelAgen::where('status','1')->get();
		$penyalur = DataPenyalur::where('status','1')->get();
		//$agen = Agen::all();
		//return view('pages.penyalur', compact('agen'));
		return view('Biasa.login', compact('agen','penyalur'));
	}
	
	public function postlogin(Request $request)
	{
		//dd(\Auth::attempt(['username' => $request->email, 'password' => $request->password]));
		//dd($request->all());
		if(Auth::attempt($request->only('email','password'))){
			return redirect('/dataAgen');
		}
		return redirect('/sign');
	}
	
	public function logout()
	{
		Auth::logout();
		return redirect('/sign');
	}
	
    public function lokasi()
    {
        //
		return view('Biasa.lokasi');
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
