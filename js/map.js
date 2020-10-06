const tilesProvider="	https://{s}.tile.openstreetmap.org/${z}/${x}/${y}.png";

let myMap = L.map('myMap').setView([13.0929498, -86.3585352], 14)

L.tileLayer(`https://maps.wikimedia.org/osm-intl/{z}/{x}/{y}.png`, {
	maxZoom: 16,
	minZoom:13,
	center: [13.0929498, -86.3585352],
}).addTo(myMap);

/*Icono de Bomberos */
let icoMarker= L.icon({
	iconUrl:'./assets/img/icomapa/bomberos.png',
	iconSize: [40,40],
	iconAnchor:[30,60],
})
let icoMarker2= L.icon({
	iconUrl:'./assets/img/icomapa/policia.png',
	iconSize: [40,40],
	iconAnchor:[30,60],
})
let icoMarker4= L.icon({
	iconUrl:'./assets/img/icomapa/hospital.png',
	iconSize: [40,40],
	iconAnchor:[30,60],
})
let icoMarker5= L.icon({
	iconUrl:'./assets/img/icomapa/centroSalud.png',
	iconSize: [40,40],
	iconAnchor:[30,60],
})
let icoMarker6= L.icon({
	iconUrl:'./assets/img/icomapa/negocios.png',
	iconSize: [40,40],
	iconAnchor:[30,60],
})

//Bomberos
let marker = L.marker ([13.0921998, -86.3556761],{icon:icoMarker}).addTo(myMap).bindPopup('<img src="./assets/img/Iconos/bomberos.png" style="width:100%;"></img><p>Benemérito Cuerpo de Bomberos</p>');
//Policia
let marker2 = L.marker ([13.0931847, -86.3572614],{icon:icoMarker2}).addTo(myMap).bindPopup('<img src="./assets/img/Iconos/1200px-National_Police_of_Nicaragua_(Emblem).svg.png" style="width:100%;"></img><p>Policia de Tránsito</p>');
//Policia
let marker3 = L.marker ([13.08432, -86.3524982],{icon:icoMarker2}).addTo(myMap).bindPopup('<img src="./assets/img/Iconos/1200px-National_Police_of_Nicaragua_(Emblem).svg.png" style="width:100%;"></img><p>Policia Nacional</p>');
//Hospital
let marker4 = L.marker ([13.0661222, -86.3506186],{icon:icoMarker4}).addTo(myMap).bindPopup('<img src="./assets/img/Iconos/Ministerio-de-Salud.png" style="width:100%;"></img><p>Hopital San Juan de Dios</p>');
//Centro de Salud
let marker5 = L.marker ([13.0848172, -86.3551769],{icon:icoMarker5}).addTo(myMap).bindPopup('<img src="./assets/img/Iconos/Ministerio-de-Salud.png" style="width:100%;"></img><p>Centro de Salud <br> Leonel Rugama</p>');
//CSI
let marker6 = L.marker ([13.0878162, -86.3545342],{icon:icoMarker6}).addTo(myMap).bindPopup('<img src="./assets/img/Iconos/logocsi.png" style="width:100%;"></img><p>Jacvideo <br> puedes visitarnos si sufres <br> de un tipo de violencia</p>');
//JackVideo
let marker7 = L.marker ([13.087847, -86.3556803],{icon:icoMarker6}).addTo(myMap).bindPopup('<img src="./assets/img/Iconos/jac.jpg" style="width:100%;"></img><p>Centro Soluciones <br> Informaticas Jacvideo <br> puedes visitarnos si sufres <br> de un tipo de violencia</p>');

