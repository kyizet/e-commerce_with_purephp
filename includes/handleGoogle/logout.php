<?php

$root = $_SERVER['DOCUMENT_ROOT'];
include($root . "/e-commerce_with_purephp/includes/handleGoogle/config.php");
session_start();
include('config.php');
$google_client->revokeToken();
session_destroy();
header('Location: http://localhost:8080/e-commerce_with_purephp/index.php');

?>
