<nav class="mb-1 navbar navbar-expand-lg navbar-dark black fixed-top scrolling-navbar">
  <div class="container">
    <a class="navbar-brand" href="/e-commerce_with_purephp/"><img src="/e-commerce_with_purephp/assets/images/logo/acom-logo-white.png" height="30px" width="30px" alt="invalid"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/e-commerce_with_purephp/">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/e-commerce_with_purephp/pages/shop.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/e-commerce_with_purephp/pages/faq.php">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/e-commerce_with_purephp/pages/contact.php">Contact</a>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <i class="fas fa-user white-text" style="cursor: pointer" data-toggle="modal" data-target="#modalLRForm"></i>
      </li>
    </ul>
</nav>



<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 white" role="tablist">
          <li class="nav-item">
            <a class="nav-link active black-text" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link black-text" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="grey-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="grey-text">Password?</a></p>
              </div>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->


            <div class="modal-body">

              <div class="md-form form-sm mb-5"><i class="fas fa-user prefix"></i>
                <input type="text" id="firstName" class="form-control form-control-sm validate" name="firstName">
                <label data-error="wrong" data-success="right" for="firstName">First Name</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-user prefix"></i>
                <input type="text" id="lastName" class="form-control form-control-sm validate" name="lastName">
                <label data-error="wrong" data-success="right" for="lastName">Last Name</label>
              </div>


              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate" name="email">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix prefix"></i>
                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" name="password">
                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-address-card prefix"></i>
                <input type="text" id="address" class="form-control form-control-sm validate" name="address">
                <label data-error="wrong" data-success="right" for="address">Address</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-phone prefix"></i>
                <input type="text" id="phone" class="form-control form-control-sm validate" name="phone">
                <label data-error="wrong" data-success="right" for="phone">Phone</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="grey-text">Log In</a></p>
              </div>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->