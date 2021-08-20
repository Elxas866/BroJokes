<?php

//connect to database
$conn = mysqli_connect("localhost", "root", "", "brojokes");

// Check connection
if (!$conn) {

    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    
    exit();
}