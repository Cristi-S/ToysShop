<?php
/**
 * Created by PhpStorm.
 * User: narba
 * Date: 23.03.2018
 * Time: 17:28
 */
session_start();
include 'Config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../index.css">
</head>
<body>


<div class="container">
    <header>
        <div class="d-none d-md-block top-line">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-3 justify-content-start">
                        <ul class="nav navbar-nav">
                            <li><img width="50" height="50" alt="Brend" src="../img/cat.jpg"></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href='/company/info/'>О компании</a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href='/delivery-and-pay/'>Оплата и
                                доставка</a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href='../login.php'>Личный
                                кабинет</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    <nav class="navbar navbar-default">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Введите название">
                </div>
                <button type="submit" class="btn btn-default">Поиск</button>
            </form>
            <ul class="nav navbar-nav navbar-left">
                <!--<li><a href="#" id="userName">Регистирация</a></li>-->
                <li><a href="#" id="favotiteCount"> Список желаемого </a></li>
            </ul>

        </div>

    </nav>


    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item-boy"><a class="nav-link" href="/catalog/boy/">Мальчики</a></li>
        <li class="nav-item-gerl"><a class="nav-link" href="/catalog/girl/">Девочки</a></li>
        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="/catalog/age/">Бренд</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="false">Возраст <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">Меньше 3х лет</a></li>
                <li><a href="#">от 4 до 6</a></li>
                <li><a href="#">от 7 до 12</a></li>
                <li><a href="#">от 12</a></li>
            </ul>
        </li>
    </ul>


    <a href="../admin">Панель администратора</a>


    <div class="row">
        <div class="col-md-4">
            <h2 class="no-margin"> Хиты продаж</h2>
        </div>
        <div class="col-md-4">
        </div>

        <div class="btn-group pull-right" id="goodsListToggle">

            <button type="button" class="btn btn-default active">
                <i class="glyphicon glyphicon-th-large"></i>
                <span>&nbsp;Плитка </span>
            </button>

            <button type="button" class="btn btn-default">
                <i class="glyphicon glyphicon-th-list"></i>
                <span>&nbsp;Список </span>
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <hr>
    <div class="alert alert-info" id="test">

    </div>
    <hr>