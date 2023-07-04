<!DOCTYPE html>
<html lang="en">
  <head>
     <?php include_once'../header/head.php';?>
      <!-- external main  -->
     <link rel="stylesheet" href="css/register.css" />
     <title>Registration</title>
  </head>
  <body>
    <!-- header  -->
    <header>
         <?php include_once'../header/header.php';?>
      </header>
   
    <!-- Registration form  -->
    <div class="container form-container" style="margin-top:40px;margin-bottom:40px;">
     
      <div class="form-title">
        <h5 class="text-center" style="color:#2170AC;">Working Professional</h5>
        <h3 class="text-center" style="color:#2170AC;">Registration</h3>
      </div>                                                                   
     
        <!-- form start -->
        <!-- form start -->
        <form  id="wp-regForm" onsubmit="Registration();return false">
       <div class="container  mt-5">
        <!--1R-->
       <div class="row form-container">
       <!--  -->
       <div class= "col-md-4 p-2">
      <div class="">
          <label for="floatingInputValue" class="fw-bolder">Full Name</label>
          <input type="text" class="form-control" id="fname" placeholder="full name" >
          <span class="text-danger  error-f fw-bold" ></span>
         
      </div>
      </div>
       <!--  -->
       <div class=" col-md-4 p-2">
                <div  class=" ">
                    <label for="floatingInputValue" class="fw-bolder">Date Of Birth</label>
                    <input type="date" class="form-control" id="dob" placeholder="dob">
                    <span class="text-danger error-d fw-bold"></span>
                </div>
                </div>
       <!-- first row end -->
       </div>
        <!--2R-->
        <div class="row form-container mt-4 ">
        <!--  -->
        <div class="col-md-4 p-2">
                    <div class="">
                        <label for="floatingInputValue" class="fw-bolder">Company Name</label>
                        <input type="text" class="form-control" id="cname" placeholder="Company name">
                        <span class="text-danger error-c fw-bold"></span>
                    </div>
                    </div>
          <!--  -->
        <div class="col-md-4 p-2">
               <div class="">
                  <label for="floatingInputValue" class=" fw-bolder">Gender</label>
                   <select class="form-select" id="gender" aria-label="Default select example">
                      <option selected>Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Transgender">Transgender</option>
                      <option value="Other">Other</option>
                    </select>
                    <span class="text-danger error-g fw-bold"></span>
                  </div>
               </div>
        <!--- second row end  --->
        </div>
        <!-- 3R  -->
        <div class="row form-container mt-4">
        <div class="col-md-4 p-2">
         <div class="">
        <label for="floatingInputValue" class="fw-bolder">Phone Number</label>
        <input type="number" class="form-control" id="phone" placeholder="phone" >
        <span class="text-danger error-p fw-bold"></span>
        </div>
        </div>
       <!--  -->
       <div class=" col-md-4 p-2">
        <div class="">
          <label for="floatingInputValue" class="fw-bolder">Email Address</label>
         <input type="email" class="form-control" id="email" placeholder="xxx@gmail.com">
          <span class="text-danger error-e fw-bold"></span>
          </div>
          </div>
       </div>
         <!-- 4R  -->
        <div class="row form-container mt-4">
                    <!--  -->
                   <div class="col-md-4 p-2">
                   <div class="">
                      <label for="floatingInputValue" class="fw-bolder">New Password</label>
                         <div class="d-flex">
                       <input type="password" class="form-control" id="newpass" placeholder="new passsword" autocomplete="off">
                       <i class="fa fa-eye pass-icon" onclick="createpass()" style="margin: 8px -25px;"></i>
                       </div>
                       <span class="text-danger error-np fw-bold"></span>
                   </div>
                   </div>
                   <!--  -->
                   <div class="col-md-4 p-2">
                       <div class="h">
                          <label for="floatingInputValue" class="fw-bolder">Confirm password</label>
                          <div class="d-flex">
                           <input type="password" class="form-control" id="confpass" placeholder="confirm password" autocomplete="off">
                            <i class="fa fa-eye pass-icon" onclick="confirmpass()" style="margin: 8px -25px;"></i>
                            </div>
                           <span class="text-danger error-cf fw-bold"></span>
                       </div>
                       </div>
                       </div>
         <!--5R  checkbox-->
         <div class="row form-container mt-4">
                      <div class="col-md-8 form-check form-container">
                          <input class="form-check-input mx-1" type="checkbox" value="" id="checkbox">
                          <label class="form-check-label" for="flexCheckIndeterminate">
                              I agree with all Terms & Conditions
                          </label>
                          <span class="text-danger error-check"></span>
                        </div>
                        </div>
        <!-- 6R button  -->
        
        <div class="row form-container my-4">
            <!-- justify-content-evenly -->
           <div class="d-flex justify-content-center gap-2">
         <a href="#" style="text-decoration:none"><button type="reset" class="btn btn-outline-primary ">Reset</button></a>
         <button type="submit" class="btn btn-outline-primary">Submit</button>
             </div> 
             </div>
        </form> 
         <!--Error Find -->
        <div class="d-flex justify-content-center gap-2">
                    <div class="col-md-8">
                        <p id="result" class="text-center"></p>
                    </div>
                      </div>
        <!-- redirect login -->
        <div class="row form-container">
          <div class="col-md-12 text-center  form-check form-container">
              <p class="mt-0 ms-0" style="color:#2170AC;">Already have an account ? <a href="/wp/" >Login</a></p>
              <p class="mt-0" style="color:#2170AC;"> <a href="../" style="text-decoration: none;">Back to home </a></p>
            </div>
           </div>
         <!-- redirect home page  -->     
        </div>
        <!--container -->
        
         </div>
        <!--Registration form container-->     
          
               
        <!--Footer start -->
        <footer>
            <?php include_once'../footer/footer.php'?>
        </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    >
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!-- <script src="index.js"> -->
    <script>
    
    // $( document ).ready(function() {

      function Registration(){

        let fname  = document.getElementById("fname").value;
        let dob = document.getElementById("dob").value;
        let cname  = document.getElementById("cname").value;
        let gender = document.getElementById("gender");
        let phone  = document.getElementById("phone").value;
        let email  = document.getElementById("email").value;
        let npass  = document.getElementById("newpass").value;
        let cpass  = document.getElementById("confpass").value;
        let  js = document.querySelector('#checkbox');
        
         // firstname
          if(fname == "")
          {
          document.querySelector(".error-f").innerHTML="** Please filled fullname **";
          return false;
            }else{
              document.querySelector(".error-f").innerHTML=" ";
            }

            // date of Birth
            if(dob == ""){
             document.querySelector(".error-d").innerHTML="** Please filled Date of Birth **";
             return false;
            } else{
              document.querySelector(".error-d").style.display = "none";
            }
            
            // company NAme
            if(cname == "") {
              document.querySelector(".error-c").innerHTML="** Please filled company name **";
              return false;
                }else{
                  document.querySelector(".error-c").style.display ="none";
                }
    
              //  gender 
              
               if(gender.selectedIndex == 0) {
                  //  alert('select one answer');
                   document.querySelector(".error-g").innerHTML="** Please select gender **";
                    return false;
                   }
                else {
                     var selectedText = gender.options[gender.selectedIndex].value;
                     
                      document.querySelector(".error-g").style.display="none";
                    }
        
                // phone 
                 if(phone ==""){
                    document.querySelector(".error-p").innerHTML="** Please filled Phone number **";
                     return false;
                     }else{
                      document.querySelector(".error-p").style.display="none";
                  }
        
                // email address
                     if(email == "") {
                 document.querySelector(".error-e").innerHTML="** Please filled Email Address **";
                   return false;
                }else{
                  document.querySelector(".error-e").style.display="none";
                }

                // create password 
                if(npass == "") {
                document.querySelector(".error-np").innerHTML="** Please filled New Password **";
                return false;
                }else{
                  document.querySelector(".error-np").style.display="none";
                }

                // confirm password
                  if(cpass == ""){
                   document.querySelector(".error-cf").innerHTML="** Please filled Confirm Password **";
                   return false;
                }else{
                  document.querySelector(".error-cf").style.display="none";
                }
        
                if (npass === cpass) {
                    // alert('Passwords match');
                  }else {
                    alert('Passwords do not match');
                    return false;
                  }
        
                  if(js.checked){
                      console.log("Full Name" + fname);
                      console.log("Date Of Birth " + dob);
                      console.log("Gender " + selectedText);
                      console.log("Phone " + phone);
                      console.log("Company Name " + cname);
                      console.log("Email " + email);
                      console.log("Password " + npass);
                      console.log("Confirm Password " + cpass);
                      
                      console.log("checking  checkbox (true /false ) " + js.checked);
                      console.log(js.checked);
        
                     }else {
                        alert("please checked the checkbox");
                        // document.querySelector(".error-check").innerHTML="** Please checked thec  check-Box **";
                        return false;
                     }

                     // AJAX Code To Submit Form.
                      $.ajax({
                      type: "POST",
                      url: "wp_register.php",
                      data:{FN:fname,DOB:dob,GN:selectedText,PH:phone,CN:cname,EM:email,PW:cpass},
                      
                      cache: false,
                      success: function(data){
                            if(data == 1){
                              
                              $("#result").html("Save Data Sucessfully").css({"background-color": "green","font-size": "16px","color":"white","Padding":"0px 45px"});
                               $("#wp-regForm").trigger("reset");                                          
                               setTimeout(() => {
                                            window.location.href="/wp/";
                                          },2000);
                             }
                             else if(data == 2){
                                 
                                 setTimeout(() => {
                                $("#result").html("Email Already present !! ").css({"background-color": "red","font-size": "16px","color":"white","Padding":"0px 45px"});
                                          },1000);
                                $("#wp-regForm").trigger("reset"); 
                        
                             }
                             else if(data == 0){
                                   $("#result").html("Unable to save data").css({"background-color": "red","font-size": "16px","color":"white","Padding":"0px 45px"});
                                   $("#wp-regForm").trigger("reset"); 
                             }
                            
                             
                        
                      }
                      
                      
                    });

            
                }  //closed registration ()
                // });
                
                </script>
                <script>
                function createpass() {
                  var x = document.getElementById("newpass");
                   
                      if (x.type === "password") {
                        x.type = "text";
                           } else {
                          x.type = "password";
                      }
                 
                }
                
                function confirmpass() {
                    var y = document.getElementById("confpass");
                   
                       if (y.type === "password") {
                        y.type = "text";
                           } else {
                          y.type = "password";
                      }
                }
                </script>

 </body>
</html>
