<?php
session_start();
include "koneksi.php";
$map = query("SELECT * FROM map ORDER BY id_map DESC");

$total = 0;
$total2 = 0;
$total3 = 0;
$total4 = 0;
$total5 = 0;
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>COMBBIS | Sebaran</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/mangrove.png" />

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
<link rel="stylesheet" href="assets/css/animate.css" />
<link rel="stylesheet" href="assets/css/tiny-slider.css" />
<link rel="stylesheet" href="assets/css/glightbox.min.css" />
<link rel="stylesheet" href="assets/css/main.css" />
<link href="assets/css/peta.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">

</head>
<body>
<div class="preloader">
<div class="preloader-inner">
<div class="preloader-icon">
<span></span>
<span></span>
</div>
</div>
</div>


<header class="header navbar-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12">
<div class="nav-inner">

<nav class="navbar navbar-expand-lg">
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
<a href="about.php" class="active" aria-label="Toggle navigation">Sebaran</a>
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
<a href="map.php" aria-label="Toggle navigation">Map</a>
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

<div class="breadcrumbs" style="height: 20px;">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 offset-lg-3 col-md-12 col-12">
<div class="breadcrumbs-content">
<h1 class="page-title">Sebaran Mangrove</h1>
<ul class="breadcrumb-nav">
<li><a href="home.php">Beranda</a></li>
<li>Sebaran</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="feature section">
    <div class="container">
        <div class="row">
            <div class=" col-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="feature-box" style="text-align: start">
                <h2 class="card-title" style="text-align: center">Tentang</h2><br>
                 <p style="font-size:17px;" >Pada website ini berusaha untuk memberikan informasi sebaran terkait sebaran mangrove, kesehatan mangrove (NDVI), dan perubahan tutupan lahan (deforestasi)
                   di Kepulauan Bangka Belitung dengan menggunakan data penginderaan jauh berupa citra landsat 8 yang  disediakan oleh 
                   <i>United States Geological Surveys</i> (USGS) dapat diakses oleh umum melalui laman 
                   <a href="https://earthexplorer.usgs.gov/" style="text-decoration:none" target="_blank"><i>EarthExplorer</i></a> 
                   dan data yang digunakan untuk mengolah analisis deforestasi ialah <i>tree cover loss</i> melalui laman <a href="https://www.globalforestwatch.org/" style="text-decoration:none" target="_blank"> <i> GlobalForestWatch.</i></a>
                    Mengetahui tingkat  yang ada di kepulauan Bangka Belitung dapat mengukur tingkat keberhasilan konservasi dan pariwisata. 
                    Metode pengolahan data citra landsat dalam ArcGIS menggunakan metode klasifikasi tersupervisi <i>(Supervised Classification)</i> untuk mendeteksi sebaran mangrove, kesehatan mangrove (NDVI), dan perubahan tutupan lahan (deforestasi) di Kepulauan Bangka Belitung. Perubahan tutupan lahan (deforestasi) diolah menggunakan metode <i>Modified Normalize Water Index</i> (MNDWI).</p>
                    </div>
                    </div>


            <div class="col-lg-12 col-md-12 col-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="feature-box" style="text-align: center">
                    <div class="card-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Tabel Sebaran Mangrove</h2>
                        </div><br>
                        <table class="table table-striped table-success" id="example">
                <thead>
                  <tr>
                    <th scope="col" style="text-align:center;">Pulau</th>
                    <th scope="col" style="text-align:center;">Kecamatan</th>
                    <th scope="col" style="text-align:center;">Luas (Ha)</th>
                    <th scope="col" style="text-align:center;">Kesehatan Mangrove (Ha)</th>
                    <th scope="col" style="text-align:center;">Deforestasi (Ha)</th>
                    <th scope="col" style="text-align:center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
        $i = 1;
        foreach ($map as $row) :

            ?>
            <tr style="text-align:center;" >
            <td><?php echo $row["pulau"]; ?></td>
            <td><?php echo $row["desa"]; ?></td>
            <td><?php echo $row["luas"]; ?></td>
            <td style="text-align:justify;"><ul>
  <li>Sangat Sehat: <?php echo $row["sangat"]; ?> </li>
  <li>Sehat: <?php echo $row["sehat"]; ?> </li>
  <li>Cukup Sehat: <?php echo $row["cukup"]; ?>  </li>
</ul></td>          
            <td><?php echo $row["def"]; ?></td>
            <td> <a href="detail.php?id_map=<?= $row['id_map']; ?>" class="btn btn-primary btn-sm" style="font-weight: 300px;"><i class="lni lni-link"></i> Detail</a></td>
            </tr>
            <?php
              $i++;
            endforeach; 
          ?>
        </tbody>
              </table>
              <div class="col-md text-start">
<a href="export.php" class="btn btn-success"><i class="lni lni-download"></i> Ekspor Data</a>
</div> 
                </div>
            </div>

<br><br><br><br><br>

<div class="col-lg-6 col-md-6 col-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="feature-box" style="text-align: center">
                <h5 class="card-title">Kesehatan Mangrove (Ha)</h5><br>
              <!-- Doughnut Chart -->
              <canvas id="doughnutChart" style="max-height: 400px;"></canvas>
              <?php
        $i = 1;
        foreach ($map as $row) :
          $total += $row["sangat"];
          $total2 += $row["sehat"];
          $total3 += $row["cukup"];
            ?>

          <?php
              $i++;
            endforeach; 
          ?>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#doughnutChart'), {
                    type: 'doughnut',
                    data: {
                      labels: [
                        'Sangat Sehat',
                        'Sehat',
                        'Cukup Sehat'
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        data: [<?php echo ($total); ?>,<?php echo ($total2); ?>,<?php echo ($total3); ?>,],
                        backgroundColor: [
                          '#4E6C50',
                          '#A9AF7E',
                          '#FCE700'
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Doughnut CHart -->

            </div>
          </div>

<div class="col-lg-6 col-md-6 col-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="feature-box" style="text-align: center">
                <h5 class="card-title">Luas Mangrove dan Deforestasi (Ha)</h5><br>

              <!-- Pie Chart -->
              <canvas id="pieChart" style="max-height: 400px;"></canvas>
              <?php
        $i = 1;
        foreach ($map as $row) :
          $total4 += $row["luas"];
          $total5 += $row["def"];
            ?>

          <?php
              $i++;
            endforeach; 
          ?>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart'), {
                    type: 'pie',
                    data: {
                      labels: [
                        'Luas Mangrove',
                        'Deforestasi',
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        data: [<?php echo ($total4); ?>,<?php echo ($total5); ?>,],
                        backgroundColor: [
                          '#54B435',
                          '#CF0A0A'
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
            </div>
          </div>

          </div>
</div>

          </div> 

<footer class="footer">
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


<a href="#" class="scroll-top">
<i class="lni lni-chevron-up"></i>
</a>

<script src="assets/js/maincry.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js   "></script> 
<script src="assets/js/table.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/count-up.min.js"></script>
<script>
        //========= testimonial 
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1170: {
                    items: 3,
                }
            }
        });

        //====== counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();
    </script>
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
<script src="assets/vendor/chart.js/chart.min.js"></script>

<script>

  var peta = L.map('peta').setView([-2.913534469946802, 107.15872831906786], 9);
const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(peta);
const Esri_WorldImagry = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
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

var baseLayers = {
"Open Street Map": tiles,
"World Imagery": Esri_WorldImagry
};

var overlays = {
"Mangrove": mang,
"Kesehatan Mangrove": ndvi,
"Deforestasi": def
};

L.control.layers(baseLayers, overlays).addTo(peta);
</script>
</body>
</html>