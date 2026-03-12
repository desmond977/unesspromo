<?php
session_start();
// remove all session variables
// unset($_SESSION['tracking']);
// if ((isset($_GET['ptrackinf']) && !isset($_SESSION['tracking'])) || ($_GET['ptrackinf'] != $_SESSION['tracking'])) {
//     $_SESSION['valid'] = true;
//     $_SESSION['timeout'] = time();
//     $_SESSION['tracking'] = $_GET['ptrackinf'];
// }

// $referral = (isset($_GET['ptrackinf']) || isset($_SESSION['tracking'])) ? $_SESSION['tracking'] : "";

// Read the JSON file containing list of Affiliators
$json = file_get_contents('names.json');

// Decode the JSON file
$json_data = json_decode($json, true);

?>
<!doctype html>
<html lang="en">


<!-- Mirrored from risingtheme.com/html/rokon-demo/rokon/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 10:38:34 GMT -->

<head>
    <meta charset="utf-8">
    <title>Uness Promo Offer </title>
    <meta name="description" content="Smart Kitchen Appliances for Faster Cooking, & Healthier Living">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/faviconex.png">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&amp;family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">

    <!-- Plugin css -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css"> -->

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '977424084045385');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=977424084045385&ev=PageView
    &noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->

</head>

<body>

    <!-- Start preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>

                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>

                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>

                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>

                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>

                </div>
            </div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- End preloader -->

    <!-- Start header area -->
    <header class="header__section">
        <!-- Start Header topbar -->
        <div class="header__topbar bg__black">
            <div class="container">
                <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                    <ul class="header__contact--info d-flex align-items-center">
                        <li class="header__contact--info__list text-white">
                            <svg class="header__contact--info__icon" xmlns="http://www.w3.org/2000/svg" width="15.797"
                                height="20.05" viewBox="0 0 512 512">
                                <path
                                    d="M451 374c-15.88-16-54.34-39.35-73-48.76-24.3-12.24-26.3-13.24-45.4.95-12.74 9.47-21.21 17.93-36.12 14.75s-47.31-21.11-75.68-49.39-47.34-61.62-50.53-76.48 5.41-23.23 14.79-36c13.22-18 12.22-21 .92-45.3-8.81-18.9-32.84-57-48.9-72.8C119.9 44 119.9 47 108.83 51.6A160.15 160.15 0 0083 65.37C67 76 58.12 84.83 51.91 98.1s-9 44.38 23.07 102.64 54.57 88.05 101.14 134.49S258.5 406.64 310.85 436c64.76 36.27 89.6 29.2 102.91 23s22.18-15 32.83-31a159.09 159.09 0 0013.8-25.8C465 391.17 468 391.17 451 374z"
                                    fill="currentColor" stroke="currentColor" stroke-miterlimit="10"
                                    stroke-width="32" />
                            </svg>
                            <a href="tel:02096233948">02096233948</a>
                        </li>
                        <li class="header__contact--info__list text-white">
                            <svg class="header__contact--info__icon" xmlns="http://www.w3.org/2000/svg" width="20.57"
                                height="13.13" viewBox="0 0 31.57 31.13">
                                <path
                                    d="M30.413,4H5.157C3.421,4,2.016,5.751,2.016,7.891L2,31.239c0,2.14,1.421,3.891,3.157,3.891H30.413c1.736,0,3.157-1.751,3.157-3.891V7.891C33.57,5.751,32.149,4,30.413,4Zm0,7.783L17.785,21.511,5.157,11.783V7.891l12.628,9.728L30.413,7.891Z"
                                    transform="translate(-2 -4)" fill="currentColor"></path>
                            </svg>
                            <a href="mailto:shop@shopextv.com">sales@Unesshub.com.ng</a>
                        </li>
                    </ul>
                    <div class="language__currency d-none d-lg-block">
                        <ul class="d-flex align-items-center">
                            <li class="language__currency--list">
                                <a class="language__switcher text-white" href="#">
                                    <span>ENG</span>
                                    <!--  <svg xmlns="http://www.w3.org/2000/svg" width="11.797" height="9.05" viewBox="0 0 9.797 6.05">
                                        <path  d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg> -->
                                </a>
                                <!-- <div class="dropdown__language">
                                    <ul>
                                        <li class="language__items"><a class="language__text" href="#">France</a></li>
                                        <li class="language__items"><a class="language__text" href="#">Russia</a></li>
                                        <li class="language__items"><a class="language__text" href="#">Spanish</a></li>
                                    </ul>
                                </div> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Header topbar -->

        <!-- Start main header -->
        <div class="main__header position__relative header__sticky">
            <div class="container">
                <div class="main__header--inner d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                            </svg>
                            <span class="visually-hidden">Offcanvas Menu Open</span>
                        </a>
                    </div>
                    <div class="main__logo">
                        <h1 class="main__logo--title"><a class="main__logo--link" href="unesshub.com.ng"><img
                                    class="main__logo--img" src="assets/img/logo/unesslogo nobg.png" alt="logo-img"
                                    style="height: 70px;"></a></h1>
                    </div>
                    <div class="header__menu d-none d-lg-block">
                        <nav class="header__menu--navigation">
                            <ul class="d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#home">Home </a>
                                </li>
                                <li class="header__menu--items mega__menu--items">
                                    <a class="header__menu--link" href="#details">Product Details </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#video">Video </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#buy"
                                        style="background: #d72323; padding: 0px 23px;border-radius: 5px;text-align: center;color: white;">Buy
                                        Now </a>
                                </li>
                                <!--                                 
                                <li class="header__menu--items">
                                    <a class="header__menu--link " href="#">Pages </a>
                                </li> -->
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#contact">Contact </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--  <div class="header__account">
                       
                    </div> -->
                </div>
            </div>
        </div>
        <!-- End main header -->

        <!-- Start Offcanvas header menu -->
        <div class="offcanvas-header" tabindex="-1">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="index.html">
                        <img src="assets/img/logo/unesslogo nobg.png" alt="Unesshub Logo" style="height: 89px;">
                    </a>
                    <button class="offcanvas__close--btn" data-offcanvas>close</button>
                </div>
                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="#home">Home</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="#">Shop</a>
                        </li>

                        <li class="header__menu--items">
                            <a class="header__menu--link" href="#buy">Buy Now </a>
                        </li>
                        <!--                         <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="#">Blog</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="#">Pages</a>
                        </li> -->
                        <!-- <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="about.html">About</a></li> -->
                        <!-- <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="contact.html">Contact</a></li> -->
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Offcanvas header menu -->
    </header>
    <!-- End header area -->

    <main class="main__content_wrapper">
        <!-- Start slider section -->
        <!-- <a href="#"></a> -->
        <section class="hero__slider--section slider__section--bg4" id="home" style="margin-top: 20px;">
            <div class="hero__slider--inner position__relative">
                <div class="hero__slider--activation swiper">
                    <div class="hero__slider--wrapper swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide hero__bg"
                            style="background-image: url('assets/img/huffman/huffmanovendesktop.png');">
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide hero__bg"
                            style="background-image: url('assets/img/huffman/huffmanairfryerdesktop.png');">
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide hero__bg"
                            style="background-image: url('assets/img/huffman/huffmankettledesktop.png');">
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide hero__bg"
                            style="background-image: url('assets/img/huffman/huffman_multiplefooddesktop.png');">
                        </div>

                    </div>

                    <!-- Pagination -->
                    <div class="slider__pagination style4 swiper-pagination"></div>
                </div>
            </div>
        </section>


        <!-- End slider section -->

        <!-- Start image with text section -->
        <section class="image__with--text__section section--padding" id="details">
            <div class="container">
                <div class="image__with--text__slider swiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="row row-cols-md-2 row-cols-1 align-items-center">
                                <div class="col">
                                    <div class="image__with--text__thumbnail">
                                        <img src="assets/img/huffman/huffmanairfryer.png" alt="airfryer">
                                    </div>
                                </div>
                                <div class="col">
                                <p  style="color: black;">CHOOSE 1 Or MANY OUR 4 HOT SELLING <br>PRODUCTS AT DISCOUNT PRICE!!</p>
                                    <div class="image__with--text__content">
                                        <h2 class="image__with--text__title mb-18" style="color: #ff9600;">
                                            HUFFMANs Airfryer
                                        </h2>
                                        <p class="image__with--text__desc mb-25">
                                            An oven, dehydrator, toaster, grill, and rotisserie — all in one.
                                        </p>
                                        <p class="image__with--text__desc">
                                            Enjoy healthier meals using little to no oil. Perfect for fries,
                                            fish, snacks, bread, corn, and more.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="row row-cols-md-2 row-cols-1 align-items-center">
                                <div class="col">
                                    <div class="image__with--text__thumbnail">
                                        <img src="assets/img/huffman/huffmanoven.png" alt="oven / microwave ">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="image__with--text__content">
                                        <h2 class="image__with--text__title mb-18" style="color: #ff9600;">
                                            Microwave Oven
                                        </h2>
                                        <p class="image__with--text__desc mb-25">
                                            High-intensity hot air circulation ensures fast and even cooking.
                                        </p>
                                        <p class="image__with--text__desc">
                                            Crispy outside, tender inside — without excess oil.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="row row-cols-md-2 row-cols-1 align-items-center">
                                <div class="col">
                                    <div class="image__with--text__thumbnail">
                                        <img src="assets/img/huffman/huffmankettle.png" alt="airfryer durability">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="image__with--text__content" style="color: #ff9600;">
                                        <h2 class="image__with--text__title mb-18">
                                            Durable & Stylish
                                        </h2>
                                        <p class="image__with--text__desc mb-25">
                                            Built with premium materials for long-lasting performance.
                                        </p>
                                        <p class="image__with--text__desc">
                                            Designed to fit perfectly into modern kitchens.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <img class="image__with--text__position--shape display-block"
                src="assets/img/other/image-with-text-section-shape.webp" alt="shape">
        </section>

        <!-- End image with text section -->

        <!-- Start about section -->
        <section class="about__section section--padding border-bottom pt-0">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 align-items-center">
                    <div class="col">
                        <div class="about__content">
                            <h2 class="about__content--title mb-18">Unesshub is the Distributor of Huffmans Appliances
                                in Nigeria.

                                Payment On Delivery Abuja only!</h2>
                            <div class="about__content--step mb-25">
                                <ul class="mb-20">
                                    <li class="about__content--desc__list">Payment On Delivery Abuja only!</li>
                                    <li class="about__content--desc__list">ORDER ORIGINAL ONLY FROM UNESSHUB.</li>
                                </ul>
                                <p class="about__content--desc style2">Unesshub is the Distributor of The Huffmans
                                    Eletric kettle in Nigeria.
                                    Payment On Delivery Abuja only! . Order original only from Unesshub and enjoy
                                    Quality products No story !! . You are guaranteed secure payment options &
                                    dedicated after-sales support.</p>
                            </div>

                            <a class="about__content--btn primary__btn" href="#buy">Buy Now</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="about__thumbnail">
                            <iframe width="85%" height="600" src="https://www.youtube.com/embed/L2NoKZ78yKA"
                                title="YouTube Shorts video" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End about section -->


        <!-- Start newsletter section -->

        <!-- End newsletter section -->

        <!-- Start product details section -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <section>
                <section class="product__details--section section--padding" id="buy" style="background: #eeeeee4a;">
                    <div class="container">
                        <div class="section__heading text-center mb-50">
                            <h2 class="section__heading--maintitle text__secondary mb-10">Trending Now</h2>
                            <p class="section__heading--desc">Unesshub is the Distributor of The Huffmans Eletric kettle
                                in Nigeria.
                                Payment On Delivery Abuja only! .</p>
                        </div>
                        <div class="product__details--inner">
                            <div class="row row-cols-lg-2 row-cols-md-2">
                                <div class="col">
                                    <div class="product__details--media d-flex">
                                        <div class="product__media--nav swiper" style="margin: 5px;">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="product__media--nav__items">
                                                        <img class="product__media--nav__items--img"
                                                            src="assets/img/huffman/huffmanairfryer.png"
                                                            alt="product-nav-img">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="product__media--nav__items">
                                                        <img class="product__media--nav__items--img"
                                                            src="assets/img/huffman/huffmanoven.png"
                                                            alt="product-nav-img">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="product__media--nav__items">
                                                        <img class="product__media--nav__items--img"
                                                            src="assets/img/huffman/huffmankettle.png"
                                                            alt="product-nav-img">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="product__media--nav__items">
                                                        <img class="product__media--nav__items--img"
                                                            src="assets/img/huffman/huffman_multiplefood.png"
                                                            alt="product-nav-img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__media--right">
                                            <div class="product__media--preview  swiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="product__media--preview__items">
                                                            <a class="product__media--preview__items--link glightbox"
                                                                data-gallery="product-media-preview"
                                                                href="assets/img/huffman/huffmanairfryer.png"><img
                                                                    class="product__media--preview__items--img"
                                                                    src="assets/img/huffman/huffmanairfryer.png"
                                                                    alt="product-media-img"></a>
                                                            <div class="product__badge">
                                                                <span class="product__badge--items sale">New</span>
                                                            </div>
                                                            <div class="product__media--view__icon">
                                                                <a class="product__media--view__icon--link glightbox"
                                                                    href="assets/img/huffman/huffmanairfryer.png"
                                                                    data-gallery="product-media-preview">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="18" height="18" viewBox="0 0 18 18">
                                                                        <image width="18" height="18"
                                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABHNCSVQICAgIfAhkiAAAAVhJREFUOE/llLtKA0EUhjdY+BD6ABaW3tIYTWEhiKKCCGIgqGhCgqXvoQFRQdBGERQvUaJFgilVRHwF8RWCWqzfD7OyjrPZ7R342HP2nP1n58yZSfm+/+F53ivUoAseoALtxirBIXiHLPSlEHrBaMGyEYzR+BXuwduHTgltYNzBKSxAM6HSAHknMAf9EqpjjEIGzmAK7mPE0sSrRkQ/cSWhIkZQE4kdwzxoAteQiCbMgeqqsSIhO3nEJK7xPLKC0/h7oT/5CbuEFByDCShDeKZNfC3lwp49SihiVdGv/6GQdm4WSlaxt/AvQ9vedteCZlsn68Aqr/pLPfenaVVsHcBt80HQbIv4txF75GravIQafKClDMKNq9kcgspXd0+CjlM1OLTXZu1LPNVwScYwSYcwA2kJPWJ8QQGekyiEcnqxd6BDQp8YupPOoRueYDdGME9c18gbjMv+BiJYeHc6xpjnAAAAAElFTkSuQmCC" />
                                                                    </svg>
                                                                    <span class="visually-hidden">Media Gallery</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="product__media--preview__items">
                                                            <a class="product__media--preview__items--link glightbox"
                                                                data-gallery="product-media-preview"
                                                                href="assets/img/huffman/huffmanoven.png"><img
                                                                    class="product__media--preview__items--img"
                                                                    src="assets/img/huffman/huffmanoven.png"
                                                                    alt="product-media-img"></a>
                                                            <div class="product__badge">
                                                                <span class="product__badge--items sale">New</span>
                                                            </div>
                                                            <div class="product__media--view__icon">
                                                                <a class="product__media--view__icon--link glightbox"
                                                                    href="assets/img/huffman/huffmanoven.png"
                                                                    data-gallery="product-media-preview">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="18" height="18" viewBox="0 0 18 18">
                                                                        <image width="18" height="18"
                                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABHNCSVQICAgIfAhkiAAAAVhJREFUOE/llLtKA0EUhjdY+BD6ABaW3tIYTWEhiKKCCGIgqGhCgqXvoQFRQdBGERQvUaJFgilVRHwF8RWCWqzfD7OyjrPZ7R342HP2nP1n58yZSfm+/+F53ivUoAseoALtxirBIXiHLPSlEHrBaMGyEYzR+BXuwduHTgltYNzBKSxAM6HSAHknMAf9EqpjjEIGzmAK7mPE0sSrRkQ/cSWhIkZQE4kdwzxoAteQiCbMgeqqsSIhO3nEJK7xPLKC0/h7oT/5CbuEFByDCShDeKZNfC3lwp49SihiVdGv/6GQdm4WSlaxt/AvQ9vedteCZlsn68Aqr/pLPfenaVVsHcBt80HQbIv4txF75GravIQafKClDMKNq9kcgspXd0+CjlM1OLTXZu1LPNVwScYwSYcwA2kJPWJ8QQGekyiEcnqxd6BDQp8YupPOoRueYDdGME9c18gbjMv+BiJYeHc6xpjnAAAAAElFTkSuQmCC" />
                                                                    </svg>
                                                                    <span class="visually-hidden">Media Gallery</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="product__media--preview__items">
                                                            <a class="product__media--preview__items--link glightbox"
                                                                data-gallery="product-media-preview"
                                                                href="assets/img/huffman/huffmankettle.png"><img
                                                                    class="product__media--preview__items--img"
                                                                    src="assets/img/huffman/huffmankettle.png"
                                                                    alt="product-media-img"></a>
                                                            <div class="product__badge">
                                                                <span class="product__badge--items sale">New</span>
                                                            </div>
                                                            <div class="product__media--view__icon">
                                                                <a class="product__media--view__icon--link glightbox"
                                                                    href="assets/img/huffman/huffmankettle.png"
                                                                    data-gallery="product-media-preview">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="18" height="18" viewBox="0 0 18 18">
                                                                        <image width="18" height="18"
                                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABHNCSVQICAgIfAhkiAAAAVhJREFUOE/llLtKA0EUhjdY+BD6ABaW3tIYTWEhiKKCCGIgqGhCgqXvoQFRQdBGERQvUaJFgilVRHwF8RWCWqzfD7OyjrPZ7R342HP2nP1n58yZSfm+/+F53ivUoAseoALtxirBIXiHLPSlEHrBaMGyEYzR+BXuwduHTgltYNzBKSxAM6HSAHknMAf9EqpjjEIGzmAK7mPE0sSrRkQ/cSWhIkZQE4kdwzxoAteQiCbMgeqqsSIhO3nEJK7xPLKC0/h7oT/5CbuEFByDCShDeKZNfC3lwp49SihiVdGv/6GQdm4WSlaxt/AvQ9vedteCZlsn68Aqr/pLPfenaVVsHcBt80HQbIv4txF75GravIQafKClDMKNq9kcgspXd0+CjlM1OLTXZu1LPNVwScYwSYcwA2kJPWJ8QQGekyiEcnqxd6BDQp8YupPOoRueYDdGME9c18gbjMv+BiJYeHc6xpjnAAAAAElFTkSuQmCC" />
                                                                    </svg>
                                                                    <span class="visually-hidden">Media Gallery</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="product__media--preview__items">
                                                            <a class="product__media--preview__items--link glightbox"
                                                                data-gallery="product-media-preview"
                                                                href="assets/img/huffman/huffman_multiplefood.png"><img
                                                                    class="product__media--preview__items--img"
                                                                    src="assets/img/huffman/huffman_multiplefood.png"></a>
                                                            <div class="product__badge">
                                                                <span class="product__badge--items sale">New</span>
                                                            </div>
                                                            <div class="product__media--view__icon">
                                                                <a class="product__media--view__icon--link glightbox"
                                                                    href="assets/img/huffman/huffman_multiplefood.png"
                                                                    data-gallery="product-media-preview">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="18" height="18" viewBox="0 0 18 18">
                                                                        <image width="18" height="18"
                                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABHNCSVQICAgIfAhkiAAAAVhJREFUOE/llLtKA0EUhjdY+BD6ABaW3tIYTWEhiKKCCGIgqGhCgqXvoQFRQdBGERQvUaJFgilVRHwF8RWCWqzfD7OyjrPZ7R342HP2nP1n58yZSfm+/+F53ivUoAseoALtxirBIXiHLPSlEHrBaMGyEYzR+BXuwduHTgltYNzBKSxAM6HSAHknMAf9EqpjjEIGzmAK7mPE0sSrRkQ/cSWhIkZQE4kdwzxoAteQiCbMgeqqsSIhO3nEJK7xPLKC0/h7oT/5CbuEFByDCShDeKZNfC3lwp49SihiVdGv/6GQdm4WSlaxt/AvQ9vedteCZlsn68Aqr/pLPfenaVVsHcBt80HQbIv4txF75GravIQafKClDMKNq9kcgspXd0+CjlM1OLTXZu1LPNVwScYwSYcwA2kJPWJ8QQGekyiEcnqxd6BDQp8YupPOoRueYDdGME9c18gbjMv+BiJYeHc6xpjnAAAAAElFTkSuQmCC" />
                                                                    </svg>
                                                                    <span class="visually-hidden">Media Gallery</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="swiper__nav--btn swiper-button-next"></div>
                                                <div class="swiper__nav--btn swiper-button-prev"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__details--info">
                                        <h3 class="product__details--info__title mb-15" id="productTitle">
                                            4 Hot selling products
                                        </h3>


                                        <div class="product__details--info__price mb-10" id="productPrice">
                                            <span class="current__price"></span>
                                            <span class="old__price"></span>
                                        </div>


                                        <div class="product__variant">
                                            <div class="product__variant--list mb-15">
                                                <!-- <fieldset class="variant__input--fieldset"> -->
                                                <legend class="product__variant--title mb-8">Color :
                                                    <div class="checkout__input">
                                                        <select name="color" id="colorSelect"></select>

                                                    </div>

                                                    <div class="product__variant--list mb-15">
                                                    
                                                    <!-- <fieldset class="variant__input--fieldset"> -->
                                              
                                                    <legend class="product__variant--title mb-8">Quantity :
                                                    <div class="checkout__input">
                                                        <select name="quantity" id="quantityselect"></select>

                                                    </div>
                                               
                                                 </legend>
                                            </div>

                                            



                                            <p class="product__details--info__meta--list" style="color: #d72323">Please
                                                provide your delivery details in the form below.</p>
                                            <div class="product__variant--list mb-15">
                                                <div class="product__details--info__meta">
                                                    
                                                <div id="productInfo"></div>

                                                    <p class="product__details--info__meta--list" style=" color: #0a0707ff;">
                                                        <strong>Vendor:</strong> <span>Unesshub</span>
                                                    </p>
                                                    
                                                    

                                                </div>
                                            </div>

                                        </div>
                                        
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>
        <!-- End product details section -->

        <!-- Start product details section -->
        <section class="product__details--section section--padding buy pt-0 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main checkout__mian">

                            <div class="checkout__content--step section__shipping--address">
                                <div class="section__header mb-25">
                                    <h2 class="section__header--title h3">Contact information/Delivery Details</h2>
                                </div>
                                <div class="section__shipping--address__content">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                            <div class="checkout__input--list ">
                                                <label class="checkout__input--label mb-5" for="input1">Fist Name <span
                                                        class="checkout__input--label__star">*</span></label>
                                                <input class="checkout__input--field border-radius-5"
                                                    placeholder="First name" id="fname" type="text" name="fname"
                                                    required>
                                                <input class="checkout__input--field border-radius-5" id="referral"
                                                    type="hidden" name="referral" value="<?= $referral; ?>">
                                                <input class="checkout__input--field border-radius-5" id="price_600w"
                                                    type="hidden" name="price_600w" value="54950">
                                                <input class="checkout__input--field border-radius-5" id="price_900w"
                                                    type="hidden" name="price_900w" value="54950">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                            <div class="checkout__input--list">
                                                <label class="checkout__input--label mb-5" for="input2">Last Name <span
                                                        class="checkout__input--label__star">*</span></label>
                                                <input class="checkout__input--field border-radius-5"
                                                    placeholder="Last name" id="lname" type="text" name="lname"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                            <div class="checkout__input--list ">
                                                <label class="checkout__input--label mb-5" for="input1">Email Address
                                                    <span class="checkout__input--label__star">*</span></label>
                                                <input class="checkout__input--field border-radius-5"
                                                    placeholder="Email Address" id="email_address" type="email"
                                                    name="email_address" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                            <div class="checkout__input--list">
                                                <label class="checkout__input--label mb-5" for="input2">Phone Number
                                                    <span class="checkout__input--label__star">*</span></label>
                                                <input class="checkout__input--field border-radius-5"
                                                    placeholder="Phone Number" id="phone_number" type="tel"
                                                    name="phone_number" required pattern="(\+234|0)?[789]\d{9}" " >
                                            </div>
                                        </div>
                                        <div class=" col-12 mb-20">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-5" for="input4">Address
                                                        <span class="checkout__input--label__star">*</span></label>
                                                    <input class="checkout__input--field border-radius-5"
                                                        placeholder="Street, Apartment, Suite, etc."
                                                        id="delivery_address" type="text" name="delivery_address"
                                                        required>
                                                </div>
                                            </div>
                                            <!--  <div class="col-12 mb-20">
                                                <div class="checkout__input--list">
                                                    <input class="checkout__input--field border-radius-5" placeholder="Apartment, suite, etc. (optional)"  type="text">
                                                </div>
                                            </div> -->


                                            <div class="col-lg-12 mb-20">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-5"
                                                        for="country">Country/region
                                                        <span class="checkout__input--label__star">*</span></label>
                                                    <div class="checkout__input--select select">
                                                        <select class="checkout__input--select__field border-radius-5"
                                                            id="country" required>
                                                            <option value="Nigeria">Nigeria</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-5" for="input2">State <span
                                                            class="checkout__input--label__star">*</span></label>

                                                    <select onchange="toggleLGA(this);" name="state" id="state" title=""
                                                        class="checkout__input--select__field border-radius-5" required>
                                                        <option value="" selected="selected">- Select -</option>
                                                        <option label="Abia" value="Abia">Abia</option>
                                                        <option label="Adamawa" value="Adamawa">Adamawa</option>
                                                        <option label="Akwa Ibom" value="AkwaIbom">Akwa Ibom</option>
                                                        <option label="Anambra" value="Anambra">Anambra</option>
                                                        <option label="Bauchi" value="Bauchi">Bauchi</option>
                                                        <option label="Bayelsa" value="Bayelsa">Bayelsa</option>
                                                        <option label="Benue" value="Benue">Benue</option>
                                                        <option label="Borno" value="Borno">Borno</option>
                                                        <option label="Cross River" value="CrossRiver">Cross River
                                                        </option>
                                                        <option label="Delta" value="Delta">Delta</option>
                                                        <option label="Ebonyi" value="Ebonyi">Ebonyi</option>
                                                        <option label="Edo" value="Edo">Edo</option>
                                                        <option label="Ekiti" value="Ekiti">Ekiti</option>
                                                        <option label="Enugu" value="Enugu">Enugu</option>
                                                        <option label="Federal Capital Territory" value="FCT">Federal
                                                            Capital Territory</option>
                                                        <option label="Gombe" value="Gombe">Gombe</option>
                                                        <option label="Imo" value="Imo">Imo</option>
                                                        <option label="Jigawa" value="Jigawa">Jigawa</option>
                                                        <option label="Kaduna" value="Kaduna">Kaduna</option>
                                                        <option label="Kano" value="Kano">Kano</option>
                                                        <option label="Katsina" value="Katsina">Katsina</option>
                                                        <option label="Kebbi" value="Kebbi">Kebbi</option>
                                                        <option label="Kogi" value="Kogi">Kogi</option>
                                                        <option label="Kwara" value="Kwara">Kwara</option>
                                                        <option label="Lagos" value="Lagos">Lagos</option>
                                                        <option label="Nasarawa" value="Nasarawa">Nasarawa</option>
                                                        <option label="Niger" value="Niger">Niger</option>
                                                        <option label="Ogun" value="Ogun">Ogun</option>
                                                        <option label="Ondo" value="Ondo">Ondo</option>
                                                        <option label="Osun" value="Osun">Osun</option>
                                                        <option label="Oyo" value="Oyo">Oyo</option>
                                                        <option label="Plateau" value="Plateau">Plateau</option>
                                                        <option label="Rivers" value="Rivers">Rivers</option>
                                                        <option label="Sokoto" value="Sokoto">Sokoto</option>
                                                        <option label="Taraba" value="Taraba">Taraba</option>
                                                        <option label="Yobe" value="Yobe">Yobe</option>
                                                        <option label="Zamfara" value="Zamfara">Zamfara</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-5" for="input2">L.G.A <span
                                                            class="checkout__input--label__star">*</span></label>

                                                    <select name="lga" id="lga"
                                                        class="checkout__input--select__field border-radius-5  select-lga"
                                                        required>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="order-notes mb-20">
                                    <label class="checkout__input--label mb-5" for="order">Order Notes</label>
                                    <textarea class="checkout__notes--textarea__field border-radius-5" id="order"
                                        placeholder="Notes about your order, e.g. special notes for delivery."
                                        spellcheck="false" name="note"></textarea>
                                </div>
                                <div class="checkout__content--step__footer d-flex align-items-center">

                                    <div class="product__variant--list mb-15">

                                        <!-- <button class="variant__buy--now__btn primary__btn" type="submit">Buy it now</button> -->
                                        <input type="submit" class="variant__buy--now__btn primary__btn" name="buynow"
                                            value="Buy it now">
                                    </div>
                                    <!-- <a class="continue__shipping--btn primary__btn border-radius-5" href="index.html">Buy It  Now</a> -->
                                    <!-- <a class="previous__link--content" href="cart.html">Return to cart</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        </section>
        </form>

        <!-- Start deals section -->
        <section class="deals__section deals__section--bg3 section--padding pt-0" id="contact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7 col-sm-order">
                        <div class="deals__content">
                            <h2 class="deals__content--title text-red mb-20" style="color: #f44336">Talk to Us:
                                08104889570</h2>
                            <h2 class="deals__content--title text-white mb-20">SUness Hub is the Distributor of Orginal Kitchen Appliances in Nigeria.
                                <br>Enjoy Payment on Delivery Abuja Only
                                <br>ORDER ORIGINAL ONLY FROM UNESSHUB.
                            </h2>
                            <!--  <p class="deals__content--desc text-white mb-20">Beyond more stoic this along goodness this sed wow manatee mongos 
                                flusterd impressive man farcrud opened inside owin punitively 
                                wasteful telling spransac coldly spokeles.</p>    
                            <div class="deals__content--price mb-28">
                                <span class="old__price"> $30.00</span>
                                <span class="price__divided"></span>
                                <span class="current__price">$25.00</span>
                            </div> -->
                            <div class="deals__countdown d-flex mb-50" data-countdown="Apr 15, 2026 00:00:00"></div>
                            <a class="deals__content--btn primary__btn" href="#buy">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="deals__thumbnail--style3 text-right">
                            <img class="deals__thumbnail--style3__img" src="assets/img/product/download.png"
                                alt="deals-thumb">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End deals section -->

    </main>

    <!-- Start footer section -->
    <footer class="footer__section footer__bg">
        <div class="container">

            <div class="footer__bottom d-flex justify-content-between align-items-center">
                <p class="copyright__content  m-0">Copyright © <?php echo date('Y'); ?> <a
                        class="copyright__content--link" href="#">UnessHub Official</a> . All Rights Reserved.</p>
                <!-- <p class="footer__bottom--desc"><a href="privacy-policy.html">Term & condition</a> , <a href="privacy-policy.html">Privacy Policy</a></p> -->
            </div>
        </div>
    </footer>

    <!-- Scroll top bar -->
    <button aria-label="scroll top btn" id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
            viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
                d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>

    <!-- All Script JS Plugins here  -->
    <!-- <script src="assets/js/vendor/popper.js" defer="defer"></script> -->
    <!-- <script src="assets/js/vendor/bootstrap.min.js" defer="defer"></script> -->

    <script src="assets/js/plugins/swiper-bundle.min.js" defer="defer"></script>
    <script src="assets/js/plugins/glightbox.min.js" defer="defer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script src="assets/js/lga.min.js"></script>
    <!-- Customscript js -->
    <script src="assets/js/script.js" defer="defer"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#900w, #900p").hide();
            var sz = $("#size").val();
            $("#size").change(function() {
                if (this.value == '900W') {
                    $("#900w, #900p").show();
                    $("#600w, #600p").hide();
                } else {
                    $("#600w, #600p").show();
                    $("#900w, #900p").hide();
                }
            });
        });
    </script>


