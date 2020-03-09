<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include($root . "/e-commerce_with_purephp/acom_cms_admin/database/connection.php");

session_start();

$name = $_POST["name"];
$matched = 0;
$counter = 0;
foreach($_SESSION['cart'] as $value){
    if($value->name === $name){
        $matched = $counter;
    }
    $counter++;
}
unset($_SESSION['cart'][$matched]);


$_SESSION['cart'] = array_values($_SESSION['cart']);

echo "[";
for ($i = 0; $i < count($_SESSION['cart']); $i++) {
    echo ($i > 0 ? ',' : '') . json_encode($_SESSION['cart'][$i]);
}
echo "]";

?>