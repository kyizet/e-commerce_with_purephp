<?php
$sql1 = "CREATE TABLE admin(
            admin_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            admin_firstName VARCHAR(50) NOT NULL,
            admin_lastName VARCHAR(50) NOT NULL,
            admin_username VARCHAR(50) NOT NULL,
            admin_password VARCHAR(50) NOT NULL,
            admin_email VARCHAR(255) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    );";

mysqli_query($connection, $sql1);

$sql2 = "CREATE TABLE customer(
            customer_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            customer_firstName VARCHAR(50) NOT NULL,
            customer_lastName VARCHAR(50) NOT NULL,
            customer_dob DATE NOT NULL,
            customer_address VARCHAR(255),
            customer_phone VARCHAR(20),
            customer_imagePath VARCHAR(255)
            );";
mysqli_query($connection, $sql2);

?>