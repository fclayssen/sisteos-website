<?php
    if (isset($_POST['C1'])) {
        $file_pointer = fopen($_POST['C3'] . ".contact", 'x+');
        fwrite($file_pointer, "Prénom et Nom : " . $_POST['C1'] . "\n");
        fwrite($file_pointer, "Téléphone : " . $_POST['C2'] . "\n");
        fwrite($file_pointer, "Société : " . $_POST['C3'] . "\n");
        fwrite($file_pointer, "Email : " . $_POST['C4'] . "\n");
        fwrite($file_pointer, "Message :\n");
        fwrite($file_pointer,       $_POST['C5']);
        fclose($file_pointer);
    }
?>
<!DOCTYPE html>
<html lang="fr">
<?php include_once("header.php") ?>
<body id="home-version-6" class="home-version-6" data-style="default">
    <?php include_once("loader.php") ?>
    <div id="main_content">
        <?php include_once("menu.php") ?>
        <br/><br/><br/><br/>
        <section class="banner banner-eight">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banne-content-wrapper-eight">
                            <h1 class="banner-title wow fadeInUp" data-wow-delay="0.3s">
                                <span>Nous Contacter</span>
                            </h1>
                            <h3 class="subtitle wow fadeInUp"><span>T&eacute;l&eacute;phone</span>05 54 54 65 57</h3>
                            <h3 class="subtitle wow fadeInUp"><span>Email</span>contact@sisteos.com</h3>
                            <p class="description wow fadeInUp" data-wow-delay="0.5s">

                                <?php if (isset($_POST['C1'])) { ?>

                                    <p class="description wow">
                                        <strong>
                                            Votre demande a bien été enregistrée.<br/>
                                            Nos équipes commerciales vous contacteront rapidement.
                                        </strong>
                                    </p>

                                <?php } else { ?>

                                    <form action="contact" method="post">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="C1" placeholder="Prénom et Nom" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="C2" placeholder="Numéro de Téléphone">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" name="C3" placeholder="Société" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="email" name="C4" placeholder="Adresse Email" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea rows="2" name="C5" placeholder="Votre Message"></textarea>
                                            </div>
                                        </div>

                                        <button type="submit" class="pix-btn submit-btn">
                                            <span class="btn-text">Envoyer le Message</span>
                                        </button>

                                    </form>

                                <?php } ?>

                            </p>
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

        <?php include_once("demonstration.php") ?>
        <?php include_once("team.php") ?>
        <?php include_once("clients.php") ?>
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