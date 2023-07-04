<?php

$connect = mysqli_connect("localhost", "root", "", "serac_database");  

$query = "SELECT * FROM questions";  
$result = mysqli_query($connect, $query);  

$questions = array();

while($row = mysqli_fetch_array($result)) {
    $array = array("Srno" => $row["sr_no"], "question" => $row["question"], "domain" => $row["domain"], "option1" => $row["option1"], "option2" => $row["option2"]);
    array_push($questions, $array);
}

$response = $questions;

print_r($response);

?>