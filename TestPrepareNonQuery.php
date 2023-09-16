<?php 

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "farah";
$password = "farah2103";

$sql = "INSERT INTO admin (username, password) VALUES (:username, :password)";
$prepareStatement = $connection->prepare($sql);
$prepareStatement->bindParam("username", $username);
$prepareStatement->bindParam("password", $password);
$prepareStatement->execute();

$connection = null;