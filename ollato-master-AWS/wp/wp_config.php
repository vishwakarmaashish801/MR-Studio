<?php

include("./vendor/autoload.php");

use DevCoder\DotEnv;

$absolutePathToEnvFile = '../trys.env';

(new DotEnv($absolutePathToEnvFile))->load();


$db_server = getenv('WP_SERVER');
$db_username = getenv('WP_USERNAME');
$db_password = getenv('WP_PASSWORD');
$db_name = getenv('WP_NAME');

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', $db_server);
define('DB_USERNAME', $db_username);
define('DB_PASSWORD', $db_password);
define('DB_NAME',$db_name);


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



// echo"<br>"."Working Professional Database    ".""."<br>";

// var_dump(getenv('WP_SERVER'));
// var_dump(getenv('WP_USERNAME'));
// var_dump(getenv('WP_PASSWORD'));
// var_dump(getenv('WP_NAME'));


// echo"<br>"."Student  Database  Same as Ashram   ".""."<br>";


// var_dump(getenv('ST_SERVER'));
// var_dump(getenv('ST_USERNAME'));
// var_dump(getenv('ST_PASSWORD'));
// var_dump(getenv('ST_NAME'));



// echo"<br>"."Police   Database    ".""."<br>";


// var_dump(getenv('PO_SERVER'));
// var_dump(getenv('PO_USERNAME'));
// var_dump(getenv('PO_PASSWORD'));
// var_dump(getenv('PO_NAME'));












?>