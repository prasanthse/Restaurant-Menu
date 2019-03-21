<?php

    $host="localhost";
    $userName="root";
    $password="";
    $db="RestaurantMenu";
    
    $connection = new mysqli($host,$userName,$password,$db);

    if($connection->connect_error){
        die("Connection failed: " . $connection->connect_error);
    }
        
    //create database
    $sql = "CREATE DATABASE RestaurantMenu";
    if($connection->query($sql) === TRUE){
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $connection->error;
    }
    
    //create table
    $sqlTable = "CREATE TABLE client (id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                                        fullname VARCHAR(30) NOT NULL,
                                        phone VARCHAR(30) NOT NULL,
                                        email VARCHAR(50) NOT NULL,
                                        card VARCHAR(30) NOT NULL,
                                        pin VARCHAR(5) NOT NULL,
                                        )";

    if ($connection->query($sqlTable) === TRUE) {
        echo "Table client created successfully";
    } else {
        echo "Error creating table: " . $connection->error;
    }
?>