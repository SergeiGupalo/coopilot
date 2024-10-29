<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link href="https://fonts.cdnfonts.com/css/canela-text-trial" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/neue-haas-grotesk-display-pro" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="./css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./css/jquery.formstyler.css">
    <link rel="stylesheet" href="./css/slick.css">
    <!-- <link rel="stylesheet" href="mobiles.css"> -->

    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <div class="header__top">
            <div class="header__logo">
                <a href="#">
                    <?php the_custom_logo(); ?>
                </a>
            </div>
            <div class="burger-icon" id="burger">

                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="header__nav">

                <nav id="menu" class="menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Work</a></li>
                        <li><a href="#">Benefits</a></li>
                        <li><a href="#">How we do it</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Plans</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Контакти -->
            <div class="header__contacts">
                <a class="book" href="">Book a call</a>
                <a class="us" href="">Contact us -></a>
            </div>
        </div>
        <!-- Мобільне меню -->
        <div class="mobile-menu" id="mobileMenu">
            <nav class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Benefits</a></li>
                    <li><a href="#">How we do it</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Plans</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
                <div class="burger__contacts">
                    <a class="menu__call" href="#">Book a call</a>
                    <a class="menu__contact" href="#">Contact us</a>
                </div>
            </nav>
            <div class="close-menu" id="closeMenu">x</div>
        </div>
    </header>