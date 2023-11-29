<?php
session_start();

require 'koneksi.php';

if($_SESSION["username"] =="")
{
    echo"<script>alert('Anda Harus Login Terlebih Dahulu')</script>";
    header("location: login.php");
}

$id_berita = $_GET['id_berita'];

$berita = query("SELECT * FROM berita WHERE id_berita = $id_berita")[0];

if (isset($_POST['update'])) {
    if (updateberita($_POST) > 0) {
        echo "<script>
                alert('Data Berita berhasil diupdate!');
                document.location.href = 'berita.php';
            </script>";
    } else {
       
        echo "<script>
                alert('Data Berita gagal diupdate!');
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>COMBBIS | Admin-Ubah Berita</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/mangrove.png" rel="icon">
  <link href="assets/img/mangrove.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-map-fill"></i><span>Sebaran</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
        <a class="nav-link " data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-book-half"></i><span>Berita</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
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
      <h1 style="font-size:30px;">Ubah Data Berita</h1>
    </div><br>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h1 class="card-title" style="font-size:26px;">Ubah Data</h1>

              <!-- Form -->
              <div class="container" data-aos="fade-up">
                    <div class=" row my-5">
                    <div class="col-md">
                        <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_berita" value="<?=$berita['id_berita']?>">
                        <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control w-50" id="judul" placeholder="" name="judul" value="<?= $berita['judul']; ?>">
                        </div>
                        <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control w-50" id="myFileInput" placeholder="" name="gambar" value="<?= $berita['gambar']; ?>">
                        <script>
                          const fileInput = document.getElementById('myFileInput');
                          fileInput.value = '<?=$berita['gambar']?>';
                          </script>
                        </div>
                        <div class="mb-3">
                        <label for="publikasi" class="form-label">Publikasi</label>
                        <input type="date" class="form-control w-50" id="publikasi" placeholder="" name="publikasi" value="<?= $berita['publikasi']; ?>"></input>
                        </div>
                        <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control w-50" id="link" placeholder="" name="link" value="<?= $berita['link']; ?>"></input>
                        </div>
                        <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>
                        <textarea class="form-control w-50" id="my-text" placeholder="" name="isi" rows="5" style="resize:none;" maxlength="250" value="<?= $berita['isi']; ?>"><?= $berita['isi']; ?></textarea>
                        <small><p id="result" style="width: 100%; color: #737373;" ></p></small>
                      </div>
                        <br>
                        <hr>
                        <a href="berita.php" class="btn btn-info"><i class="bi bi-backspace"></i> Kembali</a>
                        <button type="submit" name="update" class="btn btn-secondary" onclick="return confirm('Apakah Yakin Ubah Data Berita Ini?')"><i class="bi bi-save"></i> Simpan</button>
</form>
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
  <script src="assets/js/text.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js   "></script> 
  <script src="assets/js/table.js"></script>
</body>

</html>