<!DOCTYPE html>

<html lang="en">

<head>

    <title>Backend </title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/question.css">

</head>

<body>

    <div class="text-center">

        <p class=" mt-5 fw-bold"> Welcome in Serac Education </p>

        <div class="container mt-5 ">

            <table class="table">

                <thead class="thead-dark">

                    <tr>

                        <th scope="col">SR NO</th>

                        <th scope="col">Domain Name</th>

                        <th scope="col">Your Score</th>

                    </tr>

                </thead>

                <tbody>

        </div>

    </div>

    <?php

    session_start();

    include 'config.php';

    error_reporting(E_ERROR | E_PARSE);

    $answerreceived = array();

    $ques_ans = array();

    $total;

    $correctanswers = 0;

    $wronganswer;

    $percentage;

    $objectList = array();

    $query = "SELECT * FROM questions ORDER BY sr_no ASC LIMIT 0, 15"; 

    $result = mysqli_query($link, $query);

    $index = 0;


    
   $name =  $_POST['name'];
 



    while ($row = mysqli_fetch_assoc($result)) {

	    $ques_ans[$index] = $row;

	    $index++;

    }

    $varcount = 0;

    $varcount1 = 1;

    foreach ($_POST as $key => $value) {

	    if (strpos($key, 'choice-') === 0) {

		    $whatIWant = substr($key, strpos($key, "-") + 1);

		    $answerreceived[$varcount1 - 1][] = $whatIWant;

		    $answerreceived[$varcount1 - 1][] = $value;

		    $varcount1++;

	    }

	    if (strpos($key, 'domain-') === 0) {

		    $answerreceived[$varcount][] = $value;

		    $varcount++;

	    }

    }

    if (count($ques_ans) == count($answerreceived)) {

	    $total = count($ques_ans);

	    $domainarray = array();

	    $incorrect_domainarray = array();

	    $l = 1;

	    $k = 1;

	    for ($i = 0; $i < count($ques_ans); $i++) {

		    if ($ques_ans[$i]["sr_no"] == $answerreceived[$i][0]) {

			    if ($answerreceived[$i][1] == $ques_ans[$i]["answer"]) {

				    $correctanswers++;

				    // header("LOCATION:http://localhost/All%20Project/Serac-Intern-master/final.php");
    
			    }

		    }

		    if ($answerreceived[$i][2] == $ques_ans[$i]["domain"]) {

			    if ($answerreceived[$i][1] == $ques_ans[$i]["answer"]) {

				    array_push($domainarray, $answerreceived[$i][2]);

			    } else {

				    if (!in_array($answerreceived[$i][2], $domainarray)) {

					    array_push($incorrect_domainarray, $answerreceived[$i][2]);

				    }

			    }

		    }

	    }

	    $i = 1;

	    if (!empty($domainarray)) {

		    $copy = array_count_values($domainarray);
    
		    foreach ($copy as $key => $value) {

			    //  echo $i;
    
    ?>

    <div class="text-center">

        <tbody>

            <th scope="col"><?php echo $i ?></th>

            <th scope="col">

                <?php echo $key ?>

            </th>

            <th scope="col"><?php echo $value ?></th>

            <?php

			    $i++;

			    // 			echo "No of Correct Answers in ".$key." Domain: <b>".$value."</b> <br>";
    
		    }

            ?>

        </tbody>

        <!-- one time excute code  out side loop -->
        <p class=" mt-5 fw-bold">Report Analysis  </p>

        </table>

    </div>

    <?php

	    }

	    if (!empty($incorrect_domainarray)) {

		    $copy1 = array_count_values($incorrect_domainarray);

		    foreach ($copy1 as $key => $value) {

			    // echo "No of Correct Answers in ".$key." Domain: <b>0</b> <br>";
    
		    }

	    }

	    echo "<br>Total No of Questions: <b>" . $total . "</b> <br>";

	    echo "No of Correct Answers: <b>" . $correctanswers . "</b> <br>";

	    $percentage = $correctanswers / $total * 100;

	    $_SESSION['score'] = round($percentage);

	    echo "Percentage Scored: <b>" . round($percentage) . "%</b> <br>";

    } else {

	    echo "please select all the answers to proceed further!!";

    }

    ?>

    <div class="text-center">

        <a href="#"> Click Here to start test agian !! </a>

    </div>

   