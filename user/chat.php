<?php
include("../path.php"); 
include(ROOT_PATH . "/app/controller/user.php");
include(ROOT_PATH . "/user/auth.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>
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
  <!-- mystyle -->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
  	<!-- Chat box section -->
	  <?php include(ROOT_PATH . "/app/include/chat.php"); ?>

  <div class="container-scroller">
  
    <!-- partial:partials/_navbar.html -->
    <?php include(ROOT_PATH . "/app/include/user_nav.php"); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <button href="" class="hero-btn" onclick="showHide()">Click Here</button>
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
  <!-- myjs -->
  <script type="text/javascript" src="../assets/js/app.js"></script>
	<script src="../assets/js/jquery-3.6.4.min.js"></script>
  <script>
		// AutoScroll the chat box bar
		window.setInterval(function(){
            var scrollMessage = document.getElementById('messageScreen');
            scrollMessage.scrollTop = scrollMessage.scrollHeight;
        }, 500);


		// Jquery start
		$(document).ready(function(){
			$("#messages").on("keyup",function(){
				if($("#messages").val()){
					$("#send").css("display","block");
				}else{
					$("#send").css("display","none");
				}
			});
			//Disabled the autocomplete
    		$('#messages').attr('autocomplete','off');
		});		

		// When send button is clicked
		$("#send").on("click", function(e){
			$userMessage = $("#messages").val();
			$appendUserMessage = '<div class="chat usersMessages">'+ $userMessage + '</div>';
			$("#messageScreen").append($appendUserMessage)
		
			// Start ajax
			$.ajax({
				url: "../app/controller/bot",
				type: "POST",
				//Sending data
				data:{messageValue: $userMessage},
				//response text
				success: function(data){
					//Show response	

					$appendBotResponse = '<div id="messagesContainer"> <div class="chat botMessages">' +data+ '</div></div>';
					$("#messageScreen").append($appendBotResponse);

				}
			});
			// $("messages").val("");
			$("#messages").val('');
			$("#send").css("display","none");
		});
	</script>
</body>

</html>

