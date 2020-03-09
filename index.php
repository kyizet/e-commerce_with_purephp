<!doctype html>
<html lang="en">

<head>


    <?php
    include("includes/header.php");
    ?>
    <title>ACOM | HOME</title>
</head>

<body>

    <?php
    include("includes/bodier.php");
    ?>
    <header>
        <?php
        include("includes/navBar.php");
        ?>
    </header>


    <main style="overflow-x: hidden">

        <!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="/e-commerce_with_purephp/assets/images/carousel/carousel2.jpg" alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Anime-related products</h3>
                        <p>Sold by weebs</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="/e-commerce_with_purephp/assets/images/carousel/carousel1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Best products</h3>
                        <p>Quality guaranteed</p>
                        <div class="mask rgba-black-light"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="/e-commerce_with_purephp/assets/images/carousel/carousel3.png" alt="Third slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Trust us</h3>
                        <p>Because we are trustworthy</p>
                    </div>
                </div>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
        <!-- Section: Products v.4 -->
        <section class="text-center my-5 container">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">What we majorly sell</h2>
            <!-- Section description -->
            <p class="grey-text text-center w-responsive mx-auto mb-5">Are you a collector? Are you an enthusiast? Browse to satisfy your needs!</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                                <a href="/e-commerce_with_purephp/pages/shop.php">
                            <img src="/e-commerce_with_purephp/assets/images/others/chibis.jpg" class="img-fluid" alt="">
                            <div class="stripe dark">
                                    <p class="black-text">Chibis
                                        <i class="fas fa-angle-right"></i>
                                    </p>
                            </div>
                                </a>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4 ">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                                <a href="/e-commerce_with_purephp/pages/shop.php">
                            <img src="/e-commerce_with_purephp/assets/images/others/clothes_anime.jpg" class="img-fluid" alt="">
                            <div class="stripe light">
                                    <p class="black-text">Clothes
                                        <i class="fas fa-angle-right"></i>
                                    </p>
                            </div>
                                </a>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-md-0 mb-4">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                                <a href="/e-commerce_with_purephp/pages/shop.php">
                            <img src="/e-commerce_with_purephp/assets/images/others/figures_anime.jpg" class="img-fluid" alt="">
                            <div class="stripe dark">
                                    <p class="black-text">Figures
                                        <i class="fas fa-angle-right"></i>
                                    </p>
                            </div>
                                </a>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Grid column -->

                <!-- Fourth column -->
                <div class="col-lg-3 col-md-6">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                                <a href="/e-commerce_with_purephp/pages/shop.php">
                            <img src="/e-commerce_with_purephp/assets/images/others/keychains.jpg" class="img-fluid" alt="">
                            <div class="stripe light">
                                    <p class="black-text">Keychains
                                        <i class="fas fa-angle-right"></i>
                                    </p>
                            </div>
                                </a>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Fourth column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Products v.4 -->




        <div class="container z-depth-1 my-5 p-5">

            <!-- Section -->
            <section>

                <h3 class="font-weight-bold text-center dark-grey-text pb-2">A Few Easy Steps</h3>
                <hr class="w-header my-4">
                <p class="lead text-center text-muted pt-2 pb-3 mb-5">In six simple steps, the item of your choice will be delivered to you.</p>

                <div class="row dark-grey-text">

                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="media">
                            <div class="mr-4">
                                <span class="black-text"><i class="icon-fa fas fa-dice-one fa-2x"></i></span>
                            </div>
                            <div class="media-body">
                                <h6 class="font-weight-bold">Step One</h6>
                                <p class="text-muted">Register your account or Login if you have already registered.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="media">
                            <div class="mr-4">
                                <span class="black-text"><i class="icon-fa fas fa-dice-two fa-2x"></i></span>
                            </div>
                            <div class="media-body">
                                <h6 class="font-weight-bold">Step Two</h6>
                                <p class="text-muted">Make sure that your information about your address and phone numbers are up to date so that we can deliver our products precisely. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="media">
                            <div class="mr-4">
                                <span class="black-text"><i class="icon-fa fas fa-dice-three fa-2x"></i></span>
                            </div>
                            <div class="media-body">
                                <h6 class="font-weight-bold">Step Three</h6>
                                <p class="black-text">Visit the shop and browse the items, everything will fulfill your needs.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="media">
                            <div class="mr-4">
                                <span class="black-text"><i class="icon-fa fas fa-dice-four fa-2x"></i></span>
                            </div>
                            <div class="media-body">
                                <h6 class="font-weight-bold">Step Four</h6>
                                <p class="text-muted">Add the items that you like to the shopping cart. Hands free!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="media">
                            <div class="mr-4">
                                <span class="black-text"><i class="icon-fa fas fa-dice-five fa-2x"></i></span>
                            </div>
                            <div class="media-body">
                                <h6 class="font-weight-bold">Step Five</h6>
                                <p class="text-muted">If you have picked all of your items, you can proceed to checkout.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="media">
                            <div class="mr-4">
                                <span class="black-text"><i class="icon-fa far fa-dice-six fa-2x"></i></span>
                            </div>
                            <div class="media-body">
                                <h6 class="font-weight-bold">Step Six</h6>
                                <p class="text-muted">Choose the payment method and grab the popcorn, the item will be delieverd to you soon.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
            <!-- Section -->

        </div>



        <div class="container pt-5 my-5 z-depth-1">
            <section class="p-md-3 mx-md-5">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-6 mb-4">
                        <h2 class="font-weight-bold mb-3">Believe us, trust us!</h2>
                        <p class="text-muted pt-3">
                            We are the official trading company based in Myanmar where 
                            we will have our variety of anime-related products of figures, mugs, clothes, keychains, chibis and 
                            much more. 
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex justify-content-center mb-md-0 mb-5">
                        <i class="fa fa-layer-group indigo-text fa-10x"></i>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-lg-3 col-md-6 mb-5">
                        <h4 class="font-weight-bold mb-3">
                            <i class="far fa-paper-plane indigo-text pr-2"></i> Be informed
                        </h4>
                        <p class="text-muted mb-lg-0">
                            Information is priceless. With our technology, you will always be informed about the products you buy. 
                            No more blind purchases.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <h4 class="font-weight-bold mb-3">
                            <i class="fas fa-pen-alt green-text pr-2"></i> Records
                        </h4>
                        <p class="text-muted mb-lg-0">
                            Once you have used our services, you are recorded, 
                            you will always have the chance to participate in lucky draws and in amazing programs.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <h4 class="font-weight-bold mb-3">
                            <i class="fas fa-user amber-text pr-2"></i> We respect our customer
                        </h4>
                        <p class="text-muted mb-md-0">
                            It doesn't matter if our customer have contributed a penny or a dollar to our company, you will never
                            feel ignored or neglected. Enjoy our services.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <h4 class="font-weight-bold mb-3">
                            <i class="fas fa-rocket red-text pr-2"></i> Fast Delivery
                        </h4>
                        <p class="text-muted mb-md-0">
                        No matter where you live or when you order, the delivery time will only take from 1-3 both business or non-business days. 
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <div class="container mt-5">




            <div class="container mt-5">


                <!--Section: Content-->
                <section class="team-section text-center dark-grey-text">

                    <!-- Section heading -->
                    <h3 class="font-weight-bold mb-4 pb-2">Testimonials</h3>
                    <!-- Section description -->
                    <p class="text-center w-responsive mx-auto mb-5">Testimonials from our top customers.</p>

                    <!--Grid row-->
                    <div class="row text-center">

                        <!--Grid column-->
                        <div class="col-md-4 mb-4">

                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar mx-auto">
                                    <img src="/e-commerce_with_purephp/assets/images/testimonies/paul.jpg" class="rounded-circle z-depth-1" width="250px" height="250px">
                                </div>
                                <!--Content-->
                                <h4 class="font-weight-bold dark-grey-text mt-4">တုံးတုံးပြောင်ပြောင်</h4>
                                <h6 class="font-weight-bold blue-text my-3">ရှင်းရှင်းလေးကြိုက်သူ</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fas fa-quote-left pr-2"></i>အရမ်းရှင်းပါတယ် Website ကြီးက အရမ်းရှင်းလို့ အရမ်းကြိုက်ရပါတယ် ဒါနဲ့ အပြင်မှာ ပုံထဲကထက်ပို ပြောင်ပြီး ပိုချောပါတယ်</p>
                                <!--Review-->
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4 mb-4">

                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar mx-auto">
                                    <img src="/e-commerce_with_purephp/assets/images/testimonies/hlm.jpg" class="rounded-circle z-depth-1" width="250px" height="250px">
                                </div>
                                <!--Content-->
                                <h4 class="font-weight-bold dark-grey-text mt-4">ထူးလည်းမူး မထူးလည်းမူး အမြဲမူး</h4>
                                <h6 class="font-weight-bold blue-text my-3">ညီမလေးစောင့်သူ</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fas fa-quote-left pr-2"></i>Quality အကောင်းဆုံးတွေပါပဲ ... ညီမလေးကို ဒီကဝယ်ပြီးသွားပေးတာ
                                    ညီမလေးကကြိုက်တော့ အရမ်းပျော်ရပါတယ် ... ခုထိတော့ အဖက်မလုပ်ဘူးပေါ့ အဟင့်</p>
                                <!--Review-->
                            </div>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4 mb-4">

                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar mx-auto">
                                    <img src="/e-commerce_with_purephp/assets/images/testimonies/atta.jpg" class="rounded-circle z-depth-1" width="250px" height="250px">
                                </div>
                                <!--Content-->
                                <h4 class="font-weight-bold dark-grey-text mt-4">ဒေါ်ပူဟောင်း</h4>
                                <h6 class="font-weight-bold blue-text my-3">အပျိုကြီး</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fas fa-quote-left pr-2"></i>အရုပ်လေးတွေအရမ်းလှပြီး Quality ကောင်းပါတယ် သူငယ်လေးတွေလိုပေါ့ အဟိ</p>
                                <!--Review-->
                            </div>

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </section>
                <!--Section: Content-->


            </div>

    </main>

    <footer>
        <?php
        include("includes/footer.php");
        ?>
    </footer>
</body>

</html>