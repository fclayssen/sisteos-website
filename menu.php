<header class="site-header header-eight header_trans-fixed" data-top="992">
    <div class="container">
        <div class="header-inner">
            <div class="toggle-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <div class="site-mobile-logo">
                <a href="index.html" class="logo">
                    <img src="media/sisteos.png" alt="site logo" class="main-logo">
                    <img src="media/sisteos.png" alt="site logo" class="sticky-logo">
                </a>
            </div>

            <nav class="site-nav">
                <div class="close-menu">
                    <span>Fermer</span>
                    <i class="ei ei-icon_close"></i>
                </div>

                <div class="site-logo">
                    <a href="index.php" class="logo">
                        <img src="media/sisteos.png" alt="site logo" class="main-logo">
                        <img src="media/sisteos.png" alt="site logo" class="sticky-logo">
                    </a>
                </div>

                <div class="menu-wrapper" data-top="992">
                    <ul class="site-main-menu">
                        <li><a style="font-size: 12px;" href="accueil"><?php echo $text102 ?></a></li>
                        <li><a style="font-size: 12px;" href="document-unique"><?php echo $text017 ?></a></li>
                        <li><a style="font-size: 12px;" href="accident-du-travail"><?php echo $text016 ?></a></li>
                        <li class="menu-item-has-children">
                            <a href="#" style="font-size: 12px;"><?php echo $text103 ?></a>
                            <ul class="sub-menu">
                                <li><a style="font-size: 12px;" href="plan-de-prevention"><?php echo $text018 ?></a></li>
                                <li><a href="penibilite" style="font-size: 12px;"><?php echo $text019 ?></a></li>
                                <li><a href="audit" style="font-size: 12px;"><?php echo $text020 ?></a></li>
                            </ul>
                        </li>
                        <?php
                            $defaultLang = "french";
                            if (isset($_SESSION['myLang'])) {
                                if ($_SESSION['myLang'] == "fr")
                                    $defaultLang = "french";
                                else
                                    if ($_SESSION['myLang'] == "en")
                                        $defaultLang = "english";
                                    else
                                        if ($_SESSION['myLang'] == "es")
                                            $defaultLang = "spain";
                            }
                        ?>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0);"><img src="media/<?php echo $defaultLang ?>.png" width="24"></a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0);" onclick="document.langForm.langTitle.value = 'fr';document.langForm.submit();" style="font-size: 12px;"><img src="media/french.png" width="24"> Français</a></li>
                                <li><a href="javascript:void(0);" onclick="document.langForm.langTitle.value = 'en';document.langForm.submit();" style="font-size: 12px;"><img src="media/english.png" width="24"> English</a></li>
                                <li><a href="javascript:void(0);" onclick="document.langForm.langTitle.value = 'es';document.langForm.submit();" style="font-size: 12px;"><img src="media/spain.png" width="24"> Espanol</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="nav-right">
                    <a href="contact" class="nav-btn"><?php echo $text081 ?></a>
                </div>

            </nav>
        </div>
    </div>
</header>

<form method="post" action="<?php echo $pageName ?>" name="langForm">
    <input type="hidden" name="langTitle" value="">
</form>