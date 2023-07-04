<!DOCTYPE html>
<html lang="en">
    
   <head> 
         <?php include("../header/head.php");?>
         <title>Login</title>
   </head>
   
  <body>
    <!-- header  -->
    <header>
          <?php include_once'../header/header.php';?>
    </header>
      
    <!-- form  -->
    <div class="container form-container" style="margin-top:0px;margin-bottom: 40px;" >
                <div class=" col-md-6 mb-1 mx-auto">
                    <div id="sectiontohide" style="display:none" class="form-text  fw-bold text-center">
                        <img src="images/loding.gif" alt="logo" width="50" height="50" />
                     </div>
                     <div id="result" class="form-text  fw-bold text-center"></div>
                    </div>
  
      <div class="form-title">
        <h5 class="text-center" style="color:#2170AC;">Interest Test</h5>
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
           <p class="mt-2" style="color:#2170AC;"> <a href = "forgot-password.php" style="text-decoration: none;"> Forgot password  </a> </p> 
          <p class="mt-0" style="color:#2170AC;">Don't have an account ? <a href="register.php" style="text-decoration: none;">Create an account </a></p>
          <p class="mt-0" style="color:#2170AC;"> <a href="../" style="text-decoration: none;">Back to home </a></p>
          </div>
         
        </form>
      
        
      </div>
    </div>

    <!--Footer start -->
    <footer>
         <?php include_once'../footer/footer.php'?>
    </footer>
   <!--Footer start -->
   
   
<script type="text/javascript">



</script>
  
  
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
        document.getElementById("emailpass").innerHTML="** Please fill  password **";
        return false;
      }else{
            // AJAX Code To Submit Form.
              $.ajax({
                                    type: "POST",
                                    url: "login.php",
                                    // data:$("#loginForm").serialize(),
                                      data:{
                                              email:email,
                                              password:pass
                                              },
                                  
                                    success: function(response){
                                        
                                      var divelement = document.getElementById("sectiontohide");
                                      divelement.style.display = 'block';
                                  
                                      if(response=="success")
                                        {
                                          // added this line for loader
                                            var divelement = document.getElementById("sectiontohide");
                                            divelement.style.display ='block';
                                            $("#result").html("Please Wait... !!").css({"font-size": "20px","color":"#2170AC",});
                                          setTimeout(() => {
                                            window.location.href="dashboard.php";
                                          }, 3000);//  3000mls =   3 seconds
                                         
                                        } else{
                                         
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