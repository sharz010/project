<?php
session_start();

// set global variabelen
isset($_SESSION['toegang'])? $_SESSION['toegang'] = $_SESSION['toegang']: $_SESSION['toegang'] = false;

include('./smarty/libs/Smarty.class.php');
include('./includes/functions.php');


// create object
$smarty = new Smarty;

// dynamische deel van de webpagina

// producten = dynamisch
$products = getProducts();
$smarty->assign("products", $products);

//$_SESSION['toegang'] = true;
//$_SESSION['toegang'] = false;

// dispatch
isset($_SESSION['username']) ? $userid = $_SESSION["username"]: $_SESSION['username']="gast";
$smarty->assign("userid", $_SESSION["username"]);


include('/includes/bestelform.php');
include('/includes/cart.php');

// Laat de webshop zien

Dispatch();


$smarty->display('/templates/main.tpl');

var_dump( $_SESSION);

?>
