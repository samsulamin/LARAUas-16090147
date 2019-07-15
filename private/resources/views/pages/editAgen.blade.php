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
							<li class="breadcrumb-item"><a href="{{url('dataAgen')}}">Data Agen</a></li>
							<li class="breadcrumb-item active" aria-current="page">Update Data Agen</li>
						</ol>
					</nav>
					@if(session('sukses'))
					<div class="alert alert-success" role="alert">
					{{session('sukses')}}
					</div>
					@endif
					<div class="card">
						<div class="card-header">
							<i class='fas fa-user-cog'></i>
							Update Data Agen
						</div>
						<div class="card-body">
							<?php $messages = $errors->all ('<p style="color:red">:message</p>')?>
							<?php foreach ($messages as $msg):?>
							<?= $msg ?>
							<?php endforeach; ?>
							 {!! Form::open(array('route' => ['pages.update',$agen],'method'=>'POST', 'enctype' => 'multipart/form-data' )) !!}
								<div class="form-group">
									{!! Form::label('ID Agen', 'ID Agen', ['class' => 'control-label']) !!}
									{!! Form::text('idAgen', old('idAgen',$agen->idAgen) , ['class' => 'form-control form-control-sm' . ( $errors->has('idAgen') ? ' is-invalid' : '' ),'placeholder' => 'Masuakan ID Agen', old('idAgen'), 'autofocus', 'required']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('Nama Agen', 'Nama Agen', ['class' => 'control-label']) !!}
									{!! Form::text('namaAgen', old('namaAgen',$agen->namaAgen), ['class' => 'form-control form-control-sm' . ( $errors->has('namaAgen') ? ' is-invalid' : '' ),'placeholder' => 'Masuakan Nama Agen', old('namaAgen'), 'autofocus', 'required']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('Alamat Agen', 'Alamat Agen', ['class' => 'control-label']) !!}
									{!! Form::text('alamatAgen', old('alamatAgen',$agen->alamatAgen), ['class' => 'form-control form-control-sm' . ( $errors->has('alamatAgen') ? ' is-invalid' : '' ),'placeholder' => 'Masuakan Alamat Agen', old('alamatAgen'), 'autofocus', 'required']) !!} 
								</div>
								<hr>
									{{ Form::submit('Simpan Perubahan',['class' => 'btn btn-sm btn-outline-warning'])}}
							{{ Form::close()}}
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