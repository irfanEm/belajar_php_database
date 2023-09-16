<?php 

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$prepareStatement = $connection->prepare($sql);
$prepareStatement->execute([$username, $password]);

if($row = $prepareStatement->fetch()){
    echo "Sukses Login : " . $row['username'] . PHP_EOL;
} else {
    echo "Gagal Login" . PHP_EOL;
}

var_dump($prepareStatement->fetch());

$connection = null;