</body>

</html>
<?php
// if (isset($_POST['buynow'])) {
//     // var_dump($_POST);

//     //URL
//     // ob_flush();
//     $url = "https://unilogix.online/shopex/service/v4_1/rest.php";
//     $username = "affiliate";
//     $password = "Pa22w0rd@123!aff";

//     function call($method, $parameters, $url)
//     {
//         ob_start();
//         $curl_request = curl_init();

//         curl_setopt($curl_request, CURLOPT_URL, $url);
//         curl_setopt($curl_request, CURLOPT_POST, 1);
//         curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
//         curl_setopt($curl_request, CURLOPT_HEADER, 1);
//         curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
//         curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
//         curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);

//         $jsonEncodedData = json_encode($parameters);

//         $post = array(
//             "method" => $method,
//             "input_type" => "JSON",
//             "response_type" => "JSON",
//             "rest_data" => $jsonEncodedData
//         );

//         curl_setopt($curl_request, CURLOPT_POSTFIELDS, $post);
//         $result = curl_exec($curl_request);

//         curl_close($curl_request);
//         $result = explode("\r\n\r\n", $result, 2);

//         $response = json_decode($result[1]);
//         ob_end_flush();

//         return $response;
//     }

//     //login ----------------------------------------- 
//     $login_parameters = array(
//         "user_auth" => array(
//             "user_name" => $username,
//             "password" => md5($password),
//             "version" => "1"
//         ),
//         "application_name" => "RestTest",
//         "name_value_list" => array(),
//     );

