<!DOCTYPE html>
<html lang="en">
    <!--police professional page login-->
   <head> 
         <?php include("../header/head.php");?>
         
         <title>Login</title>
                    <script src="https://kit.fontawesome.com/d16022fa4e.js" crossorigin="anonymous"></script>
    <style>
   .icon {
   font-size: 48px;
    margin-top: -34px;
    text-align: center;
    color:#11486D;
    font-weight:400;
   }
     .logo-box {
        /*background: #0d2d44;*/
        background: #daf2ff;
        height: 800px;
        
     }
     
      .btn-outline-primary {
    color: #11486d;
    border-color: #11486d;
    }
      
      .btn_log:hover{
          background-color:#0d2d44!important;
          color:white;
      }
      
      .card{
          width:auto;
          background: #87ceeb63;
      }
      
     .card-footer{ 
      border: 0;
    background: none;
    /*text-align: center;*/
     }
      
    @media (max-width: 767px){
        
        .left {
    position: relative;
    margin: 0;
    width: auto;
}

 .logo-box {
        /*background: #0d2d44;*/
        background: #daf2ff;
        height: auto;
        
     }

 .card{
          width:25rem;
      }
      
       #img-box img{
          margin-left: auto;
      }
        
    }
   
    </style>
    
    <!--New Ollato Logo.png-->
    <!--1ollato-logo.png-->
     
</head>
  <body class="d-flex flex-column min-vh-100">
      
    <!-- header  -->
     <header>
          <?php include_once'../header/header.php';?>
     </header>
     
      <!--login -->
      <div class="container-fluid tab mt-1 d-flex justify-content-end">
    <!--  <div class="dropdown">-->
    <!--  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #2170ac;border-color: #2170ac;border: 2px solid #2170ac;padding: 7px 60px;color: #fff;">-->
    <!--  Login-->
    <!--  </a>-->
    <!--  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">-->
    <!--  <li><a class="dropdown-item" href="https://easinessbiz.com/test/">Student</a></li>-->
    <!--  <li><a class="dropdown-item" href="https://easinessbiz.com/wp/">Working Professional</a></li>-->
    <!--  <li><a class="dropdown-item" href="">Other</a></li>-->
    <!--  </ul>-->
    <!--</div>-->
    </div>
   
    <!-- form  -->
   
<div class="container" style="margin:auto">
    
    <div class="row gap-4 d-flex justify-content-evenly my-4">
        
         <div class="col-md-4  ">
                
                  <div class="">
                      <!--form-->
                  <!-- form  -->
    <div class="container form-container" style="margin-top:0px;margin-bottom: 40px;" >
                <div class="col-md-12 mb-1">
                    <div id="sectiontohide" style="display:none" class="form-text  fw-bold text-center">
                        <img src="images/loding.gif" alt="logo" width="50" height="50" />
                     </div>
                     <div id="result" class="form-text  fw-bold text-center"></div>
                    </div>
  
      <div class="form-title">
        <h5 class="text-center mt-3 text-center" style="color:#2170AC;">Police Professional</h5>
        <h3 class="text-center mt-2 text-center" style="color:#2170AC;">login</h3>

        <!-- form start -->
      
        <form  id="loginForm"  method="POST" onsubmit="Validate();return false" autocomplete="off"> 
          <div class="col-md-12 mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" class="form-control" id="InputEmail1" aria-describedby="em  ailHelp" name="email">
            <div id="emailHelp" class="form-text text-danger fw-bold"></div>
          </div>
          <div class="col-md-12 mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password" autocomplete="off" name="password">
            <div id="emailpass" class="text-danger fw-bold"> </div>
          </div>
          <div class="col-md-12 mb-3">
          <button type="submit" class="btn" style="background-color:#2170AC;color:#fff">Login</button>
           <p class="mt-2" style="color:#2170AC;"> <a href = "forgot-password.php" style="text-decoration: none;"> Forgot password  </a> </p> 
          <p class="mt-0" style="color:#2170AC;">Don't have an account ? <a href="register.php" style="text-decoration: none;">Create an account </a></p>
          <p class="mt-0" style="color:#2170AC;"> <a href="../" style="text-decoration: none;">Back to home </a></p>
          </div>
         
        </form>
      
        
      </div>
    </div>
    <!--end form -->
                  
                  
                  <!--end form-->
                  </div>
                 <!-- <div class="card-footer">-->
                 <!-- <a href="../pf/"><button type="button" class="btn btn-outline-primary btn_log">Login </button></a>-->
                 <!--</div>-->
                </div>  
        
        
        
    </div>
    

</div>

    <!--  -->
   
    <!--  -->
    <!--Footer start -->
    <footer>
         <?php include_once'../footer/footer.php'?>
    </footer>
    
    
<script type="text/javascript">
 function Validate()
  {
      var email = document.getElementById("InputEmail1").value;
      var pass = document.getElementById("Password").value;
     if (email == "") 
      {
      // alert("Please fill email ");
      document.getElementById("emailHelp").innerHTML="** Please fill  email **";
      return false;
      }
      else if ( pass == ""){
        // alert("Please fill  password");
         document.getElementById("emailHelp").innerHTML="";
        document.getElementById("emailpass").innerHTML="** Please fill  password **";
        return false;
      }else{
            // AJAX Code To Submit Form.
              $.ajax({
                                    type:"POST",
                                   
                                    url: "login_server.php",
                                    // data:$("#loginForm").serialize(),
                                      data:{
                                              email:email,
                                              password:pass
                                              },
                                  
                                    success: function(response){

                                      var divelement = document.getElementById("sectiontohide");
                                      divelement.style.display = 'block';
                                  
                                      if(response=="Male")
                                      
                                        {
                                          // added this line for loader
                                            var divelement = document.getElementById("sectiontohide");
                                            divelement.style.display ='block';
                                            $("#result").html("Please Wait... !!").css({"font-size": "20px","color":"#2170AC",});
                                            setTimeout(() => {
                                            window.location.href="pm_dashboard.php";
                                          }, 3000);//  3000mls =   3 seconds
                                         
                                         
                                        } 
                                        
                                         else if(response=="Female")
                                         
                                        {
                                          // added this line for loader
                                            var divelement = document.getElementById("sectiontohide");
                                            divelement.style.display ='block';
                                            $("#result").html("Please Wait... !!").css({"font-size": "20px","color":"#2170AC",});
                                            setTimeout(() => {
                                            window.location.href="dashboard.php";
                                           }, 3000);//  3000mls =   3 seconds
                                         
                                        }
                                        
                                        else if(response=="no_account")
                                        
                                        {
                                             $("#result").html("Email and Password is incorrect !!").css({"font-size": "20px","color":"red",});
                                            $("#loginForm").trigger("reset");
                                            divelement.style.display = 'none';
                                        }
                                        
                                          else if(response=="failled")
                                          
                                        {
                                         
                                            $("#result").html("Email And Password Incorrect !!").css({"font-size": "20px","color":"red",});
                                            $("#loginForm").trigger("reset");
                                            divelement.style.display = 'none';
                                            }
                                   
                                    }

                                    });

                           
}     // fun();
      function fun(){  
            document.getElementById('InputEmail1').value='';
            document.getElementById('Password').value='';
            document.getElementById("emailHelp").innerHTML="";
            document.getElementById("emailpass").innerHTML="";
          }   
   return true; 
}
</script>
 <!-- <script src="index.js"> -->
 </body>
</html>
