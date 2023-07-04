<?php
// Initialize the session
// session_start();
//   header("Access-Control-Allow-Origin: *");
include "config.php";
    
    
    // error_reporting(E_ERROR | E_PARSE);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
 
      $database_err = "";
      

      $fname  = $_POST['fname'];
      $lname  = $_POST['lname'];
      $dob    = $_POST['dob'];
      $gender = $_POST['gender'];
      $phone = $_POST['phone'];
      $email  = $_POST['email'];
      $fN     = $_POST['faname'];
      $mN     = $_POST['mname'];     
      $pass   = $_POST['password'];
     
    //   $payment = "Pending";
      $payment = "Active";
    //   echo $fname;
    //   echo $lname ;
    //   echo $dob;
        
                    $query = mysqli_query($link,"SELECT * fROM user_lists  WHERE email='$email'");

                    if (mysqli_num_rows($query) >0) {
                    //   echo "Email ID already exits";  fail
                      echo 2;
                     
                    } else {
                         $sql = "insert into user_lists (firstname,lastname,date_of_Birth,gender,phone,email,fatherName,motherName,password,payment) values('$fname','$lname','$dob','$gender','$phone','$email','$fN','$mN','$pass','$payment')";
                        if(mysqli_query($link,$sql)) {
                        //   echo"Save your data Successfully";
                           echo 1;
                        
                        } 
                   }
                }
                
          ?>




                 