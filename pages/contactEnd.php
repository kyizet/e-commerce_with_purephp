<!doctype html>
<html lang="en">

<head>
    <?php
    include("../includes/header.php");
    ?>
    <title>ACOM | FAQ & Contact</title>
    <link rel="icon" href="assets/images/logo/acom-logo-white.png">
</head>

<?php
if (empty($_POST['name']) && empty($_POST['email']) && empty($_POST['subject']) && empty($_POST['message'])) {
    header("Location: http://localhost:8080/e-commerce_with_purephp/pages/contact.php");
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    ini_set('SMTP', 'myserver');
    ini_set('smtp_port', 25);
    mail("zet11zet@icloud.com", $subject, $message);
}
?>


<body style="padding-top: 3%" class="grey lighten-5">
    <?php
    include("../includes/bodier.php");
    ?>
    <header>
        <?php
        include("../includes/navBar.php");
        ?>
    </header>


    <main style="overflow-x: hidden">
        <div class="container my-5 px-0 white">
            <!--Section: Contact v.2-->
            <section class="mb-4 p-5 z-depth-1 text-center">
                <h1>Thanks for writing to us, <?php $name; ?>!</h1>
                <h6>However, please do give us time to read the feedbacks or complaints. We do read each and every one of the messages received in order to
                    greatly improve our services and fulfill the customers' needs.
                </h6>

                <br><br><br>

                <img src="/e-commerce_with_purephp/assets/images/others/remram.gif" alt="invalid" class="img-fluid">
            </section>
        </div>
        <footer>
            <?php
            include("../includes/footer.php");
            ?>
        </footer>
</body>

</html>