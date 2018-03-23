<?php
require_once("models/auth.php");
include 'includes/header.php';
include 'includes/Config.php';

$login = $_POST['login'];
$password = $_POST['password'];

IF (!ValidData($link, $login, $password)) {
    echo 'Пользователя с такой парой логин и пароль нет';
    session_unset();
} ELSE {
    echo 'Пользователь найден';
};
?>
<div class="alert alert-info">Вы будете перенаправлены в личный кабинет.</div>
<meta http-equiv="refresh" url CONTENT="3;URL=personal/profile.php" /">