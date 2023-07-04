<?php
session_start();
if(!isset($_SESSION['loggedin'])){ //if login in session is not set
    header("Location:index");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <?php include_once'../header/head2.php';?>
    <title>Assestment</title>
      <link href="css/custmise.css" rel="stylesheet">
   
    <style>
        .table .td-data:hover {
            background-color: whitesmoke;
            color: blue;
            /*font-size: bolder;*/
            /*font-size: 18px;*/
           
        }
        
        .time_head{
            /*background:red;*/
        }

        .btn {
            margin-left: 20px
        }

        .table,
        .td-data {
            color: black;

        }

        /* .header-table{
        position:sticky;
        top: 0 ;
        background: blue;
        color: white;
    } */

        .sr-col {
            width: 72px;
        }

        .option-col {
            width: 80px;
        }

        .option-hidden {
            width: 0px;
            /*   */
        }

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
  </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'side-navbar.php'; ?>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo $_SESSION['user']?>
                                </span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Forget Password
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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Assestment Section </h1>

                    <div class="row">

                        <div class="col-lg-12">

                            <!-- card  -->
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between py-3">
                                    <div class="div">
                                        <h6 class="m-0 font-weight-bold text-primary">Work Professional Assestment Test</h6>
                                    </div>
                                    <!--Timer-->
                                    <!--<div class="div d-flex align-items-center">-->
                                    <!--    <h6 class="m-0 text-end  font-weight-bold text-primary mx-2 time_head">Time Left </h6>-->
                                    <!--    <h5 class="m-0 font-weight-bold text-danger"><div class="timer_sec" id='menute'>60:00</div></h5>-->
                                    <!--</div>-->
                                </div>
                                <div class="card-body p-0">
                                    <div class="form">

                                        <form id="quesForm" action="#" method="POST">
                                            <div class="" id="pagination_data">
                                        </div>

                                        </form>

                                    </div>
                                    <!-- card body -->
                                </div>
                                <!-- cards -->
                            </div>
                            <!-- col  -->
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
                            <span><h5>Copyright &copy; <?php echo date("Y");?>,Serac Education</h5></span>
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

        <script src="js/jquery-redirect.js"></script>

        <script>

            $(document).ready(function () {

                var listArray = [];
                var tempArray = [];
                var tempLength;

                load_data();
                function load_data(page) {
                    $.ajax({
                        url: "action/server.php",
                        method: "POST",
                        data: { page: page },
                        success: function (data) {
                            $('#pagination_data').html(data);
                        }
                    })

                }

                $(document).on('click', '.pagination_link', function (e) {

                    e.preventDefault();

                    if (tempArray.length != 0) { tempArray = []; }

                    $('input:radio').each(function () {

                            var $this = $(this),
                            name = $this.attr('name'),
                            domain = $this.attr('domain'),
                            domainno = $this.attr('domainno')
                            vals = $this.attr('value');

                        if ($(this).prop('checked')) {

                            tempArray.push({ [name]: vals, [domainno]: domain });

                        }

                    });

                    tempLength = tempArray.length;

                    var fques = $('tr:nth-child(1) td:first').html();
                    var lques = $('tr:last td:first').html();

                    var totalques = (lques - fques) + 1;

                    // console.log("First Que: ", fques);
                    // console.log("Last Que: ", lques);
                    // console.log("Total Ques: ", totalques);

                    if (tempLength == totalques) {

                        $.merge(listArray, tempArray);

                        var page = $(this).attr("id");
                        load_data(page);
                        // console.log(page);

                    } else {

                        alert("Answer all questions please!!");

                    }

                });

                $(document).on('click', '.pagination_link_submit', function (e) {
                    e.preventDefault();

                    if (tempArray.length != 0) { tempArray = []; }

                    $('input:radio').each(function () {

                        var $this = $(this),
                            name = $this.attr('name'),
                            domain = $this.attr('domain'),
                            domainno = $this.attr('domainno')
                        vals = $this.attr('value');

                        if ($(this).prop('checked')) {

                            tempArray.push({ [name]: vals, [domainno]: domain });

                        }

                    });

                    tempLength = tempArray.length;

                    var fques = $('tr:nth-child(1) td:first').html();
                    var lques = $('tr:last td:first').html();

                    var totalques = (lques - fques) + 1;

                    // console.log("First Que: ", fques);
                    // console.log("Last Que: ", lques);
                    // console.log("Total Ques: ", totalques);

                    if (tempLength == totalques) {

                        $.merge(listArray,tempArray);

                        var dataArray = listArray;

                        // var datastring = $("#quesForm").serialize();

                        $.redirect("action/backend_v2",dataArray,"POST");

                        $.ajax({
                            // url: "action/backend_try.php",
                              url: "action/backend_try",
                            type: "POST",
                            data: { data: dataArray },
                            success: function (response) {

                                console.log("Success: ", response);

                
                            },
                            error: function (error) {
                                console.log("error: ", error)
                                // alert('error handling here');
                            }
                        });

                    } else {

                        alert("Answer all questions please!!");

                    }
                });

                $(document).on('click', '.pagination_link_prev', function () {
                    var page = $(this).attr("id");
                    load_data(page);

                    $.each(tempArray, function (name, value) {

                        // console.log("Name: ", name);
                        // console.log("Value: ", value.name);

                        $("input[type=radio][name=" + value.name + "][value=" + value.value + "]").prop("checked", true);

                    })

                    // console.log("Prev Page: ", page);
                });

            });

        </script>
        <!--counter timing-->
        <!-- <script>-->
       
        <!--  let startingMinutes = 60;-->
        <!--  let time = startingMinutes *60;-->
        <!--  let  menute = document.getElementById('menute');-->
    
        <!--  const myInterval =setInterval(timer,1000);-->
          
        <!--    function timer(){-->
                
        <!-- let minutes = Math.floor(time/60);-->
        <!-- let seconds = time%60;-->
       
        <!--  time --;-->
          
        <!-- if(minutes==0 && seconds==0){-->
             
        <!--      clearInterval(myInterval);-->
        <!--         menute.innerHTML = 'Time Up';-->
        <!--         return false;-->
                 
        <!--            }-->
        <!--            else-->
        <!--            {-->
        <!--                 menute.innerHTML = `${minutes}:${seconds}`;-->
        <!--            }-->
        <!--    }-->
        <!--</script>-->

</body>

</html>