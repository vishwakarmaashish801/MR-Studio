<?php

require_once "police_config.php";
 $email_err = $email="";
//verify email when submit  user 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Validate new password
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } else{
        $email = trim($_POST["email"]);
        $email_err ="";
        // echo"Your Are Enter Email id is :".$email;
         $sql = "SELECT * FROM user_lists where email='$email' ";
        //   $sql = "SELECT * FROM user_lists";
          $result = mysqli_query($link,$sql); 
           echo"<br>";
        //   print_r($result);
           if (mysqli_num_rows($result) === 1) {
              $row = mysqli_fetch_assoc($result);
                 if ($row['email'] === $email) {
                   $userid = $row['id'];
                   $username = $row['firstname'];
                   $userpass = $row['password'];
               
                    $to = 'vishwakarmaashish801@gmail.com';
                    $subject = 'Your Recovery Password';
                    
                   $message .="<p>Hey<span style='color:red'> " .$user."</span>"."</p>". 
                            "<p style='color:red'> Your login password is Here - ".$userpass."</p>".
                            "<p>If you did not attempt to sign in to your account.<br>Please call this no 9768421308 as our support team.</p>".
                            "<p>You can call free between 10:00 am to 6:00 pm.</p>".
                            "<p>Thanks,<br>Serac Education Support  Team </p>";
                           
                    // Always set content-type when sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    
                    // More headers
                    $headers .= 'From: Serac Education <support@serac-education.com>' . "\r\n";
                    // $headers .= 'Cc: myboss@example.com' . "\r\n";
                    
                    if(mail($to, $subject, $message,$headers)){
                        // echo "<script>alert('Recovery password sent successfully!');</script>";
                          $email_err = "Sucessfully !! Please check your email.";
                    }
                    else
                    {
                        print_r(error_get_last()['message']);
                        
                    // echo "<script>alert('Mail was not sent. Please try again later');</script>";
                      $email_err = "Mail was not sent. Please try again later.";
                    
                     }
                          
                  //  end mail function 

                  
              
              }  //row email exits 
              
        }else{
                   $email_err = " Incorrect email id.";
              }

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forgot Password</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .bg-background{
            background-color: red;
            background-image: url(images/image2.jpg);
            background-repeat: no-repeat;
            background-size:cover;
            /*padding: 10px;*/
          
        }
        </style>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-background"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a link or password  on your email!</p>
                                    </div>
                                    <form class="user" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..."
                                                name="email">
                                        </div>
                                        <p class="mb-4 text-center text-primary fw-2"> <?php echo $email_err;?> </p>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value=" Reset Password">
                                        <!-- <a href="#" class="btn btn-primary btn-user btn-block">
                                            Reset Password
                                        </a> -->
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="/police/">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
