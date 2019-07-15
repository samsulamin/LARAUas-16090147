@extends('templateDash')

@section('main')
	<div class="container valign">
		<div class="card mx-auto d-block" style="width:22rem;">
			<div class="card-header bg-dark" style="color:#ffffff; ">
				Silahkan Login
			</div>
			<div class="card-body">
				<form action="{{url('/postlogin')}}" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="Username">Username</label>
						<input type="text" class="form-control" id="username" name="email" placeholder="Username" required>
					</div>
					<div class="form-group">
						<label for="Password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
					</div>
					<hr>
					<button type="submit" class="btn btn-outline-secondary">Login</button>
				</form>
			</div>
		</div>
	</div>
@stop

@section('footer')
	<div id="footer">
		<p>&copy; 2019 | Framework Programming Poltek Tegal</p>
	</div>
@stop