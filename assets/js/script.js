const defaultLocation = [36.2358495, 58.822525]
const defaultZoom = 15
var map = L.map('map').setView(defaultLocation, defaultZoom);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiZWJpNjMiLCJhIjoiY2s5YXZxcHhxMGg3ZjNtcncxb2MzaXJ1YiJ9.Lx2GhIK7Laj63_O5ZsH6oQ',
}).addTo(map);
document.getElementById('map').style.setProperty('height', window.innerHeight + 'px');

//show and pin marker
//var marker = L.marker(defaultLocation).addTo(map);
//marker.bindPopup("موقعیت خودم").openPopup();

//var marker = L.marker([36.2258480, 58.812510]).addTo(map);
//marker.bindPopup("فیک");


//get view Bound information
//var northLine = map.getBounds().getNorth(); // khat shomali
//var southLine = map.getBounds().getSouth(); // khat jonobi
//var westLine = map.getBounds().getWest(); // khat gharbi
//var eastLine = map.getBounds().getEast(); // khat sharghi

//use Map Events (for show event use) zoomend is event

//map.on('zoomend', function() {
// alert(map.getBounds().getCenter());
//});
map.on('dblclick', function(event) {
    //(sample) alert(event.latlng.lat + " ," + event.latlng.lng);
    L.marker(event.latlng).addTo(map);
    $('.modal-overlay').fadeIn(500);
    $('#lat-display').val(event.latlng.lat);
    $('#lng-display').val(event.latlng.lng);
});

// set view in map 
//setTimeout(function() {
//  map.setView([33.778, 49.3388], defaultZoom);
// map.setView([northLine, westLine], 15)
//}, 5000);


// find Current Location (at first, use shekan.ir)
var current_position, current_accuracy;
map.on('locationfound', function(e) {
    // if position defind.then the existing position
    if (current_position) {
        map.removeLayer(current_position);
        map.removeLayer(current_accuracy);
    }
    var radius = e.accuracy / 2;
    current_position = L.marker(e.latlng).addTo(map)
        .bindPopup("You are within" + radius + "metres from this point").openPopup();
    current_accuracy = L.circle(e.latlng, radius).addTo(map);
});
map.on('locationerror', function(e) {
    alert(e.message);
});
//wrap map.locate in a function
//function locate() {
//   map.locate({ setView: true, maxZoom: defaultZoom });
//};
//cal locate everndsy 5 seco
//setInterval(locate, 5000);