@extends('templatePenyalur')

@section('main')
	<br>
	<br>
	<br>
	<div id="penyalur">
		<div class="container-fluid">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
					<li class="breadcrumb-item"><a href="{{url('index')}}">Data</a></li>
					<li class="breadcrumb-item active" aria-current="page">Data Penyalur</li>
				</ol>
			</nav>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-header">
								Tambah Data Penyalur
							</div>
							<div class="card-body">
								<form>
									<div class="form-group row">
										<label for="namaAgen" class="col-sm-2 control-label">Nama Agen</label>
										<div class="col-sm-10" >
											<select class="form-control" id="namaAgen" name="namaAgen">
												<option>Agen 1</option>
												<option>Agen 2</option>
												<option>Agen 3</option>
											</select>
										</div>									
									</div>									
									<div class="form-group row">
										<label for="namaAgen" class="col-sm-2 control-label">ID Penyalur</label>
										<div class="col-sm-10" >
											<input type="text" class="form-control" id="iDPenyalur" name="iDPenyalur" placeholder="ID Penyalur">
										</div>
									</div> 
									<div class="form-group row">
										<label for="alamatAgen" class="col-sm-2 control-label">Nama Penyalur</label>
										<div class="col-sm-10" >
											<input type="text" class="form-control" id="namaPenyalur" name="namaPenyalur" placeholder="Nama Penyalur">
										</div>
									</div>
									<div class="form-group row">
										<label for="usernameAgen" class="col-sm-2 control-label">Alamat Penyalur</label>
										<div class="col-sm-10" >
											<input type="text" class="form-control" id="alamatPenyalur" name="alamatPenyalur" placeholder="Alamat Penyalur">
										</div>
									</div>
									<div class="form-group row">
										<label for="usernameAgen" class="col-sm-2 control-label">Kuota</label>
										<div class="col-sm-10" >
											<input type="text" class="form-control" id="kuota" name="kuota" placeholder="Kuota">
										</div>
									</div>
									<hr>
									<button type="submit" class="btn btn-success">Tambah Penyalur</button>
								</form>							
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card">
							<div class="card-header">
								Data Penyakur
							</div>
							<div class="card-body">
								<table class="table table-bordered text-center">
									<thead>
										<tr>
											<th scope="col">ID Penyalur</th>
											<th scope="col">ID Agen</th>
											<th scope="col">Nama Penyalur</th>
											<th scope="col">Alamat Agen</th>
											<th scope="col">Kuota</th>
											<th scope="col">Edit</th>
											<th scope="col">Deaktivasi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
											<td>Otto</td>
											<td><button type="button" class="btn btn-warning">Edit</button></td>
											<td><button type="button" class="btn btn-danger">Deaktivasi</button></td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
											<td>Thornton</td>
											<td><button type="button" class="btn btn-warning">Edit</button></td>
											<td><button type="button" class="btn btn-danger">Deaktivasi</button></td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>Larry the Bird</td>
											<td>Thornton</td>
											<td>@twitter</td>
											<td>Thornton</td>
											<td><button type="button" class="btn btn-warning">Edit</button></td>
											<td><button type="button" class="btn btn-danger">Deaktivasi</button></td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
											<td>Thornton</td>
											<td><button type="button" class="btn btn-warning">Edit</button></td>
											<td><button type="button" class="btn btn-danger">Deaktivasi</button></td>
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
@stop

@section('footer')
	<div id="footer">
		<p>&copy; 2019 | Framework Programming Poltek Tegal</p>
	</div>
@stop