<?php
  session_start();
  include "koneksi.php";
  $map = query("SELECT * FROM map ORDER BY id_map DESC");
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>COMBBIS | Map</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/mangrove.png" />

<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
<link rel="stylesheet" href="assets/css/animate.css" />
<link rel="stylesheet" href="assets/css/tiny-slider.css" />
<link rel="stylesheet" href="assets/css/glightbox.min.css" />
<link rel="stylesheet" href="assets/css/main.css" />
<link href="assets/css/map.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
</head>
<body>
<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

<div class="preloader">
<div class="preloader-inner">
<div class="preloader-icon">
<span></span>
<span></span>
</div>
</div>
</div>


<header class="header navbar-area" style="background-color: #051441; opacity: 0.8; height: 80px;">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12">
<div class="nav-inner">

<nav class="navbar navbar-expand-lg" style="height: 75px;">
<a class="" href="home.php">
<img src="assets/images/logo/mangrove.png"alt="Logo" style="width: 100px;">
</a>
<button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
<ul id="nav" class="navbar-nav ms-auto">
<li class="nav-item">
<a href="home.php" aria-label="Toggle navigation">Beranda</a>
</li>
<li class="nav-item">
<a href="about.php" aria-label="Toggle navigation">Sebaran</a>
</li>
<li class="nav-item">
<a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Informasi</a>
<ul class="sub-menu collapse" id="submenu-1-2">
<li class="nav-item"><a href="blog.php">Pengenalan</a>
</li>
<li class="nav-item"><a href="ekosistem.php">Ekosistem</a></li>
</ul>
</li>
<li class="nav-item">
<a href="map.php"  class="active" aria-label="Toggle navigation">Map</a>
</li>
</ul>
</div> 
<div class="button">
<a href="login.php" class="btn"><i class="lni lni-user" style="width:10px;"></i></a>
</div>
</nav>
</div>
</div>
</div> 
</div> 
</header>

<div id="peta" style="background: transparent; opacity: 0.9;">

</div>

<footer class="footer" style="margin-top: -80px;">
  <div class="copyright-area">
  <div class="container">
  <div class="inner-content">
  <div class="row">
  <div class="col-lg-5 col-md-6 col-12">
  <p class="copyright-text">© Ades Suryaningtias & Sulthan Izza Falqahi</p>
  </div>
  <div class="col-lg-5 col-md-6 col-12">
      <a href="https://bit.ly/LAYOUTSEBARANMANGROVE"><button type="submit" class="btn btn-secondary" style="margin-left:27px; margin-top:-10px;" >Unduh Layout Peta</button></a>
  </div>
  <div class="col-lg-2 col-md-6 col-12">
  <div class="single-footer f-about">
  <ul class="social">
  <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
  <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
  <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  </footer>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/count-up.min.js"></script>
<script src="assets/js/maincry.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>  
  <script src="plugins/leaflet-providers.js"></script>
  <script src="geojson/ndvibang.js"></script>
  <script src="geojson/ndvibel.js"></script>
  <script src="geojson/mangbang.js"></script>
  <script src="geojson/mangbel.js"></script>
  <script src="geojson/defbang.js"></script>
  <script src="geojson/defbel.js"></script>
  <script src="geojson/ndviatas.js"></script>
  <script src="geojson/ndvibawah.js"></script>
  <script src="geojson/defatas.js"></script>
  <script src="geojson/defbawah.js"></script>
  <script src="geojson/mangatas.js"></script>
  <script src="geojson/mangbawah.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js   "></script> 
  <script src="assets/js/table.js"></script>
  <script>

    var peta = L.map('peta').setView([-2.2800045689789443, 107.15236530441636], 8.5);
const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(peta);
const Esri_WorldImagry = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
});
const light = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

function getColor(d) {
return d == 3 ? '#4E6C50' :
  d == 2  ? '#A9AF7E' :
  d == 1  ? '#FCE700' : '#FCE700';
}
function style(feature) {
return {
  weight: 0,
  opacity: 0,
  color: 'green',
  dashArray: '3',
  fillOpacity: 10,
  fillColor: getColor(feature.properties.gridcode)
};
}

const ndvi = L.layerGroup();
L.geoJSON(ndvibang, {style: style}).addTo(ndvi);
L.geoJSON(ndvibel, {style: style}).addTo(ndvi);
L.geoJSON(ndvibawah, {style: style}).addTo(ndvi);
L.geoJSON(ndviatas, {style: style}).addTo(ndvi);

var legend = L.control({ position: "bottomright" })
legend.onAdd = function(map) {
var div = L.DomUtil.create("div", "legend");
div.innerHTML += "<h4>Kesehatan Mangrove</h4>";
div.innerHTML += '<i style="background: #4E6C50"></i><span>Sangat Sehat (≥0.66)</span><br>';
div.innerHTML += '<i style="background: #A9AF7E"></i><span>Sehat (0.33-0.66)</span><br>';
div.innerHTML += '<i style="background: #FCE700"></i><span>Cukup Sehat (0-0.33)</span><br>';

return div;
};

legend.addTo(peta);

const mang = L.layerGroup();
L.geoJSON(mangbang, {color: '#54B435'}).addTo(mang);
L.geoJSON(mangbel, {color: '#54B435'}).addTo(mang);
L.geoJSON(mangatas, {color: '#54B435'}).addTo(mang);
L.geoJSON(mangbawah, {color: '#54B435'}).addTo(mang);

const def = L.layerGroup();
L.geoJSON(defbang,  {color: '#CF0A0A'}).addTo(def);
L.geoJSON(defbel,  {color: '#CF0A0A'}).addTo(def);
L.geoJSON(defatas,  {color: '#CF0A0A'}).addTo(def);
L.geoJSON(defbawah,  {color: '#CF0A0A'}).addTo(def);

const geo = L.layerGroup();

var baseLayers = {
" Open Street Map": tiles,
" World Imagery": Esri_WorldImagry,
"Light Map": light
};

var overlays = {
" Mangrove": mang,
" Kesehatan Mangrove": ndvi,
" Deforestasi": def,
" Data": geo
};

L.control.layers(baseLayers, overlays).addTo(peta);

<?php
        $i = 1;
        foreach ($map as $row) :

            ?>
var table = '<table><tr style="font-family:oregon;"><td>Pulau</td><td>:</td> <td> <?php echo $row["pulau"]; ?></td></tr>';
table += '<tr style="font-family:oregon;"><td>Kecamatan</td><td>:</td> <td> <?php echo $row["desa"]; ?></td></tr></table><center><a href="detail.php?id_map=<?= $row["id_map"]; ?>" class="btn btn-success btn-sm" style="color:black; font-size:12px; font-family:oregon;"><i class="lni lni-link"></i> Detail</a></center>';
var geoJSON =  L.geoJSON([<?php echo $row["koordinat"]; ?>], {
  style: {
    color: 'white',
    dashArray: '1',
    lineCap: 'butt',
    lineJoin: 'miter',
    fillColor: 'green',
    fillOpacity: 0.8,
  },
}).addTo(geo);
geoJSON.bindPopup(table);

<?php
              $i++;
            endforeach; 
          ?>
</script>
</body>
</html>