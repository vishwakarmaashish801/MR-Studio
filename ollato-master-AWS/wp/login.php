<?php

session_start();

include "wp_config.php";

 $email =$_POST['email'];

 $pass = $_POST['password'];


        $sql = "SELECT * FROM user where email='$email'AND password='$pass'";

             $result = mysqli_query($link,$sql); 
              if (mysqli_num_rows($result) === 1) {

             $row = mysqli_fetch_assoc($result);

                if ($row['email'] === $email && $row['password'] === $pass) {
                    
                       $_SESSION['user_id'] = $row['id'];
                       $_SESSION['user'] = $row['name'];
                       $_SESSION['dob'] = $row['dob'];
                       $_SESSION['phone'] = $row['phone'];
                       $_SESSION['email'] = $row['email'];
                       $_SESSION['gender'] = $row['gender'];
                    
                      
                       $_SESSION['loggedin'] = true;
                        echo"success";

            }else{

                echo"failled";

            }


        }

      ?>