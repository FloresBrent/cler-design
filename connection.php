<?php


// localhost, my_user, my_password, db_name
 $con = mysqli_connect("localhost", "root", "","cler");
//  $con = mysqli_connect("mysql:host=sql308.epizy.com", "epiz_32825367", "4x0dobaoC5r","dbname=epiz_32825367_cler");
 $con -> set_charset("utf8");
 session_start(); 

 
 // Database configuration
// $dbHost     = "localhost";
// $dbUsername = "root";
// $dbPassword = "";
// $dbName     = "cler";

// Create database connection
// $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>
