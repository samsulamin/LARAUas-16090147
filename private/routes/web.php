<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('wwkwk', function () {
    return view('welcome');
});

Route::get('ok', function () {
    return view('pages.home');
});

Route::get('./tentang', function () {
    return view('pages.about');
});

//Biasa
Route::get('/','indexController@index');
Route::get('/sign','indexController@sign')->name('sign');
Route::post('/postlogin','indexController@postlogin');
Route::get('/logout','indexController@logout');
Route::get('/peta','peta@index');


Route::group(['middleware'=>'auth'],function(){
	//crud admin agen
	//Route::get('adminData','controllerAgen@data');
	//Route::get('petaAdmin','controllerAgen@index')->name('pages.index');
	//create dan read
	Route::get('dataAgen','controllerAgen@create');
	Route::post('dataAgen/store','controllerAgen@store')->name('agen.store');
	//edit
	Route::get('dataAgen/{idAgen}/edit','controllerAgen@edit')->name('pages.edit');
	Route::post('dataAgen/{idAgen}/edit','controllerAgen@update')->name('pages.update');
	//hapus
	Route::get('dataAgen/{idAgen}/editStatus','controllerAgen@editStatus')->name('pages.editStatus');
	Route::post('dataAgen/{idAgen}/editStatus','controllerAgen@deaktivasi')->name('pages.deaktivasi');	



	//crud admin penyalur
	//create dan read
	Route::get('dataPenyalur','controllerPenyalur@index');
	Route::post('dataPenyalur','controllerPenyalur@store')->name('penyalur.store');
	//edit
	Route::get('dataPenyalur/{idPenyalur}/edit','controllerPenyalur@edit')->name('penyalur.edit');
	Route::post('dataPenyalur/{idPenyalur}/edit','controllerPenyalur@update')->name('penyalur.update');
	//hapus
	Route::get('dataPenyalur/{idPenyalur}/hapus','controllerPenyalur@hapus')->name('penyalur.hapus');
	Route::post('dataPenyalur/{idPenyalur}/hapus','controllerPenyalur@editHapus')->name('penyalur.editHapus');

	//crud distribusi
	//read
	Route::get('dataDistribusi','controllerDistribusi@index');
	//create
	Route::post('dataDistribusi','controllerDistribusi@store')->name('distribusi.store');
	//edit
	Route::get('dataDistribusi/{idAgen}/edit','controllerDistribusi@edit')->name('distribusi.edit');
	Route::post('dataDistribusi/{idAgen}/update','controllerDistribusi@update')->name('distribusi.update');
	//hapus
	Route::get('dataDistribusi/{id}/hapus','controllerDistribusi@hapus')->name('distribusi.hapus');
	Route::post('dataDistribusi/{id}/hapus','controllerDistribusi@hapusData')->name('distribusi.hapusData');

	Route::get('setting','controllerSetting@index');

	//agen
	Route::get('agenHome','agenHomeController@index');
	//crud Agen
	//Read
	Route::get('agenPenyalur','agenPenyalurController@index');
	//Create Penyalur
	Route::post('agenPenyalur','agenPenyalurController@store')->name('agenPenyalur.store');
	//edit penyalur
	Route::get('agenPenyalur/{idPenyalur}/edit','agenPenyalurController@edit')->name('agenPenyalur.edit');
	Route::post('agenPenyalur/{idPenyalur}/update','agenPenyalurController@update')->name('agenPenyalur.update');
	//hapus penyalur
	Route::get('agenPenyalur/{idPenyalur}/hapus','agenPenyalurController@hapus')->name('agenPenyalur.hapus');
});

Route::get('agenDistribusi','agenDistribusiController@index');
Route::get('agenSetting','agenSettingController@index');
Route::get('agenAbout','agenAboutController@index');
Route::get('persentase','agenHomeController@persentase');
Route::get('data','agenHomeController@data');

//coba

Route::get('coba','coba@index');
Route::post('coba/store','coba@store')->name('pages.store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
