<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

try {

    $connection = new PDO("mysql:host=$host:$port;dbname=$database;",$username, $password);
    echo "Koneksi database MySQL sukses !".PHP_EOL;

    $connection = null;

} catch (PDOException $e) {

    echo "Koneksi database MySQL gagal : " . $e->getMessage() . PHP_EOL;
    
}