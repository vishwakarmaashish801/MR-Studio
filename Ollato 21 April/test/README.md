INSERT INTO `admin` (`id`, `email`, `phone`, `password`) VALUES (NULL, 'rajeeve.ranjan@gmail.com', '7073260404', '1234');

INSERT INTO `admin` (`id`, `email`, `phone`, `password`) VALUES (NULL, 'vishwakarmaashish@gmail.com', '9768421308', 'ashish@123');


session_start();


 $_SESSION['loggedin'] = true;


session_start();
if(!isset($_SESSION['loggedin'])){ //if login in session is not set
     header("Location:index.php");
}




 background-color: #2170ac;border-color: #2170ac;border: 2px solid #2170ac;padding: 7px 60px;color: #fff;
}