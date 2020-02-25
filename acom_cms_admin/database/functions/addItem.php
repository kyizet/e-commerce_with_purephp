<?php
include("../connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $category = $_POST["category"];
    $name = $_POST["name"];
    $anime = $_POST['anime'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $detail = $_POST['detail'];
    $sql = "insert into `$category` (name,anime,price,quantity,detail) values ('$name','$anime','$price','$quantity','$detail')";
}
$result = mysqli_query($connection,$sql);

include("showData.php");
?>