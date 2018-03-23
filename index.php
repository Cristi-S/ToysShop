<?php
include 'includes/Config.php';
require_once("models/products.php");

$products = products_all($link);

include("views/products.php")
?>