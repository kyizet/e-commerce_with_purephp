<?php
include("../connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $category = $_POST["category"];
    $name = $_POST["name"];

    $sql = "select photo from `$category` where name = '{$name}';";
    $result = mysqli_query($connection, $sql);
    $data = mysqli_fetch_assoc($result);
    $photo = $data['photo'];
    unlink("../images/items/" . $photo);

    $sql = "delete from `$category` where name='{$name}'";
    $result = mysqli_query($connection, $sql);
}

include("showData.php");
