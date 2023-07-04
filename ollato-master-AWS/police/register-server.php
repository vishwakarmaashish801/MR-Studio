<?php
// regisster poice 

// Initialize the session 
// session_start();
  
    include("police_config.php");
    // error_reporting(E_ERROR | E_PARSE);

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
 
       $database_err = "";
       $fname=$dob=$gender=$phone=$fN=$email=$pass="";
      // from data comming ajax through registraion page FN:fname,DOB:dob,GN:selectedText,PH:phone,CN:cname,EM:email,PW:cpass
      $fname  = $_POST['FN'];
      $dob    = $_POST['DOB'];
      $gender = $_POST['GN'];
      $phone = $_POST['PH'];
      $cN  = $_POST['CN'];
      $email  = $_POST['EM'];
      $pass   = $_POST['PW'];
     
 
                    $query = mysqli_query($link,"SELECT * fROM police_user_details WHERE email='$email'");

                    if (mysqli_num_rows($query) >0) {
                        echo 2;
                         //   echo"Allready present data";
                    } else {
                        
                       
                           if($gender == "Male"){
                               
                             $user_type="Police Men";
                             $status ="Active";
                                 
                               $sql = "insert into police_user_details (name,dob,gender,companyName,phone,email,password,user_type,createdDate,status) values('$fname','$dob','$gender','$cN','$phone','$email','$pass','$user_type',now(),'$status')";
                         if(mysqli_query($link,$sql)) {
                              echo 1;
                        //   echo"Save your data Successfully";
                        }else{
                            echo 0; //  Unable save data";
                                 }
                               
                           }
                           else if($gender == "Female"){ 
                               
                              $user_type="Police Women";
                              $status ="Active";
                               
                            $sql = "insert into police_user_details (name,dob,gender,companyName,phone,email,password,user_type,createdDate,status) values('$fname','$dob','$gender','$cN','$phone','$email','$pass','$user_type',now(),'$status')";
                            if(mysqli_query($link,$sql)) {
                              echo 1;
                            //   echo"Save your data Successfully";
                            }else{
                                 echo 0; //  Unable save data";
                                 }
                               
                           }
                                
                            else
                            {
                            echo 0; //  Unable save data";
                            }
                  }
              
          ?>




                 
