<?php
  session_start();
  include "koneksi.php";
  $berita = query("SELECT * FROM berita ORDER BY id_berita DESC");
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>COMBBIS | Informasi</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/mangrove.png" />

<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
<link rel="stylesheet" href="assets/css/animate.css" />
<link rel="stylesheet" href="assets/css/tiny-slider.css" />
<link rel="stylesheet" href="assets/css/glightbox.min.css" />
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>


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
<a href="about.php" aria-label="Toggle navigation">Sebaran</a>
</li>
<li class="nav-item">
<a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Informasi</a>
<ul class="sub-menu collapse" id="submenu-1-2">
<li class="nav-item active"><a href="blog.php">Pengenalan</a>
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
<h1 class="page-title">Pengenalan Mangrove</h1>
<ul class="breadcrumb-nav">
<li><a href="home.php">Beranda</a></li>
<li>Informasi</li>
<li>Pengenalan</li>
</ul>
</div>
</div>
</div>
</div>
</div>

<div class="container">
<section class="testimonials style2 section">
<div class="row">
<div class="col-12">
<div class="section-title">
<h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">Jaga Mangrove Kita!</h3>
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Pengetahuan Mengenai Mangrove</h2>
<!--
<p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>-->
</div>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 wow fadeInUp" data-wow-delay=".3s" style="text-align: justify;">
<div class="single-inner">
<div class="post-details">
<div class="main-content-head">
<div class="meta-information">
<h3 class="wow fadeInUp" data-wow-delay=".4s">Definsi</h3>
<!-- <ul class="meta-info">
<li>
<a href="javascript:void(0)">By Martin King</a>
</li>
<li>
<a href="javascript:void(0)">20 Jun 2023</a>
</li>
<li>
<a href="javascript:void(0)">Marketing</a>
</li>
</ul> -->
</div>
<div class="wow fadeInUp" data-wow-delay=".2s">
 <p style="font-size:17px;">Mangrove adalah jenis tanaman dikotil yang hidup di habitat air payau dan air laut. Mangrove merupakan tanaman hasil dari kegiatan budidaya atau diambil dari alam. Tanaman mangrove tidak dilindungi/dilarang untuk memanfaatkan bagian-bagian tanaman tersebut, misalnya dimanfaatkan untuk dijadikan bahan baku kosmetik/farmasi atau bahan tambahan tekstil (Dirjen P2HP, 2015).</p>
