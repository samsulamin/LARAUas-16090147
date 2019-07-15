@extends('templateAgen')

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
						<a href="{{url('agenPenyalur')}}" class="list-group-item list-group-item-action">
							<i class='fas fa-users'></i>
							Data Penyalur
						</a>
						<a href="{{url('agenDistribusi')}}"href="" class="list-group-item list-group-item-action">
							<i class='fas fa-truck-moving'></i>
							Data Distribusi
						</a>
					</ul>
				</div>
				<div class="col-sm-10">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
							<li class="breadcrumb-item"><a href="{{url('data')}}">Data</a></li>
							<li class="breadcrumb-item active" aria-current="page">Data Penyalur</li>
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
									<i class='fas fa-users'></i>
									Tambah Data Penyalur
								</div>
								<div class="card-body">
									{!! Form::open(array('route' => 'agenPenyalur.store','method'=>'POST', 'enctype' => 'multipart/form-data' )) !!}
										<div class="form-group">
											{!! Form::label('ID Agen', 'ID Agen', ['class' => 'control-label']) !!}
											{!! Form::text('idAgen', '', ['class' => 'form-control form-control-sm' . ( $errors->has('idAgen') ? ' is-invalid' : '' ),'placeholder' => 'Masukan ID Penyalur', old('idAgen'), 'autofocus', 'required']) !!}								
										</div>
										<div class="form-group">
											{!! Form::label('ID Penyalur', 'ID Penyalur', ['class' => 'control-label']) !!}
											{!! Form::text('idPenyalur', '', ['class' => 'form-control form-control-sm' . ( $errors->has('idPenyalur') ? ' is-invalid' : '' ),'placeholder' => 'Masukan Nama Penyalur', old('namaPenyalur'), 'autofocus', 'required']) !!}
										</div>			
										<div class="form-group">
											{!! Form::label('Nama Penyalur', 'Nama Penyalur', ['class' => 'control-label']) !!}
											{!! Form::text('namaPenyalur', '', ['class' => 'form-control form-control-sm' . ( $errors->has('namaPenyalur') ? ' is-invalid' : '' ),'placeholder' => 'Masukan Nama Penyalur', old('namaPenyalur'), 'autofocus', 'required']) !!}
										</div>
										<div class="form-group">
											{!! Form::label('Alamat Penyalur', 'Alamat Penyalur', ['class' => 'control-label']) !!}
											{!! Form::text('alamatPenyalur', '', ['class' => 'form-control form-control-sm' . ( $errors->has('alamatPenyalur') ? ' is-invalid' : '' ),'placeholder' => 'Masukan Alamat Penyalur', old('alamatPenyalur'), 'autofocus', 'required']) !!} 
										</div>
										<div class="form-group">
											{!! Form::label('Kuota', 'Kuota', ['class' => 'control-label']) !!}
											{!! Form::text('kuota', '', ['class' => 'form-control form-control-sm' . ( $errors->has('kuota') ? ' is-invalid' : '' ),'placeholder' => 'Masukan Kuota Gas', old('kuota'), 'autofocus', 'required']) !!} 
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
												<label for="Latitude">Latitude</label>
												<input type="text" class="form-control form-control-sm" id="latInput" name="latitude" placeholder = 'Masuakan Latitude' readonly>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
												<label for="Langitude">Langitude</label>
												<input type="text" class="form-control form-control-sm" id="lngInput" name="longtitude" placeholder = 'Masuakan Langtitude' readonly>
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
									Digitasi Penyalur
								</div>
								<div class="card-body">	
									<div id="mapid" style="height:530px"></div>								
								</div>
							</div>
						</div>					
					</div>
					<br>
					<div class="card">
						<div class="card-header">
							<i class='fas fa-users'></i>
							Data Penyalur
						</div>
						<div class="card-body">
							<table class="table table-bordered text-center agenPenyalur">
								<thead>
									<tr>
										<th scope="col">ID Penyalur</th>
										<th scope="col">ID Agen</th>
										<th scope="col">Nama Penyalur</th>
										<th scope="col">Alamat Agen</th>
										<th scope="col">Kuota</th>
										<th scope="col">Edit</th>
										<th scope="col">Hapus</th>
									</tr>
								</thead>
								<tbody>
									@foreach($agenPenyalur as $agenPenyalur)
									<tr>
										<th scope="row">{{$agenPenyalur->idPenyalur}}</th>
										<td>{{$agenPenyalur->idAgen}}</td>
										<td>{{$agenPenyalur->namaPenyalur}}</td>
										<td>{{$agenPenyalur->alamatPenyalur}}</td>
										<td>{{$agenPenyalur->kuota}}</td>
										<td>
											<a href="{{route('agenPenyalur.edit', $agenPenyalur)}}"class="btn btn-sm btn-outline-warning btn-sm">
												<i class='far fa-edit'></i>
												Edit
											</a>
										</td>
										<td>
											<a href="{{route('agenPenyalur.hapus', $agenPenyalur)}}"class="btn btn-sm btn-outline-warning btn-sm">
												<i class='far fa-trash-alt'></i>
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