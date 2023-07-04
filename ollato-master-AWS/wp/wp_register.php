<?php
//  Work professional Page
// Initialize the session 

session_start();

     include("wp_config.php");
    // error_reporting(E_ERROR | E_PARSE);

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
 
       $database_err = "";
       $fname = $dob =  $gender =  $phone =  $fN =$email =  $pass;
      // from data comming ajax through registraion page FN:fname,DOB:dob,GN:selectedText,PH:phone,CN:cname,EM:email,PW:cpass
      $fname  = $_POST['FN'];
      $dob    = $_POST['DOB'];
      $gender = $_POST['GN'];
      $phone = $_POST['PH'];
      $cN  = $_POST['CN'];
      $email  = $_POST['EM'];
      $pass   = $_POST['PW'];
     
 
                    $query = mysqli_query($link,"SELECT * fROM user WHERE email='$email'");

                    if (mysqli_num_rows($query) >0) {
                        echo 2;
                         //   echo"Allready present data";
                    } else {
                       
                          $sql = "insert into user (name,dob,gender,companyName,phone,email,password,createdDate) values('$fname','$dob','$gender','$cN','$phone','$email','$pass',now())";
                         if(mysqli_query($link,$sql)) {
                              echo 1;
                        //   echo"Save your data Successfully";
                        }else{
                            echo 0; //  Unable save data";
                                 }
                  }
              
          ?>




                 