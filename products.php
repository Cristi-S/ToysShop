<?php
include 'includes/Config.php';
require_once("models/products.php");

$product = products_get($link, $_GET['id']);

include("views/product.php")
?>