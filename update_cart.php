<?php
$id = $_POST["id"];
$qty = $_POST["qty"];
$price = $_POST["price"];
session_start();
$cont = 0; 
if (!empty($_SESSION["CART"])) 
{
    foreach ($_SESSION["CART"] as $select => $val) 
    {
        if($cont== $id)
        {
            /*
            $ID         = $item['ID'];
            $TITLE      = $item['TITLE'];
            $TITLE2     = $item['TITLE2'];
            $QUANTITY   = $item['QUANTITY'];
            $PRICE      = $item['PRICE'];
            $CONTA      = $item['CONT'];
            */
            /*$_SESSION["CART"][$select]['QUANTITY'] = $qty;*/
            $_SESSION["CART"][$select]['TOTAL'] = $price;
            $_SESSION["CART"][$select]['UNIDADES'] = $qty;
            //$_SESSION['item'][$_GET['id']]['quantity'] = $_POST['quantity'];
        }
        $cont++;
    }
}
?>