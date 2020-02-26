<?php
include("../connection.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $temp = explode(".", $_FILES['photo']['name']);                           // to split the photo's name into two parts: actual name + file type(png)
    $newFileName = round(microtime(true)) . '.' . end($temp);                 // microtime and round are being used to create a random number which will be used to give a new name
                                                                              // end($temp) will choose the second part (the file type) and form a new file name
    move_uploaded_file($_FILES['photo']['tmp_name'], "../images/items/" . $newFileName); // to move the actual file from the temporarily stored area to the permanent
    
    $category = $_POST["category"];
    $name = $_POST["name"];
    $anime = $_POST['anime'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $detail = $_POST['detail'];
    $sql = "insert into `$category` (name,anime,price,quantity, photo, detail) values ('$name','$anime','$price','$quantity', '$newFileName', '$detail')";
}
$result = mysqli_query($connection, $sql);

include("showData.php");
