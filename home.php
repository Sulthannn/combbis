<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>COMBBIS | Beranda</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/mangrove.png" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->
    <!-- Start Hero Area -->
    <section class="hero-area">
        <img class="hero-shape" src="assets/images/hero/hero-shape.svg" alt="#">
        <div class="container">
            <div class="row align-items-center"style="margin-top: -22px;">
                <div class="col-lg-7 col-md-12 col-12" style="margin-top: -50px;">
                    <div class="hero-content">
                        <h4 class="wow fadeInUp" data-wow-delay=".2s">COMBBIS</h4>
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">Cartography of 
                            <span>
                                <img class="text-shape" src="assets/images/hero/text-shape.svg"alt="#">
                                Mangroves
                            </span>
                            <br>in the Bangka Belitung Islands
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Kartografi Mangrove di Kepulauan Bangka Belitung 
                            <br>yang berisi luas sebaran mangrove, kesehatan mangrove, dan tingkat deforestasi
                        </p>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="about.php" class="btn ">Lets Go!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12" style="margin-top: -50px;">
                    <div class="hero-image wow zoomIn" data-wow-delay=".2s">
                        <img class="main-image" src="assets/images/logo/mangrove.png" alt="#">
                        <!--
                        <img class="h2-move-1" src="assets/images/hero/h2-bit-l.png" alt="#">
                        <img class="h2-move-2" src="assets/images/hero/h2-bit-m.png" alt="#">
                        <img class="h2-move-3" src="assets/images/hero/h2-bit-s.png" alt="#">
                        -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->




    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/maincry.js"></script>
    <script>
        //========= Road Map 
        tns({
            container: '.road-map-slider',
            items: 1,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            responsive: {
                0: {
                    items: 2,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 4,
                },
                992: {
                    items: 4,
                },
                1170: {
                    items: 6,
                }
            }
        });

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

        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });

    </script>
</body>

</html>