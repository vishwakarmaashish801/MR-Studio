<?php 
// session_start();
// if(!isset($_SESSION['loggedin'])){ //if login in session is not set
//      header("Location:/test/");
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once'../header/head2.php';?>
    <title>Payment</title>
    <link href="css/login.css" rel="stylesheet">
    
    <style>
        .sidebarv {
    width:0;
    min-height: 100vh;
    position: sticky;
    top: 0rem;
    z-index: 1000;
    height: calc(100vh);
}
        
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <div class="sidebarv"></div>
     
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
              
                 <?php include_once'../header/header.php';?>
              
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                       <div class="row first">
                            <div class="col-lg-12">
                             
                                      <!--card shadow mb-4-->
                                       <div class="container form-container" style="margin-top:0px;margin-bottom: 40px;" >
                <div class=" col-md-6 mb-1 mx-auto">
                    <div id="sectiontohide" style="display:none" class="form-text  fw-bold text-center">
                        <img src="images/loding.gif" alt="logo" width="50" height="50" />
                     </div>
                     <div id="result" class="form-text  fw-bold text-center"></div>
                    </div>
  
      <div class="form-title">
        <h5 class="text-center" style="color:#2170AC;">Student</h5>
         <h3 class="text-center" style="color:#2170AC;">login</h3>

        <!-- form start -->
      
        <form  id="loginForm"  method="POST" onsubmit="Validate();return false"> 
          <div class=" col-md-4 mb-3 mx-auto">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" class="form-control" id="InputEmail1" aria-describedby="em  ailHelp" name="email">
            <div id="emailHelp" class="form-text text-danger fw-bold"></div>
          </div>
          <div class="col-md-4 mb-3 mx-auto">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password" autocomplete="off" name="password">
            <div id="emailpass" class="text-danger fw-bold"></div>
          </div>
          <div class="col-md-4 mb-3 mx-auto">
          <button type="submit" class="btn" style="background-color:#2170AC;color:#fff">Login</button>
           <p class="mt-2" style="color:#2170AC;"> <a href = "forgot-password" style="text-decoration: none;"> Forgot password  </a> </p> 
          <p class="mt-0" style="color:#2170AC;">Don't have an account ? <a href="register" style="text-decoration: none;">Create an account </a></p>
          <p class="mt-0" style="color:#2170AC;"> <a href="../" style="text-decoration: none;">Back to home </a></p>
          </div>
         
        </form>
      
        
      </div>
    </div>

                        </div>
                            <!--col-lg-12-->
                      </div>

                </div>
                <!-- Begin Page Content -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footers">
          
                    <?php include_once'../footer/footer.php'?>
                
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>