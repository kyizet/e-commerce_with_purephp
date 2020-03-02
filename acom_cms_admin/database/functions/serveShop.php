<?php
include("../connection.php");

if ($_POST['category'] === 'All') {
    $sql = "SHOW TABLES";
    $result = mysqli_query($connection, $sql);
    echo "[";
    $j = 0;
    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
        $cat = mysqli_fetch_object($result)->Tables_in_acom;
        if ($cat !== "admin" && $cat !== "customer") {
            $sql_fetchItems = "select * from `$cat`";
            $result_fetchItems = mysqli_query($connection, $sql_fetchItems);
            for ($j; $j < mysqli_num_rows($result_fetchItems); $j++) {
                echo ($j > 0 ? ',' : '') . json_encode(mysqli_fetch_object($result_fetchItems));
            }
            $j = 1;
        }
    }
    echo "]";
} else {
    $category = $_POST['category'];
    $sql = "select * from `$category`";
    $result = mysqli_query($connection, $sql);
    echo "[";
    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
        echo ($i > 0 ? ',' : '') . json_encode(mysqli_fetch_object($result));
    }
    echo "]";
}
