<!DOCTYPE html>
<html>

<head>
    <?php
    include_once("includes/header.php");
    include_once("database/connection.php");
    ?>
</head>

<body>
    <?php 
    if (isset($_SESSION['username'])){
        header("Location: http://localhost:8080/e-commerce_with_purephp/acom_cms_admin/index.php");
    } else {
    ?>
    <form method="POST">
        <div class="container" style="padding-top: 10%">
            <div class="row">
                <div class="col s6 offset-s3 z-depth-2 grey lighten-5" style="color: #fff;">
                    <br>
                    <div class="container">
                        <h5 class="black-text">Login Admin!</h5><br>
                    </div>
                    <div class="container">
                        <label class="black-text">Username</label>
                        <input type="text" name="username">
                        <label class="black-text">Password</label>
                        <input type="password" name="password">
                        <br><br>
                        <button type="submit" class="btn black">Login</button>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </form>
    <?php
    }
    session_start();
    if (!empty($_POST)) {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $sql = "SELECT admin_username, admin_password FROM admin";
            $result = mysqli_query($connection, $sql);
            while ($data = mysqli_fetch_assoc($result)) {
                if ($data['admin_username'] == $_POST['username'] && $data['admin_password'] == $_POST['password']) {
                    $_SESSION['username'] = $_POST['username'];
                    header("Location: http://localhost:8080/e-commerce_with_purephp/acom_cms_admin/index.php");
                }
            }
        }
    }
    ?>
</body>

</html>