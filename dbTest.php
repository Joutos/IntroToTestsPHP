<?php
define('BASE_PATH', realpath(__DIR__));
require_once 'vendor/autoload.php';
$dotEnv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotEnv->load();

use MyFramework\DataBase\DataBase;

$orm = new DataBase();

$account = $orm->query('SELECT * FROM fornecedores f')->fetchAll();
echo 'oi';
