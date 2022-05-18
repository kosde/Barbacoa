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
        <title>La mejor barbacoa</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/others/ri_1.png">

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
                                                <span class="up_i" style="text-transform: uppercase;color: white;">Cocina Mexicana</span>
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
                                                <a class="cart-active" href="cart.php"><i class="fa fa-cart-arrow-down"></i></a>
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
                                        <span class="up_i" style="text-transform: uppercase;color: white;">Cocina Mexicana</span>
                                        <!--<img alt="" src="assets/images/others/ri_1.png" style="max-width: 100%;height: 25px;">-->
                                    </a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="header-right-wrap header-right-flex">
                                  
                                    <div class="same-style">
                                        <a class="cart-active" href="cart.php"><i class="fa fa-cart-arrow-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>             
                    </div>
                </div>
            </header>                           
            <!-- mini cart start -->
            <div class="sidebar-cart-active">
                <div class="sidebar-cart-all">
                    <a class="cart-close" href="#"><i class=" ti-close "></i></a>
                    <div class="cart-content">
                        <h3>Carrito</h3>
                        <ul>
                            <?php
                            include "minicart.php";
                            ?>
                            <!--
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="assets/images/product/ri_6.png" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h4><a href="#">Quesadilla</a></h4>
                                        <span> 2 × $58.00	</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#">×</a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="assets/images/product/ri_2.png" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h4><a href="#">Gorditas</a></h4>
                                        <span> 3 × $30.00	</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#">×</a>
                                    </div>
                                </li>
                            -->
                        </ul>
                        <div class="cart-total">
                            <h4>Subtotal: <span>$<?php echo $SUMA;?>.00</span></h4>
                        </div>
                        <div class="cart-checkout-btn">
                            <a class="btn-hover cart-btn-style" href="cart.php">Ver carrito</a>
                            <a class="no-mrg btn-hover cart-btn-style" href="checkout.php">Pagar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile menu start -->
            <div class="mobile-menu-active clickalbe-sidebar-wrapper-style-1">
                <div class="clickalbe-sidebar-wrap">
                    <a class="sidebar-close"><i class=" ti-close "></i></a>
                    <div class="mobile-menu-content-area sidebar-content-100-percent">
                        <div class="mobile-search">
                            <form class="search-form" action="#">
                                <input type="text" placeholder="Search entire store…">
                                <button class="button-search"><i class=" ti-search "></i></button>
                            </form>
                        </div>
                        <div class="clickable-mainmenu-wrap clickable-mainmenu-style1">
                            <nav>
                                <ul>
                                </ul>
                            </nav>
                        </div>                     
                        <div class="header-aside-content">                                             
                            <div class="aside-contact-info">
                                <ul>
                                </ul>
                            </div>
                            <div class="social-icon-style-2 mb-25">
                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="behance" href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider -->
            <div class="slider-area">
                <div class="container-fluid p-0">
                    <div class="main-slider-active-1 owl-carousel slider-nav-position-2 slider-nav-style-2 ">
                        <div class="single-main-slider slider-animated-2 bg-img slider-height-2 " style="background-image: url('assets/images/product/1x/barbaco.jpg');">
                            <div class="container height-100-percent">
                                <div class="col-12 row no-gutters p-lg-0">
                                    <div class="main-slider-content-2 text-center">
                                        <!--<h1 class="animated">Gorditas <br> Dany</h1>
                                        <span class="up_i">Cocina Mexicana</span>-->
                                        <img style="width: 50%;margin:auto;" class="animated" src="assets/images/others/ri_1.png" alt="logo">
                                        <div class="bottom_info">
                                            <div class="contact" style="display: table-cell;">
                                                <div class="i_phone">
                                                    <i class="icon_phone" style="margin-right: 10px;">
                                                        <img src="assets/images/slider/phone-receiver-silhouette.png"alt="">
                                                    </i>
                                                    <div class="info_ph" style="width: 100%;padding-left: 5px;">
                                                        <p style="color: #fff;padding-top: 0px;">444 655 8762</p>
                                                    </div>
                                                </div>
                                                <div class="i_adress" style="padding-top: 20px;">
                                                    <i class="icon_adress" style="margin-right: 10px;">
                                                        <img src="assets/images/slider/placeholder.png" alt="">
                                                    </i>
                                                    <div class="info_a" style="width: 100%;padding-left: 5px;">
                                                        <p style="color: #fff;padding-top: 0px;">Primera Privada de Constitución <br>No. 136 Colonia Julián Carrillo <br>San Luis Potosí, S.L.P. </p>
                                                    </div>
                                                </div>
                                            </div>                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-area pt-100 pb-0">
                <div class="container">
                    <div class="section-title-2 text-center mb-30"  id="platillos">
                        <h2>
                            <span class="text-color">Platillos</span>
                        </h2>
                    </div>
                </div>
                <div class="section-padding-1">
                    <div class="container">                      
                        <div class="product-tab-list nav mb-60"> 
                        <!--
                            onclick="document.getElementById('product-4').scrollIntoView({behavior: 'smooth'})"
                        -->                       
                            <a class="active" href="#product-1" data-toggle="tab" id="1">                               
                                <img src="assets/images/barbacoa.jpg" alt="" style="height: 85px;width: 101px;">                              
                                <span>Barbacoa</span>
                            </a>
                            <a href="#product-2" data-toggle="tab" id="2">
                                <img src="assets/images/chamorros.jpg" alt="" style="height: 85px;width: 101px;">
                                <span>Chamorro</span>
                            </a>
                            <a href="#product-3" data-toggle="tab" id="3">
                                <img src="assets/images/lengua.jpg" alt="" style="height: 85px;width: 101px;">
                                <span>Lengua de Res</span>
                            </a>
                            <a href="#product-4" data-toggle="tab" id="4">
                                <img src="assets/images/paquete.jpg" alt="" style="height: 85px;width: auto;">
                                <span>Paquetes</span>
                            </a>
                            <!--
                            <a href="#product-5" data-toggle="tab" id="5">
                                <img src="assets/images/product/1x/torta100.png" alt="" style="height: 85px;width: 101px;">
                                <span>Tortas</span>
                            </a>
                            <a href="#product-6" data-toggle="tab" id="6">
                                <img src="assets/images/product/1x/Refrescos100.png" alt="" style="height: 85px;width: 101px;">
                                <span>Refrescos</span>
                            </a>-->
                        </div>
                        <div class="tab-content jump">
                    
                            <div id="product-1" class="tab-pane active">
                                <div class="shop-area section-padding-2 pb-110">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-6">
                                                <div class="product-details-tab product-details-tab2">
                                                    <div class="pro-dec-big-img-slider">
                                                        <div class="easyzoom-style">
                                                            <div>
                                                                <a href="assets/images/barbacoa.jpg">
                                                                    <img src="assets/images/barbacoa.jpg" alt="" style="height: 605px;width: 605px;">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-6">
                                                <div class="product-details-wrap pro-dec-res-mrg-top2">
                                                    <div class="product-details-content" style="width: 100%;">
                                                        <h2 class="uppercase">Barbacoa por kilo</h2>
                                                        <h4 class="uppercase">Incluye: consomé, salsa y verdura.</h4>
                                                        <div class="product-details-peragraph">
                                                            <p></p>
                                                        </div>
                                                        <h3 id="id_precio_1" >$170.00</h3>
                                                        <!--<h3 id="id_precio_1_2" class="oculto">$329.00</h3>-->
                                                        <div class="product-details-peragraph">
                                                            <p></p>
                                                        </div>
                                                        <div class="product-details-action-wrap col-xl-4 col-lg-12">
                                                            <form  method="post" style="width: 100%;">
                                                                <div style="width: 100%;"></div>
                                                                <div class="product-details-quality" style="width: 100%;">
                                                                    <h4 class="uppercase" style="width: 100%;">Cantidad (Kilos): </h4>
                                                                    <div class="cart-plus-minus" style="width: 100%;">
                                                                        <input class="cart-plus-minus-box" type="text" name="qty_barbacoa" value="0.5" id="11">
                                                                    </div>
                                                                </div>
                                                                <input type="text" id="price_1" value="0" style="visibility:hidden;display:none;">
                                                                <div class="product-details-cart" style="margin: 0 !important;width: 100%;">
                                                                    <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                                    <button type="submit" style="width: 100%;padding: 22px 0;text-align: center !important;" name="quesadilla" value="quesadilla" >Agregar al carrito</button>
                                                                    <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                                    <a title="Add to cart" href="cart.php" style="width: 100%;padding: 22px 0;text-align: center !important;">Finalizar compra</a>
                                                                </div>
                                                            </form>
                                                            <?php
                                                            if(isset($_POST['quesadilla'])){
                                                                /*
                                                                0-5.5 50 PESOS
                                                                5.5 8PESOS
                                                                */
                                                                $precio1 = 170;
                                                                $precio2 = 329;
                                                                $cont=$cont+1;
                                                                $qty_quesadilla = $_POST['qty_barbacoa'];
                                                                $precio_array = explode(".", $qty_quesadilla);
                                                                if($precio_array[1])
                                                                {
                                                                    $precio = $precio_array[0] * $precio2 + $precio1;
                                                                }
                                                                else
                                                                {
                                                                    $precio = $precio_array[0] * $precio2;
                                                                }
                                                                //$precio = $qty_quesadilla * 29;
                                                                $producto = array( 
                                                                    'ID' => '1', 
                                                                    'CONT' => $cont,
                                                                    'TITLE' => "Barbacoa", 
                                                                    'QUANTITY' => $qty_quesadilla, 
                                                                    'PRICE' => $precio,
                                                                    'UNIDADES' => "1",
                                                                    'TOTAL' => $precio
                                                                  ); 
                                                                $_SESSION['CART'][]=$producto; 
                                                                
                                                                echo'
                                                                <script>
                                                                    window.location = "index.php?seccion=1";
                                                                </script>
                                                                ';   
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="product-2" class="tab-pane">
                                <div class="shop-area section-padding-2 pb-110">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-6">
                                                <div class="product-details-tab product-details-tab2">
                                                    <div class="pro-dec-big-img-slider">
                                                        <div class="easyzoom-style">
                                                            <div>
                                                                <a href="assets/images/chamorros.jpg">
                                                                    <img src="assets/images/chamorros.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-6">
                                                <div class="product-details-wrap pro-dec-res-mrg-top2">
                                                    <div class="product-details-content" style="width: 100%;">
                                                        <h2 class="uppercase">Chamorro</h2>
                                                        <h3 id="id_precio_2" >$59.00</h3>
                                                        <!--<h3 id="id_precio_2_2" class="oculto">$21.00</h3>-->
                                                        <div class="product-details-peragraph">
                                                            <p></p>
                                                        </div>
                                                        <div class="product-details-action-wrap col-xl-4 col-lg-12">
                                                            <form  method="post" style="width: 100%;">
                                                                <div style="width: 100%;"></div>
                                                                <div class="product-details-quality" style="width: 100%;">
                                                                    <h4 class="uppercase" style="width: 100%;">Cantidad (Kilos):<h4>
                                                                    <div class="cart-plus-minus" style="width: 100%;">
                                                                        <input class="cart-plus-minus-box" type="text" name="qty_chamorro"  value="0.5" id="22">
                                                                    </div>
                                                                </div>
                                                                <input type="text" id="price_2" value="0" style="visibility:hidden;display:none;">
                                                                <div class="product-details-cart" style="margin: 0 !important;width: 100%;">
                                                                    <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                                    <button type="submit" style="width: 100%;padding: 22px 0;text-align: center !important;" name="chamorro" value="chamorro" >Agregar al carrito</button>
                                                                    <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                                    <a title="Add to cart" href="cart.php" style="width: 100%;padding: 22px 0;text-align: center !important;">Finalizar compra</a>
                                                                </div>
                                                            </form>
                                                            <?php
                                                            if(isset($_POST['chamorro'])){
                                                                $precio1 = 59;
                                                                $precio2 = 109;
                                                                $cont=$cont+1;
                                                                $qty_quesadilla = $_POST['qty_chamorro'];
                                                                $precio_array = explode(".", $qty_quesadilla);
                                                                if($precio_array[1])
                                                                {
                                                                    $precio = $precio_array[0] * $precio2 + $precio1;
                                                                }
                                                                else
                                                                {
                                                                    $precio = $precio_array[0] * $precio2;
                                                                }
                                                                //$precio = $qty_quesadilla * 29;
                                                                $producto = array( 
                                                                    'ID' => '2', 
                                                                    'CONT' => $cont,
                                                                    'TITLE' => "Chamorro", 
                                                                    'QUANTITY' => $qty_quesadilla, 
                                                                    'PRICE' => $precio,
                                                                    'UNIDADES' => "1",
                                                                    'TOTAL' => $precio  
                                                                  ); 
                                                                $_SESSION['CART'][]=$producto; 
                                                                
                                                                echo'
                                                                <script>
                                                                    window.location = "index.php?seccion=1";
                                                                </script>
                                                                ';    
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="product-3" class="tab-pane">
                                <div class="shop-area section-padding-2 pb-110">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-6">
                                                <div class="product-details-tab product-details-tab2">
                                                    <div class="pro-dec-big-img-slider">
                                                        <div class="easyzoom-style">
                                                            <div>
                                                                <a href="assets/images/lengua.jpg">
                                                                    <img src="assets/images/lengua.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-6">
                                                <div class="product-details-wrap pro-dec-res-mrg-top2">
                                                    <div class="product-details-content" style="width: 100%;">
                                                        <h2 class="uppercase">Lengua de Res por kilo</h2>
                                                        <h4 class="uppercase">Incluye: consomé, salsa y verdura.</h4>
                                                        <h3 id="id_precio_3" >$190.00</h3>
                                                        <div class="product-details-peragraph">
                                                            <p></p>
                                                        </div>
                                                        <div class="product-details-action-wrap col-xl-4 col-lg-12">
                                                            <h4 class="uppercase" style="width: 100%;">Guisos: </h4>
                                                            <form method="post" style="width: 100%;">
                                                                <div style="width: 100%;"></div>
                                                                <div class="product-details-quality" style="width: 100%;">
                                                                    <h4 class="uppercase" style="width: 100%;">Cantidad: </h4>
                                                                    <div class="cart-plus-minus" style="width: 100%;">
                                                                        <input class="cart-plus-minus-box" type="text" name="qty_lengua" value=".25" id="33">
                                                                    </div>
                                                                </div>
                                                                <input type="text" id="price_3" value="0" style="visibility:hidden;display:none;">
                                                                <div class="product-details-cart" style="margin: 0 !important;width: 100%;">
                                                                    <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                                    <!--<a title="Add to cart" href="#" style="width: 100%;padding: 22px 0;text-align: center !important;">Agregar al carrito</a>-->
                                                                    <button type="submit" style="width: 100%;padding: 22px 0;text-align: center !important;" name="lengua" value="lengua" >Agregar al carrito</button>
                                                                    <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                                    <a title="Add to cart" href="cart.php" style="width: 100%;padding: 22px 0;text-align: center !important;">Finalizar compra</a>
                                                                </div>
                                                            </form>
                                                            <?php
                                                            if(isset($_POST['lengua'])){
                                                                $precio1 = 190;
                                                                $precio2 = 380;
                                                                $precio3 = 760;
                                                                $cont=$cont+1;
                                                                $qty_quesadilla = $_POST['qty_lengua'];
                                                                $precio_array = explode(".", $qty_quesadilla);
                                                                if($precio_array[1])
                                                                {
                                                                    if($precio_array[1] == "25")
                                                                    {
                                                                        $precio = $precio_array[0] * $precio3 + $precio1;
                                                                    }
                                                                    if($precio_array[1] == "5")
                                                                    {
                                                                        $precio = $precio_array[0] * $precio3 + $precio2;
                                                                    }
                                                                    if($precio_array[1] == "75")
                                                                    {
                                                                        $precio = $precio_array[0] * $precio3 + $precio2 + $precio1;
                                                                        
                                                                    }
                                                                }
                                                                else
                                                                {
                                                                    $precio = $precio_array[0] * $precio2;
                                                                }
                                                                //$precio = $qty_quesadilla * 29;
                                                                $producto = array( 
                                                                    'ID' => '3', 
                                                                    'CONT' => $cont,
                                                                    'TITLE' => "Lengua", 
                                                                    'QUANTITY' => $qty_quesadilla, 
                                                                    'PRICE' => $precio,
                                                                    'UNIDADES' => "1",
                                                                    'TOTAL' => $precio
                                                                  ); 
                                                                $_SESSION['CART'][]=$producto; 
                                                                echo'
                                                                <script>
                                                                    window.location = "index.php?seccion=1";
                                                                </script>
                                                                ';      
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="product-4" class="tab-pane">
                                <div class="shop-area section-padding-2 pb-110">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-6">
                                                <div class="product-details-tab product-details-tab2">
                                                    <div class="pro-dec-big-img-slider">
                                                        <div class="easyzoom-style">
                                                            <div>
                                                                <a href="assets/images/paquete.jpg">
                                                                    <img src="assets/images/paquete.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-6">
                                                <div class="product-details-wrap pro-dec-res-mrg-top2">
                                                    <div class="product-details-content"  style="width: 100%;">
                                                        <div class="row">
                                                            <div class="col-xl-4 col-lg-3">
                                                                <h2 class="uppercase">Barbacoa</h2>
                                                                <h5>Paquete 1 <br>1/2 Kg de barbacoa de res <br>1/2 L de frijoles charros <br>Consomé, tortillas, verdura y salsa</h5>
                                                                <h5>Paquete 2<br>1 Kg de barbacoa de res<br>1 L de frijoles charros<br>Consomé, tortillas, verdura y salsa</h3>
                                                                <div class="product-details-peragraph">
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4 col-lg-3">
                                                                <h2 class="uppercase">Chamorro</h2>
                                                                <h5>Paquete 1 <br>1 Chamorro <br>1/2 L de frijoles charros <br>Tortillas, verdura y salsa</h5>
                                                                <h5>Paquete 2 <br>2 Chamorro <br>1 L de frijoles charros<br>Tortillas, verdura y salsa</h3>
                                                                <div class="product-details-peragraph">
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                            <div  class="col-xl-4 col-lg-3">
                                                                <h2 class="uppercase">Lengua</h2>
                                                                <h5>Paquete 1 <br>1/4 Kg de lengua de res <br>1/2 L de frijoles charros <br>Tortillas, verdura y salsa</h5>
                                                                <h5>Paquete 2 <br>1/2 Kg de lengua de res <br>1/2 L de frijoles charros<br>Tortillas, verdura y salsa</h3>
                                                                <div class="product-details-peragraph">
                                                                    <p></p>
                                                                </div>
                                                            </div>  
                                                        </div>    
                                                        <div class="product-details-action-wrap col-xl-4 col-lg-12">
                                                            <h3 id="id_precio_4" >$0.00</h3>
                                                            <h4 class="uppercase" style="width: 100%;">Paquete</h4>
                                                            <form method="post" style="width: 100%;">
                                                                <input type="hidden" name="preciopaquete" value="0" id="precio_paquete">
                                                                <div style="width: 100%;">
                                                                    <select id="paquetes" name="paquete" class="guisos" style="width: 100%;padding: 22px 0;text-align: center !important;" onchange="actualiza_paquete()">
                                                                        <option value=""></option>
                                                                        <option value="Paquete 1 de Barbacoa">Paquete 1 Barbacoa</option>
                                                                        <option value="Paquete 2 de Barbacoa">Paquete 2 Barbacoa</option>
                                                                        <option value="Paquete 1 de Chamorro">Paquete 1 Chamorro</option>
                                                                        <option value="Paquete 2 de Chamorro">Paquete 2 Chamorro</option>
                                                                        <option value="Paquete 1 de Lengua">Paquete 1 Lengua</option>
                                                                        <option value="Paquete 2 de Lengua">Paquete 2 Lengua</option>
                                                                    </select>
                                                                </div>
                                                                <div style="width: 100%;"></div>
                                                                <!--
                                                                <div class="product-details-quality" style="width: 100%;">
                                                                    <h4 class="uppercase" style="width: 100%;">Cantidad: </h4>
                                                                    <div class="cart-plus-minus" style="width: 100%;">
                                                                        <input class="cart-plus-minus-box" type="text" name="qty_paquete" value="1" id="44">
                                                                    </div>
                                                                </div>-->
                                                                <input type="text" id="price_4" value="0" style="visibility:hidden;display:none;">
                                                                <div class="product-details-cart" style="margin: 0 !important;width: 100%;">
                                                                    <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                                    <button type="submit" style="width: 100%;padding: 22px 0;text-align: center !important;" name="pauqete_b" value="pauqete_b" >Agregar al carrito</button>
                                                                    <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                                    <a title="Add to cart" href="cart.php" style="width: 100%;padding: 22px 0;text-align: center !important;">Finalizar compra</a>
                                                                </div>
                                                            </form>
                                                            <script>
                                                                function actualiza_paquete()
                                                                {
                                                                    var paquete = document.getElementById("paquetes").value;
                                                                    if(paquete == "Paquete 1 de Barbacoa")
                                                                    {
                                                                        var element = document.getElementById("id_precio_4").innerText ="$ 225.00";
                                                                        document.getElementById("precio_paquete").value ="225";
                                                                    }
                                                                    if(paquete == "Paquete 2 de Barbacoa")
                                                                    {
                                                                        var element = document.getElementById("id_precio_4").innerText ="$ 379.00";
                                                                        document.getElementById("precio_paquete").value ="379";
                                                                    }
                                                                    if(paquete == "Paquete 1 de Chamorro")
                                                                    {
                                                                        var element = document.getElementById("id_precio_4").innerText ="$ 159.00";
                                                                        document.getElementById("precio_paquete").value ="159";
                                                                    }
                                                                    if(paquete == "Paquete 2 de Chamorro")
                                                                    {
                                                                        var element = document.getElementById("id_precio_4").innerText ="$ 289.00";
                                                                        document.getElementById("precio_paquete").value ="289";
                                                                    }
                                                                    if(paquete == "Paquete 1 de Lengua")
                                                                    {
                                                                        var element = document.getElementById("id_precio_4").innerText ="$ 219.00";
                                                                        document.getElementById("precio_paquete").value ="219";
                                                                    }
                                                                    if(paquete == "Paquete 2 de Lengua")
                                                                    {
                                                                        var element = document.getElementById("id_precio_4").innerText ="$ 419.00";
                                                                        document.getElementById("precio_paquete").value ="419";
                                                                    }
                                                                }
                                                            </script>
                                                            <?php
                                                            if(isset($_POST['pauqete_b'])){
                                                                $cont=$cont+1;
                                                                $guisado_quesadilla = $_POST['paquete'];
                                                                $precio = $_POST['preciopaquete'];
                                                                $qty_quesadilla = "";
                                                                $producto = array( 
                                                                    'ID' => '4', 
                                                                    'CONT' => $cont,
                                                                    'TITLE' => $guisado_quesadilla,
                                                                    'QUANTITY' => $qty_quesadilla, 
                                                                    'PRICE' => $precio,
                                                                    'UNIDADES' => "1",
                                                                    'TOTAL' => $precio
                                                                  ); 
                                                                $_SESSION['CART'][]=$producto; 
                                                                echo'
                                                                <script>
                                                                    window.location = "index.php?seccion=1";
                                                                </script>
                                                                ';      
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="product-5" class="tab-pane">
                                <div class="shop-area section-padding-2 pb-110">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-6">
                                                <div class="product-details-tab product-details-tab2">
                                                    <div class="pro-dec-big-img-slider">
                                                        <div class="easyzoom-style">
                                                            <div>
                                                                <a href="assets/images/product/1x/torta.png">
                                                                    <img src="assets/images/product/1x/torta.png" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-6">
                                                <div class="product-details-wrap pro-dec-res-mrg-top2">
                                                    <div class="product-details-content" style="width: 100%;">
                                                        <h2 class="uppercase">Torta de Guisado</h2>
                                                        <h3 id="id_precio_5" >$17.00</h3>
                                                        <h3 id="id_precio_5_2" class="oculto">$22.00</h3>
                                                        <div class="product-details-peragraph">
                                                            <p></p>
                                                        </div>
                                                        <div class="product-details-action-wrap col-xl-4 col-lg-12">
                                                            <h4 class="uppercase" style="width: 100%;">Guisos: </h4>
                                                            <form method="post" style="width: 100%;">
                                                                <div style="width: 100%;">
                                                                    <select name="guisado_tortas" class="guisos" style="width: 100%;padding: 22px 0;text-align: center !important;">
                                                                        <option value="Huevo rojo">Huevo rojo</option>
                                                                        <option value="Huevo verde">Huevo verde</option>
                                                                        <option value="Deshebrada">Deshebrada</option>
                                                                        <option value="Chicharron">Chicharrón</option>
                                                                        <option value="Frijoles">Frijoles</option>
                                                                        <option value="Queso">Queso</option>
                                                                        <option value="Rajas">Rajas</option>
                                                                        <option value="Papas">Papas</option>
                                                                        <option value="Moronga">Moronga</option>
                                                                        <option value="Chorizo">Chorizo</option>
                                                                        <option value="Nopales">Nopales</option>
                                                                        <option value="Champiñones">Champiñones</option>
                                                                    </select>
                                                                </div>
                                                                <div style="width: 100%;" class="customerStyle">
                                                                    <h4 class="uppercase" style="width: 100%;">Guiso extra: </h4>
                                                                    <select id="guiso2_5" name="guisado_tortas2" class="guisos" style="width: 100%;padding: 22px 0;text-align: center !important;" onchange="cambiarPrecio(5)">
                                                                        <option value=""></option>
                                                                        <option value="Huevo rojo">Huevo rojo</option>
                                                                        <option value="Huevo verde">Huevo verde</option>
                                                                        <option value="Deshebrada">Deshebrada</option>
                                                                        <option value="Chicharron">Chicharrón</option>
                                                                        <option value="Frijoles">Frijoles</option>
                                                                        <option value="Queso">Queso</option>
                                                                        <option value="Rajas">Rajas</option>
                                                                        <option value="Papas">Papas</option>
                                                                        <option value="Moronga">Moronga</option>
                                                                        <option value="Chorizo">Chorizo</option>
                                                                        <option value="Nopales">Nopales</option>
                                                                        <option value="Champiñones">Champiñones</option>
                                                                    </select>
                                                                </div>
                                                                <div style="width: 100%;"></div>
                                                                <div class="product-details-quality" style="width: 100%;">
                                                                    <h4 class="uppercase" style="width: 100%;">Cantidad: </h4>
                                                                    <div class="cart-plus-minus" style="width: 100%;">
                                                                        <input class="cart-plus-minus-box" type="text" name="qty_tortas" value="1" id="55">
                                                                    </div>
                                                                </div>
                                                                <input type="text" id="price_5" value="0" style="visibility:hidden;display:none;">
                                                                <div class="product-details-cart" style="margin: 0 !important;width: 100%;">
                                                                    <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                                    <!--<a title="Add to cart" href="#" style="width: 100%;padding: 22px 0;text-align: center !important;">Agregar al carrito</a>-->
                                                                    <button type="submit" style="width: 100%;padding: 22px 0;text-align: center !important;" name="tortas" value="tortas" >Agregar al carrito</button>
                                                                    <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                                    <a title="Add to cart" href="cart.php" style="width: 100%;padding: 22px 0;text-align: center !important;">Finalizar compra</a>
                                                                </div>
                                                            </form>
                                                            <?php
                                                            if(isset($_POST['tortas'])){
                                                                $cont=$cont+1;
                                                                $qty_quesadilla = $_POST['qty_tortas'];
                                                                $guisado_quesadilla = $_POST['guisado_tortas'];
                                                                $guisado_tortas2 = $_POST['guisado_tortas2'];
                                                                $precio = $qty_quesadilla *17   ;
                                                                $producto = array( 
                                                                    'ID' => '5', 
                                                                    'CONT' => $cont,
                                                                    'TITLE' => $guisado_quesadilla, 
                                                                    'TITLE2' => $guisado_tortas2, 
                                                                    'QUANTITY' => $qty_quesadilla, 
                                                                    'PRICE' => $precio 
                                                                  ); 
                                                                $_SESSION['CART'][]=$producto; 
                                                                echo'
                                                                <script>
                                                                    window.location = "index.php?seccion=1";
                                                                </script>
                                                                ';      
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="product-6" class="tab-pane">
                                <div class="shop-area section-padding-2 pb-110">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-6">
                                                <div class="product-details-tab product-details-tab2">
                                                    <div class="pro-dec-big-img-slider">
                                                        <div class="easyzoom-style">
                                                            <div>
                                                                <a href="assets/images/product/1x/Refrescos.png">
                                                                    <img src="assets/images/product/1x/Refrescos.png" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-7 col-lg-6">
                                                <h2 class="uppercase">Refrescos</h2>
                                                <div class="product-details-wrap pro-dec-res-mrg-top2">
                                                    <?php
                                                    if(isset($_SESSION['OPCION']) && $_SESSION['OPCION']==1)
                                                    {
                                                    ?>
                                                    <div class="col-xl-5 col-lg-6">
                                                        <div class="product-details-content"  style="width: 100%;">
                                                            <div class="product-details-peragraph">
                                                                <p>Botella</p>
                                                            </div>
                                                            <h3 id="id_precio_6">$15.00</h3>
                                                        
                                                            <div class="product-details-action-wrap">
                                                                <form method="post" style="width: 100%;">
                                                                    <div  style="width: 100%;">
                                                                        <select name="sabor_botella" class="guisos" style="width: 100%;padding: 22px 0;text-align: center !important;">
                                                                            <option value="Coca">Coca</option>
                                                                            <option value="Fanta">Fanta</option>
                                                                            <option value="Sprite">Sprite</option>
                                                                            <option value="Manzanita">Manzanita</option>
                                                                            <option value="Boing">Boing</option>
                                                                        </select>
                                                                    </div>
                                                                    <div style="width: 100%;"></div>
                                                                    <div class="product-details-quality" style="width: 100%;">
                                                                        <h4 class="uppercase" style="width: 100%;">Cantidad: </h4>
                                                                        <div class="cart-plus-minus" style="width: 100%;">
                                                                            <input class="cart-plus-minus-box" type="text" name="qty_refresco_botella" value="0" id="66">
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-details-cart" style="margin: 0 !important;width: 100%;">
                                                                        <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                                        <!--<a title="Add to cart" href="#" style="width: 100%;padding: 22px 0;text-align: center !important;">Agregar al carrito</a>-->
                                                                        <button type="submit" style="width: 100%;padding: 22px 0;text-align: center !important;" name="Refresco1" value="Refresco1" >Agregar al carrito</button>
                                                                        <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                                        <a title="Add to cart" href="cart.php" style="width: 100%;padding: 22px 0;text-align: center !important;">Finalizar compra</a>
                                                                    </div>
                                                                </form>
                                                                <?php
                                                                if(isset($_POST['Refresco1'])){
                                                                    $cont=$cont+1;
                                                                    $sabor_botella = $_POST['sabor_botella'];
                                                                    $qty_refresco_botella = $_POST['qty_refresco_botella'];
                                                                    $precio = $qty_refresco_botella *15;
                                                                    $producto = array( 
                                                                        'ID' => '6', 
                                                                        'CONT' => $cont,
                                                                        'TITLE' => $sabor_botella, 
                                                                        'TITLE2' => '', 
                                                                        'QUANTITY' => $qty_refresco_botella, 
                                                                        'PRICE' => $precio 
                                                                    ); 
                                                                    $_SESSION['CART'][]=$producto; 
                                                                    echo'
                                                                    <script>
                                                                        window.location = "index.php?seccion=1";
                                                                    </script>
                                                                    ';     
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    }
                                                    ?>
                                                    <div class="col-xl-5 col-lg-6">
                                                        <div class="product-details-content" style="width: 100%;">
                                                            <div class="product-details-peragraph">
                                                                <p>Desechable</p>
                                                            </div>
                                                            <h3 id="id_precio_7">$18.00</h3>
                                                        
                                                            <div class="product-details-action-wrap ">
                                                                <form method="post" style="width: 100%;">
                                                                    <div style="width: 100%;">
                                                                        <select name="sabor_botella2" class="guisos"  style="width: 100%;padding: 22px 0;text-align: center !important;">
                                                                            <option value="Coca">Coca</option>
                                                                            <option value="Fanta">Fanta</option>
                                                                            <option value="Sprite">Sprite</option>
                                                                            <option value="Manzanita">Manzanita</option>
                                                                            <option value="Boing">Boing</option>
                                                                        </select>
                                                                    </div>
                                                                    <div style="width: 100%;"></div>
                                                                    <div class="product-details-quality" style="width: 100%;">
                                                                        <h4 class="uppercase" style="width: 100%;">Cantidad: </h4>
                                                                        <div class="cart-plus-minus" style="width: 100%;">
                                                                            <input class="cart-plus-minus-box" type="text" name="qty_refresco_botella2" value="0" id="77">
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-details-cart" style="margin: 0 !important;width: 100%;">
                                                                        <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                                         <!--<a title="Add to cart" href="#" style="width: 100%;padding: 22px 0;text-align: center !important;">Agregar al carrito</a>-->
                                                                        <button type="submit" style="width: 100%;padding: 22px 0;text-align: center !important;" name="Refresco2" value="Refresco2" >Agregar al carrito</button>
                                                                        <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                                        <a title="Add to cart" href="cart.php" style="width: 100%;padding: 22px 0;text-align: center !important;">Finalizar compra</a>
                                                                    </div>
                                                                </form>
                                                                <?php
                                                                if(isset($_POST['Refresco2'])){
                                                                    $cont=$cont+1;
                                                                    echo $cont;
                                                                    $sabor_botella = $_POST['sabor_botella2'];
                                                                    $qty_refresco_botella = $_POST['qty_refresco_botella2'];
                                                                    $precio = $qty_refresco_botella *15;
                                                                    $producto = array( 
                                                                        'ID' => '7', 
                                                                        'CONT' => $cont,
                                                                        'TITLE' => $sabor_botella, 
                                                                        'TITLE2' => '', 
                                                                        'QUANTITY' => $qty_refresco_botella, 
                                                                        'PRICE' => $precio 
                                                                    ); 
                                                                    $_SESSION['CART'][]=$producto; 
                                                                    echo'
                                                                    <script>
                                                                        window.location = "index.php?seccion=1";
                                                                    </script>
                                                                    ';     
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="open-hours pt-100 pb-100">
                <div class="container">
                    <div class="open-hours-inner  col-lg-12 p-0">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 body-bg">                           
                            <div class="open-hours-content col-sm-12  text-center">
                                <h2>Horario</h2>	
                                <div class="hours-text">
                                    <span><span>Lunes :  </span> 9:00am – 1:00pm</span><br>
                                    <span ><span>Martes :  </span> 9:00am – 1:00pm</span><br>
                                    <span ><span>Miercoles :  </span> 9:00am – 1:00pm</span><br>
                                    <span ><span>Jueves :  </span> 9:00am – 1:00pm</span><br>
                                    <span ><span>Viernes :  </span> 9:00am – 1:00pm</span><br>
                                    <span ><span>Sabado :  </span> 9:00am – 1:00pm</span><br>
                                </div>                            
                            </div>
                        </div>
                    </div>                 
                </div>
            </section>
            <div class="brand-logo-area pt-0 pb-0 section-padding-3" style="background: url(assets/images/brand-logo/bg-brand-long.jpg) no-repeat center top/cover;">
                <div class="container">
                    <div class="brand-logo">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="brand-logo-active owl-carousel">
                                    <div class="single-brand-logo">
                                        <img src="assets/images/brand-logo/brand-logo-1.png" alt="">
                                    </div>
                                    <div class="single-brand-logo">
                                        <img src="assets/images/brand-logo/brand-logo-2.png" alt="">
                                    </div>
                                    <div class="single-brand-logo">
                                        <img src="assets/images/brand-logo/brand-logo-3.png" alt="">
                                    </div>
                                    <div class="single-brand-logo">
                                        <img src="assets/images/brand-logo/brand-logo-4.png" alt="">
                                    </div>
                                    <div class="single-brand-logo">
                                        <img src="assets/images/brand-logo/brand-logo-5.png" alt="">
                                    </div>
                                    <div class="single-brand-logo">
                                        <img src="assets/images/brand-logo/brand-logo-6.png" alt="">
                                    </div>
                                    <div class="single-brand-logo">
                                        <img src="assets/images/brand-logo/brand-logo-3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="footer-area">
                <div class="container">
                    <div class="footer-top pt-100 pb-40">
                        <div class="row align-items-top">
                            <div class="footer-text col-lg-4 col-md-12 col-12 text-md-left">                                
                                <h3 class="footer-title">Contacto</h3>                               
                                <ul class="ul_dir_footer">
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">Primera Privada de Constitución <br>No. 136 Colonia Julián Carrillo <br>San Luis Potosí, S.L.P. </a></li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="#">444 655 8762</a></li>                                     
                                </ul>                              
                            </div>
                            <div class="footer-text col-lg-4 col-md-12  col-12">
                                <div class="footer-widget text-md-center">
                                    <div class="logo">
                                        <a href="index.php">
                                            <img src="assets/images/others/ri_1.png" alt="logo">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-text col-lg-4 col-md-4 col-12 ">
                                <div class="footer-widget text-md-right">
                                                                                                
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="row align-items-center">
                        <div class="footer-bottom footer-bottom-pb footer-bottom-pt w-100 pb-20 pt-20">
                            <div class="row align-items-center">
                                <div class="col-md-12 col-12">
                                    <div class="copyright">
                                        <p>lamejorbarbacoa©2022. All rights reserved.</p>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>                 
            </footer>
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

                        document.getElementById("price_1").value = 29;
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
                    if(document.getElementById("guiso2_2").selectedIndex == 0)
                    {
                        var element = document.getElementById("id_precio_2_2");
                        element.classList.add("oculto");

                        var element = document.getElementById("id_precio_2");
                        element.classList.remove("oculto");

                        document.getElementById("price_2").value = 16;
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

                        document.getElementById("price_3").value = 10;
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
                    var precio1 = 170;
                    var precio2 = 329;
                    var split = document.getElementById("11").value;
                    var split = split.split('.');
                    if(split[1])
                    {
                        precio = split[0] * precio2 + precio1;
                    }
                    else
                    {
                        precio = split[0] * precio2;
                    }
                    document.getElementById("id_precio_1").innerText = "$ " + precio + ".00";
                }
                if(ID_num == 2)
                {
                    var precio1 = 59;
                    var precio2 = 109;
                    var split = document.getElementById("22").value;
                    var split = split.split('.');
                    if(split[1])
                    {
                        precio = split[0] * precio2 + precio1;
                    }
                    else
                    {
                        precio = split[0] * precio2;
                    }
                    document.getElementById("id_precio_2").innerText = "$ " + precio + ".00";
                }
                if(ID_num == 3)
                {
                    var precio1 = 190;
                    var precio2 = 380;
                    var precio3 = 760;
                    var split = document.getElementById("33").value;
                    var split = split.split('.');
                    if(split[1])
                    {
                        if(split[1] == "25")
                        {
                            precio = split[0] * precio3 + precio1;
                        }
                        if(split[1] == "5")
                        {
                            precio = split[0] * precio3 + precio2;
                        }
                        if(split[1] == "75")
                        {
                            precio = split[0] * precio3 + precio2 + precio1;
                            
                        }
                    }
                    else
                    {
                        precio = split[0] * precio3;
                    }
                    document.getElementById("id_precio_3").innerText = "$ " + precio + ".00";
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