<p style="font-size:17px;">Hutan mangrove menjadi salah satu subjek utama bagi pengembangkan lingkungan di Indonesia. Banyak lembaga sosial yang bergerak dalam bidang lingkungan terus mensosialisasikan manfaat mangrove. Hal ini mendukung kesadaran masyarakat bahwa mangrove memang penting untuk melindungi lingkungan. Melestarikan kawasan mangrove adalah usaha yang sangat baik untuk menstabilkan kondisi lingkungan dan menyelamatkan semua habitat di hutan mangrove. Kawasan mangrove dapat ditemui di beberapa daerah di Indonesia, seperti di Kabupaten Bangka–Belitung (Ana, 2015).</p>
</div>
<br><hr>
<h3 class="wow fadeInUp" data-wow-delay=".4s">Manfaat</h3>
<div class="wow fadeInUp" data-wow-delay=".2s">
<p style="font-size:17px;">Beberapa manfaat hutan mangrove secara umum, yaitu : </p>
<p style="font-size:17px;"> <b> 1. Sebagai Rantai Makanan </b> </p>
<p style="font-size:17px;">Tidak sedikit ikan yang menggantungkan hidup dengan memakan daun tanaman mangrove ini untuk keberlansungan hidup mereka.</p>
<p style="font-size:17px;"> <b> 2. Menjaga Iklim dan Cuaca </b> </p>
<p style="font-size:17px;">Melestarikan hutan mangrove adalah salah satu tindakan yang sangat tepat untuk menjaga kelestarian lingkungan. Karena itulah kampanye untuk melestarikan hutan mangrove menjadi salah satu hal yang paling banyak diberitakan. Termasuk di Indonesia yang memiliki jumlah hutan mangrove yang luas.</p>
<p style="font-size:17px;"> <b> 3. Sumber Pendapatan Bagi Nelayan Pantai </b> </p>
<p style="font-size:17px;">Manfaat kawasan hutan mangrove menjadi tempat yang paling sesuai untuk pembibitan ikan, udang dan berbagai potensi habitat laut lainnya. Sumber daya tersebut dapat dimanfaatkan oleh nelayan sebagai sumber mata pencahariannya.</p>
<p style="font-size:17px;"> <b> 4. Mencegah Pemanasan Global </b> </p>
<p style="font-size:17px;">Pemanasan global memang menjadi ancaman yang sangat serius untuk alam dan manusia. Cara untuk mencegah atau mengurangi dampak pemanasan global adalah dengan mengembangkan kawasan hutan mangrove.</p>
<p style="font-size:17px;"> <b> 5. Mencegah Erosi Pantai </b> </p>
<p style="font-size:17px;">Erosi pantai akan terus menggerus permukaan bumi sehingga mengancam lingkungan manusia. Hutan mangrove menjadi salah satu sarana yang sangat penting untuk menyelamatkan garis pantai dari perairan laut.</p>
<br>
<p style="font-size:17px;">Adapun manfaat tanaman mangrove di bidang kesehatan, yaitu : </p>
<p style="font-size:17px;"> <b> 1. Demam </b> </p>
<p style="font-size:17px;">Panas yang tinggi disertai dengan flu menyerang tubuh, hal ini terjadi pada saat sistem kekebalan di dalam tubuh menurun. Demam bisa diatasi dengan memanfaatkan tanaman mangrove.</p>
<p style="font-size:17px;"> <b> 2. Kusta </b> </p>
<p style="font-size:17px;">Kusta merupakan salah satu masalah kulit yang menyebar hampir diseluruh kulit tubuh. Pengobatan alami memanfaatkan daun dari tanaman bakau yang bisa digunakan untuk mengobati penyakit kusta.</p>
<p style="font-size:17px;"> <b> 3. Diabetes </b> </p>
<p style="font-size:17px;">Manfaat tanaman bakau bisa digunakan untuk mengobati diabetes. Diabetes adalah kadar gula darah di dalam tubuh yang naik melebihi batas normal. Lonjakan kenaikan gula darah ini bisa dikarenakan jarang berolahraga namun rutin mengkonsumsi makanan yang kaya akan kandungan gula dan karbohidrat.</p>
<p style="font-size:17px;"> <b> 4. Sakit Ginjal </b> </p>
<p style="font-size:17px;">Manfaat berikutnya yang dirasakan dari tanaman mangrove untuk kesehatan adalah sakit ginjal. Upaya pencegahan untuk sakit ginjal dapat mencoba mengobatinya dengan tanaman bakau. Rebus daun tanaman bakau dan konsumsi sebanyak dua kali dalam seminggu untuk pencegahan.</p>
<p style="font-size:17px;"> <b> 5. Kaki Gajah </b> </p>
<p style="font-size:17px;">Penyakit ini disebabkan karena cacing bernama filaria wuchereria yang ditularkan lewat gigitan nyamuk pada kulit manusia. Minuman herbal alami yang berasal dari tumbuhan mangrove dapat membantu untuk mengobati penyakit tersebut.</p>
</div>
<br><hr>
<h3 class="wow fadeInUp" data-wow-delay=".4s">Jenis</h3>
<div class="wow fadeInUp" data-wow-delay=".2s">
<p style="font-size:17px;">Pada ekosistem mangrove dikenal jenis-jenis tumbuhan yang dinamakan dengan mangrove sejati utama (mayor), mangrove sejati tambahan (minor), dan mangrove ikutan. Mangrove sejati utama (mayor) adalah tumbuhan yang tumbuh pada wilayah pasang surut dan membentuk tegakan murni. Mangrove jenis ini jarang bergabung dengan tanaman darat. Mangrove sejati minor (tambahan) adalah bukan komponen penting dari mangrove dan biasanya ditemukan di daerah tepi dan jarang membentuk tegakan, sedangkan mangrove ikutan adalah tumbuhan yang tidak pernah tumbuh di komunitas mangrove sejati dan biasanya tumbuh bergabung dengan tumbuhan daratan. Pengenalan sederhana untuk dapat mengenal jenis-jenis mangrove sejati untuk tujuan rehabilitasi difokuskan pada jenis-jenis yang membentuk tegakan murni.</p>
<p style="font-size:17px;">Jenis mangrove dapat dibedakan dari struktur perakarannya, bentuk daun serta bentuk buahnya. Berikut merupakan pengenalan jenis mangrove yaitu: Lumnitzera, Excoaria, Xylocarpus, Aegiceras, Scyphiphora dan Nypa. Dan yang biasa ditemukan di Indonesia, yaitu: Avicennia, Bruguiera, Ceriops, Rhizhopora, Sonneratia.</p>
</div>

