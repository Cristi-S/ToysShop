<?php

function products_all($link)
{
    $query = "SELECT*FROM products ORDER BY id desc";
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $products = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $products[] = $row;
    }
    return $products;
}

function products_get($link, $id_product)
{
    $query = sprintf("SELECT*FROM products WHERE id=%d", (int)$id_product);
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    $product = mysqli_fetch_assoc($result);

    return $product;
}

function products_new($link, $title, $date, $content)
{
    $title = trim($title);
    $content = trim($content);

    if ($title == '')
        return false;

    $t = "INSERT INTO products (name, date, description) VALUES ('%s', '%s', '%s')";

    $query = sprintf($t, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content));

    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    return true;
}

function products_edit($link, $id, $title, $date, $content)
{
    $title = trim($title);
    $date = trim($date);
    $content = trim($content);
    $id = (int)$id;

    if ($title == '')
        return false;
    $sql = "UPDATE products SET name='%s', date='%s', description='%s' WHERE id='%d'";

    $query = sprintf($sql,
        mysqli_real_escape_string($link, $title),
        mysqli_real_escape_string($link, $date),
        mysqli_real_escape_string($link, $content), $id);

    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);
}

function products_delete($link, $id)
{
    $id = (int)$id;

    if ($id == 0)
        return false;

    $query = sprintf("DELETE FROM products WHERE id='%d'
    ", $id);

    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);
}

function products_intro($text, $len = 200)
{
    return mb_substr($text, 0, $len);
}

?>