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
<li class="nav-item"><a href="blog.php">Pengenalan</a>
</li>
<li class="nav-item active"><a href="ekosistem.php">Ekosistem</a></li>
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
<h1 class="page-title">Ekosistem Mangrove</h1>
<ul class="breadcrumb-nav">
<li><a href="home.php">Beranda</a></li>
<li>Informasi</li>
<li>Ekosistem</li>
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
<h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Zonasi Ekosistem Mangrove</h2>
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
<h3 class="wow fadeInUp" data-wow-delay=".4s">Ekosistem</h3>
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
 <p style="font-size:17px;">Ekosistem hutan mangrove adalah hutan yang tumbuh di daerah pasang surut, terutama di pantai yang terlindung, laguna dan muara sungai yang tergenang pada saat pasang dan bebas dari genangan pada saat surut yang komunitas tumbuhannya bertoleransi terhadap garam. Menurut FAO, Hutan Mangrove adalah Komunitas tumbuhan yang tumbuh di daerah pasang surut. Kondisi habitat tanah berlumpur, berpasir, atau lumpur berpasir.</p>
<p style="font-size:17px;">Ekosistem tersebut merupakan ekosistem yang khas untuk daerah tropis dan sub tropis, terdapat di derah pantai yang berlumpur dan airnya tenang (gelombang laut tidak besar). Ekosistern hutan itu disebut ekosistem hutan payau karena terdapat di daerah payau (estuarin), yaitu daerah perairan dengan kadar garam/salinitas antara 0,5 °/oo dan 30°/oo disebut juga ekosistem hutan pasang surut karena terdapat di daerah yang dipengaruhi oleh pasang surut air laut.</p>
</div>
<br><hr>
<h3 class="wow fadeInUp" data-wow-delay=".4s">Zona</h3>
<div class="wow fadeInUp" data-wow-delay=".2s">
<p style="font-size:17px;">Secara sederhana, mangrove umumnya tumbuh dalam 4 zona, yaitu pada daerah terbuka, daerah tengah, daerah yang memiliki sungai berair payau sampai hampir tawar, serta daerah ke arah daratan yang memiliki air tawar. </p>
<p style="font-size:17px;"> <b> 1. Mangrove Terbuka </b> </p>
<p style="font-size:17px;">Mangrove berada pada bagian yang berhadapan dengan laut. Van Steenis (1958) melaporkan bahwa S. alba dan A. alba merupakan jenis-jenis ko-dominan pada areal pantai yang sangat tergenang ini. Komposisi floristik dari komunitas di zona terbuka sangat bergantung pada substratnya. S. alba cenderung untuk mendominasi daerah berpasir, sementara Avicennia marina dan Rhizophora mucronata cenderung untuk mendominasi daerah yang lebih berlumpur. Meskipun demikian, Sonneratia akan berasosiasi dengan Avicennia jika tanah lumpurnya kaya akan bahan organik.</p>
<p style="font-size:17px;"> <b> 2. Mangrove Tengah </b> </p>
<p style="font-size:17px;">Mangrove di zona ini terletak dibelakang mangrove zona terbuka.  Di zona ini biasanya didominasi oleh jenis Rhizophora.  Namun, Samingan (1980) menemukan di Karang Agung didominasi oleh Bruguiera cylindrica.  Jenis-jenis penting lainnya yang ditemukan di Karang Agung adalah B. eriopetala, B. gymnorrhiza, Excoecaria agallocha, R. mucronata, Xylocarpus granatum dan X. moluccensis.</p>
<p style="font-size:17px;"> <b> 3.  Mangrove Payau </b> </p>
<p style="font-size:17px;">Mangrove berada disepanjang sungai berair payau hingga hampir tawar.  Di zona ini biasanya didominasi oleh komunitas Nypa atau Sonneratia. Di jalur-jalur tersebut sering sekali ditemukan tegakan N.fruticans yang bersambung dengan vegetasi yang terdiri dari Cerbera sp, Gluta renghas, Stenochlaena palustris dan Xylocarpus granatum.  Ke arah pantai, campuran komunitas Sonneratia - Nypa lebih sering ditemukan.</p>
<p style="font-size:17px;"> <b> 4. Mangrove Daratan </b> </p>
<p style="font-size:17px;">Mangrove berada di zona perairan payau  atau hampir tawar di belakang jalur hijau mangrove yang sebenarnya.  Jenis-jenis yang umum ditemukan pada zona ini termasuk Ficus microcarpus. Zona ini memiliki kekayaan jenis yang lebih tinggi dibandingkan dengan zona lainnya.</p>
<br>
<p style="font-size:17px;">Meskipun kelihatannya terdapat zonasi dalam vegetasi mangrove, namun kenyataan di lapangan tidaklah sesederhana itu.  Banyak formasi serta zona vegetasi yang tumpang tindih dan bercampur serta seringkali struktur dan korelasi yang nampak di suatu daerah tidak selalu dapat diaplikasikan di daerah yang lain.</p>
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
<section id="contact" class="contact">
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
    <!-- <form action="send2.php" method="post" class="php-email-form mt-4">
    <h4 style="color: beige; text-align:center;">Kritik dan Saran</h4><br>
      <div class="row">
        <div class="col-md-12 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
        </div>
      </div>
      <div class="form-group mt-3">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul" required>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Isi" required></textarea>
      </div>
      <div class="text-center mt-3"><button type="submit" class="btn btn-secondary" name="send2" style="height: 50px;">Kirim Pesan</button>
      </div>
    </form> -->
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