<div class="wow zoomInUp" data-wow-delay=".15s" style="visibility: visible; animation-delay: 15s; animation-name: zoomIn;">
<div class="row">
<div class="col-lg-2 col-md-6 col-12">
<div class="single-team">
<div class="team-image">
<a href="https://id.wikipedia.org/wiki/Teruntum" target="_blank">
<img src="assets/images/jenis/1.png" alt="#" style="width: 150px;"></a>
</div>
<div class="content">
<p style="margin-left: 30px;" ><span>Lumnitzera</span></p>
</div>
</div>
</div>

<div class="col-lg-2 col-md-6 col-12">
<div class="single-team">
<div class="team-image">
<a href="https://en-m-wikipedia-org.translate.goog/wiki/Excoecaria_agallocha?_x_tr_sl=en&_x_tr_tl=id&_x_tr_hl=id&_x_tr_pto=tc,sc" target="_blank">
<img src="assets/images/jenis/2.png" alt="#" style="width: 150px;"></a>
</div>
<div class="content">
<p style="margin-left: 30px;"><span>Excoecaria</span></p>
</div>
</div>
</div>

<div class="col-lg-2 col-md-6 col-12">
<div class="single-team">
<div class="team-image">
<a href="https://en.wikipedia.org/wiki/Xylocarpus" target="_blank">
<img src="assets/images/jenis/3.png" alt="#" style="width: 150px;"></a>
</div>
<div class="content">
<p style="margin-left: 30px;" ><span>Xylocarpus</span></p>
</div>
</div>
</div>

<div class="col-lg-2 col-md-6 col-12">
<div class="single-team">
<div class="team-image">
<a href="https://en.wikipedia.org/wiki/Aegiceras" target="_blank">
<img src="assets/images/jenis/4.png" alt="#" style="width: 150px;"></a>
</div>
<div class="content">
<p style="margin-left: 30px;" ><span>Aegiceras</span></p>
</div>
</div>
</div>

<div class="col-lg-2 col-md-6 col-12">
<div class="single-team">
<div class="team-image">
<a href="https://en.wikipedia.org/wiki/Scyphiphora" target="_blank">
<img src="assets/images/jenis/5.png" alt="#" style="width: 150px;"></a>
</div>
<div class="content">
<p style="margin-left: 30px;" ><span>Scyphiphora</span></p>
</div>
</div>
</div>

<div class="col-lg-2 col-md-6 col-12">
<div class="single-team">
<div class="team-image">
<a href="https://id.wikipedia.org/wiki/Nipah" target="_blank">
<img src="assets/images/jenis/6.png" alt="#" style="width: 150px;"></a>
</div>
<div class="content">
<p style="margin-left: 50px;" ><span>Nipah</span></p>
</div>
</div>
</div>

</div>

<div class="row">
<div class="col-lg-1 col-md-6 col-12">
</div>

<div class="col-lg-2 col-md-6 col-12">
<div class="single-team">
<div class="team-image">
<a href="https://en-m-wikipedia-org.translate.goog/wiki/Avicennia_marina?_x_tr_sl=en&_x_tr_tl=id&_x_tr_hl=id&_x_tr_pto=tc,sc" target="_blank">
<img src="assets/images/jenis/7.png" alt="#" style="width: 150px;"></a>
</div>
<div class="content">
<p style="margin-left: 10px;" ><span>Avicennia marina</span></p>
</div>
</div>
</div>

<div class="col-lg-2 col-md-6 col-12">
<div class="single-team">
<div class="team-image">
<a href="https://id.wikipedia.org/wiki/Bruguiera" target="_blank">
<img src="assets/images/jenis/8.png" alt="#" style="width: 150px;"></a>
</div>
<div class="content">
<p style="margin-left: 30px;" ><span>Bruguiera</span></p>
</div>
</div>
</div>

