<?php
    $SUMA = 0;
    $id_cont = 0;
    foreach ($_SESSION['CART'] as $item)
    {//'CONT' => $cont,
        $ID         = $item['ID'];
        $TITLE      = $item['TITLE'];
        $TITLE2     = $item['TITLE2'];
        $QUANTITY   = $item['QUANTITY'];
        $PRICE      = $item['PRICE'];
        $CONTA      = $item['CONT'];
        $SUMA      += $PRICE;
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
        <li class='single-product-cart'>
            <div class='cart-img'>
                <a href='#'><img src='".$IMG."' alt=''></a>
            </div>";
        if($ID == 4)
        {
            echo "<div class='cart-title'>
                    <h4><a href='#'>".$TITLE."</a></h4>
                    <span> $".$PRICE.".00 </span>
                </div>";
        }
        else
        {
            echo "<div class='cart-title'>
                    <h4><a href='#'>".$TITLE."</a></h4>
                    <span> ".$QUANTITY." Kg × $".$PRICE.".00	</span>
                </div>";
        }
        echo "
            <div class='cart-delete'>
                <a href='delete_cart.php?item_id=".$id_cont."&pag=1' >×</a>
            </div>
        </li>
        ";
        $id_cont++;
    }
?>