<?php
  session_start();
  include "koneksi.php";
  $berita = query("SELECT * FROM berita ORDER BY id_berita DESC");
  
if($_SESSION["username"] =="")
{
    echo"<script>alert('Anda Harus Login Terlebih Dahulu')</script>";
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>COMBBIS | Admin-Berita</title>
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
            <a href="berita.php" class="active">
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
      <h1 style="font-size:30px;">Data Berita</h1>
    </div><br>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="font-size:26px;">Tabel Data</h5>

              <!-- Dark Table -->
              <table class="table table-striped table-primary" id="example">
                <thead>
                  <tr>
                    <th scope="col" style="text-align:center;">Judul</th>
                    <th scope="col" style="text-align:center;">Gambar</th>
                    <th scope="col" style="text-align:center;">Publikasi</th>
                    <th scope="col" style="text-align:center;">Link</th>
                    <th scope="col" style="text-align:center;">Isi</th>
                    <th scope="col" style="text-align:center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
        $i = 1;
        foreach ($berita as $row) :
            ?>
            <tr style="text-align:center;" >
            <td> <?php echo $row["judul"]; ?></td>
                <td><img src="assets/img/<?php echo $row["gambar"]; ?>" width="40px" alt=""></td>
                <td><?php echo $row["publikasi"]; ?></td>
                <td><?php echo $row["link"]; ?></td>
                <td><?php echo $row["isi"]; ?></td>
                <td>
                  <a href="updateberita.php?id_berita=<?= $row['id_berita']; ?>" class="btn btn-warning btn-sm" style="font-weight: 300px;"><i class="bi bi-pencil-fill"></i></a>
                  <a href="hapusberita.php?id_berita=<?= $row['id_berita']; ?>" class="btn btn-danger btn-sm" style="font-weight: 300px;" onclick="return confirm('Apakah Yakin Hapus Data Berita Ini?')" name="hapusberita" id="hapusberita" ><i class="bi bi-trash-fill"></i></a>
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
<br><br><br>
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
</body>

</html>