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
							<li class="breadcrumb-item"><a href="{{url('index')}}">Data</a></li>
							<li class="breadcrumb-item active" aria-current="page">Data Distribusi</li>
						</ol>
					</nav>
					<div class="row">
						<div class="col-sm-4">
							<div class="card">
								<div class="card-header">
									<i class='fas fa-ambulance'></i>
									Tambah Data Distribusi
								</div>
								<div class="card-body">
									{!! Form::open(array('method'=>'POST', 'enctype' => 'multipart/form-data' )) !!}
										<div class="form-group">
											{!! Form::label('ID Agen', 'ID Agen', ['class' => 'control-label']) !!}
											{!! Form::text('idAgen', '', ['class' => 'form-control form-control-sm datepicker' . ( $errors->has('idAgen') ? ' is-invalid' : '' ),'placeholder' => 'Masukan Tanggal', 'autofocus', 'required', 'readonly']) !!}
										</div>	
										<div class="form-group">
											<label for="namaPenyalur" class="control-label">Nama Agen</label>
												<select class="form-control form-control-sm" id="idAgenPenyalur" name="namaPenyalur">
													<option value=''> Pilih Nama Penyalur </option>
												</select>
										</div>
										<div class="form-group">
											{!! Form::label('Tanggal', 'Tanggal', ['class' => 'control-label']) !!}
											{!! Form::text('tanggal', '', ['class' => 'form-control form-control-sm datepicker' . ( $errors->has('tanggal') ? ' is-invalid' : '' ),'placeholder' => 'Masukan Tanggal', 'autofocus', 'required', 'readonly']) !!}
										</div>
										<div class="form-group">
											{!! Form::label('Kuota', 'Kuota', ['class' => 'control-label']) !!}
											{!! Form::text('realisasi', '', ['class' => 'form-control form-control-sm' . ( $errors->has('realisasi') ? ' is-invalid' : '' ),'placeholder' => 'Masukan Realisasi', 'autofocus', 'required']) !!} 
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
									<table class="table table-bordered table-hover text-center">
										<thead class="text-center">
											<tr>
												<th scope="col">No.</th>
												<th scope="col">ID Agen</th>
												<th scope="col">ID Penyalur</th>
												<th scope="col">Tanggal</th>
												<th scope="col">Realisasi</th>
												<th scope="col">Hapus</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">2</th>
												<td>Jacob</td>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
												<td>
													<button type="button" class="btn btn-outline-info btn-sm">
														<i class='far fa-edit'></i>
														Edit
													</button>
													<button type="button" class="btn btn-outline-danger btn-sm">
														<i class='far fa-trash-alt'></i>
														Hapus
													</button>
												</td>
											</tr>
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