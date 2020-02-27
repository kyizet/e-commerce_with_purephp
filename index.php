<!doctype html>
<html lang="en">

<head>
    <?php
    include("includes/header.php");
    ?>
    <link rel="stylesheet" href="assets/styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Rakkas&display=swap" rel="stylesheet">
    <title>ACOM</title>
</head>

<body style="padding-top: 5px">
    <?php 
    include("includes/bodier.php");
    ?>
    <header>
        <div id="NavBar"></div>
    </header>


    <main>
        <div id="ReactApp"></div>
    </main>

    <footer>
        <div id="Footer"></div>
    </footer>

    <?php
    include("includes/react_includes.php")
    ?>
</body>

</html>