<?php
    session_start();
    session_destroy();
    header("Location: http://localhost:8080/e-commerce_with_purephp/acom_cms_admin/index.php");
?>