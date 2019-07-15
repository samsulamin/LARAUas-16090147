<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
		<a class="navbar-brand" href="{{url('dataAgen')}}">Monitoring Distribusi Gas LPG 3KG</a>
	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item">
				<a class="nav-link" href="{{url('dataAgen')}}"><i style='font-size:18px' class='fas'>&#xf015;</i> Home </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('dataAgen')}}"><i style='font-size:18px' class='fas'>&#xf49e;</i> Data </a>
			</li>	
			</li>			
		</ul>
		<ul class="nav navbar-nav navbar-right">	
			<li class="nav-item">
				<a class="nav-link" href="#"><i style='font-size:18px' class="fa fa-user"></i> {{auth()->user()->nama}}</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('logout')}}"><i style='font-size:18px' class="fa fa-unlock-alt"></i> Logout</a>
			</li>
		</ul>	
	</div>
</nav>
