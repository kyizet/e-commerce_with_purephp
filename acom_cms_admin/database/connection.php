<?php

if(isset($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];
}

define("DB_SERVER", "localhost");
define("DB_USER", $username);
define("DB_PASSWORD", $password);
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);

?>