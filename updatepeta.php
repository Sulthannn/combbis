<?php
session_start();

require 'koneksi.php';

if($_SESSION["username"] =="")
{
    echo"<script>alert('Anda Harus Login Terlebih Dahulu')</script>";
    header("location: login.php");
}

$id_map = $_GET['id_map'];

$map = query("SELECT * FROM map WHERE id_map = $id_map")[0];

if (isset($_POST['updatepeta'])) {
    if (update($_POST) > 0) {
        echo "<script>
                alert('Data Persebaran Peta berhasil diupdate!');
                document.location.href = 'sebaran.php';
            </script>";
    } else {
       
        echo "<script>
                alert('Data Persebaran Peta gagal diupdate!');
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>COMBBIS | Admin-Ubah Sebaran</title>
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" integrity="sha512-gc3xjCmIy673V6MyOAZhIW93xhM9ei1I+gLbmFjUHIjocENRsLX/QUE1htk5q1XV2D/iie/VQ8DXI6Vu8bexvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/peta.css" rel="stylesheet">

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
            <a href="sebaran.php">
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
      <h1 style="font-size:30px;">Ubah Data Sebaran</h1>
    </div><br>

    <section class="section">
      <div class="row">
       <div class="col-lg-5">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="font-size:26px;">Map</h5>
              <div style="height:500px; background: transparent; opacity: 0.9;" id="peta">

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">

          <div class="card">
            <div class="card-body">
              <h1 class="card-title" style="font-size:26px;">Ubah Data</h1>

              <!-- Form -->
              <div class="container" data-aos="fade-up">
                    <div class=" row my-5">
                    <div class="col-md">
                        <form action="" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="id_map" value="<?=$map['id_map']?>">
                        <div class="mb-3">
                        <label for="koordinat" class="form-label">Koordinat/GeoJSON</label>
                        <textarea type="text" class="form-control w-50" id="koordinat" placeholder="" name="koordinat" rows="5" value="<?= $map['koordinat']; ?>"><?= $map['koordinat']; ?></textarea>
                        </div>
                        <div class="mb-3">
                        <label for="pulau" class="form-label">Pulau</label>
                        <input type="text" class="form-control w-50" id="pulau" placeholder="" name="pulau" value="<?= $map['pulau']; ?>">
                        </div>
                        <div class="mb-3">
                        <label for="desa" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control w-50" id="desa" placeholder="" name="desa" value="<?= $map['desa']; ?>" ></input>
                        </div>
                        <div class="mb-3">
                        <label for="luas" class="form-label">Luas (Ha)</label>
                        <input type="text" class="form-control w-50" id="luas" placeholder="" name="luas" value="<?= $map['luas']; ?>"></input>
                        </div>
                        <div class="mb-3">
                        <label for="sangat" class="form-label">Sangat Sehat (Ha)</label>
                        <input type="text" class="form-control w-50" id="sangat" placeholder="" name="sangat" value="<?= $map['sangat']; ?>"></input>
                        </div>
                        <div class="mb-3">
                        <label for="sehat" class="form-label">Sehat (Ha)</label>
                        <input type="text" class="form-control w-50" id="sehat" placeholder="" name="sehat" value="<?= $map['sehat']; ?>"></input>
                        </div>
                        <div class="mb-3">
                        <label for="cukup" class="form-label">Cukup Sehat (Ha)</label>
                        <input type="text" class="form-control w-50" id="cukup" placeholder="" name="cukup" value="<?= $map['cukup']; ?>"></input>
                        </div>
                        <div class="mb-3">
                        <label for="def" class="form-label">Deforestasi (Ha)</label>
                        <input type="text" class="form-control w-50" id="def" placeholder="" name="def" value="<?= $map['def']; ?>"></input>
                        </div>
                        <br>
                        <hr>
                        <a href="sebaran.php" class="btn btn-info"><i class="bi bi-backspace"></i> Kembali</a>
                        <button type="submit" name="updatepeta" class="btn btn-secondary" onclick="return confirm('Apakah Yakin Ubah Data Sebaran Ini?')"><i class="bi bi-save"></i> Simpan</button>
</form>
</div>
</div>
</div>
      </div>
          </div>
        </div>  
      </div>
        </div>
    </section>

  </main><!-- End #main -->
<br><br>
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
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js   "></script> 
  <script src="assets/js/table.js"></script>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js" integrity="sha512-ozq8xQKq6urvuU6jNgkfqAmT7jKN2XumbrX1JiB3TnF7tI48DPI4Gy1GXKD/V3EExgAs1V+pRO7vwtS1LHg0Gw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>

 var peta = L.map('peta').setView([-2.562373852697983, 106.57645296005435], 8.4);
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


var drawnItems = new L.geoJSON(<?= $map['koordinat']; ?>);
     peta.addLayer(drawnItems);
     var drawControl = new L.Control.Draw({
         draw: {
          polygon:true,
          marker:true,
          circle:false,
          circlemarker:false,
          rectangle:false,
          polyline:false,
         },
         edit: {
             featureGroup: drawnItems
         }
     });
     peta.addControl(drawControl);

     peta.on('draw:created', function(event) {
      var layer = event.layer;
      var feature = layer.feature = layer.feature || {};
      feature.type = feature.type || "Feature";
      var props = feature.properties = feature.properties || {};
      drawnItems.addLayer(layer);
      $("[name=koordinat]").html(JSON.stringify(drawnItems.toGeoJSON()));
     });

     peta.on('draw:edited', function(event) {
      $("[name=koordinat]").html(JSON.stringify(drawnItems.toGeoJSON()));
     });

     peta.on('draw:deleted', function(event) {
      $("[name=koordinat]").html("");
     });
      
     peta.fitBounds(drawnItems.getBounds());

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
"World Imagery": Esri_WorldImagry,
"Light Map": light
};

var overlays = {
"Mangrove": mang,
"Kesehatan Mangrove": ndvi,
"Deforestasi": def
};

L.control.layers(baseLayers, overlays).addTo(peta);

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