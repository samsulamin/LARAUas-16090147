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
							<li class="list-group-item bg-dark" style="color:#ffffff;">Tentang Kami</li>
							<a href="{{url('penyalurAbout')}}" class="list-group-item list-group-item-action">
								<i class='fas fa-paperclip'></i>
								Tentang Kami
							</a>
						</ul>
					</div>
					<div class="col-sm-10">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
							</ol>
						</nav>

						<div class="card">
							<div class="card-header">
								<i class='fas fa-paperclip'></i>
								Tentang Kami
							</div>
							<div class="card-body">
								<p>About Agen Program Sarjana Terapan Teknik Informatika Politeknik Harapan Bersama Kota Tegal.</p>
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