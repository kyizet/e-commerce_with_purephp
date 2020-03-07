<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include($root . "/e-commerce_with_purephp/acom_cms_admin/database/connection.php");
session_start();

if (empty($_POST['username']) && empty($_POST['password'])) {
    $_SESSION['errorEdit'] = "Username and password cannot be empty";
    header("Location: http://localhost:8080/e-commerce_with_purephp/");
} else {
    $currentUsername = $_POST['username'];
    $sql = "select customer_username from customer";
    $result = mysqli_query($connection, $sql);
    while ($data = mysqli_fetch_assoc($result)) {
        if ($data['customer_username'] === $_POST['username']) {
            if ($_POST['oldUserName'] != $_POST['username']) {
                $_SESSION['errorEdit'] = "Username is already taken!";
                $allowedToAdd = false;
                header("Location: http://localhost:8080/e-commerce_with_purephp/");
            } else {
                $allowedToAdd = true;
            }
        } else {
            $allowedToAdd = true;
        }
    }
}

if ($allowedToAdd) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];


    $oldUserName = $_POST['oldUserName'];

    // verifying that the image is set so the user won't insert the empty image if he/she doesn't choose one
    if (empty($_FILES['photo']['name'])) {
        $sql = "select customer_photo from customer where customer_username = '$oldUserName';";
        $result = mysqli_query($connection, $sql);
        $data = mysqli_fetch_assoc($result);
        $photo = $data['customer_photo'];
    } else {
        // to delete before adding new
        $sql = "select customer_photo from customer where customer_username = '$oldUserName';";
        $result = mysqli_query($connection, $sql);
        $data = mysqli_fetch_assoc($result);
        $photo = $data['customer_photo'];
        unlink("../../assets/images/userprofiles/" . $photo);

        $temp = explode(".", $_FILES['photo']['name']);
        $photo = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES['photo']['tmp_name'], "../../assets/images/userprofiles/" . $photo);
        
    }

    $sql = "update customer 
                set
                    customer_firstName = '$firstName',
                    customer_lastName = '$lastName',
                    customer_email = '$email',
                    customer_username = '$username',
                    customer_password = '$password', 
                    customer_address = '$address',
                    customer_phone = '$phone',
                    customer_photo = '$photo'
                where
                    customer_username = '$oldUserName';";
    mysqli_query($connection, $sql);
    $_SESSION['username'] = $username;
    header("Location: http://localhost:8080/e-commerce_with_purephp/");
}
