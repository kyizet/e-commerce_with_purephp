<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS | Configure Website</title>
    <?php
    session_start();
    include_once("../includes/header.php");
    include("../database/connection.php");
    ?>

    <link rel="icon" type="image/gif/png" href="../assets/acom-logo-white.png">
</head>

<body>
    <?php
    if (isset($_SESSION['username'])) {
        include_once("../includes/navBar.php");
    ?>
        <div id="WebConfig"></div>

    <?php
     } else {
        header("Location: http://localhost:8080/e-commerce_with_purephp/acom_cms_admin/internal_pages/login.php");
    }
    ?>


    <?php
    include("../includes/react_includes.php");
    ?>
</body>

</html>