<?php 
session_start();
if(!isset($_SESSION['loggedin'])){ //if login in session is not set
    header("Location:index");
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

    <title>Student Result</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
         <!-- jquery another  -->
   <script src="https://code.jquery.com/jquery-2.2.4.js"  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="  crossorigin="anonymous"></script>
       
        <!--bootstrap css cdn link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
     .btn_logout {
    font: inherit;
    border: 0;
    outline: 0;
    padding: 0.5em 1em;
   
    cursor: pointer;
    position: relative;
    background-color: #0f62ac;
    color: #fff;
    
    text-transform: uppercase;
    font-size: 0.95em;
    transition: transform 0.2s, opacity 0.2s;
  }
  
  
  /**/
  
h3{
 font-size:20px;
 font-family:Georgia;
}
.head{
  font-size:19px;
  color:blue;
}

.react{fill:red;}


div {
  text-align: justify;
}


.col-md-12{
    font-size: 12px;
    
    font-family: 'Times New Roman', Times;
}

#print{
    
    background:red;
}

.print_page{
  width:20cm;

   
}
.page_content{
    width:783px;
    height:1000px;
   margin-left:-20px;
}

.bannerimage-container{
     position:relative;
}

.bottom-left {
 background: #98000d;
    position: absolute;
    width: 326px;
    bottom: 200px;
    left:75px;
    height: 90px;
    padding: 12px;
}

/*.print{*/
/*    display:none;*/
/*}*/

#cancel{
    display:block; 
}



@media print{
    
body {
 background-color:blue;   
}  
.fiestpage{
    margin-top:-75px;
}

.print{
    display:inline;
    background:red;
}

.print_att{
    font-size:22px;
}

.html2pdf__page-break {
 
    /*page-break-before: always;*/
    
}
.topbar{
    display:none;
}

.sidebar{
    display:none;
}
.card_first_heading{
    display:none;
}
.card_first{
    display:none;
}

.card_second{
    display:none;
}

#downloadstudent{
    display:none;
}

#cancel{
    display:none; 
}


.bannerimage-container{
     position:relative;
}

.bottom-left{
     bottom:160px;
}

img{
    /*height:868px;*/
    height:1020px;
    width:100%;
    
}


.page_content {
    /*size: A4;*/
    width:100%;
    height:22.3cm;
    margin-top:1px;
    /*background-color:red;*/
}
.firstpage {
      margin-top: -38px;
}

.row>*{
    flex-shrink: 0;
    width: 68%;
   
}


 .col-md-4 {
    width: 32%;
}

.footer{
    background-color:red;
}



}

  
  
  
  
  </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                    <img
            src="images/small.png"
            alt="logo"
            width="180"
            height="56"
           
          />
                </div>
                <!-- <div class="sidebar-brand-text mx-3">Ollato  <sup></sup></div> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span><?php echo $_SESSION['user']." ".$_SESSION['last']?></span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item active">
                <a class="nav-link" href="instruction">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Instruction</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="instruction">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Assestment</span></a>
            </li>

           

            <!-- Nav Item - Utilities Collapse Menu -->
           

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            
            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="wp-student">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Result</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <!--<li class="nav-item active">-->
            <!--    <a class="nav-link" href="report.php">-->
            <!--        <i class="fas fa-fw fa-chart-area"></i>-->
            <!--        <span>Report</span></a>-->
            <!--</li>-->
            <!--<li class="nav-item active">-->
            <!--    <a class="nav-link" href="counselling.php">-->
            <!--        <i class="fas fa-fw fa-chart-area"></i>-->
            <!--        <span>Book Counselling</span></a>-->
            <!--</li>-->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!--<div class="sidebar-card d-none d-lg-flex">-->
            <!--    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">-->
            <!--    <p class="text-center mb-2"><strong>Serac Education</strong> is packed with premium features, components, and more!</p>-->
            <!--    <a class="btn btn-success btn-sm" href="#">Upgrade to Pro!</a>-->
            <!--</div>-->

            <!-- logout section -->
            <div class="sidebar-card d-none d-lg-flex">
          
                                   
                <a class="btn btn_logout btn-danger btn-sm" href="#" data-toggle="modal" data-target="#logoutModal">  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout</a>
            </div>

        </ul>
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

                    <!-- Topbar Search -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
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
                  <!-- Begin Page Content -->
                  <div class="container-fluid bg-light">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800 card_first_heading">Result  Section  </h1>