<div class="col-lg-2 col-md-6 col-12">
<div class="single-team">
<div class="team-image">
<a href="https://en.wikipedia.org/wiki/Ceriops" target="_blank">
<img src="assets/images/jenis/9.png" alt="#" style="width: 150px;"></a>
</div>
<div class="content">
<p style="margin-left: 45px;" ><span>Ceriops</span></p>
</div>
</div>
</div>

<div class="col-lg-2 col-md-6 col-12">
<div class="single-team">
<div class="team-image">
<a href="https://en.wikipedia.org/wiki/Rhizophora" target="_blank">
<img src="assets/images/jenis/10.png" alt="#" style="width: 150px;"></a>
</div>
<div class="content">
<p style="margin-left: 30px;" ><span>Rhizophora</span></p>
</div>
</div>
</div>

<div class="col-lg-2 col-md-6 col-12">
<div class="single-team">
<div class="team-image">
<a href="https://en.wikipedia.org/wiki/Rhizophora" target="_blank">
<img src="assets/images/jenis/11.png" alt="#" style="width: 150px;"></a>
</div>
<div class="content">
<p style="margin-left: 30px;" ><span>Sonneratia</span></p>
</div>
</div>
</div>

</div>
</div>
<div class="wow zoomInUp" data-wow-delay=".15s" style="visibility: visible; animation-delay: 15s; animation-name: zoomIn;">
<small><p style="text-align:end; font-size:12px;">*Sumber : Website KKP</p></small>
</div>
<hr>

</div>
</div>
</div>
</div>
</div>
</section>
</div>

    <div class="container">
    <div class="row">
    <div class="col-12">
    <div class="section-title">
    <h3 class="wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">Berita</h3>
    <h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Berita Mangrove Terkini</h2>
    </div>
    </div>

    <div class="row my-12" style="margin-top: -100px;">
    <div class="swiper">
      <div class="slide-content">
      <div class="swiper-wrapper" style="margin-top: -40px;">
      <?php
        $i = 1;
        foreach ($berita as $row) :

            ?>
    <div class="col-lg-4 col-md-6 col-12 wow fadeInUp swiper-slide" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp; margin-top: -50px; position:relative;">
    <div class="feature section" style= "position:relative;">
    <div class="feature-box" style="text-align: start; position:relative;">
    <center>
    <img src="assets/img/<?php echo $row["gambar"]; ?>" height="220px" alt="" style="position:relative;">
    </center>
    <div class="meta-info">
    <i class="lni lni-timer"></i> <?php echo $row["publikasi"]; ?>
    </div><br>
    <h5>
    <?php echo $row["judul"]; ?>
    </h5>
    <p><?php echo $row["isi"]; ?></p><br>
    <div class="button">
    <a href="<?php echo $row["link"]; ?>" class="btn" target="_blank">Selengkapnya</a>
    </div>

    </div>
    </div> 
      </div>
      <?php
              $i++;
            endforeach; 
          ?>
    </div>
</div>
<div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
</div>
</div>

    </div>
    </div>


<br>
<br><br>
<footer class="footer section">
<div class="footer-top">
<div class="container">
<div class="inner-content">
<div class="row">
<section id="contact" class="contact" style="margin-top: 0px;">
  <div class="container">
    <div class="section-title">
      <h2 style="color: beige;">Kontak Kami</h2>
    </div>
    <div class="row">
      <div class="col-md-6 mt-8 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-envelope"></i>
           <h4 style="color: beige;">Email</h4>
          <p style="color: white;">sulthanizza@upi.edu</p>
          <p style="color: white;">adessuryaningtias@upi.edu</p>
        </div>
      </div>
      <div class="col-md-6 mt-8 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-map"></i>
          <h4 style="color: beige;">Alamat</h4>
          <p style="color: white;">Jl. Ciracas No.38, Serang, Kec. Serang, Kota Serang, Banten 42116</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->

  <!--
<div class="single-footer newsletter">
<h3>Subscribe</h3>
<p>Subscribe to our newsletter for the latest updates</p>
<form action="#" method="get" target="_blank" class="newsletter-form">
<input name="EMAIL" placeholder="Email address" required="required" type="email">
<div class="button">
<button class="sub-btn"><i class="lni lni-envelope"></i>
</button>
</div>
</form>
</div>
-->
</div>
</div>
</div>
</div>

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

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/count-up.min.js"></script>
<script src="assets/js/maincry.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
      var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
</body>
</html>