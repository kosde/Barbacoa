<?php
session_start();
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
            .button_pagar{
                background-color: #ffffff;
                color: #000000;
                text-align: center;
                font-size: 14px;
                display: block;
                padding: 21px 10px 21px;
                text-transform: uppercase;
                font-weight: bold;
                border: 2px solid #E2B04D;
                border-radius: 8px;
            }
        .ul_dir_footer{
                text-align: left;
            }
            @media screen and (max-width: 992px) 
            {
                .footer-title, .ul_dir_footer, .footer-text {
                    text-align: center;
                }
                .centro{
                    text-align: center;
                }
            }
            .c_all{
                    text-align: center;
                }
        </style>
    </head>

    <body>
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
            <div class="cart-main-area pt-110 pb-120" id="resumen">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="table-content table-responsive cart-table-content">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th class="centro">Productos
                                                            <br>
                                                            <div style="visibility: hidden;">productos</div>
                                                        </th>
                                                        <th class="centro c_all">Cantidad</th>
                                                        <th class="centro c_all">Precio <br>
                                                            Unitario</th>
                                                        <th class="centro c_all">Unidades
                                                            <br>
                                                            <div style="visibility: hidden;">productos</div>
                                                        </th>
                                                        <th class="centro c_all">Total
                                                            <br>
                                                            <div style="visibility: hidden;">productos</div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $SUMA = 0;
                                                        $id_cont = 0;
                                                        foreach ($_SESSION['CART'] as $item)
                                                        {
                                                            $ID         = $item['ID'];
                                                            $TITLE      = $item['TITLE'];
                                                            $TITLE2     = $item['TITLE2'];
                                                            $QUANTITY   = $item['QUANTITY'];
                                                            $PRICE      = $item['PRICE'];
                                                            $CONTA      = $item['CONT'];
                                                            $UNIDADES   = $item['UNIDADES'];
                                                            $TotalProduct = $item['TOTAL'];
                                                            $SUMA      += $TotalProduct;
                                                            if($ID == 1)
                                                            {
                                                                if($TITLE2)
                                                                {
                                                                    $TITLE = $TITLE;
                                                                }
                                                                $PRECIO = $PRICE;
                                                                $IMG   = "assets/images/barbacoa.jpg";
                                                            }
                                                            if($ID == 2)
                                                            {
                                                                if($TITLE2)
                                                                {
                                                                    $TITLE = $TITLE;
                                                                }
                                                                $PRECIO = $PRICE;
                                                                $IMG   = "assets/images/chamorros.jpg";
                                                            }
                                                            if($ID == 3)
                                                            {
                                                                if($TITLE2)
                                                                {
                                                                    $TITLE = $TITLE;
                                                                }
                                                                $PRECIO = $PRICE;
                                                                $IMG   = "assets/images/lengua.jpg";
                                                            }
                                                            if($ID == 4)
                                                            {
                                                                if($TITLE2)
                                                                {
                                                                    $TITLE = $TITLE;
                                                                }
                                                                $PRECIO = $PRICE;
                                                                $IMG   = "assets/images/paquete.jpg";
                                                            }
                                                            if($ID == 5)
                                                            {
                                                                if($TITLE2)
                                                                {
                                                                    $TITLE = "Torta de ".$TITLE." con ".$TITLE2;
                                                                }
                                                                else
                                                                {
                                                                    $TITLE = "Torta de ".$TITLE;
                                                                }
                                                                $PRECIO = 17;
                                                                $IMG   = 4;
                                                            }
                                                            if($ID == 6)
                                                            {
                                                                $TITLE = "Refresco de botella sabor ".$TITLE;
                                                                $PRECIO = 15;
                                                                $IMG   = 8;
                                                            }
                                                            if($ID == 7)
                                                            {
                                                                $TITLE = "Refresco desechable sabor ".$TITLE;
                                                                $PRECIO = 18;
                                                                $IMG   = 7;
                                                            }
                                                            echo "
                                                            <tr>
                                                                <td class='product-remove'>
                                                                    <a href='delete_cart.php?item_id=".$id_cont."&pag=2' ><i class=' ti-close '></i></a>
                                                                </td>
                                                                <td class='product-name'><a href='#'>".$TITLE."</a></td>";
                                                                if($ID == 4)
                                                                {
                                                                    echo "<td> ".$TITLE."</td>";
                                                                }
                                                                else
                                                                {
                                                                    echo "<td> ".$QUANTITY." Kg </td>";
                                                                }
                                                            echo "
                                                                <td class='product-price c_all'><span class='amount' id='precio_unitario_".$id_cont."'>$".$PRECIO.".00</span></td>
                                                                <td class='cart-quality c_all'>
                                                                    <div class='product-details-quality quality-width-cart'>
                                                                        <div class='cart-plus-minus2'>
                                                                            <input class='cart-plus-minus-box' type='text' id='".$id_cont."' name='qtybutton' value='".$UNIDADES."' title='".$id_cont."'>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class='product-total c_all' ><span id='id".$id_cont."'>$".$TotalProduct.".00</span></td>
                                                            </tr>
                                                            ";
                                                            $id_cont++;
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                       
                                        <div class="grand-total-wrap">
                                            <h4>Total</h4>
                                            <form method="post" style="width: 100%;">
                                                <div class="grand-total-content">
                                                    <ul>
                                                        <li>Subtotal <span> $<?php echo $SUMA;?>.00</span></li>
                                                        <?php
                                                        if($_SESSION['OPCION']==0)
                                                        {
                                                        ?>
                                                        <li>Envio
                                                            <ul>
                                                                <li>Envió a domicilio</li>
                                                                <li><input type="hidden" id="suma" value="<?php echo $SUMA; ?>"></li>
                                                            </ul>
                                                        </li> 
                                                        <?php
                                                        }
                                                        ?>
                                                        <li>Precio Total <span>$</span><span id="total"><?php echo $SUMA;?>.00</span> </li>
                                                       
                                                    </ul>
                                                </div>
                                                <div class="grand-btn">
                                                    <button  type="submit"  class="button_pagar" style="width: 100%;padding: 22px 0;text-align: center !important;" name="continuar" value="continuar">Continuar y pagar</button>
                                                    <!--<button type="submit" style="width: 100%;padding: 22px 0;text-align: center !important;" name="Refresco2" value="Refresco2" >Agregar al carrito</button>-->
                                                    <h4 class="uppercase" style="width: 100%;visibility: hidden;">Cantidad: </h4>
                                                    <a title="Add to cart" href="index.php?seccion=1" style="width: 100%;padding: 22px 0;text-align: center !important;">Agregar mas productos</a>
                                                </div>
                                            </form>
                                            <?php
                                            if(isset($_POST['continuar']))
                                            {  
                                                unset($_SESSION["envio1"]);
                                                unset($_SESSION["envio2"]);
                                                if(isset($_POST['shipping1']))
                                                {
                                                    $shipping1 = $_POST['shipping1'];
                                                    $_SESSION["envio1"] = "1";
                                                }
                                                if(isset($_POST['shipping2']))
                                                {
                                                    $shipping2 = $_POST['shipping2'];
                                                    $_SESSION["envio2"] = "1";
                                                }
                                                echo'
                                                    <script>
                                                        window.location = "checkout.php";
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
            <!-- cart end -->          
            <!-- Footer -->
            <footer class="footer-area">
                <div class="container">
                    <div class="footer-top pt-100 pb-40">
                        <div class="row align-items-top">
                            <div class="footer-text col-lg-4 col-md-4  col-12 text-md-left">                                
                                <h3 class="footer-title">Contacto</h3>                               
                                <ul>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">Primera Privada de Constitución <br>No. 136 Colonia Julián Carrillo <br>San Luis Potosí, S.L.P. </a></li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="#">444 655 8762</a></li>                                     
                                </ul>                              
                            </div>
                            <div class="footer-text col-lg-4 col-md-4  col-12">
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
        </div>
        <!-- All JS is here
    ============================================ -->
        <script>
            function envio(num)
            {
                var suma = document.getElementById("suma").value;
                suma = parseInt(suma, 10);
                if(num==1)
                {
                    document.getElementById("shipping2").checked=0;
                    document.getElementById("total").innerHTML = suma.toFixed(2);
                }else{
                    document.getElementById("shipping1").checked=0;
                    var total = suma + 40;
                    document.getElementById("total").innerHTML = total.toFixed(2);
                }
            }
        </script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            function update(numID,newQty,price)
            {
                //alert(numID+" "+newQty+" "+price);
                var form_data2 = new FormData();                  
                form_data2.append('id', numID);
                form_data2.append('qty', newQty);
                form_data2.append('price', price);
                /*console.log(numID);
                console.log(newQty);
                console.log(price);*/
                $.ajax({
                    type: 'POST',
                    url: 'update_cart.php',
                    contentType: false,
                    processData: false,
                    data: form_data2,
                    success:function(response) {
                        
                        //$(".reloadMe").attr('src', src.split('?')[0] + "?" + Math.floor(Math.random()* 10000000));
                        //$("#resumen").load(" #resumen > *");
                        //$('#resumen').load(document.URL +  ' #resumen');
                        //$(".resumen").load(location.href + " .resumen > *");
                        location.reload();
                    },
                    onFailure: function(response){
                    }
                });
            }
            
        </script>
        
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
        <script class="reloadMe" src="assets/js/main.js"></script>

    </body>

</html>