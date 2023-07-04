<?php

session_start();

include "police_config.php";

 $email =$_POST['email'];

 $pass = $_POST['password'];


        $sql = "SELECT * FROM police_user_details where email='$email'AND password='$pass'";

             $result = mysqli_query($link,$sql); 
             
              if (mysqli_num_rows($result) === 1) {

                 $row = mysqli_fetch_assoc($result);

                if ($row['email'] === $email && $row['password'] === $pass) {

                      
                      if($row['gender'] == "Male")
                         {
                              // echo"Male DashBoard Login";
                              $_SESSION['user_id'] = $row['id'];
                              $_SESSION['user'] = $row['name'];
                              $_SESSION['gender'] = $row['gender'];
                              $_SESSION['loggedin'] = true;
                              echo"Male";
                         }
                         else if($row['gender'] == "Female")
                         {
                            //  echo"Female DashBoard Login";
                            //  print_r($row);
                              $_SESSION['user_id'] = $row['id'];
                              $_SESSION['user'] = $row['name'];
                              $_SESSION['gender'] = $row['gender'];
                              $_SESSION['loggedin'] = true;
                              echo"Female";
                            
                         }
                         else{
                             echo"Email and Password is incorrect";
                         }
                    
                
                        }else{
                
                                echo"failled";
                
                        }
                
                
                        }
                        
                        else
                        {
                            // mysqli_num_rows($result) === 1 not present error
                            //  echo"Opps don't have any account";
                             echo"no_account";
                        }


?>
