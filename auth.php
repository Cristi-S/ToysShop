<?php
require_once("models/auth.php");
include 'includes/header.php';

$login = $_POST['login'];
$password = $_POST['password'];

IF (!ValidData($link, $login, $password)) {
    echo 'Пользователя с такой парой логин и пароль нет';
    session_unset();
} ELSE {
    echo 'Пользователь найден';
};
?>
<div class="alert alert-info">Вы будете перенаправлены на главную страницу через 3 секунды</div>
<meta http-equiv="refresh" content="3; /">