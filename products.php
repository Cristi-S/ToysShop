<?php
require_once("_database.php");
require_once("models/products.php");

$link = db_connect();
$product = products_get($link, $_GET['id']);

include("views/product.php")
?>