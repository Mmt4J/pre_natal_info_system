<?php 
include("../path.php"); 
include(ROOT_PATH . "/app/controller/admin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Manage Admin</title>
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
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-description">
                    <a href="create_admin">Create Admin</a>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                           <th>
                            User
                          </th>
                          <th>
                            user name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Edit
                          </th>
                          <th>
                            Delete
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($admins as $key => $admin): ?>
                        <tr>
                          <td class="py-1">
                            <img src="../assets/resources/images/faces/face1.jpg" alt="image"/>
                          </td>
                          <td>
                            <?php echo $admin['username']?>
                          </td>
                          <td>
                            <?php echo $admin['email']?>
                          </td>
                          <td>
                            <a href="edit_admin?id=<?php echo $admin['id']; ?>">Edit</a>
                          </td>
                          <td>
                            <a href="edit_admin?del_id=<?php echo $admin['id']; ?>">Delete</a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
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

