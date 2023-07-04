<?php 
session_start();
if(!isset($_SESSION['loggedin'])){ //if login in session is not set
     header("Location:/ashram/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Checkout</title>
    <link rel="icon" href="https://www.ollato.com/wp-content/uploads/2023/02/cropped-ollato-new-logo-site-identi-32x32.png" sizes="32x32">
    <link rel="icon" href="https://www.ollato.com/wp-content/uploads/2023/02/cropped-ollato-new-logo-site-identi-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://www.ollato.com/wp-content/uploads/2023/02/cropped-ollato-new-logo-site-identi-180x180.png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/instruction.css" rel="stylesheet">
    <link href="css/custmise.css" rel="stylesheet">
    <link href="css/custmise.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include 'side-navbar.php' ?>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                           
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                           
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['user']." ".$_SESSION['last']?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    <!--first row box shadow        payment/checkout   action="https://test.payu.in/_payment" method="post"-->    
                    
                    <form action="payment/checkout.php" method="post">
                    
                    <div class="row">
                        <div class="col-lg-12">
                             <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between py-3">   
                                    <!-- Main content  start  -->
                                     <div class="container ">
                                         <!---->
                                    <div class="row">
                                        
                                  <div class="col-sm-6 col-md-6">
                                    <div class="card">
                                      <div class="card-body">
                                    <h4 class="mb-3">User Details</h4>
                                    
                                <div class="mb-1">
                                    <label for="firstName">UID Number :</label>
                                      <label class="text-danger text-capitalize"><?php echo $_SESSION['user_id']?></label>
                                  </div>
                             
                                  <div class="mb-1">
                                    <label for="firstName">Full Name :</label>
                                      <label class="text-danger text-capitalize"><?php echo $_SESSION['user']." ".$_SESSION['last']?></label>
                                  </div>
                                  <div class="mb-1">
                                    <label for="lastName">Gender :</label>
                                    <label class="text-danger text-capitalize"><?php echo $_SESSION['gender']; ?></label>
                                  </div>
                                  
                                 <div class="mb-1">
                                    <label for="lastName">Email :</label>
                                    <label class="text-danger "><?php echo $_SESSION['email']; ?></label>
                                  </div>
                                  
                                   <div class="mb-1">
                                    <label for="lastName">Mobile Number :</label>
                                    <label class="text-danger"><?php echo $_SESSION['phone']; ?></label>
                                  </div>
                                        
                                      </div>
                                    </div>
                                  </div>
                                  
                                  
                                  <div class="col-sm-6">
                                    <div class="card">
                                      <div class="card-body">
                                       <div class="col-md-12 order-md-2 mb-4">
                                              <h4 class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="text-muted">Your cart</span>
                                                <!--<span class="badge badge-secondary badge-pill">3</span>-->
                                              </h4>
                                              <ul class="list-group mb-3">
                                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                  <div>
                                                    <h6 class="my-0">Product name</h6>
                                                    <small class="text-muted">Online Testing, Report Generation</small>
                                                  </div>
                                                  <span class="text-muted">1200 INR</span>
                                                </li>
                                               
                                                <li class="list-group-item d-flex justify-content-between bg-light">
                                                  <div class="text-success">
                                                    <h6 class="my-0">Promo code</h6>
                                                    <small>EXAMPLECODE</small>
                                                  </div>
                                                  <span class="text-success">00</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between">
                                                  <span>Total (INR)</span>
                                                  <strong>1200 INR</strong>
                                                </li>
                                              </ul>
                                        
                                              <div class="card p-2">
                                                <div class="input-group mb-4">
                                                  <input type="text" class="form-control " placeholder="Promo code NA" disabled>
                                                  <div class="input-group-append">
                                                    <button type="submit" class="btn btn-secondary" disabled>Redeem</button>
                                                  </div>
                                                </div>
                                                 <div class="input-group">
                                                     <div class="d-grid gap-2 col-6 mx-auto">
                                                     <button class="btn btn-primary btn-lg btn-block" type="submit">Pay 1200 INR</button>
                                                     </div>
                                                  </div>
                                              </div>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                                </div>
                                     
                                   
                               </div>
                             <!--container-->
                            </div>
                           <!-- card-header -->
                         </div>
                        <!--card shadow mb-4-->
                      </div>
                      <!--col-lg-12-->
                    </div>
                    <!-- first row  -->
                    
                      
                    <!--first row-->
                    <div class="row">
                        <div class="col-lg-12">
                             <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between py-3">   
                                    <!-- checkout content start  -->
                                     <div class="container ">
                                     
                                   
                               </div>
                             <!--container-->
                            </div>
                           <!-- card-header -->
                         </div>
                        <!--card shadow mb-4-->
                      </div>
                      <!--col-lg-12-->
                    </div>
                    <!-- row  -->
                      <?php $key ="gzemsh";$txnid ="saasa";$amount="52"; $firstname="ashish"; $email="test@gmail.com"; $productinfo="kurta"; $phone="9768421308"; 
                      
                        $salt="iZspK0Pu";
                        
                        $payhash_str = $key . '|' . checkNull($txnid) . '|' .checkNull($amount)  . '|' .checkNull($productinfo)  . '|' . checkNull($firstname) . '|' . checkNull($email) . '|' . checkNull($phone) . '|' . checkNull($udf1) . '|' . checkNull($udf2) . '|' . checkNull($udf3) . '|' . checkNull($udf4) . '|' . checkNull($udf5) . '||||||'. $salt;
                        function checkNull($value) {
                                    if ($value == null) {
                                          return '';
                                    } else {
                                          return $value;
                                    }
                                 }
                                 
                        $hash = strtolower(hash('sha512', $payhash_str)); 
                        
                        echo $hash;
                      
                        // $udf1=$_POST["udf1"];
                        // $udf2=$_POST["udf2"];
                        // $udf3=$_POST["udf3"];
                        // $udf4=$_POST["udf4"];
                        // $udf5=$_POST["udf5"];
                        
                      
                      ?>
                     <input type="hidden" name="key" value="<?php echo $key ?>" />
                      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
                      <input type="hidden" name="amount" value="<?php echo $amount ?>" />
                      <input type="hidden" name="firstname" value="<?php echo $firstname ?>" />
                      <input type="hidden" name="email" value="<?php echo $email ?>"/>
                      <input type="hidden" name="phone" value="<?php echo $phone ?>"/>
                      <input type="hidden" name="productinfo" value="<?php echo $productinfo ?>" />
                      <input type="hidden" name="hash" value="<?php echo $hash ?>" />
                      <input type="hidden" name="surl" value="https://success-url.herokuapp.com/" />   <!--Please change this parameter value with your success page absolute url like http://mywebsite.com/response.php. -->
                      <input type="hidden" name="furl" value="https://failure-url.herokuapp.com/" /><!--Please change this parameter value with your failure page absolute url like http://mywebsite.com/response.php. -->
                      <input name="curl" type= "hidden" value="" />
                      <input name="udf1" type= "hidden" value=""/>
                      <input name="udf2" type= "hidden" value="" />
                      <input name="udf3" type= "hidden" value="" />
                      <input name="udf4" type= "hidden" value="" />
                      <input name="udf5" type= "hidden" value="" />
                    </form>
                   
                    
                    
                    
                    
                   </div>
                <!--container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                   <span class=""><h5>Copyright &copy; <?php echo date("Y");?>,Serac Education</h5></span>
                    </div>
                </div>
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
