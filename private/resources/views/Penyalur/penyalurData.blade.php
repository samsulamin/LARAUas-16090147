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
								<li class="breadcrumb-item active" aria-current="page">Data</li>
							</ol>
						</nav>
						<div class="col-sm-4">
							<div class="card mb-3">
								<div class="card-body">
									<h5 class="card-title">Data Distribusi</h5>
								</div>
								<div class="card-header text-right">
									<a href="{{url('penyalurDistribusi')}}" class="list-group-item list-group-item-action text-white bg-dark">
										Lihat Detail
										<i class='fas fa-angle-double-right'></i>
									</a>
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