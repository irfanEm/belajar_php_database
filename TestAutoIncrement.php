<?php 

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->exec("INSERT INTO comments (email, comment) VALUES ('balqis@test.com', 'ahlan wasahlan')");
$id = $connection->lastInsertId();

echo $id . PHP_EOL;

$connection = null;