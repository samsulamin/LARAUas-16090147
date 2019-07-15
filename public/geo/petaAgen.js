
var southWes 	=  	L.latLng(109.0926696854, -6.9093640559),
	northEas	=	L.latLng(109.1798736649, -6.8311176894),
	maxBoundingBox = L.latLngBounds(southWes, northEas);
	
var googleStreet = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
	maxBounds: maxBoundingBox,
	minZoom: 11,
	maxZoom: 20,
	subdomains:['mt0','mt1','mt2','mt3']
});

var googleHybri = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
	maxBounds: maxBoundingBox,
	minZoom: 11,
	maxZoom: 20,
	subdomains:['mt0','mt1','mt2','mt3']
});

var googleSate = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
	maxBounds: maxBoundingBox,
	minZoom: 11,
	maxZoom: 20,
	subdomains:['mt0','mt1','mt2','mt3']
});

openStreetMymap = new L.tileLayer('http://www.openstreetmap.org/copyright',{
	maxZoom:20,
	subdomains:['mt0','mt1','mt2','mt3']
});

var mymap = L.map('mapku',{
	zoom: 13,
	center : [-6.867539, 109.137872],
	layers: [googleHybri],
	minZoom: 12,
	maxZoom: 18,
	zoomControl: true,
	attributionControl: false
});

mymap.setMaxBounds([[-6.9093640559, 109.0926696854],[ -6.8311176894, 109.1798736649]]);

var baseMaps = {
	"Open Street Map":openStreetMymap,
	"Google Street": googleStreet,
	"Google Hybrid": googleHybri,
	"Google Satellite": googleSate
	
};

L.control.layers(baseMaps).addTo(mymap);

var myStyle = {
	color  : "#28C474",
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
var jsonTest = new L.GeoJSON.AJAX(["public/geo/kecamatan.geojson"],{onEachFeature:popUp,style: myStyle}).addTo(mymap);
