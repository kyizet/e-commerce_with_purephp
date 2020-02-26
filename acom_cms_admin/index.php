<!DOCTYPE html>
<html>

<head>
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
        .validate{
            text-align: left !important;
        }
        
        input {
            text-align: center;
        }
    </style>
</head>

<body class="grey lighten-3" style="overflow-y: hidden">
    <?php
    if (isset($_SESSION['username'])) {
        include_once("includes/navBar.php");
    ?>
        <div id="MainReact"></div>
    <?php } else {
        header("Location: http://localhost:8080/e-commerce_with_purephp/acom_cms_admin/login.php");
    }
    ?>
    <?php
    include("includes/react_includes.php");
    ?>
</body>

</html>