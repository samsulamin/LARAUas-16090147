@extends('templatePenyalur')

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
						<a href="{{url('penyalurDistribusi')}}"href="" class="list-group-item list-group-item-action">
							<i class='fas fa-truck-moving'></i>
							Data Distribusi
						</a>
					</ul>
				</div>
				<div class="col-sm-10">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
							<li class="breadcrumb-item"><a href="{{url('penyalurData')}}">Data</a></li>
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
									<form>
										<div class="form-group">
											<label for="namaPenyalur" class="control-label">Nama Penyalur</label>
											<input type="text" class="form-control" id="namaPenyalur" name="namaPenyalur" placeholder="Nama Penyalur">
										</div>
										<div class="form-group">
											<label for="tanggal" class="control-label">Tanggal</label>
											<input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
										</div> 
										<div class="form-group">
											<label for="realisasi" class="control-label">Realisasi</label>
											<input type="text" class="form-control" id="realisasi" name="realisasi" placeholder="Realisasi">
										</div>
										<hr>
										<button type="submit" class="btn btn-outline-success btn-sm">
											<i class='fas fa-ambulance'></i>
											Simpan
										</button>
									</form>							
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
									<table class="table table-bordered text-center">
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
												<th scope="row">1</th>
												<td>Mark</td>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
												<td><button type="button" class="btn btn-outline-danger btn-sm">
														<i class='far fa-trash-alt'></i>
														Hapus
													</button>
												</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Jacob</td>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
												<td>
													<button type="button" class="btn btn-outline-danger btn-sm">
														<i class='far fa-trash-alt'></i>
														Hapus
													</button>
												</td>
											</tr>
											<tr>
												<th scope="row" colspan="4" class="text-right">Sub Total</th>
												<td>122</td>
												<td></td>
											</tr>
											<tr>
												<th scope="row" colspan="4" class="text-right">Total</th>
												<td>300</td>
												<td></td>
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