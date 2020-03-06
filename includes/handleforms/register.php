<?php
    include('../../acom_cms_admin/database/connection.php');
    session_start();
    
    if(empty($_POST['username']) || empty($_POST['password'])){
        $_SESSION['error'] = "Username and password cannot be empty";
        $allowedToAdd = false;
        header("Location: http://localhost:8080/e-commerce_with_purephp/");
    } else {
        $sql = "select customer_username from customer";
        $result = mysqli_query($connection, $sql);
        while ($data = mysqli_fetch_assoc($result)) {
            if($data['customer_username'] === $_POST['username']){
                $_SESSION['error'] = "Username is already taken!";
                $allowedToAdd = false;
                header("Location: http://localhost:8080/e-commerce_with_purephp/");
            } else {
                $allowedToAdd = true;
            }
        }
    }

    if($allowedToAdd){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $sql = "insert into customer (customer_firstName, customer_lastName, customer_email, customer_username, customer_password, customer_address, customer_phone)
        values ('$firstName', '$lastName', '$email', '$username', '$password', '$address', '$phone');";
        mysqli_query($connection, $sql);
        $_SESSION['username'] = $username;
        header("Location: http://localhost:8080/e-commerce_with_purephp/");
    }