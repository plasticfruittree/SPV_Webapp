<?php

// connect the database

$servername = "localhost";
$username = "root";
$password = "root";


// create the connection
$connection = new mysqli($servername, $username, $password);

// check connection
if($connection->connect_error)
{
    die("Connection failed: " . $connection->connect_error);
}
echo "Connected Successfully"

?>

