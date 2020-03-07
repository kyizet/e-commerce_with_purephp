<?php

$root = $_SERVER['DOCUMENT_ROOT'];
include($root . "/e-commerce_with_purephp/acom_cms_admin/database/connection.php");
session_start();

if (empty($_POST['username']) && empty($_POST['password'])) {
    $_SESSION['loginError'] = "Username and password cannot be empty";
    header("Location: http://localhost:8080/e-commerce_with_purephp/");
} else {
    $sql = "select customer_username from customer";
    $result = mysqli_query($connection, $sql);
    while ($data = mysqli_fetch_assoc($result)) {
        if ($data['customer_username'] === $_POST['username'] && $data['customer_password'] === $_POST['password']) {
            $_SESSION['username'] = $_POST['username'];
            header("Location: http://localhost:8080/e-commerce_with_purephp/");
        } else {
            $_SESSION['loginError'] = "Username or password is wrong";
            header("Location: http://localhost:8080/e-commerce_with_purephp/");
        }
    }
}

?>
