<?php include("../path.php"); 
include(ROOT_PATH . "/app/controller/admin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>New Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/resources/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/resources/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../assets/resources/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/resources/css/style.css">
  <!-- endinject -->
  <link rel="icon" type="image/x-icon" href="../assets/images/tab.png">
</head>
<body>
  <div class="container-scroller">
  
    <!-- partial:partials/_navbar.html -->
    <?php include(ROOT_PATH . "/app/include/admin_nav.php"); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include(ROOT_PATH . "/app/include/admin_sidebar.php"); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
        <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">New Admin</h4>
                  <p class="card-description">
                    <!-- Basic form layout -->
                  </p>
                  <form class="forms-sample" action="create_admin" method="post">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" name="username" class="form-control" id="exampleInputUsername1" value="<?php echo $username; ?>" placeholder="Enter your Username">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email; ?>" placeholder="Enter your Email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputEmail1" value="<?php echo $password; ?>" placeholder="Enter your password">
                    </div>

                    <div class="form-group">
                      <label for="passwordC">Password Confirmation</label>
                      <input type="password" name="cpassword" class="form-control" id="exampleInputEmail1" value="<?php echo $cpassword; ?>"placeholder="Confirm password">
                    </div>

                    <button type="submit" name="register" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>

        </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="#" target="#">Pre-Natal Information System </a>2023</span>
          
        </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../assets/resources/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../assets/resources/vendors/chart.js/Chart.min.js"></script>
  <script src="../assets/resources/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../assets/resources/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../assets/resources/js/off-canvas.js"></script>
  <script src="../assets/resources/js/hoverable-collapse.js"></script>
  <script src="../assets/resources/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../assets/resources/js/dashboard.js"></script>
  <script src="../assets/resources/js/data-table.js"></script>
  <script src="../assets/resources/js/jquery.dataTables.js"></script>
  <script src="../assets/resources/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->

  <script src="../assets/js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>

