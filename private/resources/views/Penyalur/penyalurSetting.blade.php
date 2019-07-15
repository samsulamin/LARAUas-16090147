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
							<li class="list-group-item bg-dark" style="color:#ffffff;">Pengaturan</li>
							<a href="{{('penyalurSetting')}}" class="list-group-item list-group-item-action">
								<i style='font-size:18px' class='fas'>&#xf085;</i>
								Ganti Password
							</a>
						</ul>
					</div>
					<div class="col-sm-10">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('penyalurHome')}}">Home</a></li>
								<li class="breadcrumb-item"><a href="{{url('penyalurSetting')}}">Pengaturan</a></li>
								<li class="breadcrumb-item active" aria-current="page">Ganti Password</li>
							</ol>
						</nav>
						<div class="card">
							<div class="card-header">
								<i style='font-size:18px' class='fas'>&#xf085;</i>
								Ganti Password
							</div>
							<div class="card-body">
								<form>				
									<div class="form-group row">
										<label for="passLama" class="col-sm-2 control-label">Password Lama</label>
										<div class="col-sm-10" >
											<input type="text" class="form-control" id="passLama" name="passLama" placeholder="Password Lama">
										</div>
									</div>
									<div class="form-group row">
										<label for="passBaru" class="col-sm-2 control-label">Password Baru</label>
										<div class="col-sm-10" >
											<input type="text" class="form-control" id="passBaru" name="passBaru" placeholder="Password Baru">
										</div>
									</div>
									<div class="form-group row">
										<label for="confirmPass" class="col-sm-2 control-label">Konfirmasi Password</label>
										<div class="col-sm-10" >
											<input type="text" class="form-control" id="confirmPass" name="confirmPass" placeholder="Konfirmasi Password">
										</div>
									</div>
									<hr>
									<button type="submit" class="btn btn-outline-success btn-sm">
										<i class='fas fa-wrench'></i>
										Ganti Password
									</button>
								</form>							
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