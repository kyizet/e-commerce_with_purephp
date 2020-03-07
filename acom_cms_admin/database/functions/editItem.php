<?php
include("../connection.php");


// this editItem.php will get a new file, remove the existing file, so that the admin will never have to worry about populating the database with unnecessary conflicts
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $selectedItem = $_POST['selectedItem'];
    if ($_POST['photo']) {
        $sql = "select photo from `$category` where name = '{$selectedItem}';";
        $result = mysqli_query($connection, $sql);
        $data = mysqli_fetch_assoc($result);
        $photo = $data['photo'];
    } else {
        $sql = "select photo from `$category` where name = '{$selectedItem}';";
        $result = mysqli_query($connection, $sql);
        $data = mysqli_fetch_assoc($result);
        $photo = $data['photo'];
        unlink("../images/items/" . $photo);

        $temp = explode(".", $_FILES['photo']['name']);
        $photo = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES['photo']['tmp_name'], "../images/items/" . $photo);   
    }


    $category = $_POST["category"];
    $name = $_POST["name"];
    $anime = $_POST['anime'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $detail = $_POST['detail'];

    $sql = "update `$category`
            set name='$name',
                anime='$anime',
                price='$price',
                quantity='$quantity',
                photo='$photo',
                detail='$detail'
            where name='$selectedItem';";
}

$result = mysqli_query($connection, $sql);
include("showData.php");
