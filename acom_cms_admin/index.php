<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    session_start();
    include_once("includes/header.php");
    include("database/connection.php");
    ?>

    <style>
        .no-scroll::-webkit-scrollbar {
            width: 0px;
            background: transparent;
            scrollbar-width: none;
            overflow: -moz-scrollbars-none;
        }

        .validate {
            text-align: left !important;
        }

        input {
            text-align: center;
        }

        video {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
            transform: scale(2);
        }
    </style>
    <title>ACOM CMS</title>
</head>

<body class="grey lighten-3" style="overflow: hidden">
    <?php
    if (isset($_SESSION['username'])) {
        include_once("includes/navBar.php");
    ?>
        <video autoplay muted loop id="myVideo">
            <source src="/e-commerce_with_purephp/acom_cms_admin/assets/background.mp4" type="video/mp4" alt="invalid">
        </video>
        <div class="container" style="padding-top: 10%">
            <div class="row">
                <div class="col s4 offset-s4">
                    <img src="/e-commerce_with_purephp/acom_cms_admin/assets/acom-logo-white.png" alt="invalid" style="height: 25em">
                </div>
            </div>
        </div>
    <?php } else {
        header("Location: http://localhost:8080/e-commerce_with_purephp/acom_cms_admin/internal_pages/login.php");
    }
    ?>
    <?php
    include("includes/react_includes.php");
    ?>
</body>

</html>