<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps</title>
    <link rel="stylesheet" href="assets/css/css.css"/>
    <link rel="stylesheet" href="assets/css/leaflet.css"/>
    <script src="assets/js/leaflet.js"></script>
    <script src="assets/js/main.js"></script>
</head>
<body>
    <div class="main">
        <div class="head">
            <input type="text" id="search" placeholder="دنبال کجا میگردی؟"/>
        </div>
    <div class="mapContainer">
        <div id="map" style="width: 100%; height: 700px"></div>
    </div>
    </div>
    <script>
    var map = L.map('map').setView([36.2358495, 58.822525], 13);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiZWJpNjMiLCJhIjoiY2s5YXZxcHhxMGg3ZjNtcncxb2MzaXJ1YiJ9.Lx2GhIK7Laj63_O5ZsH6oQ',
}).addTo(map);
document.getElementById('map').style.setProperty('height',window.innerHeight + 'px');
</script>
</body>
</html>
