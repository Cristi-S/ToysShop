<?php
//    require_once("_database.php");
require_once("models/products.php");

//    $link = db_connect();

include 'includes/header.php';
$products = products_all($link);
include("views/products.php");
include 'includes/footer.php'
?>