//     $login_result = call("login", $login_parameters, $url);

//     //get session id
//     $session_id = $login_result->id;
//     // die(var_dump($session_id));
//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];
//     $phone_number = $_POST['phone_number'];
//     $email_address = $_POST['email_address'];
//     $delivery_address = $_POST['delivery_address'];
//     $state = $_POST['state'];
//     $lga = $_POST['lga'];
//     $note = $_POST['note'];

//     $price = 170995;

//     $amount = $_POST['quantity'] * $price;
//     $referral = $_POST['referral'];

//     $qty = $_POST['quantity'];

//     $set_entry_parameters = array(
//         //session id
//         "session" => $session_id,

//         //The name of the module
//         "module_name" => "Contacts",

//         //Record attributes
//         "name_value_list" => array(
//             array("name" => "first_name", "value" => $fname),
//             array("name" => "last_name", "value" => $lname),
//             array("name" => "phone_mobile", "value" => $phone_number),
//             array("name" => "email1", "value" => $email_address),

//             array("name" => "cookex_4in1_c", "value" => $qty),

//             array("name" => "del_state", "value" => $state),

//             array("name" => "primary_address_city", "value" => $lga),

//             array("name" => "primary_address_street", "value" =>$delivery_address),

//             array("name" => "description", "value" =>$note),




//             array("name" => "total_amount", "value" => $amount),
//             array("name" => "affiliate_ref", "value" => $referral),
//             array("name" => "call_direction", "value" => 'Landing Page'),
//             array("name" => "tv_channels", "value" => 'Landing Page'),
//             array("name" => "pay_method", "value" => 'Bank Transfer'),
//             // Pending
//             array("name" => "payment_status", "value" => 'Pending'),
//         ),
//     );

//     $set_entry_result = call("set_entry", $set_entry_parameters, $url);
//     if ($set_entry_result) {
//         echo "<script type='text/javascript'>window.top.location='https://shop.shopextv.com/cookex/success.php?cost=".$amount."';</script>";
//         exit;
//     }
// }
?>