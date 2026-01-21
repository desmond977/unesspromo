<?php
session_start();
// remove all session variables
// unset($_SESSION['tracking']);
if ((isset($_GET['ptrackinf']) && !isset($_SESSION['tracking'])) || ($_GET['ptrackinf'] != $_SESSION['tracking'])) {
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['tracking'] = $_GET['ptrackinf'];
}

$amount = (isset($_GET['cost'])) ? $_GET['cost'] : "170,995.00";

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
    <title>CookEX 4 in 1 Blender– ShopEX TV</title>
    <meta name="description"
        content="Upgrade your kitchen with the CookEX 4-in-1 Blender, the ultimate multitasking appliance that blends, grinds, juices, and processes your food with unmatched efficiency.">
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
</head>

<body>



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
                            <a href="mailto:shop@shopextv.com">shop@shopextv.com</a>
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
                        <h1 class="main__logo--title"><a class="main__logo--link" href="https://shopextv.com/"><img
                                    class="main__logo--img" src="assets/img/logo/Shopex-Blue-Logo.png" alt="logo-img"
                                    style="height: 40px;"></a></h1>
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
                        <img src="assets/img/logo/Shopex-Blue-Logo.png" alt="Shopex Logo" style="height: 89px;">
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
        <!-- order success section --> 
        <section class="order_success__section--bg3 section--padding pt-0">
            <div class="success-text">
                <h1 style="color: black !important;">
                    Order successful<br> <br>
                </h1>
                <h3>
        <b> Thank you for ordering from ShopEX TV!</b>
        
<br> You have opted to pay for your order by Bank Transfer.<br>

Please make a payment of ₦<?=$amount;?>.00 to:
<br><h2>
Response Architects/ShopexTV<br>
GT Bank<br>
0562993742 <br>
</h2>
Stock is limited so please pay immediately to avoid disappointment. <br>

Thank you for shopping with us!

                </h3>
            </div>
             <div class="imagesuccess" >
        <img src="assets/img/banner/suceeswoman.png" alt="success image" 
        class="imgsuccess">
       </div>
       </section>
       
        <!-- order success section --> 

        <!-- Start deals section -->
        <section class="deals__section deals__section--bg3 section--padding pt-0" id="contact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7 col-sm-order">
                        <div class="deals__content">
                            <h2 class="deals__content--title text-red mb-20" style="color: #f44336">Talk to Us:
                                02096233948</h2>
                            <h2 class="deals__content--title text-white mb-20">ShopEX TV is the Sole Authorised
                                Distributor of CookEX 4 in 1 Blender in Nigeria.
                                <br>Enjoy Free Delivery within Nigeria!
                                <br>ORDER ORIGINAL ONLY FROM SHOPEX.
                            </h2>
                            <!--  <p class="deals__content--desc text-white mb-20">Beyond more stoic this along goodness this sed wow manatee mongos 
                                flusterd impressive man farcrud opened inside owin punitively 
                                wasteful telling spransac coldly spokeles.</p>    
                            <div class="deals__content--price mb-28">
                                <span class="old__price"> $30.00</span>
                                <span class="price__divided"></span>
                                <span class="current__price">$25.00</span>
                            </div> -->
                            <div class="deals__countdown d-flex mb-50" data-countdown="Dec 15, 2024 00:00:00"></div>
                            <a class="deals__content--btn primary__btn" href="../cookex/#buy">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="deals__thumbnail--style3 text-right">
                            <img class="deals__thumbnail--style3__img" src="assets/img/product/product001.png"
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
                        class="copyright__content--link" href="#">ShopEX TV</a> . All Rights Reserved.</p>
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
        $(document).ready(function () {
            $("#900w, #900p").hide();
            var sz = $("#size").val();
            $("#size").change(function () {
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