<!DOCTYPE html>
<!-- TODO: Confirm website language with DD -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="SPÅR - Designed for life outdoors.">

    <!-- TODO: Confirm title with DD-->
    <title>SPÅR | Designed for life outdoors</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,100..1000;1,100..1000&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/3Dviewer.css?id=<?= filemtime('css/newsletter.css'); ?>">
    <link rel="stylesheet" href="css/newsletter.css?id=<?= filemtime('css/newsletter.css'); ?>">
    <link rel="stylesheet" href="css/instagallery.css?id=<?= filemtime('css/instagallery.css'); ?>">
    <link rel="stylesheet" href="css/footer.css">

</head>

<body>
    <!-- banner section. 2 variants. change to eighter depending witch one we like-->

    <!--<div class="banner-container banner-fade">-->
    <div class="banner-container banner-scroll">
        <div class="banner-slide">
            <!-- duplicated bannergroups for sliding banner-->
            <div class="banner-group">

                <a href="#newsletter">
                    <span>10% på ditt första köp</span>
                    <span>30 dagars öppet köp</span>
                    <span>Design for life outdoors</span>
                </a>
            </div>
            <div class="banner-group" aria-hidden="true">

                <a href="#newsletter" tabindex="-1">
                    <span>10% på ditt första köp</span>
                    <span>30 dagars öppet köp</span>
                    <span>Design for life outdoors</span>
                </a>
            </div>
            <div class="banner-group" aria-hidden="true">

                <a href="#newsletter" tabindex="-1">
                    <span>10% på ditt första köp</span>
                    <span>30 dagars öppet köp</span>
                    <span>Design for life outdoors</span>
                </a>
            </div>
        </div>
    </div>

    <header class="site-header">
        <!-- TODO: input spar-logo -->
        <a href="index.php" class="logo-spar">
            <img src="/assets/testImages/layout-placeholder.svg" alt="SPÅR">
        </a>

        <div class="desktop-only">
            <a href="#">Dam</a>
            <a href="#">Herr</a>
            <a href="#">Rea</a>
            <a href="#">Utrustning</a>

        </div>

        <div class="header-icons">

            <p>Sök</p>
            <p>Varukorg (0)</p>


            <button class="hamburger-menu" type="button" aria-label="">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>


    </header>