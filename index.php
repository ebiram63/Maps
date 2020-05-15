<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps</title>
    <link rel="stylesheet" href="assets/css/css.css<?= "?v=" . rand(99,999999)?>"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
     />
     <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   ></script>
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

    <script src="assets/js/script.js<?= "?v=" . rand(99,999999)?>"></script>
</body>
</html>
