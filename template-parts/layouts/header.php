<?php $projectName = "VR360"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="assets/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="assets/dist/js/uikit.min.js"></script>
    <script src="assets/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <header class="header uk-position-z-index-high <?= (isset($isHome) && $isHome)? 'uk-position-top' : '' ?>">
        <nav class="header__navContainer uk-navbar-container uk-navbar-transparent" uk-sticky>
            <div class="uk-container uk-container-expand">
                <div uk-navbar>

                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item uk-hidden@l">
                            <a href="#offcanvas-flip" uk-toggle="" class="hamburger" role="button">
                                <span class="hamburger__line hamburger__line--top"></span>
                                <span class="hamburger__line hamburger__line--center"></span>
                                <span class="hamburger__line hamburger__line--bottom"></span>
                            </a>
                        </div>
                        <div id="offcanvas-flip" class="header__offcanvas" uk-offcanvas="flip: true; overlay: true">
                            <div class="uk-offcanvas-bar header__offcanvas__bar uk-flex uk-flex-column">
                                <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                                    <?php require "template-parts/layouts/menu.php"; ?>
                                </ul>

                            </div>
                        </div>
                        <a class="uk-navbar-item uk-logo uk-visible@l" href="." aria-label="Back to Home"><img src="images/logo-vr360-f.webp" alt=""></a>
                    </div>
                    <div class="uk-navbar-center uk-hidden@l">
                        <a class="uk-navbar-item uk-logo" href="." aria-label="Back to Home"><img src="images/logo-vr360-f.webp" alt=""></a>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="header__nav uk-navbar-nav uk-visible@l">
                            <li><a href="#" uk-icon="icon: home"></a></li>
                            <?php require "template-parts/layouts/menu.php"; ?>
                        </ul>
                        <div>
                            <a class="uk-navbar-toggle text-3161C2" href uk-search-icon></a>
                            <div class="uk-navbar-dropdown" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !.uk-navbar; flip: false">

                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-expand">
                                        <form class="uk-search uk-search-navbar uk-width-1-1">
                                            <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search" autofocus>
                                        </form>
                                    </div>
                                    <div class="uk-width-auto">
                                        <a class="uk-drop-close" href="#" uk-close></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>