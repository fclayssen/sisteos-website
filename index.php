<?php
    session_start();
    $pageName = "index.php";
    include_once("lang.php");

    $query  = @unserialize(file_get_contents('http://ip-api.com/php/' . $_SERVER['REMOTE_ADDR']));
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://hooks.slack.com/services/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');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"text\":\"Connexion d'un utilisateur de " . $query['city'] . " (" . $query['country'] . " - " . $query['query'] . ")" . " au site Sisteos\"}");
    $headers = array();
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_exec($ch);
    curl_close($ch);
?>
<!DOCTYPE html>
<html lang="fr">
<?php include_once("header.php") ?>
<body id="home-version-6" class="home-version-6" data-style="default">
    <?php include_once("piwik.php") ?>
    <?php include_once("loader.php") ?>
    <div id="main_content">
        <?php include_once("menu.php") ?>

        <section class="banner banner-eight">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banne-content-wrapper-eight">
                            <h3 class="subtitle wow fadeInUp"><span><?php echo $text002 ?></span><?php echo $text003 ?></h3>
                            <h1 class="banner-title wow fadeInUp" data-wow-delay="0.3s">
                                <span><?php echo $text001 ?></span>
                            </h1>
                            <p class="description wow fadeInUp" data-wow-delay="0.5s">
                                <?php echo $text004 ?>
                            </p>
                            <!--
                            <div class="banner-button-container">
                                <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="play-btn play-btn-outline popup-video wow pixFadeUp" data-wow-delay="0.6s">
                                    <i class="ei ei-arrow_triangle-right"></i> <?php echo $text005 ?></a>
                            </div>
                            -->
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-six-promo-image text-right">
                            <img src="media/feature/app3.png" class="wow pixZoomIn" alt="saaspik">
                            <div class="banner-leaf">
                                <div class="leaf-left">
                                    <img src="media/banner/app/leaf1.png" alt="saaspik leaf">
                                </div>
                                <div class="leaf-right">
                                    <img src="media/banner/app/leaf2.png" alt="saaspik leaf">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-background-element">
                <div class="triangle">
                    <img src="media/banner/app/triangle.png" alt="saaspik ball">
                </div>
                <div class="dot-shape">
                    <img src="media/banner/app/dot.png" alt="saaspik">
                </div>
                <div class="circle-bg"></div>
            </div>
        </section>

        <section class="featured-nine">
            <div class="container">
                <div class="section-title style-five text-center">
                    <h3 class="sub-title wow pixFadeUp"><?php echo $text006 ?></h3>
                    <h2 class="title wow pixFadeUp" data-wow-delay="0.2s">
                        <?php echo $text007 ?>
                    </h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="saaspik-icon-box-wrapper style-ten wow fadeInRight" data-wow-delay="0.3s">
                            <div class="saaspik-icon-box-icon">
                                <img src="media/feature/61.png" alt="">
                            </div>
                            <div class="pixsass-icon-box-content">
                                <h3 class="pixsass-icon-box-title"><a href="#"><?php echo $text008 ?></a></h3>
                                <p>
                                    <?php echo $text009 ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="saaspik-icon-box-wrapper style-ten wow fadeInRight" data-wow-delay="0.5s">
                            <div class="saaspik-icon-box-icon">
                                <img src="media/feature/62.png" alt="">
                            </div>
                            <div class="pixsass-icon-box-content">
                                <h3 class="pixsass-icon-box-title"><a href="#"><?php echo $text010 ?></a></h3>

                                <p>
                                    <?php echo $text011 ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="saaspik-icon-box-wrapper style-ten wow fadeInRight" data-wow-delay="0.7s">
                            <div class="saaspik-icon-box-icon">
                                <img src="media/feature/63.png" alt="">
                            </div>
                            <div class="pixsass-icon-box-content">
                                <h3 class="pixsass-icon-box-title"><a href="#"><?php echo $text012 ?></a></h3>
                                <p>
                                    <?php echo $text013 ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="app-tabs">
            <div class="container-wrap bg-color-one">
                <div class="container">
                    <div id="pix-tabs" class="tabs-three">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="download-tab-content">
                                    <div class="section-title style-five">
                                        <h3 class="sub-title wow fadeInUp"><?php echo $text014 ?></h3>
                                        <p class="wow fadeInUp" data-wow-delay="0.5s">
                                            <?php echo $text015 ?>
                                        </p>
                                    </div>
                                    <ul id="pix-tabs-nav" class="wow fadeInUp" data-wow-delay="0.7s">
                                        <li>
                                            <a href="#feature_tab1">
                                                <?php echo $text016 ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#feature_tab2">
                                                <?php echo $text017 ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#feature_tab3">
                                                <?php echo $text018 ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#feature_tab4">
                                                <?php echo $text019 ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#feature_tab5">
                                                <?php echo $text020 ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="tabs-content-wrapper">
                                    <div id="pix-tabs-content" class="job-board-tabs-content wow fadeIn">
                                        <div id="feature_tab1" class="content">
                                            <div class="tab-image">
                                                <img src="media/at.png" alt="sasspik tab">
                                                <br/><br/>
                                                <span style="color: #555555;">
                                                    <?php echo $text021 ?>
                                                    <a href="accident-du-travail.php" class="pix-btn btn-info"><?php echo $text022 ?></a>
                                                </span>
                                            </div>
                                        </div>
                                        <div id="feature_tab2" class="content">
                                            <div class="tab-image">
                                                <img src="media/duerp.png" alt="sasspik tab">
                                                <br/><br/>
                                                <span style="color: #555555;">
                                                    <?php echo $text023 ?>
                                                    <a href="document-unique.php" class="pix-btn btn-info"><?php echo $text024 ?></a>
                                                </span>
                                            </div>
                                        </div>
                                        <div id="feature_tab3" class="content">
                                            <div class="tab-image">
                                                <img src="media/duerp.png" alt="sasspik tab">
                                                <br/><br/>
                                                <span style="color: #555555;">
                                                    <?php echo $text025 ?>
                                                    <a href="plan-de-prevention.php" class="pix-btn btn-info"><?php echo $text026 ?></a>
                                                </span>
                                            </div>
                                        </div>
                                        <div id="feature_tab4" class="content">
                                            <div class="tab-image">
                                                <img src="media/duerp.png" alt="sasspik tab">
                                                <br/><br/>
                                                <span style="color: #555555;">
                                                    <?php echo $text027 ?>
                                                    <a href="penibilite.php" class="pix-btn btn-info"><?php echo $text028 ?></a>
                                                </span>
                                            </div>
                                        </div>
                                        <div id="feature_tab5" class="content">
                                            <div class="tab-image">
                                                <img src="media/duerp.png" alt="sasspik tab">
                                                <br/><br/>
                                                <span style="color: #555555;">
                                                    <?php echo $text029 ?>
                                                    <br/><br/>
                                                    <a href="audit.php" class="pix-btn btn-info"><?php echo $text030 ?></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-bg-shape-wrapper">
                                        <div class="dot">
                                            <img src="media/tabs/dot.png" class="dot-shape" alt="saaspik">
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="545px" height="641px" style="opacity: 0.1">
                                            <defs>
                                                <linearGradient id="PSgrad_0" x1="86.603%" x2="0%" y1="0%" y2="50%">
                                                    <stop offset="0%" stop-color="rgb(252,72,140)" stop-opacity="0.96" />
                                                    <stop offset="100%" stop-color="rgb(26,191,104)" stop-opacity="0.96" />
                                                    <stop offset="100%" stop-color="rgb(126,63,244)" stop-opacity="0.96" />
                                                </linearGradient>

                                            </defs>
                                            <path fill-rule="evenodd" opacity="0.102" fill="rgb(126, 63, 244)" d="M1.000,160.999 C23.035,-96.001 800.875,-81.679 457.464,487.628 C425.619,540.421 352.186,601.676 289.000,627.999 C217.967,657.591 134.004,632.446 143.000,563.999 C171.000,350.964 -4.898,229.782 1.000,160.999 Z" />
                                            <path fill="url(#PSgrad_0)" d="M1.000,160.999 C23.035,-96.001 800.875,-81.679 457.464,487.628 C425.619,540.421 352.186,601.676 289.000,627.999 C217.967,657.591 134.004,632.446 143.000,563.999 C171.000,350.964 -4.898,229.782 1.000,160.999 Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- *** -->
        <section class="travel-layout">
            <div class="container">
                <div id="pix-tabs" class="tabs-four">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="tabs-content-wrapper wow fadeInUp">
                                <div id="pix-tabs-content" class="travel-tabs-content wow fadeIn">
                                    <div class="tab-image">
                                        <img src="media/action.png" alt="sasspik tab">
                                    </div>
                                </div>
                                <div class="tab-bg-shape-wrapper-two">
                                    <img src="media/tabs/tab_bg_shape.png" class="dot-shape-two" alt="saaspik">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="layout-content">
                                <div class="section-title style-eight">
                                    <h2 class="title wow fadeInUp" data-wow-delay="0.5s"><?php echo $text031 ?></h2>
                                    <p class="description wow fadeInUp" data-wow-delay="0.7s">
                                        <?php echo $text032 ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br/><br/>
        <!-- *** -->

        <!--=================================-->
        <!--=         Image Content         =-->
        <!--=================================-->
        <section id="app_image_content">
            <div class="container">
                <div class="app-image-content-wrapper-one">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="app-download-image">
                                <img src="media/eco.png" class="wow fadeInDown" alt="saaspik">
                                <br/>
                                <span style="font-size: 12px;">
                                    <?php echo $text033 ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="image-content-three app-content-wrap pl-85">
                                <div class="section-title">
                                    <h2 class="title wow fadeInUp">
                                        <?php echo $text034 ?>
                                    </h2>
                                    <ul class="list-items list-icon-arrow wow fadeInUp" data-wow-delay="0.4s">
                                        <li><?php echo $text035 ?></li>
                                        <li><?php echo $text036 ?></li>
                                        <li><?php echo $text037 ?></li>
                                        <li><?php echo $text038 ?></li>
                                        <li><?php echo $text039 ?></li>
                                        <li><?php echo $text040 ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="app-image-content-wrapper-two">
                    <div class="row align-items-center">
                        <div class="col-lg-7 pix-order-two">
                            <div class="image-content-three app-content-wrap pr-85">
                                <div class="section-title">
                                    <h2 class="title wow fadeInUp">
                                        <?php echo $text041 ?>
                                    </h2>

                                    <p class="wow fadeInUp" data-wow-delay="0.3s">
                                        <?php echo $text042 ?>
                                    </p>
                                    <ul class="list-items list-icon-arrow wow fadeInUp" data-wow-delay="0.4s">
                                        <li><?php echo $text043 ?></li>
                                        <li><?php echo $text044 ?></li>
                                        <li><?php echo $text045 ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="app-download-image">
                                <img src="media/support.png" class="wow fadeInDown" alt="saaspik">
                                <br/><br/>
                                <span style="font-size: 12px;">
                                    <?php echo $text046 ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once("demonstration.php") ?>
        <br/>
        <?php include_once("footer.php") ?>
    </div>
    <script src="dependencies/jquery/jquery.min.js"></script>
    <script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
    <script src="dependencies/swiper/js/swiper.min.js"></script>
    <script src="dependencies/jquery.appear/jquery.appear.js"></script>
    <script src="dependencies/wow/js/wow.min.js"></script>
    <script src="dependencies/countUp.js/countUp.min.js"></script>
    <script src="dependencies/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="dependencies/jquery.parallax-scroll/js/jquery.parallax-scroll.js"></script>
    <script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="dependencies/gmap3/js/gmap3.min.js"></script>
    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&#038;ver=2.1.6'></script>
    <script src="assets/js/header.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>