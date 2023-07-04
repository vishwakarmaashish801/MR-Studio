<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'easiness_workingProfessional');
define('DB_PASSWORD', 'workingProfessional');
define('DB_NAME','easiness_workingProfessional');
// Webhost app dont
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'id19884940_us_wp');
// define('DB_PASSWORD', '(j^W<r69^fWvV?xd');
// define('DB_NAME','id19884940_wp');


 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    // echo "Connection Successfully";
}
?>