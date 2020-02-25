<?php
include("../connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $category = $_POST["category"];
    $name = $_POST["name"];
    $anime = $_POST['anime'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $detail = $_POST['detail'];
    $selectedItem = $_POST['selectedItem'];

    $sql = "update `$category`
            set name='$name',
                anime='$anime',
                price='$price',
                quantity='$quantity',
                detail='$detail'
            where name='$selectedItem';";
}

$result = mysqli_query($connection, $sql);
include("showData.php");

?>