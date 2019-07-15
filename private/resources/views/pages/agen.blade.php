@extends('template')

@section('main')
	<br>
	<br>
	<div id="baru">
		<br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2">
					<ul class="list-group">
						<li class="list-group-item bg-dark" style="color:#ffffff;">Data</li>
						<a href="{{url('dataAgen')}}" class="list-group-item list-group-item-action">
							<i class='fas fa-user-clock'></i>
							Data Agen
						</a>
						<a href="{{url('dataPenyalur')}}" class="list-group-item list-group-item-action">
							<i class='fas fa-users'></i>
							Data Penyalur
						</a>
						<a href="{{url('dataDistribusi')}}"href="" class="list-group-item list-group-item-action">
							<i class='fas fa-truck-moving'></i>
							Data Distribusi
						</a>
					</ul>
				</div>
				<div class="col-sm-10">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
							<li class="breadcrumb-item"><a href="{{url('adminData')}}">Data</a></li>
							<li class="breadcrumb-item active" aria-current="page">Data Agen</li>
						</ol>
					</nav>
					@if(session('sukses'))
					<div class="alert alert-success" role="alert">
					{{session('sukses')}}
					</div>
					@endif
					<div class="row">
						<div class="col-sm-4">
							<div class="card">
								<div class="card-header">
									<i class='fas fa-user-plus'></i>
									Tambah Data Agen
								</div>
								<div class="card-body">	
									<?php $messages = $errors->all ('<p style="color:red">:message</p>')?>
									<?php foreach ($messages as $msg):?>
									<?= $msg ?>
									<?php endforeach; ?>
									 {!! Form::open(array('route' => 'agen.store','method'=>'POST', 'enctype' => 'multipart/form-data' )) !!}
										<div class="form-group">
											{!! Form::label('ID Agen', 'ID Agen', ['class' => 'control-label']) !!}
											{!! Form::email('idAgen', '', ['class' => 'form-control form-control-sm' . ( $errors->has('idAgen') ? ' is-invalid' : '' ),'placeholder' => 'Masukan ID Agen', old('idAgen'), 'autofocus', 'required']) !!}
										</div>
										<div class="form-group">
											{!! Form::label('Nama Agen', 'Nama Agen', ['class' => 'control-label']) !!}
											{!! Form::text('namaAgen', '', ['class' => 'form-control form-control-sm' . ( $errors->has('namaAgen') ? ' is-invalid' : '' ),'placeholder' => 'Masukan Nama Agen', old('namaAgen'), 'autofocus', 'required']) !!}
										</div>
										<div class="form-group">
											{!! Form::label('Alamat Agen', 'Alamat Agen', ['class' => 'control-label']) !!}
											{!! Form::text('alamatAgen', '', ['class' => 'form-control form-control-sm' . ( $errors->has('alamatAgen') ? ' is-invalid' : '' ),'placeholder' => 'Masukan Alamat Agen', old('alamatAgen'), 'autofocus', 'required']) !!} 
										</div>
										
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
												<label for="Latitude">Latitude</label>
												<input type="text" class="form-control form-control-sm" id="latInput" name="latitude"  placeholder = 'Masuakan Latitude' readonly required>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
												<label for="Langitude">Langitude</label>
												<input type="text" class="form-control form-control-sm" id="lngInput" name="longtitude"  placeholder = 'Masuakan Langtitude' readonly required>
												</div>
											</div>
										</div>
										<hr>
										{{ Form::submit('Simpan',['class' => 'col-sm-12 btn btn-sm btn-outline-primary'])}}
									{{ Form::close()}}
								</div>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="card">
								<div class="card-header">
									<i class='fas fa-search-location'></i>
									Digitasi Agen
								</div>
								<div class="card-body">	
									<div id="mapid" style="height:375px"></div>								
								</div>
							</div>
						</div>
					</div>
					</br>
					<div class="card">
						<div class="card-header">
							<i class='fas fa-user-clock'></i>
							Data Agen
						</div>
						<div class="card-body">
							<table class="table table-sm table-bordered table-hover text-center data">
								<thead>
									<tr>
										<th scope="col">ID Agen</th>
										<th scope="col">Nama Agen</th>
										<th scope="col">Alamat Agen</th>
										<th scope="col">Pilihan</th>
									</tr>
								</thead>
								<tbody>
									@foreach($agen as $agen)
									<tr>
										<td>{{$agen->idAgen}}</td>
										<td>{{$agen->namaAgen}}</td>
										<td>{{$agen->alamatAgen}}</td>
										<td>
											<a href="{{route('pages.edit', $agen)}}" class="btn btn-outline-info btn-sm">
												<i class='far fa-edit'></i>
												Edit
											</a>
											{{('|')}}
											<a href="{{route('pages.editStatus', $agen)}}" class="btn btn-outline-danger btn-sm">
												<i class='fas fa-trash-alt'></i>
												Hapus
											</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('footer')
	<div id="footer">
		<p>&copy; 2019 | Framework Programming Poltek Tegal</p>
	</div>
@stop