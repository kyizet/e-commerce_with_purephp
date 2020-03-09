<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include($root . "/e-commerce_with_purephp/acom_cms_admin/database/connection.php");

session_start();
$_SESSION['cart'];

if($_POST["checkout"]){
    if($_SESSION['username']){
        $customer = $_SESSION['username'];
        $sql = "select address from customer where name=`$customer`";
        $result = mysqli_query($connection, $sql);
        $data = mysqli_fetch_assoc($result);
        $address = $data['address'];
    foreach($_SESSION['cart'] as $value){
        $itemname = $value->name; 
        $sql = "insert into itemorder (customer, address, item) 
                            values ($customer, $address, $itemname)";
        mysqli_query($connection, $sql);
    }
}
}

?>