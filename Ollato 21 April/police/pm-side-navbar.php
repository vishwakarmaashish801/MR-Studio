  <?php 
    //  declare variable 
     $username = '';
     if (isset($_SESSION["user"]))
       { $username  =  $_SESSION['user'] ;}
   ?>
  
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="pm_dashboard">
                <div class="sidebar-brand-icon ">
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
                <a class="nav-link" href="pm_dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span><?php echo $username ;?></span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item active">
                <a class="nav-link" href="pm_instruction">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Instruction</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="pm_package">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Package/Payment</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="pm_assestment">
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
                <a class="nav-link" href="pm_report">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Result</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="pm_book-session">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Book Session</span></a>
            </li>

            <!-- Nav Item - Tables -->
           
          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
           

            <!-- logout section -->
            <div class="sidebar-card d-none d-lg-flex">
          
                                   
                <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#logoutModal">  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout</a>
            </div>

        </ul>