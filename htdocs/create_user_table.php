<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "sugarfix_store";

$handler = mysqli_connect($servername, $username, $password, $dbname);

if (!$handler) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

$create_users_query = "CREATE TABLE users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(20) NOT NULL)";


if (mysqli_query($handler, $create_users_query)) {
    echo "Table created succesfully";
} else {
    echo "Error creating table: " . mysqli_error($handler);
}
?>