<div class="row">

    <div class="col-lg-12">

        <!-- Card Buttons -->
        <div class="card card_first shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Work Professional Result </h6>
            </div>
            <div class="card-body">
                <p> This is result Page</p>
                <?php

        include 'action/config.php';


   
    $user_id = $_SESSION['user_id'];
    

  $sql1 = "SELECT * FROM result where  student_id='$user_id'";
  $result = mysqli_query($link,$sql1);
 
  if (mysqli_num_rows($result) == 1) {

  $row = mysqli_fetch_assoc($result);

   //5  2 
 $retval = mysqli_query($link, $sql1);

  if (!$retval) {
      die('Could not get data:');
  }

  while ($row = mysqli_fetch_array($retval)) {
      $_SESSION['$student_id'] = $row[1];
      $adj1 = $row[3];
      $att2 = $row[4];
      $self3 = $row[5];
      $study4 = $row[6];
      $dep5 = $row[7];
      $anx6 = $row[8];
      $stress7 = $row[9];
      $time8 = $row[10];
      $sleep9 = $row[11];
      $exam11 = $row[12];
      $cropping11 = $row[13];
    
      $Domain_value_db = array();
      $Domain_name = array('Adjustment', 'Attention', 'Self', 'Study', 'Depression', 'Anxiety', 'Stress', 'Time Management', 'Sleep', 'Exam', 'Coping Management');

      array_push($Domain_value_db, "$adj1", "$att2", "$self3", "$study4", "$dep5", "$anx6", "$stress7", "$time8", "$sleep9", "$exam11", "$cropping11");
      // print_r($Domain_value_db);
      echo "<br>";

      $newArray_db = array_combine($Domain_name, $Domain_value_db);
    //   print_r($newArray_db);
      // $_SESSION["array_db"] = $newArray_db;

  }
  

$color_array = array('#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#A020F0', '#FFC0CB', '#FFA500', '#00008B', '#8B0000', '#023020', '#FFD700');


}else{
echo "<br>Please Do Test To get Result";
}


?>
               
    </div>
    </div>
    <div>
    
   
            <!-- card box 2 -->
            <div class="card shadow mb-4 card_second" style="height: 700px;">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Student Report Analysis by Graph Bar </h6>
                    </div>
            
            
            <div class="card-body">
            <!-- graph body  -->
            <div class="container text-center">
            
            <div id="columnchart_values2" style="width: 900px; height:300px;">
            <h1 class="mt-5">No Result Found <h1><br> <h3>Click here to take the test <a href = "http://localhost/All%20Project/Serac%20admin/assestment" class="fs-5">Start Test </a></h3></div>
            
            
            <?php echo "Student ID".$_SESSION['$student_id']; ?>
            
            </div>
            
            </div>
            
           
            
            </div>
            
            
            <!-- card box 3 -->
           
             

            
            <!--</div>-->
            
           
            
            <!--</div>-->
           
            <!--</div>-->

                
                    
                    </div>
                
                </div>
                <!-- row -->
                
                </div>
                <!-- /.container-fluid -->
                
                </div>
                <!-- End of Main Content -->
                
                            <!-- Footer -->
                            <footer class="sticky-footer bg-white">
                                <div class="container my-auto">
                                    <div class="copyright text-center my-auto">
                                    <span><h5>Copyright &copy; Serac Education  2022</h5> <?php echo"User ID ".$user_id ; ?> And <?php echo "Student ID ".$_SESSION['$student_id']; ?></span>
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
                                    <a class="btn btn-primary" href="logout">Logout</a>
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
    <!--print priview-->
    <script src="js/student.js"> </script>

    <!-- Graph script -->
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    google.charts.load("current", {
    packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ["Domain", "Score", {
        role: "style"
    }],
    <?php
    
    $x = 0;
    foreach ($newArray_db as $key => $value) {

        if($key == "Adjustment") {

            if($value >= 7 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 6) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Attention") {

            if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 5 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 4) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Self") {

            if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 5 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 4) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Study") {

            if($value >= 9 && $value <= 11) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 8) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Depression") {

            if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            } 
            else if($value >= 5 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 4) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            }

        }

        if($key == "Anxiety") {

            if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            } 
            else if($value >= 5 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 4) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            }

        }

        if($key == "Stress") {

            if($value >= 7 && $value <= 11) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 6) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            }

        }

        if($key == "Time Management") {

            if($value >= 7 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 6) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Sleep") {

            if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Exam") {

            if($value >= 7 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 6) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Coping Management") {

            if($value >= 8 && $value <= 11) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        // if ($value > 5) {
        //     echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
        // } else if($value <= 5) {
        //     echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
        // } else if($value ){

        // }
        $x++;
    }
    ?>
    ]);

    var view = new google.visualization.DataView(data);
    // view.setColumns([0, 1,
    // {
    //     calc: "stringify",
    //     sourceColumn: 1,
    //     type: "string",
    //     role: "annotation"
    // },
    // 2
    // ]);

    var options = {
    title: "Score for respective domains",
    width:  0,
    height:400,
    bar: {
        groupWidth: "80%"
    },
    legend: {
        position: "none"
    },
    vAxis: {
        maxValue: 10
    }
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
    var chart1 = new google.visualization.ColumnChart(document.getElementById("columnchart_values2"));
    
    chart.draw(view, options);
    chart1.draw(view, options);
    }
    </script>

    <script>
    $(document).ready(function () {

    $("#printPage").click(function(){

    var element = document.getElementById('resultdownload');

    var opt = {
    margin:       1,
    filename:     'ollato-report.pdf',
    image:        { type: 'jpeg', quality: 0.98 },
    html2canvas:  { scale: 1 },
    jsPDF:        { unit: 'mm', format: 'a3', orientation: 'portrait' }
    };

    html2pdf().set(opt).from(element).save();

    })

    });

    </script>

</body>

</html>