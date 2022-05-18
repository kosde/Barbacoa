<?php
session_start();
if(!isset($_SESSION['CART'])){ 
    $_SESSION['CART']=array(); 
    $cont = 0;
} 
if(isset($_GET['seccion']))
{
?>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(event) { 
            var my_element = document.getElementById("platillos");
            my_element.scrollIntoView({
                behavior: "smooth",
                block: "start",
                inline: "nearest"
            });
        });
    </script>
<?php
}
?>

<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>GRILLED LOPESA</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/others/GRILLED_LOPESA_LOGO_02.png">

        <!-- All CSS is here
            ============================================ -->

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <!-- Icon Font CSS -->
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
        <link rel="stylesheet" href="assets/css/vendor/linearicons.css">
        <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
        <!-- Others CSS -->
        <link rel="stylesheet" href="assets/css/plugins/owl-carousel.css">
        <link rel="stylesheet" href="assets/css/plugins/slick.css">
        <link rel="stylesheet" href="assets/css/plugins/animate.css">
        <link rel="stylesheet" href="assets/css/plugins/jquery.mb.ytplayer.min.css">
        <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/plugins/jarallax.css">
        <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/plugins/easyzoom.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <style>
            .guisos{
                display: inline-block;
                font-size: 16px;
                color: #000000;
                padding: 22px 80px;
                background-color: #ffffff;
                font-weight: bold;
                line-height: 1;
                border: 2px solid #E2B04D;
                border-radius: 8px;
            }
            .slick-active,.slick-track{
                width: 100% !important;
            }
            .owl-nav{
                visibility: hidden !important;
                display: none !important;
            }
            .ul_dir_footer{
                text-align: left;
            }
            @media screen and (max-width: 992px) 
            {
                .footer-title, .ul_dir_footer, .footer-text {
                    text-align: center;
                }
                .info_ph p{
                    font-size: 2opx;
                }
                .animated{
                    width: 100% !important;
                }
                .main-slider-content-2 p {
                font-size: 20px;
                }
            }
            .qtybutton.dec {
                left: 20px !important;
            }
            .qtybutton.inc   {
                right: 20px !important;
            }
            .customerStyle select {
            }
            .customerStyle {
                overflow: hidden;
                background-size: 18px 18px;
            }
            select::-ms-expand {
            display: none;
            }

            select {
            -webkit-appearance: none;
            appearance: none;
            background-image: url('assets/images/icon-img/select.png');
            background-repeat: no-repeat, repeat;
            background-position: right 25px top 50%, 0 0;
            background-size: 15px 15px;
            text-align-last: center;
            }
            .oculto{
                visibility: hidden;
                display:none;
            }
        </style>
    </head>

    <body class="home">
        <div class="main-wrapper">
            <header class="header-area">
                <div class="header-large-device body-bg">
                    <div class="header-middle section-padding-2">
                        <div class="container">
                            <div class="header-ptb">
                                <div class="row align-items-center">
                                    <div class="col-xl-7 col-lg-7">
                                        <div class="logo logo-res-lg">
                                            <a href="index.php">
                                                <span class="up_i" style="text-transform: uppercase;color: black;">Solo para paladares exigentes</span>
                                               <!-- <img src="assets/images/others/ri_1.png" alt="logo">-->
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="header-bottom">                                          
                                            <div class="main-menu menu-lh-1 menu-text-white">
                                                <nav>
                                                    <ul>
                                                        <!--<li><a class="active" href="index.php">Inicio</a></li>        -->                                          
                                                    </ul>
                                                </nav>
                                            </div>                                                                                             
                                        </div> 
                                    </div>
                                    <div class="col-xl-2 col-lg-2">
                                        <div class="header-right-wrap header-right-flex">
                                            
                                            <div class="same-style same-style-mrg-dec">
                                                <a class="cart-active" href="cart.php"><i class="fa fa-cart-arrow-down" style="color: black;"></i></a>
                                            </div>
                                        </div>
                                    </div>                                           
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
                <div class="header-small-device body-bg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <div class="mobile-logo mobile-logo-width">
                                    <a href="index.php">
                                        <span class="up_i" style="text-transform: uppercase;color: black;">Solo para paladares exigentes</span>
                                        <!--<img alt="" src="assets/images/others/ri_1.png" style="max-width: 100%;height: 25px;">-->
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="header-right-wrap header-right-flex">
                                  
                                    <div class="same-style">
                                        <a class="cart-active" href="cart.php"><i class="fa fa-cart-arrow-down" style="color: black;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>             
                    </div>
                </div>
            </header>             
            <div class="slider-area">
                <div class="container-fluid p-0">
                    <div class="main-slider-active-1 owl-carousel slider-nav-position-2 slider-nav-style-2 ">
                        <div class="single-main-slider slider-animated-2 bg-img slider-height-2 " style="background-color: red;height: 750px;">
                            <div class="container height-100-percent">
                                <div class="col-12 row no-gutters p-lg-0">
                                    <div class="main-slider-content-2 text-center">
                                        <h3 style="color:white;">Gracias por tu compra, tu orden estara lista en aproximadamente 45 min.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class=" ti-close " aria-hidden="true"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row no-gutters">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="quickview-slider-active owl-carousel">
                                        <a class="img-popup" href="assets/images/product/quickview-1.png"><img src="assets/images/product/quickview-1.png" alt=""></a>
                                        <a class="img-popup" href="assets/images/product/quickview-2.png"><img src="assets/images/product/quickview-2.png" alt=""></a>
                                    </div>
                                    <!-- Thumbnail Large Image End -->
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="product-details-content quickview-content-padding bg-gray">
                                        <h2 class="uppercase">JAW SHARK WOMEN T-SHIRT</h2>
                                        <h3>$19.99</h3>
                                        <div class="product-details-peragraph">
                                            <p>Sed ligula sapien, fermentum id est eget, viverra auctor sem. Vivamus maximus enim vitae urna porta, ut euismod nibh lacinia. Pellentesque at diam sed libero tincidunt feugiat.</p>
                                        </div>
                                        <div class="product-details-action-wrap">
                                            <div class="product-details-quality">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                                </div>
                                            </div>
                                            <div class="product-details-cart">
                                                <a title="Add to cart" href="#">Add to cart</a>
                                            </div>
                                            <div class="product-details-wishlist">
                                                <a title="Add to wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                            <div class="product-details-compare">
                                                <a title="Add to compare" href="#"><i class="fa fa-compress"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-details-meta">
                                            <span>SKU: N/A</span>
                                            <span>Categories: <a href="#">Woman</a>, <a href="#">Dress</a>, <a href="#">Style</a>, <a href="#">T-Shirt</a>, <a href="#">Mango</a></span>
                                            <span>Tag: <a href="#">Fashion</a>, <a href="#">Dress</a> </span>
                                            <span>Product ID: <a href="#">274</a></span>
                                        </div>
                                        <div class="product-details-info">
                                            <a href="#"><i class=" ti-location-pin "></i>Check Store availability</a>
                                            <a href="#"><i class=" ti-shopping-cart "></i>Delivery and Return</a>
                                            <a href="#"><i class="ti-pin"></i>Ask a Question</a>
                                        </div>
                                        <div class="product-details-social-wrap">
                                            <span>SHARE THIS PRODUCT</span>
                                            <div class="product-details-social">
                                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                                <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                                                <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal end -->
        </div>
        <script>
            function cambiarPrecio(ID_num)
            {
                if(ID_num == 1)
                {
                    //alert(document.getElementById("guiso2_1").selectedIndex);
                    if(document.getElementById("guiso2_1").selectedIndex == 0)
                    {
                        var element = document.getElementById("id_precio_1_2");
                        element.classList.add("oculto");

                        var element = document.getElementById("id_precio_1");
                        element.classList.remove("oculto");

                        document.getElementById("price_1").value = 125;
                    }
                    else{
                        var element = document.getElementById("id_precio_1");
                        element.classList.add("oculto");

                        var element = document.getElementById("id_precio_1_2");
                        element.classList.remove("oculto");

                        document.getElementById("price_1").value = 34;
                    }
                    document.getElementById("11").value=1;
                }
                if(ID_num == 2)
                {
                    //alert(document.getElementById("guiso2_1").selectedIndex);
                    if(document.getElementById("guiso2_2").selectedIndex == 0)
                    {
                        var element = document.getElementById("id_precio_2_2");
                        element.classList.add("oculto");

                        var element = document.getElementById("id_precio_2");
                        element.classList.remove("oculto");

                        document.getElementById("price_2").value = 325;
                    }
                    else{
                        var element = document.getElementById("id_precio_2");
                        element.classList.add("oculto");

                        var element = document.getElementById("id_precio_2_2");
                        element.classList.remove("oculto");

                        document.getElementById("price_2").value = 21;
                    }
                    document.getElementById("22").value=1;
                }
                if(ID_num == 3)
                {
                    //alert(document.getElementById("guiso2_1").selectedIndex);
                    if(document.getElementById("guiso2_3").selectedIndex == 0)
                    {
                        var element = document.getElementById("id_precio_3_2");
                        element.classList.add("oculto");

                        var element = document.getElementById("id_precio_3");
                        element.classList.remove("oculto");

                        document.getElementById("price_3").value = 530;
                    }
                    else{
                        var element = document.getElementById("id_precio_3");
                        element.classList.add("oculto");

                        var element = document.getElementById("id_precio_3_2");
                        element.classList.remove("oculto");

                        document.getElementById("price_3").value = 15;
                    }
                    document.getElementById("33").value=1;
                }
                if(ID_num == 4)
                {
                    //alert(document.getElementById("guiso2_1").selectedIndex);
                    if(document.getElementById("guiso2_4").selectedIndex == 0)
                    {
                        var element = document.getElementById("id_precio_4_2");
                        element.classList.add("oculto");

                        var element = document.getElementById("id_precio_4");
                        element.classList.remove("oculto");

                        document.getElementById("price_4").value = 10;
                    }
                    else{
                        var element = document.getElementById("id_precio_4");
                        element.classList.add("oculto");

                        var element = document.getElementById("id_precio_4_2");
                        element.classList.remove("oculto");

                        document.getElementById("price_4").value = 15;
                    }
                    document.getElementById("44").value=1;
                }
                if(ID_num == 5)
                {
                    //alert(document.getElementById("guiso2_1").selectedIndex);
                    if(document.getElementById("guiso2_5").selectedIndex == 0)
                    {
                        var element = document.getElementById("id_precio_5_2");
                        element.classList.add("oculto");

                        var element = document.getElementById("id_precio_5");
                        element.classList.remove("oculto");

                        document.getElementById("price_5").value = 17;
                    }
                    else{
                        var element = document.getElementById("id_precio_5");
                        element.classList.add("oculto");

                        var element = document.getElementById("id_precio_5_2");
                        element.classList.remove("oculto");

                        document.getElementById("price_5").value = 22;
                    }
                    document.getElementById("55").value=1;
                }
            }
            function price(ID_num)
            {
                var ID_num = ID_num[0];
                if(ID_num == 1)
                {
                    var qty = document.getElementById("11").value;
                    if ($('#id_precio_1').is(':visible'))
                    {
                        var price = qty * 125;
                        var element = document.getElementById("id_precio_1");
                        element.innerText ="$ "+price+".00";
                    }
                    else{
                        var price = qty * 34;
                        var element = document.getElementById("id_precio_1_2");
                        element.innerText ="$ "+price+".00";
                    }
                }
                if(ID_num == 2)
                {
                    var qty = document.getElementById("22").value;
                    if ($('#id_precio_2').is(':visible'))
                    {
                        var price = qty *325;
                        var element = document.getElementById("id_precio_2");
                        element.innerText ="$ "+price+".00";
                    }
                    else{
                        var price = qty * 21;
                        var element = document.getElementById("id_precio_2_2");
                        element.innerText ="$ "+price+".00";
                    }
                }
                if(ID_num == 3)
                {
                    var qty = document.getElementById("33").value;
                    if ($('#id_precio_3').is(':visible'))
                    {
                        var price = qty * 530;
                        var element = document.getElementById("id_precio_3");
                        element.innerText ="$ "+price+".00";
                    }
                    else{
                        var price = qty * 15;
                        var element = document.getElementById("id_precio_3_2");
                        element.innerText ="$ "+price+".00";
                    }
                }
                if(ID_num == 4)
                {
                    var qty = document.getElementById("44").value;
                    if ($('#id_precio_4').is(':visible'))
                    {
                        var price = qty * 10;
                        var element = document.getElementById("id_precio_4");
                        element.innerText ="$ "+price+".00";
                    }
                    else{
                        var price = qty * 15;
                        var element = document.getElementById("id_precio_4_2");
                        element.innerText ="$ "+price+".00";
                    }
                }
                if(ID_num == 5)
                {
                    var qty = document.getElementById("55").value;
                    if ($('#id_precio_5').is(':visible'))
                    {
                        var price = qty * 17;
                        var element = document.getElementById("id_precio_5");
                        element.innerText ="$ "+price+".00";
                    }
                    else{
                        var price = qty * 22;
                        var element = document.getElementById("id_precio_5_2");
                        element.innerText ="$ "+price+".00";
                    }
                }
                if(ID_num == 6)
                {
                    var qty = document.getElementById("66").value;
                    var price = qty * 15;
                    var element = document.getElementById("id_precio_6");
                    element.innerText ="$ "+price+".00";
                }
                if(ID_num == 7)
                {
                    var qty = document.getElementById("77").value;
                    var price = qty * 18;
                    var element = document.getElementById("id_precio_7");
                    element.innerText ="$ "+price+".00";
                }
            }
            function envio(num)
            {
                if(num==1)
                {
                    document.getElementById("shipping2").checked=0;
                }else{
                    document.getElementById("shipping1").checked=0;
                }
            }
        </script>                                                       
        <!-- All JS is here
        ============================================ -->

        <!-- Modernizer JS -->
        <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <!-- jquery -->
        <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
        <!-- Popper JS -->
        <script src="assets/js/vendor/popper.js"></script>
        <!-- Bootstrap JS -->
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/bootstrap-notify.min.js"></script>
        <script src="assets/js/plugins/owl-carousel.js"></script>
        <script src="assets/js/plugins/slick.js"></script>
        <script src="assets/js/plugins/jquery.mb.ytplayer.min.js"></script>
        <script src="assets/js/plugins/magnific-popup.js"></script>
        <script src="assets/js/plugins/wow.js"></script>
        <script src="assets/js/plugins/instafeed.js"></script>
        <script src="assets/js/plugins/countdown.js"></script>
        <script src="assets/js/plugins/jarallax.min.js"></script>
        <script src="assets/js/plugins/images-loaded.js"></script>
        <script src="assets/js/plugins/isotope.js"></script>
        <script src="assets/js/plugins/tilt.js"></script>
        <script src="assets/js/plugins/jquery-ui.js"></script>
        <script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
        <script src="assets/js/plugins/easyzoom.js"></script>
        <script src="assets/js/plugins/resizesensor.js"></script>
        <script src="assets/js/plugins/sticky-sidebar.js"></script>
        <script src="assets/js/plugins/scrollup.js"></script>
        <script src="assets/js/plugins/ajax-mail.js"></script>
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>

    </body>

</html>