<!DOCTYPE html>
<html>
<head>
	<meta charseet="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Monitoring Distribusi Gas LPG 3KG</title>
	<!--<link rel="stylesheet" type="text/css" href="{{asset('public/bootstrap_4_3_1/css/bootstrap.min.css')}}">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="crossorigin=""/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https:////cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
	<link rel="icon" type="image/png" href="{{asset('public/img/elpiji.png')}}">
	<style>
		#chartdiv {
		  width: 100%;
		  height: 500px;
		}
	</style>
</head>
<body>
	
	{{-- memasukan navbar--}}
	@include('navbar')
	{{-- Memanggil halaman section main--}}
	@yield('main')	
	{{-- --}}
	@yield('footer')
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>
	<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>	
	<script type="text/javascript" src="{{asset('public/js/html5shiv.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/respond.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/leaflet.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.data').DataTable();
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.dataPenyalur').DataTable();
		});
	</script>
    <script>
        $('.datepicker').datepicker({
			format: 'yyyy/mm/dd',
            uiLibrary: 'bootstrap4'
        });
    </script>
	<!--map digitasi agen -->
	<script>	
		function addMapPicker() {
			var southWest 	=  	L.latLng(109.0926696854, -6.9093640559),
				northEast	=	L.latLng(109.1798736649, -6.8311176894),
				maxBoundingBox = L.latLngBounds(southWest, northEast);
				
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
	    	var mapCenter = [-6.867539, 109.137872];
			var map = L.map('mapid', {center : mapCenter, zoom : 13, layers: [googleHybrid],});
			
			map.setMaxBounds([[-6.9093640559, 109.0926696854],[ -6.8311176894, 109.1798736649]]);
			
			var baseMaps = {
				"Open Street Map":openStreetMap,
				"Google Street": googleStreets,
				"Google Hybrid": googleHybrid,
				"Google Satellite": googleSat
				
			};
			
			L.control.layers(baseMaps).addTo(map);
			
			var myStyle = {
				color  : "yellow",
				fill : false,
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
			var jsonTest = new L.GeoJSON.AJAX(["{{asset('public/geo/kecamatan.geojson')}}"],{onEachFeature:popUp,style: myStyle}).addTo(map);
			var marker = L.marker(mapCenter).addTo(map);
			var updateMarker = function(lat, lng) {
				marker
					.setLatLng([lat, lng])
					.bindPopup("Your location :  " + marker.getLatLng().toString())
					.openPopup();
				return false;
			};
			map.on('click', function(e) {
				$('#latInput').val(e.latlng.lat);
				$('#lngInput').val(e.latlng.lng);
				updateMarker(e.latlng.lat, e.latlng.lng);
				});
				
				var updateMarkerByInputs = function() {
				return updateMarker( $('#latInput').val() , $('#lngInput').val());
			}
			$('#latInput').on('input', updateMarkerByInputs);
			$('#lngInput').on('input', updateMarkerByInputs);
		}
		$(document).ready(function() {
			addMapPicker();
		});
	</script>
	

	<!--map digitasi Penyalur -->
</body>
</html>