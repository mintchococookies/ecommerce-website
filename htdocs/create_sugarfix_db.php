<?php

    $servername = "127.0.0.1";
    $username = "root";
    $password = NULL;

    $handler = mysqli_connect($servername,$username,$password);

    if (!$handler) {
        die("Connection failed: ".mysqli_connect_error());
    }else{
        echo "Connected successfully";
    }

    if (mysqli_query($handler,'CREATE DATABASE sugarfix_store')) {
        echo "Database created successfully";
    }else{
        echo "Error creating database: ".mysqli_error($handler);
    }

?>