<?php 

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments (email, comment) VALUES ('dirah@test.com', 'hai')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('sugi@test.com', 'hallo')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('akrom@test.com', 'hola')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('siti@test.com', 'punten')");
$connection->exec("INSERT INTO comments (email, comment) VALUES ('saimin@test.com', 'kulo nuwun')");

$connection->commit();

$connection = null;