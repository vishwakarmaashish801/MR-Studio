<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'easiness_test');
define('DB_PASSWORD', 'test@2022');
define('DB_NAME','easiness_test');

// webhost database
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'id19884940_serac_admin');
// define('DB_PASSWORD', '+IlV2TvI6S#p[jG>');
// define('DB_NAME','id19884940_serac_database');
 
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