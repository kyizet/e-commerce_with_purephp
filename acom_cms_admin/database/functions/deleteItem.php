<?php
include("../connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $category = $_POST["category"];
    $name = $_POST["name"];
    
    $sql = "select photo from `$category` where name='{$name}'";
    $result = mysqli_query($connection, $sql);
    $photo = json_encode(mysqli_fetch_object($result));  // since the returning value from mysqli_fetch_object is an object, it is transformed into string by feeding it into json_encode

    $photo = preg_replace('/[^0-9]/', '', $photo);  // json_encode produces unnecessary values, so only numbers are retrieved
    unlink("../images/items/" . $photo . ".png");  // since all of the photos from the website will be png, it can be automatically set

    $sql = "delete from `$category` where name='{$name}'";
    $result = mysqli_query($connection, $sql);
}

include("showData.php");


?>