<?php
$item_id = $_GET["item_id"];
$pag = $_GET["pag"];
$cont = 0;
session_start();
if (!empty($_SESSION["CART"])) 
{
    foreach ($_SESSION["CART"] as $select => $val) 
    {
        if($cont== $item_id)
        {
            unset($_SESSION["CART"][$select]);
        }
        $cont++;
    }
}
if($pag == 1)
{
    echo'
        <script>
            window.location = "index.php";
        </script>
        ';      
}
if($pag == 2)
{
    echo'
        <script>
            window.location = "cart.php";
        </script>
        ';      
}
if($pag == 3)
{
    echo'
        <script>
            window.location = "checkout.php";
        </script>
        ';      
}
?>