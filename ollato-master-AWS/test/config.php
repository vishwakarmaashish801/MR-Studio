<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include("./vendor/autoload.php");

use DevCoder\DotEnv;

$absolutePathToEnvFile = '../trys.env';

(new DotEnv($absolutePathToEnvFile))->load();


$db_server = getenv('ST_SERVER');
$db_username = getenv('ST_USERNAME');
$db_password = getenv('ST_PASSWORD');
$db_name = getenv('ST_NAME');

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER',$db_server);
define('DB_USERNAME',$db_username);
define('DB_PASSWORD',$db_password);
define('DB_NAME',$db_name);


// echo"$db_server"."<br>";
// echo"$db_username"."<br>";
// echo"$db_password"."<br>";
// echo"$db_name"."<br>";


/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    // echo "Connection Successfully";
}
?>
