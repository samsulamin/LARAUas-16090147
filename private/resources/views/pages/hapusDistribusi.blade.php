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
							<li class="breadcrumb-item active" aria-current="page">Hapus Data Distribusi</li>
						</ol>
					</nav>
					@if(session('sukses'))
					<div class="alert alert-danger" role="alert">
						{{session('sukses')}}
					</div>
					@endif
					<div class="card">
						<div class="card-header">
							<i class='fas fa-user-plus'></i>
							Deaktivasi Agen
						</div>
						<div class="card-body text-center">
							<h5>Apakah Akan Deaktivasi</h5>
							 {!! Form::open(array('route' => ['distribusi.hapusData',$distribusiHapus],'method'=>'POST', 'enctype' => 'multipart/form-data' )) !!}

								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th scope="col">ID Agen</th>
											<th scope="col">Nama Agen</th>
											<th scope="col">Tanggal Distribusi</th>
											<th scope="col">Kuota</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{{$distribusiHapus->idAgen}}</td>
											<td>{{$distribusiHapus->namaPenyalur}}</td>
											<td>{{$distribusiHapus->tanggal}}</td>
											<td>{{$distribusiHapus->realisasi}}</td>
										</tr>
									</tbody>
								</table>
								<a href="{{url('dataAgen')}}" class="btn btn-outline-info btn-sm">
									<i class='far fa-edit'></i>
									Batal
								</a>
								{{('|')}}
								<button type="submit" class="btn btn-outline-danger btn-sm">
									<i class='far fa-trash-alt'></i>
									Hapus
								</button>
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