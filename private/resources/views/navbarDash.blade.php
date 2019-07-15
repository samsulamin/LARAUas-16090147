<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
		<a class="navbar-brand" href="{{url('/')}}">Monitoring Distribusi Gas LPG 3KG</a>
	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item">
				<a class="nav-link" href="{{url('')}}"><i style='font-size:18px' class='fas'>&#xf015;</i> Home </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('')}}"><i style='font-size:18px' class='fas'>&#xf49e;</i> Data </a>
			</li>	
			<li class="nav-item">
				<a class="nav-link" href="{{url('peta')}}"><i style='font-size:18px' class='fas'>&#xf200;</i> Peta </a>
			</li>			
		</ul>
		<ul class="nav navbar-nav navbar-right">		
			<li class="nav-item">
				<a class="nav-link" href="{{url('')}}"><i style='font-size:18px' class='fas'>&#xf0c6;</i> Tentang Kami</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('/sign')}}"><i style='font-size:18px' class="fa fa-unlock-alt"></i> Login</a>
			</li>
		</ul>
	</div>
</nav>

<!--Modal Login->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-dark text-white">
				<h5 class="modal-title" id="exampleModalLabel">Silahkan Login</h5>
				<button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="username">Username</label>
							<input type="email" class="form-control" id="username" name="username" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" namae="password" placeholder="Enter Password">
					</div>
					<hr>
					<button type="submit" class="btn btn-outline-primary">
						<i style='font-size:18px' class="fa fa-unlock-alt"></i>
						Login
					</button>
				</form>	
			</div>
		</div>
	</div>
</div>	
<!--Modal Login-->