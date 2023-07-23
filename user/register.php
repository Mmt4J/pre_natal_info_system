<?php 
include('../path.php');   
include(ROOT_PATH . "/app/controller/user.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/resources/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/resources/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/resources/css/style.css">
  <!-- endinject -->
  <link rel="icon" type="image/x-icon" href="../assets/images/tab.png">
  <style>
    .content-wrapper{
      background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)),url(../assets/images/banner.jpg);
      background-position: center;
	    background-size: cover;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4>Register</h4>
              <?php include(ROOT_PATH . "/app/messages/error_message.php");?>
              <form class="pt-3" method="post" action="register">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" value="<?php if(isset($username)){ echo $username; }  ?>" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" value="<?php if(isset($email)){echo $email;} ?>"placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" value="<?php if(isset($password)){echo $password;} ?>"placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="cpassword" value="<?php if(isset($cpassword)){echo $cpassword;} ?>"placeholder="Confirm Password">
                </div>
                <div class="form-group">
                  <input type="submit" name="register" class="form-control form-control-lg">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../assets/resources/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../assets/resources/js/off-canvas.js"></script>
  <script src="../assets/resources/js/hoverable-collapse.js"></script>
  <script src="../assets/resources/js/template.js"></script>
  <!-- endinject -->
</body>

</html>
