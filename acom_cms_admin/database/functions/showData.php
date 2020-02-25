<?php
$sql = "select * from `$category`";
$result = mysqli_query($connection, $sql);
echo "[";
for ($i = 0; $i < mysqli_num_rows($result); $i++) {
    echo ($i > 0 ? ',' : '') . json_encode(mysqli_fetch_object($result));
}
echo "]";
?>