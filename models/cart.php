<?php
/**
 * Created by PhpStorm.
 * User: narba
 * Date: 23.03.2018
 * Time: 15:42
 */


function addToCart($id, $count = 1)
{
    $_SESSION['cart'][$id] = $_SESSION['cart'][$id] + $count;
    return true;
}

function delFromCart($id, $count = 1)
{
}

function clearCart()
{
}
