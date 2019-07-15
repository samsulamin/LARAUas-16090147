@extends('templateAgen')

@section('main')
	<br>
	<br>
	<div id="homepage">
		<!--<img src="{{asset('public/img/gas.jpg')}}" class="img-fluid" alt="Responsive image">-->
		<div id='carousel' class='carousel slide' data-ride='carousel'>
			<ol class='carousel-indicators'>
				<li data-target='#carousel' data-slide-to='0' class='active'></li>
				<li data-target='#carousel' data-slide-to='1'></li>
				<li data-target='#carousel' data-slide-to='2'></li>
			</ol>
			<div class='carousel-inner' role='listbox'>
				<div class='carousel-item active'>
					<picture>
						<source srcset='https://i.imgur.com/ojXYlJv.jpg' media='(min-width: 1400px)'>
						<source srcset='https://i.imgur.com/nOJn5vs.jpg' media='(min-width: 769px)'>
						<source srcset='https://i.imgur.com/Dgj0LpX.jpg' media='(min-width: 577px)'>
						<!--<source srcset='https://i.imgur.com/vnrrXrs.jpg' media='(min-width: 577px)'>-->
						<img srcset='https://i.imgur.com/Dgj0LpX.jpg' alt='responsive image' class='d-block img-fluid'>
					</picture>
				</div>
				<div class='carousel-item'>
					<picture>
						<source srcset='https://i.imgur.com/9msPSSj.jpg' media='(min-width: 1400px)'>
						<source srcset='https://i.imgur.com/qwShdDI.jpg' media='(min-width: 769px)'>
						<source srcset='https://i.imgur.com/yIIuwT8.jpg' media='(min-width: 577px)'>
						<!--<source srcset='https://i.imgur.com/GQ1G534.jpg' media='(min-width: 577px)'>-->
						<img srcset='https://i.imgur.com/yIIuwT8.jpg' alt='responsive image' class='d-block img-fluid'>
					</picture>
				</div>
				<div class='carousel-item'>
					<picture>
						<source srcset='https://i.imgur.com/CBzSnfs.jpg' media='(min-width: 1400px)'>
						<source srcset='https://i.imgur.com/3NJpa2r.jpg' media='(min-width: 769px)'>
						<source srcset='https://i.imgur.com/08L3qT3.jpg' media='(min-width: 577px)'>
						<!--<source srcset='https://i.imgur.com/pyEV49d.jpg' media='(min-width: 577px)'>-->
						<img srcset='https://i.imgur.com/08L3qT3.jpg' alt='responsive image' class='d-block img-fluid'>
					</picture>
				</div>
			</div>
			<a class='carousel-control-prev' href='#carousel' role='button' data-slide='prev'>
				<span class='carousel-control-prev-icon' aria-hidden='true'></span>
				<span class='sr-only'>Previous</span></a><a class='carousel-control-next' href='#carousel' role='button' data-slide='next'>
				<span class='carousel-control-next-icon' aria-hidden='true'></span>
				<span class='sr-only'>Next</span>
			</a>
		</div>		
		<br>
		<br>
		<div class="text-center">
			<div class="container">
				<h4>
					<i class='fas fa-grip-lines'></i>
					MONITORING DISTRIBUSI GAS LPG 3KG
					<i class='fas fa-grip-lines'></i>
				</h4>
				<hr>
				<div class="row">
					<div class="col-sm-4">
						<div class="card">
							<div class="card-body">
								<img src="{{asset('public/img/elpiji.png')}}" class="img-fluid" alt="Responsive image" style="height:200px; width:auto;">
								<hr>
								<h5 class="card-title">Special title treatment</h5>
								<p>LPG adalah singkatan dari liquefied petroleum gas yang berarti gas minyak bumi yang dicairkan. 
									LPG merupakan campuran dari berbagai unsur hidrokarbon yang berasal dari minyak mentah dan natural
									gas serta komponen utamanya adalah propana (C3H8) dan butana (C4H10)
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
							<div class="card-body">
								<img src="{{asset('public/img/gasq.png')}}" class="img-fluid" alt="Responsive image" style="height:200px; width:auto;">
								<hr>
								<h5 class="card-title">LPG.?</h5>
								<p>LPG adalah singkatan dari liquefied petroleum gas yang berarti gas minyak bumi yang dicairkan. 
									LPG merupakan campuran dari berbagai unsur hidrokarbon yang berasal dari minyak mentah dan natural
									gas serta komponen utamanya adalah propana (C3H8) dan butana (C4H10)
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
							<div class="card-body">
								<img src="{{asset('public/img/sub-1.png')}}" class="img-fluid" alt="Responsive image" style="height:200px; width:auto;">
								<hr>
								<h5 class="card-title">LPG.?</h5>
								<p>LPG adalah singkatan dari liquefied petroleum gas yang berarti gas minyak bumi yang dicairkan. 
									LPG merupakan campuran dari berbagai unsur hidrokarbon yang berasal dari minyak mentah dan natural
									gas serta komponen utamanya adalah propana (C3H8) dan butana (C4H10)
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
@stop

@section('footer')
	<div id="footer">
		<p>&copy; 2019 | Framework Programming Poltek Tegal</p>
	</div>
@stop