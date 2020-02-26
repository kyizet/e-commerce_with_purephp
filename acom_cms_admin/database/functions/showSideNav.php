<?php
//since data will be sent to the React Application in several cases, this will lessen the complexity and shorten the code in other files
$sql = "SHOW TABLES";
$result = mysqli_query($connection, $sql);
echo "[";
for ($i = 0; $i < mysqli_num_rows($result); $i++) {
        echo ($i > 0 ? ',' : '') . json_encode(mysqli_fetch_object($result));
    }
    echo "]";
?>