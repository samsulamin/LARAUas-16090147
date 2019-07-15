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
							<li class="breadcrumb-item"><a href="{{url('dataDistribusi')}}">Data Distribusi</a></li>
							<li class="breadcrumb-item active" aria-current="page">Edit Data Distribusi</li>
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
									<i class='fas fa-ambulance'></i>
									Tambah Data Distribusi
								</div>
								<div class="card-body">
									{!! Form::open(array('route'=>['distribusi.update',$distribusiEdit],'method'=>'POST', 'enctype' => 'multipart/form-data' )) !!}
										<div class="form-group">
											<label for="namaAgen" class="control-label">ID Agen</label>
												<select class="form-control form-control-sm" id="idAgenPenyalur" name="idAgen">
													<option value=''> Pilih ID Agen </option>
													@foreach($agen as $agen)
														<option value='{{$agen->idAgen}}'> {{$agen->idAgen}} </option>
													@endforeach
												</select>
										</div>	
										<div class="form-group">
											<label for="namaPenyalur" class="control-label">Nama Agen</label>
												<select class="form-control form-control-sm" id="idAgenPenyalur" name="namaPenyalur">
													<option value=''> Pilih Nama Penyalur </option>
													@foreach($penyalur as $penyalur)
														<option value='{{$agen->idAgen}}'> {{$penyalur->namaPenyalur}} </option>
													@endforeach
												</select>
										</div>
										<div class="form-group">
											{!! Form::label('Tanggal', 'Tanggal', ['class' => 'control-label']) !!}
											{!! Form::text('tanggal', old('tanggal',$distribusiEdit->tanggal), ['class' => 'form-control form-control-sm datepicker' . ( $errors->has('tanggal') ? ' is-invalid' : '' ),'placeholder' => 'Masukan Tanggal', 'autofocus', 'required', 'readonly']) !!}
										</div>
										<div class="form-group">
											{!! Form::label('Kuota', 'Kuota', ['class' => 'control-label']) !!}
											{!! Form::text('realisasi', old('realisasi',$distribusiEdit->realisasi), ['class' => 'form-control form-control-sm' . ( $errors->has('realisasi') ? ' is-invalid' : '' ),'placeholder' => 'Masukan Realisasi', 'autofocus', 'required']) !!} 
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
									<i class='fas fa-truck-moving'></i>
									Data Distribusi
								</div>
								<div class="card-body">
									<table class="table table-sm table-bordered table-hover text-center data">
										<thead>
											<tr>
												<th scope="col">ID Agen</th>
												<th scope="col">Nama Agen</th>
												<th scope="col">Tanggal</th>
												<th scope="col">Kuota</th>
												<th scope="col">Pilihan</th>
											</tr>
										</thead>
										<tbody>
											@foreach($distribusi as $distribusi)
											<tr>
												<td scope="row">{{$distribusi->idAgen}}</td>
												<td>{{$distribusi->namaPenyalur}}</td>
												<td>{{$distribusi->tanggal}}</td>
												<td>{{$distribusi->realisasi}}</td>
												<td>
													<a href="{{route('distribusi.edit', $distribusi)}}" class="btn btn-outline-info btn-sm">
														<i class='far fa-edit'></i>
														Edit
													</a>
													{{('|')}}
													<a href="{{route('distribusi.hapus', $distribusi)}}" class="btn btn-outline-danger btn-sm">
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
		</div>
	</div>
@stop

@section('footer')
	<div id="footer">
		<p>&copy; 2019 | Framework Programming Poltek Tegal</p>
	</div>
@stop