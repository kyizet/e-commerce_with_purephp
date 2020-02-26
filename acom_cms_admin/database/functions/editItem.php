<?php
include("../connection.php");


// this editItem.php will get a new file, remove the existing file, so that the admin will never have to worry about populating the database with unnecessary conflicts
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $temp = explode(".", $_FILES['photo']['name']);
    $newFileName = round(microtime(true)) . '.' . end($temp);
    
    move_uploaded_file($_FILES['photo']['tmp_name'], "../images/items/" . $newFileName);


    $category = $_POST["category"];
    $name = $_POST["name"];
    $anime = $_POST['anime'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $detail = $_POST['detail'];
    $selectedItem = $_POST['selectedItem'];

    $sql = "select photo from `$category` where name='{$selectedItem}'";
    $result = mysqli_query($connection, $sql);
    $photo = json_encode(mysqli_fetch_object($result)); 
    $photo = preg_replace('/[^0-9]/', '', $photo);
    unlink("../images/items/" . $photo . ".png");

    $sql = "update `$category`
            set name='$name',
                anime='$anime',
                price='$price',
                quantity='$quantity',
                photo='$newFileName',
                detail='$detail'
            where name='$selectedItem';";
}

$result = mysqli_query($connection, $sql);
include("showData.php");

?>