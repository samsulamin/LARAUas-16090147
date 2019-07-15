<!DOCTYPE html>
<html>
<head>
	<meta charseet="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Monitoring Distribusi Gas LPG 3KG</title>
	<!--<link rel="stylesheet" type="text/css" href="{{asset('public/bootstrap_4_3_1/css/bootstrap.min.css')}}">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
	<link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.2.14/dist/esri-leaflet-geocoder.css" integrity="sha512-v5YmWLm8KqAAmg5808pETiccEohtt8rPVMGQ1jA6jqkWVydV5Cuz3nJ9fQ7ittSxvuqsvI9RSGfVoKPaAJZ/AQ==" crossorigin="">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css"/>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/leaflet.groupedlayercontrol.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<link rel="icon" type="image/png" href="{{asset('public/img/elpiji.png')}}">
	<style>
		.valign {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
		}
		#chartdiv {
		  width: 100%;
		  height: 500px;
		}
		#mapid { 
			height:760px;;
		}
		#mapSearchContainer{
			position:fixed;
			top:20px;
			right: 40px;
			height:30px;
			width:180px;
			z-index:110;
			font-size:10pt;
			color:#5d5d5d;
			border:solid 1px #bbb;
			background-color:#f8f8f8;
		}
		.pointer{
			position:absolute;
			top:86px;
			left:60px;
			z-index:99999;
		}
		#basemaps-wrapper {
			position: fixed;
			top: 110px;
			right: 11px;
			z-index: 400;
			background: white;
			padding: 10px;
		}
		#basemaps {
			margin-bottom: 5px;
		}
	</style>
</head>
<body>
	
	{{-- memasukan navbar--}}
	@include('navbarDash')
	{{-- Memanggil halaman section main--}}
	@yield('main')	
	{{-- --}}
	@yield('footer')
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
	<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>
	<script type="text/javascript" src="{{asset('public/js/html5shiv.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/respond.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/leaflet.js')}}"></script>
	
	<script>
		
		var southWest 	=  	L.latLng(109.0926696854, -6.9093640559),
			northEast	=	L.latLng(109.1798736649, -6.8311176894),
			maxBoundingBox = L.latLngBounds(southWest, northEast)
			
		var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
			maxBounds: maxBoundingBox,
			minZoom: 11,
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
		});

		var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
			maxBounds: maxBoundingBox,
			minZoom: 11,
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
		});

		var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
			maxBounds: maxBoundingBox,
			minZoom: 11,
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
		});
		
		openStreetMap = new L.tileLayer('http://www.openstreetmap.org/copyright',{
			maxZoom:20,
			subdomains:['mt0','mt1','mt2','mt3']
		});

		var mymap = L.map('mapid',{
			zoom: 14,
			center : [-6.867539, 109.137872],
			layers: [googleHybrid],
			minZoom: 12,
			maxZoom: 18,
			zoomControl: true,
			attributionControl: false
		});
		
		mymap.setMaxBounds([[-6.9093640559, 109.0926696854],[ -6.8311176894, 109.1798736649]]);
		
		var baseMaps = {
			"Open Street Map":openStreetMap,
			"Google Street": googleStreets,
			"Google Hybrid": googleHybrid,
			"Google Satellite": googleSat
			
		};
		
		L.control.layers(baseMaps).addTo(mymap);
		
		var options = {
			position : 'topleft',
			draw : {
				polyline : false,
				polygon : false,
				circle : false,
				circlemarker : false,
				rectangle : false,
				marker : true
			},
			edit : false
		};
		
		var drawControl = new L.Control.Draw(options);
		mymap.addControl(drawControl);
		
		var myStyle = {
			color  : "yellow",
			//fill : false,
			weight : 2,
			opacity : 0.5
		};
		
		function popUp(f,l){
			var out = [];
			if (f.properties){
				//for(key in f.properties){
				//}
				out.push("Kecamatan : "+f.properties['kecamatan']);
				out.push("Kota : "+f.properties['kota']);
				l.bindPopup(out.join("<br />"));
			}
		}
		var jsonTest = new L.GeoJSON.AJAX(["{{asset('public/geo/kecamatan.geojson')}}"],{onEachFeature:popUp,style: myStyle}).addTo(mymap);
		
		@foreach($agen as $agen)
			var marker = L.marker([{{$agen->latitude}},{{$agen->longtitude}}]).addTo(mymap).bindPopup("<b>{{$agen->namaAgen}}</b>");
		@endforeach

		var popup = L.popup();	

		@foreach($penyalur as $penyalur)
			var marker = L.marker([{{$penyalur->latitude}},{{$penyalur->longtitude}}]).addTo(mymap).bindPopup("<b>{{$agen->namaPenyalur}}</b>");
		@endforeach

		var popup = L.popup();	

	</script>			
</body>
</html>