<?php
/**
 * Created by PhpStorm.
 * User: narba
 * Date: 23.03.2018
 * Time: 17:23
 */

class Config
{
    public $appName = 'Магазин игрушек';
    public $host = 'localhost';
    public $user = 'root';
    public $password = '';
    public $db = 'toy_web_app';
}

$config = new Config;
include 'db.php';