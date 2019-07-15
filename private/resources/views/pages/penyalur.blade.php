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
							<i class='fas fa-user-friends'></i>
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
									{!! Form::open(array('route' => 'penyalur.store','method'=>'POST', 'enctype' => 'multipart/form-data' )) !!}
										<div class="form-group">
											<label for="namaAgen" class="control-label">Nama Agen</label>
											<select class="form-control form-control-sm" id="idAgenPenyalur" name="idAgen">
													<option value=''> Pilih Nama Agen </option>
												@foreach($agen as $agen)
													<option value='{{$agen->idAgen}}'>{{$agen->namaAgen}}</option>
												@endforeach
											</select>								
										</div>									
										<div class="form-group">
											{!! Form::label('ID Penyalur', 'ID Penyalur', ['class' => 'control-label']) !!}
											{!! Form::text('idPenyalur', '', ['class' => 'form-control form-control-sm' . ( $errors->has('idPenyalur') ? ' is-invalid' : '' ),'placeholder' => 'Masukan ID Penyalur', old('idPenyalur'), 'autofocus', 'required']) !!}
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
									</form>							
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
							<i class='fas fa-user-friends'></i>
							Data Penyalur
						</div>
						<div class="card-body">
							<table class="table table-sm table-bordered table-hover text-center dataPenyalur">
								<thead>
									<tr>
										<th scope="col">Nama Penyalur</th>
										<th scope="col">Nama Agen</th>
										<th scope="col">Nama Penyalur</th>
										<th scope="col">Alamat Agen</th>
										<th scope="col">Kuota</th>
										<th scope="col">Pilihan</th>
									</tr>
								</thead>
								<tbody>
									@foreach($penyalur as $penyalur)
									<tr>
										<th scope="row">{{$penyalur->idAgen}}</th>
										<td>{{$penyalur->idPenyalur}}</td>
										<td>{{$penyalur->namaPenyalur}}</td>
										<td>{{$penyalur->alamatPenyalur}}</td>
										<td>{{$penyalur->kuota}}</td>
										<td>
											<a href="{{route('penyalur.edit', $penyalur)}}" class="btn btn-outline-info btn-sm">
												<i class='far fa-edit'></i>
												Edit
											</a>
											{{('|')}}
											<a href="{{route('penyalur.hapus', $penyalur)}}" class="btn btn-outline-danger btn-sm">
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