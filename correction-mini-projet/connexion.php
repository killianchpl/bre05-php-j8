<?php
// $host = "db.3wa.io";
// $port = "3306";
// $dbname = "VOTREID_php_j6";

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$user = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];


$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";


$db = new PDO(
    $connexionString,
    $user,
    $password
);

// echo "<pre>";
// var_dump($db);
// echo "</pre>";