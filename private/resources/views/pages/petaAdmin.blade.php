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
						<li class="list-group-item bg-dark" style="color:#ffffff;">Peta</li>
						<a href="{{url('petaAdmin')}}" class="list-group-item list-group-item-action">
							<i style='font-size:18px' class='fas fa-map-marker-alt'></i>
							Peta Agen
						</a>
						<a href="{{url('petaPenyalur')}}" class="list-group-item list-group-item-action">
							<i style='font-size:18px' class='fas fa-map-marker'></i>
							Peta Penyalur
						</a>
					</ul>
				</div>
				<div class="col-sm-10">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
							<li class="breadcrumb-item"><a href="{{url('home')}}">Peta</a></li>
							<li class="breadcrumb-item active" aria-current="page">Peta Agen</li>
						</ol>
					</nav>
					<div id="mapku" style="height:550px"></div>	
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