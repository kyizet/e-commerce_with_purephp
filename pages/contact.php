<!doctype html>
<html lang="en">

<head>
    <?php
    include("../includes/header.php");
    ?>
    <title>ACOM | FAQ & Contact</title>
    <link rel="icon" href="assets/images/logo/acom-logo-white.png">
</head>

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
        <div class="container my-5 px-0">
            <!--Section: Contact v.2-->
            <section class="mb-4 p-5 z-depth-1">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Write to us</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">We care our customers, elaborate your feedbacks or improvements which we may have to consider in the future.</p>

                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-12 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" method="POST" action="contactEnd.php">

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" id="name" name="name" class="form-control">
                                            <label for="name" class="">Your name</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="email" id="email" name="email" class="form-control">
                                            <label for="email" class="">Your email</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" id="subject" name="subject" class="form-control">
                                            <label for="subject" class="">Subject</label>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                            <label for="message">Your message</label>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->

                            </form>

                            <div class="text-center text-md-left">
                                <a class="btn black white-text" onclick="document.getElementById('contact-form').submit();">Send</a>
                            </div>
                            <div class="status"></div>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <br><br>
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-4 text-center">
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Myanmar Institute of Theology, Seminary Hills, Insein</p>
                    </div>


                    <div class="col-md-4 text-center">
                        <i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+95 9976373747</p>
                    </div>

                    <div class="col-md-4 text-center">
                        <i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>zet11zet@icloud.com</p>
                    </div>
                    <!--Grid column-->
                </div>

            </section>
            <!--Section: Contact v.2-->
        </div>
        <footer>
            <?php
            include("../includes/footer.php");
            ?>
        </footer>
</body>

</html>