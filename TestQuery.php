<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$sql = "SELECT * FROM customers";
$statement = $connection->query($sql);
foreach($statement as $row)
{
    var_dump($row);
}

$connection = null;