<?php

include("../connection.php");


// Adding new category or table with predefined columns, this will restrict the admins from defining new unneccessary columns
$newCatName = $_POST['newCatName'];
$newCatName = strtolower($newCatName);

$sql = "CREATE TABLE `$newCatName`(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    anime VARCHAR(100),
    price FLOAT,
    quantity INT,
    detail TEXT,
    photo VARCHAR(255)
    );";

$result = mysqli_query($connection, $sql);
include("showSideNav.php");


?>