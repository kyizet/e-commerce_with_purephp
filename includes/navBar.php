<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include($root . "/e-commerce_with_purephp/acom_cms_admin/database/connection.php");

session_start();
?>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg fixed-top black white-text">
  <a class="navbar-brand" href="/e-commerce_with_purephp/"><img src="/e-commerce_with_purephp/assets/images/logo/acom-logo-white.png" width="30px" height="30px" alt="invalid" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-angle-down white-text"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link white-text" href="/e-commerce_with_purephp/">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link white-text" href="/e-commerce_with_purephp/pages/shop.php">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link white-text" href="/e-commerce_with_purephp/pages/faq.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link white-text" href="/e-commerce_with_purephp/pages/contact.php">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">


      <?php
      if (empty($_SESSION['username'])) {

      ?>
        <li class="nav-item dropdown">
          <a class="nav-link" id="navbarDropdownMenuLink-333" data-toggle="modal" data-target="#modalLRForm" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
          </a>
        </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->

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
            <form method="POST" action="/e-commerce_with_purephp/includes/handleforms/login.php">
              <!--Body-->
              <div class="modal-body mb-1">
                <div class="md-form form-sm mb-5">
                  <i class="fas fa-envelope prefix"></i>
                  <input type="text" id="modalLRInput10" class="form-control form-control-sm validate" name="username">
                  <label data-error="wrong" data-success="right" for="modalLRInput10">Your username</label>
                </div>

                <div class="md-form form-sm mb-4">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" autocomplete="on" name="">
                  <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                </div>
                <div class="text-center mt-2 ">
                  <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
                </div>
              </div>
              <!--Footer-->
              <?php if (isset($_SESSION['loginError'])) {   ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $_SESSION['loginError']; ?>
                </div>
              <?php }
              unset($_SESSION['loginError']);
              ?>
            </form>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->

            <form method="POST" action="/e-commerce_with_purephp/includes/handleforms/register.php">
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
                  <i class="fas fa-envelope prefix"></i>
                  <input type="text" id="username" class="form-control form-control-sm validate" name="username">
                  <label data-error="wrong" data-success="right" for="username">Your username</label>
                </div>

                <div class="md-form form-sm mb-5">
                  <i class="fas fa-lock prefix prefix"></i>
                  <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" name="password" autocomplete="on">
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

                <?php if (isset($_SESSION['error'])) {   ?>
                  <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['error']; ?>
                  </div>
                <?php }
                unset($_SESSION['error']);
                ?>
                <div class="text-center form-sm mt-2">
                  <button class="btn btn-info black">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                </div>

              </div>


              <!--Footer-->
            </form>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->




<!-- Logged in side ------------------------------------------------------------------------------------------------------------- Logged in side -------------------------------->
<?php
      } else {
        $username = $_SESSION['username'];
        if ($connection) {
          $sql = "select * from customer where customer_username = '$username'";
          $result = mysqli_query($connection, $sql);
          $data = mysqli_fetch_row($result);
        }
?>
  <li class="nav-item">
    <a class="nav-link waves-effect waves-light"><i class="fas fa-shopping-cart"></i>
    </a>
  </li>
  &nbsp; &nbsp;
  <li class="nav-item dropdown">
        <?php if(empty($data[8])){ ?>
          <a class="nav-link waves-effect waves-light" style="cursor: pointer;" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle" ></i>  
    </a>
          <?php } else { ?>
    <img src="/e-commerce_with_purephp/assets/images/userprofiles/<?php echo $data[8]; ?>" class="rounded-circle float-right" alt="invalid" width="30px" height="30px" style="cursor: pointer;" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <?php } ?>
    <div class="dropdown-menu dropdown-menu-left dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
      <a class="dropdown-item data-toggle=" data-toggle="modal" data-target="#editForm" aria-haspopup="true" aria-expanded="false"><i class=" fas fa-edit">Edit Account</i></a>
      <a class="dropdown-item" href="/e-commerce_with_purephp/includes/logout.php"><i class="fas fa-power-off">Logout</i></a>
    </div>
  </li>
  </ul>
  </div>
  </nav>

  <div class="modal fade" id="editForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <!--Content-->
      <div class="modal-content">

        <!--Modal cascading tabs-->
        <div class="modal-c-tabs">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs tabs-2 white" role="tablist">
            <li class="nav-item">
              <a class="nav-link active black-text" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                Edit Account Info</a>
            </li>
          </ul>

          <!-- Tab panels -->
          <div class="tab-content">
            <!--Panel 7-->
            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
              <form method="POST" action="/e-commerce_with_purephp/includes/handleforms/edit.php" enctype="multipart/form-data">
                <!--Body-->
                <div class="modal-body mb-1">
                  <div class="md-form form-sm mb-5"><i class="fas fa-user prefix"></i>
                    <input type="text" id="firstName" class="form-control form-control-sm validate" name="firstName" value="<?php echo $data[1]; ?>">
                    <label data-error="wrong" data-success="right" for="firstName">New First Name</label>
                  </div>

                  <div class="md-form form-sm mb-5">
                    <i class="fas fa-envelope prefix"></i>
                    <input type="text" id="lastName" class="form-control form-control-sm validate" name="lastName" value="<?php echo $data[2]; ?>">
                    <label data-error="wrong" data-success="right" for="lastName">New Last Name</label>
                  </div>

                  <div class="md-form form-sm mb-5">
                    <i class="fas fa-envelope prefix"></i>
                    <input type="text" id="username" class="form-control form-control-sm validate" name="username" value="<?php echo $data[3]; ?>">
                    <label data-error="wrong" data-success="right" for="username">New username</label>
                  </div>

                  <input type="hidden" name="oldUserName" value="<?php echo $data[3]; ?>">

                  <div class="md-form form-sm mb-5">
                    <i class="fas fa-envelope prefix"></i>
                    <input type="text" id="email" class="form-control form-control-sm validate" name="email" value="<?php echo $data[4]; ?>">
                    <label data-error="wrong" data-success="right" for="email">New Email</label>
                  </div>

                  <div class="md-form form-sm mb-4">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" id="password" class="form-control form-control-sm validate" autocomplete="on" name="password" value="<?php echo $data[5]; ?>">
                    <label data-error="wrong" data-success="right" for="password">New password</label>
                  </div>

                  <div class="md-form form-sm mb-5">
                    <i class="fas fa-envelope prefix"></i>
                    <input type="text" id="address" class="form-control form-control-sm validate" name="address" value="<?php echo $data[6]; ?>">
                    <label data-error="wrong" data-success="right" for="address">New address</label>
                  </div>

                  <div class="md-form form-sm mb-5">
                    <i class="fas fa-envelope prefix"></i>
                    <input type="text" id="phone" class="form-control form-control-sm validate" name="phone" value="<?php echo $data[7]; ?>">
                    <label data-error="wrong" data-success="right" for="phone">New phone</label>
                  </div>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Upload profile</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="photo">
                      <label class="custom-file-label" for="inputGroupFile01">Choose</label>
                    </div>
                  </div>
                  <br><br>

                  <div class="text-center mt-2">
                    <button class="btn btn-info black white-text">Update<i class="fas fa-sign-in ml-1"></i></button>
                  </div>
                </div>
                <!--Footer-->
                <?php if (isset($_SESSION['errorEdit'])) {   ?>
                  <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['errorEdit']; ?>
                  </div>
                <?php }
                unset($_SESSION['errorEdit']);
                ?>
              </form>

            </div>
            <!--/.Panel 7-->
          </div>

        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!--Modal: Login / Register Form-->

  <!--/.Navbar -->
<?php }
?>