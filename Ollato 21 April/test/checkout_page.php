<?php 
session_start();
if(!isset($_SESSION['loggedin'])){ //if login in session is not set
     header("Location:/test/");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once'../header/head2.php';?>
  <title>Checkout</title>
    <link href="css/instruction.css" rel="stylesheet">
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
                    
                    <!--first row box shadow-->
                    
                  
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
                                      <label class="text-primary text-capitalize"><?php echo $_SESSION['user_id']?></label>
                                  </div>
                             
                                  <div class="mb-1">
                                    <label for="firstName">Full Name :</label>
                                      <label class="text-primary text-capitalize" id="firstname"> <?php echo $_SESSION['user']." ".$_SESSION['last']?></label>
                                  </div>
                                  <div class="mb-1">
                                    <label for="lastName">Gender :</label>
                                    <label class="text-primary text-capitalize"><?php echo $_SESSION['gender']; ?></label>
                                  </div>
                                  
                                 <div class="mb-1">
                                    <label for="lastName">Email :</label>
                                    <label class="text-primary " id="email"><?php echo $_SESSION['email']; ?></label>
                                  </div>
                                  
                                   <div class="mb-1">
                                    <label for="lastName">Mobile Number :</label>
                                    <label class="text-primary" id="phone"   value="<?php echo $_SESSION['phone']; ?>"><?php echo $_SESSION['phone']; ?></label>
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
                                                
                                                <div class="form-white-box" style="display:none">
                                                     <form action="payment/checkout" method="post">
                                                <div class="frm-bx-content">
                                
                                
                            <div class="form-row">
                            <label>Name</label>
                            <div class="form-inp">
                            <input type="text" name="firstname" value=" <?php echo $_SESSION['user']." ".$_SESSION['last']?>" id = "input_name" placeholder="Nita Nisha"/>
                            </div>
                            </div>
                            
                            
                            <div class="form-row">
                            <label>Email</label>
                            <div class="form-inp">
                            <input type="email" name="email" id ="input_email" value="<?php echo $_SESSION['email']; ?>"/>
                            </div>
                            </div>
                            
                            
                            <div class="form-row">
                            <label>Amount</label>
                            <div class="form-inp">
                            <input type="number" name="amount" id ="input_amount" placeholder="20.0"  value="1200"/>
                            </div>
                            </div>
                            
                            
                            <div class="form-row">
                            <label>Product info</label>
                            <div class="form-inp">
                            <input type="text" name="productinfo" id ="input_product" value="Online Testing, Report Generation" />
                            </div>
                            </div>
                            
                            
                            <div class="form-row">
                            <label>Ud f1</label>
                            <div class="form-inp">
                            <input type="text" name="udf1" id ="input_udf1" placeholder="udfA " />
                            </div>
                            </div>
                            
                            <div class="form-row">
                            <label>Ud f2</label>
                            <div class="form-inp">
                            <input type="text" name="udf2" id ="input_udf2" placeholder="udfB " />
                            </div>
                            </div>
                            
                            
                            <div class="form-row">
                            <label>Ud f3</label>
                            <div class="form-inp">
                            <input type="text" name="udf3" id ="input_udf3" placeholder="udfC " />
                            </div>
                            </div>
                            
                            
                            <div class="form-row">
                            <label>Ud f4</label>
                            <div class="form-inp">
                            <input type="text" name="udf4" id ="input_udf4" placeholder="udfD " />
                            </div>
                            </div>
                            
                            
                            <div class="form-row">
                            <label>Ud f5</label>
                            <div class="form-inp">
                            <input type="text" name="udf5" id ="input_udf5" placeholder="udfE " />
                            </div>
                            </div>
                            
                            
                            <!--<div class="form-row">-->
                            <!--<label>Delivery Address</label>-->
                            <!--<div class="form-inp">-->
                            <!--<input type="text" name="address" placeholder="90, AnshuGarh, Hisar - 193389" >-->
                            <!--</div>-->
                            <!--</div>-->
                            
                            
                            <!--<div class="form-row">-->
                            <!--<label>Contact</label>-->
                            <!--<div class="form-inp">-->
                            <!--<input type="text" name="phonenumber" placeholder="Enter your phone number">-->
                            <!--</div>-->
                            <!--</div>-->
                            
                            
                             <input type="submit" class="cmn-btn">
                            
                            
                            </div>
                            
                                                 </div>
                            
                                                 <div class="input-group">
                                                     <div class="d-grid gap-2 col-6 mx-auto">
                                                     <button class="btn btn-primary btn-lg btn-block btn-student-payment" >Pay 1200 INR</button>
                                                     </div>
                                                  </div>
                                                  </form>
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
                      
                 
                    
                <!--row-->
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
    <script>
                         
           $(document).ready(function() {
 
                                       
                            $(".btn-student-payment" ).on("click", function() {
  
         
                                              
                                let fn  = document.getElementById("firstname").value;
                                let em  = document.getElementById("email").value;
                                let am = document.getElementById("amount").value;
                                let pf  = document.getElementById("productinfo").value;
                                let ph  = document.getElementById("phone").value;
                               
                                let Udf1  = document.getElementById("user1").value;
                                let Udf2 = document.getElementById("user2").value;
                                let Udf3  = document.getElementById("user3").value;
                                let Udf4  = document.getElementById("user4").value;
                                let Udf5  = document.getElementById("user5").value;
                                
                                console.log(fn);
                                 console.log(em);
                                  console.log(am);
                                   console.log(pf);
                                    console.log(ph);
                                     console.log(Udf1);
                                      console.log(Udf2);
                                       console.log(Udf3);
                                        console.log(Udf4);
                                         console.log(Udf5);
                                       
                                 
                                 
                                //   $.ajax({
                                //     type: "POST",
                                //     url: "payment/server_payment.php",
                                //     data:{firstname:fn,email:em,amount:am,productinfo:pf,udf1:Udf1,udf2:Udf2,udf3:Udf2,udf4:Udf4,udf5:Udf5},
                                      
                                //       success: function(response){

                                //          if(response=="success")
                                //         {
                                //               alert("Sucessfully Send");
                                       
                                //          } else {
                                         
                                //                 alert("Fail");
                                //             }
                                   
                                //     }

                                    })
                                    
                                    
                                    
                                
                 });
           
    </script>

</body>

</html>