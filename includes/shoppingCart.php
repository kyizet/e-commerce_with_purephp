<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include($root . "/e-commerce_with_purephp/acom_cms_admin/database/connection.php");

session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $itemName = $_POST['name'];
    $category = $_POST['category'];

    $sql = "select price, quantity, photo, name from  `$category` where name='$itemName'";
    $result = mysqli_query($connection, $sql);
    $data = mysqli_fetch_object($result);
    array_push($_SESSION['cart'], $data);
}



if ($_SERVER['REQUEST_METHOD'] == "GET") {
    echo "[";
    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
        echo ($i > 0 ? ',' : '') . json_encode($_SESSION['cart'][$i]);
    }
    echo "]";
}