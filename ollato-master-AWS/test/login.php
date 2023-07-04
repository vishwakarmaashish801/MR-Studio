<?php

session_start();

include "config.php";
// include"connection.php";

 $email =$_POST['email'];

 $pass = $_POST['password'];


        $sql = "SELECT * FROM user_lists where email='$email'AND password='$pass'";

             $result = mysqli_query($link,$sql); 
              if (mysqli_num_rows($result) === 1) {

             $row = mysqli_fetch_assoc($result);

                if ($row['email'] === $email && $row['password'] === $pass) {
                    
                       $_SESSION['user_id']  = $row['id'];
                       $_SESSION['user']  = $row['firstname'];
                       $_SESSION['last'] = $row['lastname'];
                       $_SESSION['gender'] = $row['gender'];
                       $_SESSION['dob'] = $row['date_of_Birth'];
                       $_SESSION['phone'] = $row['phone'];
                       $_SESSION['email'] = $row['email'];
                       $_SESSION['payment'] = $row['payment'];
                       $_SESSION['loggedin'] = true;
                       
                       echo"success";

            }else{

                      echo"failled";

            }


        }

      ?>