<?php
  session_start();
  include "koneksi.php";
  $map = query("SELECT * FROM map ORDER BY id_map DESC");
  
if($_SESSION["username"] =="")
{
    echo"<script>alert('Anda Harus Login Terlebih Dahulu')</script>";
    header("location: login.php");
}

if (isset($_POST['hapus'])) {
  if (hapuspeta($_POST) > 0) {
      echo "<script>
              alert('Data Persebaran Mangrove berhasil dihapus!');
              document.location.href = 'sebaran.php';
          </script>";
  } else {
     
      echo "<script>
              alert('Data Persebaran Mangrove gagal dihapus!');
          </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>COMBBIS | Admin-Sebaran</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/mangrove.png" rel="icon">
  <link href="assets/img/mangrove.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"> 
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/peta.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
      <img src="assets/img/mangrove.png" style="width:50px;" alt="">
        <span class="d-none d-lg-block" style="font-size:30px;">COMBBIS</span>
      </a>

    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/admin.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION["username"]; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION["username"]; ?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
   <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-house-door-fill"></i>
          <span>Beranda</span>
        </a>
      </li>



      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-map-fill"></i><span>Sebaran</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="sebaran.php" class="active">
              <i class="bi bi-circle"></i><span>Data Sebaran</span>
            </a>
          </li>
          <li>
            <a href="tambahsebaran.php">
              <i class="bi bi-circle"></i><span>Tambah Data Sebaran Baru</span>
            </a>
          </li>
          <li>
            <a href="map.php">
              <i class="bi bi-circle"></i><span>Kembali Ke Map</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-book-half"></i><span>Berita</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="berita.php">
              <i class="bi bi-circle"></i><span>Data Berita</span>
            </a>
          </li>
          <li>
            <a href="tambahberita.php">
              <i class="bi bi-circle"></i><span>Tambah Data Berita Baru</span>
            </a>
          </li>
          <li>
            <a href="blog.php">
              <i class="bi bi-circle"></i><span>Kembali Ke Informasi</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

     
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1 style="font-size:30px;">Data Sebaran Mangrove</h1>
    </div><br>

    <section class="section">
      <div class="row">
        <div class="col">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="font-size:26px;">Map</h5>
              <div style="height:650px; background: transparent; opacity: 0.9;" id="peta">

              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="font-size:26px;">Tabel Data</h5>
              <table class="table table-striped table-success" id="example">
                <thead>
                  <tr>
                    <!-- <th scope="col" style="text-align:center;">Koordinat/GeoJSON</th> -->
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
                <td>
                <a href="detail.php?id_map=<?= $row['id_map']; ?>" class="btn btn-primary btn-sm" style="font-weight: 300px;"><i class="bi bi-ticket-detailed-fill"></i></a><br>
                  <a href="updatepeta.php?id_map=<?= $row['id_map']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a><br>
                  <a href="hapuspeta.php?id_map=<?= $row['id_map']; ?>" class="btn btn-danger btn-sm" style="font-weight: 300px;" name="hapus" onclick="return confirm('Apakah Yakin Hapus Data Sebaran Ini?')"><i class="bi bi-trash-fill"></i></a>
                </td>
            </tr>
          <?php
              $i++;
            endforeach; 
          ?>
        </tbody>
              </table>
            </div>
          </div>
          
        </div>  
        </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Ades Suryaningtias & Sulthan Izza Falqahi
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
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

    var peta = L.map('peta').setView([-2.5733491440626937, 107.13126251151773], 8.4);
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
"Open Street Map": tiles,
"World Imagery": Esri_WorldImagry,
"Light Map": light
};

var overlays = {
"Mangrove": mang,
"Kesehatan Mangrove": ndvi,
"Deforestasi": def,
"Data": geo
};

L.control.layers(baseLayers, overlays).addTo(peta);


<?php
        $i = 1;
        foreach ($map as $row) :

            ?>
var table = '<table><tr style="font-family:oregon;"><td>Pulau</td><td>:</td><td> <?php echo $row["pulau"]; ?></td></tr>';
table += '<tr style="font-family:oregon;"><td>Kecamatan</td><td>:</td><td> <?php echo $row["desa"]; ?></td></tr></table><center><a href="detail.php?id_map=<?= $row['id_map']; ?>" class="btn btn-primary btn-sm" style="color:black; font-size:12px; font-family:oregon;"><i class="bi bi-ticket-detailed-fill"></i> Detail</a></center>';
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