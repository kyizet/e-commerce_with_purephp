<!DOCTYPE html>
<html>

<head>
    <?php
    include_once("includes/header.php");
    include_once("database/connection.php");
    ?>
</head>

<body class="grey lighten-3">
    <?php
    if ($connection) {
        include_once("includes/navBar.php");
    ?>
        <div class="container">
            <br>
            <a href="" class="black-text"><i class="tiny material-icons">add</i>Add Category</a>
            <a href="" class="black-text"><i class="tiny material-icons">add</i>Edit Category</a>
            <br /><br />
            <div class="row">
                <div class="col s12 z-depth-2 grey lighten-5" style="height: 100em">
                    <?php 
                        $result = mysqli_query($connection, "SHOW TABLES");
                        while($table = mysqli_fetch_array($result)){
                            ?>
                            <i class="tiny material-icons"></i><a href=""><?php echo $table[0] ?></a>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>

    <?php } else {
        include_once("account_control/login.php");
    }
    ?>

</body>

</html>