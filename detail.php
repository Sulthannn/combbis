<?php
  session_start();
  include "koneksi.php";
  
  $id_map = (int)$_GET['id_map'];

  $map = query("SELECT * FROM map WHERE id_map = $id_map")[0];
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link href="assets/css/peta.css" rel="stylesheet">
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


<header class="header navbar-area" style="background-color: #051441; opacity:0.8; height: 80px;">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12">
<div class="nav-inner">

<nav class="navbar navbar-expand-lg" style="height: 75px;">
<button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
<ul id="nav" class="navbar-nav ms-auto">
<li class="nav-item">
<img src="assets/images/logo/mangrove.png"alt="Logo" style="width: 100px; margin-left:70px;">
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

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="feature-box" style="text-align: start">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Detail Sebaran</h2>
                        </div>
                        <div class=" row my-5">
                    <div class="col-md-7">
                        <div class="mb-3">
                       <h5 style="color:black;" >Kecamatan</h5>
                       <p style="font-size:20px;" > <?= $map['desa']; ?></p>
                        </div><br>
                        <div class="mb-3">
                       <h5 style="color:black;" >Luas Mangrove (Ha)</h5>
                       <p style="font-size:20px;"> <?=  $map['luas']; ?></p>
                        </div><br>
                        <div class="mb-3">
                       <h5 style="color:black;" >Sangat Sehat Mangrove (Ha)</h5>
                       <p style="font-size:20px;"> <?=  $map['sangat']; ?></p>
                        </div><br>
                        <div class="mb-3">
                       <h5 style="color:black;" >Sehat Mangrove (Ha)</h5>
                       <p style="font-size:20px;"> <?=  $map['sehat']; ?></p>
                        </div><br>
                        <div class="mb-3">
                       <h5 style="color:black;" >Cukup Sehat Mangrove (Ha)</h5>
                       <p style="font-size:20px;"> <?=  $map['cukup']; ?></p>
                        </div><br>
                        <div class="mb-3">
                       <h5 style="color:black;" >Deforestasi (Ha)</h5>
                       <p style="font-size:20px;"> <?=  $map['def']; ?></p>
                        </div>
                        <br>
                        <hr>
                        <div class="mb-3">
                        <a href="about.php" class="btn btn-info" style="border-radius:20px; width:130px;" ><i class="lni lni-backward"></i> Kembali</a>
                        </div>
                        </div>

                        <div class="col-md-5">
                        <div class="mb-3">
                       <div id="peta" style="height:350px; width:400px; background: transparent; opacity: 0.9;" >
                       </div><hr>
                       <div class="mb-3">
                       <h5 style="color:black;" >Pulau</h5>
                        <p style="font-size:20px;" > <?=  $map['pulau']; ?></p>
                        </div> 
                        <div class="mb-3">
                       <h5 style="color:black;" >Koordinat/GeoJSON</h5>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class="lni lni-eye"></i> Lihat
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="lni lni-map"></i> Koordinat/GeoJSON</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?= $map['koordinat']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x"></i>Tutup</button>
      </div>
    </div>
  </div>
</div>

</div>
                        </div>

                        </div>
                        </div>
                </div>
            </div>
    </div>
</div>

</div>

<footer class="footer" style="margin-top: -80px;">
  <div class="copyright-area">
  <div class="container">
  <div class="inner-content">
  <div class="row">
  <div class="col-lg-10 col-md-6 col-12">
  <p class="copyright-text">© Ades Suryaningtias & Sulthan Izza Falqahi</p>
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

    var peta = L.map('peta').setView([-2.562373852697983, 106.57645296005435], 9);
const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
})
const Esri_WorldImagry = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
}).addTo(peta);
          
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

var baseLayers = {
" Open Street Map": tiles,
" World Imagery": Esri_WorldImagry
};

var overlays = {
" Mangrove": mang,
" Kesehatan Mangrove": ndvi,
" Deforestasi": def
};

L.control.layers(baseLayers, overlays).addTo(peta);

var drawnItems = new L.geoJSON(<?= $map['koordinat']; ?>);
peta.fitBounds(drawnItems.getBounds());

var geoJSON =  L.geoJSON([<?= $map['koordinat']; ?>], {
  style: {
    color: 'white',
    dashArray: '2',
    lineCap: 'butt',
    lineJoin: 'miter',
    fillColor: '<?= $map['warna']; ?>',
    fillOpacity: 0.7,
  },
}).addTo(peta);
          
</script>
</body>
</html>