<?php
define('BASE_PATH', realpath(__DIR__));
require_once 'vendor/autoload.php';
$dotEnv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotEnv->load();

use MyFramework\DataBase\DataBase;
use MyFramework\DataBase\ORM;
use OrderBundle\Repository\BadWordsRepository;

$orm = new ORM(new DataBase());
$badWords = new BadWordsRepository(new DataBase());
$palavroes = $badWords->findAllAsArray();
$account = $orm->findByID('fornecedores', 17);
echo 'oi';
