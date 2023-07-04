<?php

session_start();

include "police_config.php";

 $email =$_POST['email'];

 $pass = $_POST['password'];


        $sql = "SELECT * FROM  police_user_details where email='$email'AND password='$pass'";

             $result = mysqli_query($link,$sql); 
              if (mysqli_num_rows($result) === 1) {

             $row = mysqli_fetch_assoc($result);

                if ($row['email'] === $email && $row['password'] === $pass) {

                       $_SESSION['gender'] = $row['gender'];
                       $_SESSION['user'] = $row['name'];
                        $_SESSION['phone'] = $row['phone'];
                       $_SESSION['email'] = $row['email'];
                       $_SESSION['user_id'] = $row['id'];
                       $_SESSION['loggedin'] = true;
                        echo"success";

            }else{

                echo"failled";

            }


        }

      ?>