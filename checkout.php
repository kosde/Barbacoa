<?php
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>La mejor barbacoa</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/others/ri_1.png">
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
        <link rel="stylesheet" href="assets/css/vendor/linearicons.css">
        <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
        <link rel="stylesheet" href="assets/css/plugins/owl-carousel.css">
        <link rel="stylesheet" href="assets/css/plugins/slick.css">
        <link rel="stylesheet" href="assets/css/plugins/animate.css">
        <link rel="stylesheet" href="assets/css/plugins/jquery.mb.ytplayer.min.css">
        <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/plugins/jarallax.css">
        <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/plugins/easyzoom.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script type="text/javascript" src="https://cdn.conekta.io/js/latest/conekta.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <style>
        .ul_dir_footer
        {
                text-align: left;
        }
        @media screen and (max-width: 992px) 
        {
            .footer-title, .ul_dir_footer, .footer-text 
            {
                text-align: center;
            }
        }
        label 
        {
            display: inline-block !important;
            margin-bottom: .5rem !important;
            margin: 0 !important;
            
        }
        .inputcheckout{
            background: #eceff8 !important;
            border: 2px solid #eceff8 !important;
            height: 45px !important;
            box-shadow: none !important;
            padding-left: 10px !important;
            font-size: 14px !important;
            color: #737373 !important;
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
            <div class="breadcrumb-area section-padding-1 bg-gray breadcrumb-ptb-1">
                <div class="container">
                    <div class="breadcrumb-content text-left">
                        <div class="breadcrumb-title">
                            <h2>Pago</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout-main-area pt-90 pb-90">
                <div class="container">
                    <div class="checkout-wrap pt-30">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="billing-info-wrap mr-50">
                                    <h3>Detalles de pago</h3>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label>Nombre(s):<abbr class="required" title="required">*</abbr></label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label>Apellidos:<abbr class="required" title="required">*</abbr></label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label>Direccion<abbr class="required" title="required">*</abbr></label>
                                                <input class="billing-address" placeholder="Calle, Numero, Colonia, Codigo Postal" type="text" onkeyup="distancia()" id="direccion">
                                                <input placeholder="Apartamento, casa, etc." type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <label>Telefono <abbr class="required" title="required">*</abbr></label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="additional-info-wrap">
                                        <label>Notas</label>
                                        <textarea placeholder="Escribe aquí cualquier indicación extra" name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="your-order-area">
                                    <h3>Orden</h3>
                                    <div class="your-order-wrap gray-bg-4">
                                        <div class="your-order-info-wrap">
                                            <div class="your-order-info">
                                                <ul>
                                                    <li>Productos <span>Total</span></li>
                                                </ul>
                                            </div>
                                            <div class="your-order-middle">
                                                <ul>
                                                    <!--
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
                                                    $TotalProduct = $item['TOTAL'];
                                                    $SUMA      += $TotalProduct;
                                                    if($ID == 1)
                                                    {
                                                        if($TITLE2)
                                                        {
                                                            $TITLE = "Quesadilla de ".$TITLE." con ".$TITLE2;
                                                        }
                                                        else
                                                        {
                                                            $TITLE = "Quesadilla de ".$TITLE;
                                                        }
                                                        $PRECIO = 29;
                                                        $IMG   = 6;
                                                    }
                                                    if($ID == 2)
                                                    {
                                                        if($TITLE2)
                                                        {
                                                            $TITLE = "Sope de ".$TITLE." con ".$TITLE2;
                                                        }
                                                        else
                                                        {
                                                            $TITLE = "Sope de ".$TITLE;
                                                        }
                                                        $PRECIO = 16;
                                                        $IMG   = 5;
                                                    }
                                                    if($ID == 3)
                                                    {
                                                        if($TITLE2)
                                                        {
                                                            $TITLE = "Gordita de ".$TITLE." con ".$TITLE2;
                                                        }
                                                        else
                                                        {
                                                            $TITLE = "Gordita de ".$TITLE;
                                                        }
                                                        $PRECIO = 10;
                                                        $IMG   = 2;
                                                    }
                                                    if($ID == 4)
                                                    {
                                                        if($TITLE2)
                                                        {
                                                            $TITLE = "Burrito de ".$TITLE." con ".$TITLE2;
                                                        }
                                                        else
                                                        {
                                                            $TITLE = "Burrito de ".$TITLE;
                                                        }
                                                        $PRECIO = 10;
                                                        $IMG   = 3;
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
                                                    echo "<li>".$TITLE." X ".$QUANTITY." <span>$".$PRICE." </span></li>";
                                                }
                                            ?>-->
                                                </ul>
                                            </div>
                                            <div class="your-order-info order-subtotal">
                                                <ul>
                                                    <li>Subtotal <span id="subtotal">$<?php echo $SUMA; ?>.00</span></li>
                                                </ul>
                                            </div>
                                            <div class="your-order-info order-shipping">
                                                <ul>
                                                    <li>Envio <span id="precioenvio" style="float: right;"></span></li>
                                                </ul>
                                            </div>
                                            <div style="/*display: none;*/">
                                                <?php
                                                    $distancia = 0;
                                                ?>
                                                <ul>
                                                    <li>Distancia <span id="json" style="float: right;"><?php echo $distancia; ?></span></li>
                                                </ul>
                                            </div>
                                            <div class="your-order-info order-total">
                                                <ul>
                                                    <li>Total <span id="total">$<?php echo $SUMA; ?>.00 </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="payment-method">
                                            <div class="pay-top sin-payment">
                                                <input id="payment_method_1" class="input-radio" type="radio" value="cheque" checked="checked" name="payment_method">
                                                <label for="payment_method_1"> Transferecia bancaria</label>
                                                <div class="payment-box payment_method_bacs">
                                                    <p>Banorte 1234 5678 1234 5678 <br>Envia tu comprobante por WhatsApp al numero 444 290 1803</p>
                                                </div>
                                            </div>
                                            <div class="pay-top sin-payment">
                                                <input id="payment-method-3" class="input-radio" type="radio" value="cheque" name="payment_method">
                                                <label for="payment-method-3">Efectivo</label>
                                            </div>
                                            <div class="pay-top sin-payment sin-payment-3">
                                                <input id="payment-method-4" class="input-radio" type="radio" value="cheque" name="payment_method">
                                                <label for="payment-method-4">Tarjeta de debito o credito <img alt="" src="assets/images/icon-img/payment.png"></label>
                                                <div class="payment-box payment_method_bacs">
                                                <div id="credit-button-container" style="margin-top: 80px !important;">
                                                    <form action="conekta/cobro.php" method="POST" id="card-form">
                                                        <span id="card_err" class="card-errors " style="width: 100% !important;display: block !important;color: red !important;"></span>
                                                        <div>
                                                            <label>
                                                                <label for="message" class="fontnormal" style="font-weight: bold  !important;">Nombre</label>
                                                            </label>
                                                            <input style="border: 1px solid #c8c8c8 !important;width: 100% !important;" class="inputcheckout field"  size="20" data-conekta="card[name]" id="name_conekta" type="text"  autocomplete="off">
                                                        </div>
                                                        <div>
                                                            <label>
                                                                <label for="message" class="fontnormal" style="font-weight: bold  !important;">Número de tarjeta</label>
                                                            </label>
                                                            <input style="border: 1px solid #c8c8c8 !important;width: 100% !important;" class="inputcheckout field"  size="20" data-conekta="card[number]" id="number_conekta" type="text"  autocomplete="off">
                                                        </div>
                                                        <div style="display: inline-flex  !important;padding: 0 !important;" class="col-md-12">
                                                            <div style="padding: 0;display: inline-block  !important;" class="col-md-8">
                                                                <label for="message" style="font-weight: bold !important;padding: 0 !important;height: 48px !important;" class="fontnormal col-md-12">Fecha de expiración (MM/AA)</label>
                                                                <div style="display: inline-block !important;width: 100% !important;">
                                                                    <input style="border: 1px solid #c8c8c8 !important;width: 40% !important;display: inline-block !important;float: none !important;" class="inputcheckout field" size="2" id="card_month_conekta" data-conekta="card[exp_month]" type="text" autocomplete="off">
                                                                    <span style="display: inline-block;float: none !important;">/</span>
                                                                    <input style="border: 1px solid #c8c8c8 !important;width: 40% !important;display: inline-block !important;float: none !important;" class="inputcheckout field" size="2" id="card_year_conekta" data-conekta="card[exp_year]" type="text" autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div style="padding: 0  !important;display: inline-block  !important;" class="col-md-4">
                                                                <label for="message" class="fontnormal col-md-4" style="font-weight: bold;padding: 0;height: 48px;">CVC</label>
                                                                <input style="border: 1px solid #c8c8c8 !important;-webkit-text-security: disc !important;width: 100% !important;" class="inputcheckout field key" size="4" data-conekta="card[cvc]" type="text" id="card_cvc_conekta" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <button class="stripe-button button large blue" type="submit" style="width: 100%;border-radius: 4px;color: #fff;font-size: 22px;height: 45px;background: #0070ba;margin-top: 30px;" id="pago_conekta">Pagar</button>
                                                        <div class="button large secondary block" style="width: 100% !important;cursor:pointer; cursor: hand;text-align: center;visibility: hidden;display: none;" onclick="volveraintentar()" id="volveraintentar" type="button">Volver a intentar</div>
                                                    </form>
                                                    <script type="text/javascript" >
                                                        Conekta.setPublicKey('key_RwqSgqQPTGyfsHisWJVvvFQ');

                                                        var conektaSuccessResponseHandler = function(token) {
                                                            
                                                            document.getElementById("pago_conekta").innerText="Procesando";
                                                            var email     = "ografix.info@gmail.com"
                                                            var phone     = "4448471216"
                                                            var name      = "ografix"
                                                            
                                                            if(email=="")
                                                            {
                                                                var email     = document.getElementById("input_email_alone").value;
                                                                var phone     = "+521555555555";
                                                                var name      = "anonimo";
                                                            }
                                                            if(document.getElementById("name_conekta").value!="")
                                                            {
                                                                var name      = document.getElementById("name_conekta").value;
                                                            }
                                                            //console.log(email);
                                                            var precio    = document.getElementById("totalpriceG").innerText;
                                                        
                                                            var form_data = new FormData();      
                                                            form_data.append("conektaTokenId", token.id);
                                                            form_data.append("precio", precio);
                                                            form_data.append("ckta_name", name);
                                                            form_data.append("ckta_email", email);
                                                            form_data.append("ckta_phone", phone);
                                                            $.ajax({
                                                                type: 'POST',
                                                                url: 'conekta/cobro.php',
                                                                contentType: false,
                                                                processData: false,
                                                                data: form_data,
                                                                success:function(response) {
                                                                    console.log(response);
                                                                    try
                                                                    {
                                                                        var datax = JSON.parse(response);
                                                                        if(datax.payment_status == "paid" || datax.payment_status == "approved")
                                                                        {
                                                                            location.href = 'thanks.php';
                                                                        }
                                                                        if(datax.payment_status == "declined" || datax.payment_status == "card_declined" || datax.payment_status == "partially_refunded"
                                                                        || datax.payment_status == "insufficient_funds" || datax.payment_status == "unprocessable_card_type"  || datax.payment_status == "fraudulent"
                                                                        || datax.payment_status == "canceled" || datax.payment_status == "suspected_fraud" || datax.payment_status == "stolen_card"
                                                                        || datax.payment_status == "reversed")
                                                                        {
                                                                            document.getElementById("pago_conekta").innerText="Pago rechazado";
                                                                            document.getElementById("pago_conekta").disabled = true; 
                                                                            document.getElementById("pago_conekta").style.backgroundColor = "#e60505";
                                                                            document.getElementById('volveraintentar').style.visibility = "visible";
                                                                            document.getElementById('volveraintentar').style.display = "block"; 
                                                                            document.getElementById("card_cvc_conekta").value = ''; 
                                                                        }
                                                                    }
                                                                    catch(error)
                                                                    {
                                                                            document.getElementById("pago_conekta").innerText="Pago rechazado";
                                                                            document.getElementById("pago_conekta").disabled = true; 
                                                                            document.getElementById("pago_conekta").style.backgroundColor = "#e60505";
                                                                            document.getElementById('volveraintentar').style.visibility = "visible";
                                                                            document.getElementById('volveraintentar').style.display = "block"; 
                                                                            document.getElementById("card_cvc_conekta").value = ''; 
                                                                    
                                                                    }
                                                                },
                                                                onFailure: function(response){
                                                                    //console.log("fail");
                                                                }
                                                            });
                                                        };
                                                        var conektaErrorResponseHandler = function(response) {
                                                            var $form = $("#card-form");
                                                            document.getElementById("card_err").className += " error_account";
                                                            $form.find(".card-errors").text(response.message_to_purchaser);
                                                        };

                                                        //jQuery para que genere el token después de dar click en submit
                                                        $(function () {
                                                            /*var payment = document.forms['payment-form'];
                                                            document.getElementById("ticket_input").value=14;
                                                            payment.submit();*/
                                                            $("#card-form").submit(function(event) {
                                                            var $form = $(this);
                                                            document.getElementById("card_err").className = " card-errors";
                                                            // Previene hacer submit más de una vez
                                                            //$form.find("button").prop("disabled", true);
                                                            Conekta.Token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
                                                            return false;
                                                            });
                                                        });
                                                        function volveraintentar()
                                                        {
                                                            document.getElementById("name_conekta").value = ''; 
                                                            document.getElementById("number_conekta").value = ''; 
                                                            document.getElementById("card_month_conekta").value = ''; 
                                                            document.getElementById("card_year_conekta").value = ''; 
                                                            document.getElementById("card_cvc_conekta").value = ''; 
                                                            document.getElementById("pago_conekta").style.backgroundColor = "#0070ba";
                                                            document.getElementById("pago_conekta").disabled = false; 
                                                            document.getElementById("pago_conekta").innerText = "Pagar"; 
                                                            document.getElementById('volveraintentar').style.visibility = "hidden";
                                                            document.getElementById('volveraintentar').style.display = "none"; 
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Place-order mt-40">
                                        <a href="orden.html">Ordenar</a>
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
                            <div class="footer-text col-lg-4 col-md-4  col-12 text-md-left">                                
                                <h3 class="footer-title">Contacto</h3>                               
                                <ul>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">Primera Privada de Constitución <br>No. 136 Colonia Julián Carrillo <br>San Luis Potosí, S.L.P. 
                                        </a></li>
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
        <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="assets/js/vendor/popper.js"></script>
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
        <script src="assets/js/main.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://apis.google.com/js/api.js" type="text/javascript"></script>
        <script>
            function distancia()
            {
                var direccion = document.getElementById("direccion").value;
                direccion = direccion.replace(/ /g, "+")
                if(direccion == "")
                {
                    document.getElementById('json').innerText = "";
                }
                else
                {
                    console.log(direccion);
                    var form_data = new FormData();    
                    form_data.append('direccion', direccion);
                    $.ajax({
                        type: 'POST',
                        url: 'php/distancia.php',
                        contentType: false,
                        processData: false,
                        data: form_data,
                        dataType: 'json',
                        success:function(response) {
                            //0-5.5 50 PESOS
                            //5.5 8PESOS
                                var json            = response.json;
                                var distancia       = response.distancia;
                                var precio;
                                if(distancia.replace(/\D+$/g, "")<5.5)
                                {
                                    document.getElementById('precioenvio').innerText = "$ 50.00";
                                    precio = 50;
                                }
                                else
                                {
                                    var distsinkm = distancia.replace(/\D+$/g, "")-5.5;
                                    var precioextra = Math.ceil(distsinkm)*8+50;
                                    precio = precioextra;
                                    document.getElementById('precioenvio').innerText = "$ " + precioextra + ".00";
                                }
                                var subtotal = document.getElementById('subtotal').innerText;
                                subtotal =  subtotal.replace(/[^0-9\.]+/g,"");
                                var total = parseFloat(subtotal) + parseFloat(precio);
                                document.getElementById('total').innerText ="$ " + total ;
                                document.getElementById('json').innerText = distancia;
                        },
                        onFailure: function(response){
                            alert("fail");
                        }
                    });
                }
            }
        </script>    
        
    </body>
</html>