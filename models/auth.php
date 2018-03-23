<?php
function ValidData($link, $login, $password)
{
    $query = 'SELECT * FROM users WHERE login = "' . $login . '" AND password = "' . $password . '"';

    $result = mysqli_query($link, $query);

    if ($result->num_rows) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['login'] = $user['login'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['auth'] = true;
        return true;
    } else {
        return false;
    }
}