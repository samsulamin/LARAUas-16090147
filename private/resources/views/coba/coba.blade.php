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
									Tambah coba
								</div>
								<div class="card-body">	
									<?php $messages = $errors->all ('<p style="color:red">:message</p>')?>
									<?php foreach ($messages as $msg):?>
									<?= $msg ?>
									<?php endforeach; ?>
									 {!! Form::open(array('route' => 'pages.store','method'=>'POST', 'enctype' => 'multipart/form-data' )) !!}
										<div class="form-group">
											{!! Form::label('Nama', 'Nama', ['class' => 'control-label']) !!}
											{!! Form::text('nama', '', ['class' => 'form-control form-control-sm' . ( $errors->has('idAgen') ? ' is-invalid' : '' ),'placeholder' => 'Masuakan ID Agen', old('idAgen'), 'autofocus', 'required']) !!}
										</div>
										<div class="form-group">
											{!! Form::label('Nama Agen', 'Nama Agen', ['class' => 'control-label']) !!}
											{!! Form::text('username', '', ['class' => 'form-control form-control-sm' . ( $errors->has('username') ? ' is-invalid' : '' ),'placeholder' => 'username', old('namaAgen'), 'autofocus', 'required']) !!}
										</div>
										<div class="form-group">
											{!! Form::label('password', 'password', ['class' => 'control-label']) !!}
										    {!! Form::password('password', ['class' => 'form-control form-control-sm' . ( $errors->has('password') ? ' is-invalid' : '' ), 'placeholder' => 'Masuakan Password', 'required']) !!}
										</div>
		
										<hr>
										{{ Form::submit('Simpan',['class' => 'btn btn-sm btn-outline-primary'])}}
									{{ Form::close()}}
								</div>
							</div>
						</div>
					</div>
					</br>
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