<!DOCTYPE html>
<html>

<head>

    <?php
    include("includes/header.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
    <link rel="icon" href="assets/acom-logo-white.png">
    <title>ACOM CMS</title>
</head>

<body class="grey lighten-3" style="overflow: hidden">
    <?php
    include("includes/navBar.php");
    ?>
    <div id="app">
    </div>

    <script src="reactapp/dist/main.bundle.js"></script>

</body>

</html>