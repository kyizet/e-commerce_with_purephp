<?php
include("../connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $category = $_POST["category"];
    $name = $_POST["name"];
    $sql = "delete from `$category` where name='{$name}'";
}
$result = mysqli_query($connection, $sql);

include("showData.php");

?>