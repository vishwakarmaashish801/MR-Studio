<?php
session_start();
 if(!isset($_SESSION['loggedin'])){  //if login in session is not set
              header("/wp/");
}

?>
<!DOCTYPE html>

<html lang="en">

<head>

     <title>WP Result </title>
     <link rel="icon" href="https://www.ollato.com/wp-content/uploads/2023/02/cropped-ollato-new-logo-site-identi-32x32.png" sizes="32x32">
     <link rel="icon" href="https://www.ollato.com/wp-content/uploads/2023/02/cropped-ollato-new-logo-site-identi-192x192.png" sizes="192x192">
     <link rel="apple-touch-icon" href="https://www.ollato.com/wp-content/uploads/2023/02/cropped-ollato-new-logo-site-identi-180x180.png">

    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <!-- jquery cdn link -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
          crossorigin="anonymous"></script>
    <!-- html2canvas library -->
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <!-- jsPDF library -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
     .table{
        width: 80%!important;;
    }
    .table>thead {
    vertical-align: bottom;
    BACKGROUND: #337ab7;
    color: white;
}
    </style>
    </head>

    <body>

        <?php

            include 'wp_config.php';

            error_reporting(E_ERROR | E_PARSE);

            //putting from received;
            $answerreceived = array();

            //putting from server
            $ques_ans = array();

            $total;

            $correctanswers = 0;

            $wronganswer;

            $percentage;

            $objectList = array();

            $query = "SELECT * FROM questions";

            $result = mysqli_query($link, $query);

            $index = 0;

            while ($row = mysqli_fetch_assoc($result)) {

                $ques_ans[$index] = $row;

                $index++;

            }

            $varcount = 0;

            $varcount1 = 1;

            foreach ($_POST as $key1 => $value1) {

                foreach($value1 as $key => $value) {

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

                ?>
           
          
            
            <div class=" container mt-5">
        
                <table class="container table d-none">

                <thead class="thead-dark">

                    <tr>

                        <th scope="col">SR NO</th>

                    <th scope="col">Domain Name</th>

                <th scope="col">Your Score</th>

            </tr>

        </thead>

                <?php


                $copy = array_count_values($domainarray);
                
                // add this session 
                $_SESSION['$domainarray']=$domainarray;
                
                // print_r($_SESSION['$domainarray']);

                foreach ($copy as $key => $value) {

                    //  echo $i;
        
        ?>
                     <!-- Domain kay value and sr--->
           <div class="text-center d-none">
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
        </div>
</div>
            <!-- one time excute code  out side loop -->
        
            </table>
            <!--calculate percentage block-->
                <div class="container text-center d-none">
                    <?php
                    echo "<br>Total No of Questions: <b>" . $total . "</b> <br>";

                    echo "No of Correct Answers: <b>" . $correctanswers . "</b> <br>";

                    $percentage = $correctanswers / $total * 100;

                    $_SESSION['score'] = round($percentage);

                    echo "Percentage Scored: <b>" . round($percentage) . "%</b> <br>";

                    ?>

                </div>
              <!--Graph bar-->
              <div class="container text-center d-none">
                <div id="columnchart_values" style="width: 1000px; height: 600px;"></div>
                </div>



        <?php

            }

            if (!empty($incorrect_domainarray)) {

                $copy1 = array_count_values($incorrect_domainarray);

                foreach ($copy1 as $key => $value) {

                    // echo "No of Correct Answers in ".$key." Domain: <b>0</b> <br>";
        
                }

            }

        

        } else {
            // header("Location:https://easinessbiz.com/test/");
            ?>
                <!--Data Not Found when hit Button-->
                 <div class=" container mx-auto row footer d-none" style="margin-top:120px;">
                                <div class="container bg-primary p-3">
                                  <h3 class=" my-1 fw-bold text-center text-light">Welcome To Serac Education  </h3>
                                   </div>
                                   <div class="container">
                                   <h3 class=" fw-bold">&nbsp</h3>
                                     
                                    <h3 class=" my-2 fw-bold text-center"> Work Professional Assestment</h3>
                                     
                                      <p class=" my-2 fw-bold text-center">Sorry !! Data Not Found  </p>
                                      <p class=" my-2 fw-bold text-center">login Again</p>
                                       <div class="container align-middle">
                                        <p class="fw-bold text-center"><span class="align-middle">Click Here </span>&nbsp; <a href="dashboard.php"  class="btn border align-middle btn-outline-primary"> Home</a></p>
                                        </div>
                                       </div>
                                     <div class="col bg-warning p-3">
                                       <h3 class=" my-1 fw-bold text-center text-light">Wish You All The Best !!</h3>
                                  </div>
                            </div>  
                            
            <?php
                }

    // $con = mysqli_connect("localhost", "root", "", "serac_database");
    // if ($con) {

    // }

    // $color_array = array('#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#A020F0', '#FFC0CB', '#FFA500', '#00008B', '#8B0000', '#023020', '#FFD700', '#C3B1E1');

    ?>
    
     <?php
         
         include 'wp_config.php';
         $user_id = $_SESSION['user_id'];
         
        //   print_r($_SESSION['$domainarray']);
        //  echo "<br>";
        //  echo "User ID ". $user_id;


       if (isset($_SESSION['$domainarray'])) {
        // echo "This var is set so I will print.";
        $copy = array_count_values($_SESSION['$domainarray']);

        // echo"Count Array Inside Doamin ";
        // print_r($copy);
        
        if (!empty($copy["Job Security"])) {
            $js = round(($copy["Job Security"]/11)*10) ;
        } else {
            $js = 0;
        }


        if (!empty($copy["Work Environment"])) {
            $we = round(($copy["Work Environment"]/10)*10);
        } else {
            $we = 0;
        }

        if (!empty($copy["Work Overload"])) {
            $wo =round(($copy["Work Overload"]/11)*10);
        } else {
            $wo = 0;
        }


        if (!empty($copy["Work Satisfaction"])) {
            $ws = round(($copy["Work Satisfaction"]/9)*10);
        } else {
            $ws = 0;
        }

        if (!empty($copy["Work-Life Balance"])) {
            $wb = round(($copy["Work-Life Balance"]/12)*10);
        } else {
            $wb = 0;
        }


        if (!empty($copy["Career Opportunities"])) {
            $op = round(($copy["Career Opportunities"]/12)*10);
        } else {
            $op = 0;
        }


        if (!empty($copy["Stress"])) {
            $stress =round(($copy["Stress"]/11)*10);
        } else {
            $stress = 0;
        }

        if (!empty($copy["Anxiety"])) {
            $anx = round(($copy["Anxiety"]/11)*10);
        } else {
            $anx = 0;
        }

        if (!empty($copy["Depression"])) {
            $dep = round(($copy["Depression"]/12)*10);
        } else {
            $dep = 0;
        }

       

        if (!empty($copy["Coping Mechanism"])) {
            $cropping = round(($copy["Coping Mechanism"]/12)*10);
        } else {
            $cropping = 0;
        }

        $Domain_value = array();
        $Domain_name = array('Adjustment', 'Attention', 'Self', 'Study', 'Depression', 'Anxiety', 'Stress', 'Time Management', 'Sleep', 'Work Performance', 'Coping Management');
         $newArray = array_combine($Domain_name, $Domain_value);

        $st_name=$_SESSION['user'];
        
        
        
        $sql = "Select user_id From result where user_id = '".$user_id."'";
        $check_studentid = mysqli_query($link, $sql);

        if (mysqli_num_rows($check_studentid) > 0) {
             $update = "UPDATE result SET user_name = '$st_name', JSecurity = '$js', WEnvironment = '$we', WOverload = '$wo', WSatisfaction = '$ws', WBalance = '$wb', COpportunities = '$op', Stress = '$stress', Anxiety = '$anx', Depression = '$dep', CMechanism = '$cropping'  WHERE user_id = $user_id;";
             $update= mysqli_query($link, $update);
             if(!$update)
            {
            ?>
            <!--Not Updata Data-->
            <div class=" container mx-auto row footer" style="margin-top:120px;">
                                <div class="container bg-primary p-3">
                                  <h3 class=" my-1 fw-bold text-center text-light">Welcome To Serac Education  </h3>
                                   </div>
                                   <div class="container my-5">
                                       <h3 class="my-2 fw-bold text-center">' Work Professional Assestment '</h3>
                                     <div class="my-2 container d-flex justify-content-center gap-5">
                                        <h4 class=" "><span class="text-primary">Student ID : </span> <?php echo $user_id ?> </h4>
                                        <h4 class=" "><span class="text-primary">Student Name : </span>  <?php  echo $st_name ?> </h4>
                                      </div>
                                     
                                      <p class=" my-2 fw-bold text-center">Update Unuccessfully </p>
                                      <p class=" my-2 fw-bold text-center">Error Server Timeout ?? Please Try Some Time</p>
                                       <div class="container align-middle">
                                        <p class="fw-bold text-center"><span class="align-middle">Click Here </span>&nbsp;<a href="dashboard.php"  class="btn border align-middle btn-outline-primary">Home</a></p>
                                        </div>
                                       </div>
                                     <div class="col bg-warning p-3">
                                       <h3 class=" my-1 fw-bold text-center text-light">Wish You All The Best !!</h3>
                                  </div>
                            </div>  
            
            <?php
            }else{ ?>
                 <!--Update data-->
                 <div class=" container mx-auto row footer" style="margin-top:120px;">
                              <div class="container bg-primary p-3">
                                <h3 class=" my-1 fw-bold text-center text-light">Welcome To Serac Education  </h3>
                                </div>
                              <div class="container my-5">
                               
                                    <h3 class="my-2 fw-bold text-center">' Work Professional Assestment '</h3>
                                  
                                   <div class="my-2 container d-flex justify-content-center gap-5">
                                        <h4 class=""><span class="text-primary">Student ID : </span> <?php echo $user_id ?> </h4>
                                        <h4 class=" "><span class="text-primary">Student Name : </span>  <?php  echo $st_name ?> </h4>
                                      </div>
                                      
                                  <p class=" my-2 fw-bold text-center">Update your data Successfully</p>
                                   <p class="my-2 fw-bold text-center">Goto result tab download your assestment report.</p>
                                   <div class="container align-middle">
                                   <p class="fw-bold text-center"><span class="align-middle">Click Here</span> &nbsp;<a href="dashboard.php"  class="btn border align-middle btn-outline-primary">Home</a></p>
                                    </div>
                                </div>
                                   <div class="col bg-warning p-3">
                                    <h3 class=" my-1 fw-bold text-center text-light">Wish You All The Best !!</h3>
                                   </div>
                     </div>  
                 
                 <?php
            }
            
        } else {
                                                                                                                                            
             $insert = "INSERT IGNORE INTO result (sr_no,user_id,user_name,JSecurity,WEnvironment,WOverload,WSatisfaction,WBalance,COpportunities,Stress,Anxiety,Depression,CMechanism,exam_date
                                                ) VALUES ('','$user_id','$st_name','$js','$we','$wo','$ws','$wb','$op','$stress','$anx','$dep','$cropping',now())";
             // IGNORE key keyword is updated insert query
            $insert = mysqli_query($link,$insert);
            if(!$insert)
            { ?>
                  <!--Not Insert Data -->
                         <div class=" container mx-auto row footer" style="margin-top:120px;">
                                <div class="container bg-primary p-3">
                                  <h3 class=" my-1 fw-bold text-center text-light">Welcome To Serac Education  </h3>
                                   </div>
                                   <div class="container my-5">
                                   
                                    <h3 class=" my-2 fw-bold text-center">' Work Professional Assestment ' </h3>
                                     
                                   <div class="my-2 container d-flex justify-content-center gap-5">
                                        <h4 class=""><span class="text-primary">ID :</span> <?php echo $user_id ?></h4>
                                        <h4 class=" "><span class="text-primary">Name :</span> <?php  echo $st_name ?></h4>
                                      </div>
                                    
                                     <p class=" my-2 fw-bold text-center">Unsuccessfully</p>
                                      <p class=" my-2 fw-bold text-center">Error Insertion data Server Timeout ?? Please Try Some Time</p>
                                       <div class="container align-middle">
                                        <p class="fw-bold text-center"><span class="align-middle">Click Here </span>&nbsp; <a href="dashboard.php"  class="btn border align-middle btn-outline-primary">Dashboard</a></p>
                                        </div>
                                       </div>
                                     <div class="col bg-warning p-3">
                                       <h3 class=" my-1 fw-bold text-center text-light">Wish You All The Best !!</h3>
                                  </div>
                            </div>  
             
            <?php
            
            }else{ ?>
                        <!--....Inserted Data To Mysql...... -->
                      <div class=" container mx-auto row footer" style="margin-top:120px;">
                              <div class="container bg-primary p-3">
                                <h3 class=" my-1 fw-bold text-center text-light">Welcome To Serac Education  </h3>
                                </div>
                              <div class="container my-5">
                                
                                  <h3 class=" my-2 fw-bold text-center">' Work Professional Assestment ' </h3>
                                   
                                   <div class="my-2 container d-flex justify-content-center gap-5">
                                        <h4 class=""><span class="text-primary">ID : </span> <?php echo $user_id ?> </h4>
                                        <h4 class=" "><span class="text-primary">Name : </span>  <?php  echo $st_name ?> </h4>
                                      </div>
                                  <p class=" my-2 fw-bold text-center">Save your data Successfully</p>
                                   <p class="my-2 fw-bold text-center">Goto result tab download your assestment report.</p>
                                   <div class="container align-middle">
                                   <p class="fw-bold text-center"><span class="align-middle">Click Here </span>&nbsp; <a href="dashboard.php"  class="btn border align-middle btn-outline-primary">Dashboard</a></p>
                                    </div>
                             </div>
                                   <div class="col bg-warning p-3">
                                       <h3 class=" my-1 fw-bold text-center text-light">Wish You All The Best !!</h3>
                                   </div>
                        
                     </div>  
                
                <?php
            }
            
        }
    }       


