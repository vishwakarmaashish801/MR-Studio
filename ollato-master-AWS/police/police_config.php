<?php

include("./vendor/autoload.php");

use DevCoder\DotEnv;

$absolutePathToEnvFile = '../trys.env';

(new DotEnv($absolutePathToEnvFile))->load();


$db_server = getenv('PO_SERVER');
$db_username = getenv('PO_USERNAME');
$db_password = getenv('PO_PASSWORD');
$db_name = getenv('PO_NAME');


define('DB_SERVER',$db_server);
define('DB_USERNAME',$db_username);
define('DB_PASSWORD',$db_password);
define('DB_NAME',$db_name);

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'easiness_policeusername');
// define('DB_PASSWORD', 'policeusername');
// define('DB_NAME','easiness_policeprofessionaldb');

 
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