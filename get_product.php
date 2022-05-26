<?php

// we need to include database connection file 
include("connection.php");
// this code will select all products from database
$stmt = $conn->prepare("SELECT * FROM products");
$stmt->execute();

// get data and will store them in products variable that will return an array

$products =$stmt->get_result();



?>