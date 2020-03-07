<?php

define("DB_SERVER", "localhost");
define("DB_USER", "zet");
define("DB_PASSWORD", "123");
define("DB_NAME", "acom");
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

include_once("addDatabase.php");
?>