?>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
        google.charts.load("current", {
            packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Domain", "Score", {
                    role: "style"
                }],
                <?php
                // $sql = "SELECT * FROM charts";
                // $fire = mysqli_query($con,$sql);
                $copy = array_count_values($domainarray);
                $x = 0;
                foreach ($copy as $key => $value) {
	                echo "['" . $key . "'," . $value . ",'" . $color_array[$x] . "'],";
	                $x++;
                }
                ?>
            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2
            ]);

            var options = {
                title: "Score for respective domains",
                width: 1100,
                height: 600,
                bar: {
                    groupWidth: "100%"
                },
                legend: {
                    position: "none"
                },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }
        </script>

 <script>
   $(document).ready(function () {

     $("#printPage").click(function(){

        var element = document.getElementById('resultdownload');
        
        var opt = {
            margin:       1,
            filename:     'ollato-report.pdf',
            image:        { type: 'jpeg', quality: 0.98 },
            html2canvas:  { scale: 1 },
            jsPDF:        { unit: 'mm', format: 'a3', orientation: 'portrait' }
        };

        html2pdf().set(opt).from(element).save();
        
        /*var doc = new jsPDF('p', 'pt', 'a4');

        doc.fromHTML(`<html><head><title>Ollato Report</title></head><body>` + document.getElementById("resultdownload").innerHTML + `</body></html>`);
        doc.save('ollato-report.pdf');

        doc.addPage();*/

     })
 
  });

</script>

</body>
</html>