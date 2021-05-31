<?php
    $serverName = "localhost";
    $databaseName = "clothes_shop";
    $databaseUser = "root";
    $databasePass = "";

    $connection = mysqli_connect($serverName, $databaseUser, $databasePass, $databaseName);
    
    if(!$connection){
        echo "Failed to connect to MySQL: ". mysqli_connect_error();
        exit();
    }
?>