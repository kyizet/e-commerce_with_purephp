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
        <div class="container my-5 px-0 text-center">
            <h1>FAQ - Everything you wanted to ask</h1>
            <div class="accordion my-5" id="accordionExample">
                <div class="card z-depth-0 bordered">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How many days will it take to get my items delivered?    <i class="fas fa-angle-down"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            It will generally take 2-3 business or non-business day or might be even less than that if you live in a place
                            where one of our branches is located.
                        </div>
                    </div>
                </div>
                <div class="card z-depth-0 bordered">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Can my items be delayed?    <i class="fas fa-angle-down"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Some of your items can be delayed depending on the type of delivery. If a storm interupts, and if your item is delivered to you by means 
                            of shipping, yes, your items can be delayed.
                        </div>
                    </div>
                </div>
                <div class="card z-depth-0 bordered">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Will I be informed if there is any delay? <i class="fas fa-angle-down"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Yes, you will always be informed about the arrival of the product, or delays, if any, via emails or phones.    <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                </div>

                <div class="card z-depth-0 bordered">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Which payment system should I use?    <i class="fas fa-angle-down"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Although many more payment systems are in development, you can still use Paypal, or GooglePay for any items you purchase.
                        </div>
                    </div>
                </div>

                <div class="card z-depth-0 bordered">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Will there be any discount?    <i class="fas fa-angle-down"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Yet, there is no such events, however, they will be arranged in the near future. Stay tuned!
                        </div>
                    </div>
                </div>

                <div class="card z-depth-0 bordered">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseLast" aria-expanded="false" aria-controls="collapseLast">
                                Can I order a specific item from other stores via this store?    <i class="fas fa-angle-down"></i>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseLast" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Yes, we are more than interested to know what our customers desire.
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>

    <footer>
        <?php
        include("../includes/footer.php");
        ?>
    </footer>
</body>

</html>