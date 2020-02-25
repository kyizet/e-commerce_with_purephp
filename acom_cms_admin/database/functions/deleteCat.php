<?php

include("../connection.php");

if($_POST['deleteCatName'] != "admin" || $_POST['deleteCatName'] != 'customer'){
$deleteCatName = $_POST['deleteCatName'];
$sql = "drop table `$deleteCatName`";
$result = mysqli_query($connection, $sql);

}

include("showSideNav.php");

?>