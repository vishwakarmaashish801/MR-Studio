<?php
session_start();

 if(!isset($_SESSION['loggedin'])){ //if login in session is not set
     header("Location:/test/");
}


include 'action/config.php';
 
$mydate=getdate(date("U"));


// variable defined as
 $user_id = '';
 
$user_id = $_SESSION['user_id'];

// echo "User ID ". $user_id;


    

  $sql1 = "SELECT * FROM result where student_id='$user_id'";
  $result = mysqli_query($link,$sql1);
 
  if (mysqli_num_rows($result) == 1) {

  $row = mysqli_fetch_assoc($result);

   //5  2 
 $retval = mysqli_query($link, $sql1);

  if (!$retval) {
      die('Could not get data:');
  }

  while ($row = mysqli_fetch_array($retval)) {
      $_SESSION['$student_id'] = $row[1];
      $adj1 = $row[3];
      $att2 = $row[4];
      $self3 = $row[5];
      $study4 = $row[6];
      $dep5 = $row[7];
      $anx6 = $row[8];
      $stress7 = $row[9];
      $time8 = $row[10];
      $sleep9 = $row[11];
      $exam11 = $row[12];
      $cropping11 = $row[13];
    
      $Domain_value_db = array();
      $Domain_name = array('Adjustment', 'Attention', 'Self', 'Study', 'Depression', 'Anxiety', 'Stress', 'Time Management', 'Sleep', 'Exam', 'Coping Management');

      array_push($Domain_value_db, "$adj1", "$att2", "$self3", "$study4", "$dep5", "$anx6", "$stress7", "$time8", "$sleep9", "$exam11", "$cropping11");
      // print_r($Domain_value_db);
      echo "<br>";

      $newArray_db = array_combine($Domain_name, $Domain_value_db);
    //   print_r($newArray_db);
      // $_SESSION["array_db"] = $newArray_db;
      
 ?>  
<!DOCTYPE html>
<html lang="en">

<head>
     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="css/print.css" rel="stylesheet" type="text/css">  <!-- Current directory -->
    <title><?php echo   $_SESSION['user']." ".$_SESSION['last']?> - Report</title>
   <!-- jquery cdn link -->
    <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
  <!-- jquery another  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <!--bootstrap css cdn link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
body{ font-family: "Times New Roman";font-size:14px;}
.col-md-12{ font-size: 12px;font-family: 'Times New Roman',Times;}
.col-md-4 {width: 32%;}
</style>
</head>

<body>
        <!-- HTML content for PDF creation -->
        <!--button-->
          <div class="container gap-2 text-center" style="margin-right:-180px">
              <div><button type="button"  style="background:#56cce1;color:#11486d" class="rounded-pill btn-pdf" onClick="window.print()"> Download Report!</button> </div>
              <div><a href="dashboard"><button type="button"  style="background:#56cce1;color:#11486d" class="rounded-pill btn-home"> Home</button></a></div>
          </div>

         <!-- Header section -->
         <div class="container page-header ">
         <div class="header-box d-flex col-md-8 justify-content-between  fw-bold">
          <div class="header-title">
            <p class="text-dark ">Ollato’s Mind Scope Assessment Report</p>
            <p class="text-dark sub-title">(Especially designed for students)</p>
          </div>
          <div class="header-page">
            <p class="text-dark  title"></p>
          </div>
        </div>
    <!-- End Header -->
        </div>

         <!-- footer section -->
         <div class="container page-footer p-2">
         <!-- Footer section  -->
         <div class="footer-box d-flex col-md-8 justify-content-between fw-bold">
         <div class="footer-left">
         <p class="text-dark">www.ollato.com</p>
         </div>
         <div class="footer-middle">
           <img src="https://www.ollato.com/wp-content/uploads/2023/02/cropped-ollato-new-logo-site-identi-180x180.png" width='80px'>
         </div>
        <div class="footer-right">
        <span class="text-dark footer-title align-middle">info@ollato.com</span>
        </div>
        </div>
        <!-- End Footer -->
       </div>
     
        <!--main content container start-->
         <div class="container col-md-8">
          
         <!--start first--->
          <div class="page container ">
          <div class="page-body">
        <div class=""style="margin-top:100px">
            <p class="fs-4 fw-bold text-center">Ollato’s Mind Scope Assessment Report </p>
        </div>
    
        <!-- table -->
        <div class="border border-2 container w-75 mt-5">
            <table class="table table-borderless">
               <tr><th>Name:</th><td><?php echo   $_SESSION['user']." ".$_SESSION['last']?></td></tr>
               <tr><th>Age:</th><td>25 Years</td></tr>
               <tr><th>Gender:</th><td class="text-capitalize"><?php echo $_SESSION['gender'] ;?></td></tr>
               <tr><th>Profession: </th><td>12<sup>th</sup>std</td></tr>
               <tr><th>Date Of Assessment: </th><td><?php echo "$mydate[month] $mydate[mday], $mydate[year]";?></span></td></tr>
            </table>
           </div> 
           <!-- end table -->
    
           <!-- Company logo -->
           <div class="text-center" style="margin-top:100px">
            <img src="https://www.ollato.com/wp-content/uploads/2023/02/cropped-ollato-new-logo-site-identi-180x180.png"  class="lobo-company">
           </div>
    
           <div class="com-details container text-center fw-bold">
            <p class="mt-3 ">Ollato</p>
            <p>M/S Serac Education Pvt. Ltd.</p>
            <p>618, Nirmal Corporate Centre, LBS Road, Mulund West, Mumbai – 400080 </p>
            <p>Contact: 9967153285 Email: info@ollato.com / info@seracedu.com        </p>
            <p>Website: www.ollato.com</p>
            
          </div>
          </div> 
          <!--page body-->
        </div>

          <!--second Page--->
          <div class="page container">
          <div class="page-body">
           <div class="fw-bold">&nbsp</div>
          <h4 class="mx-2 mt-3 text-start fw-bold print_att">Dear sir/madam,</h4>
          <div class="col-md-11 p-2">
          <p  style="text-align:justify;">Congratulations on choosing Ollato as your partner in your journey towards
            achieving optimal mental well-being. Our mind is a complex and vital part of our body
            that responds to our surroundings and influences our daily life. To attain peak
            performance, it's crucial to prioritize our mental health. The Ollato team has made
            significant strides in this area by collaborating with over 200 internal and external
            experts, including psychologists, psychiatrists, educators, and other professionals,
            and partnering with renowned universities to develop innovative programs that
            assess and enhance mental well-being. Ollato's flagship program, the One Mind
            program, caters to students, professionals, police and military personnel, technical
            and banking professionals, corporate professionals and other members of society. We
            would be delighted to welcome you to Ollato family and support you on your mental
            wellness journey.
            We have developed a comprehensive mental health care pathway for students that
            encompasses various domains critical to their well-being. The following mental health
            domains have been identified as crucial for the successful management of mental
            health in students:.</p>
            <img src="img\student-domain-img.png" class="mt-5 img-domain">
           <p style="text-align:justify;margin-top:25px">The domains listed above play a crucial role in determining the mental health status
            of students. By focusing on each of these areas and working to improve them,
            students can cultivate good mental health and lead fulfilling lives. Our mental health
            care pathway aims to provide students with the necessary resources, guidance, and
            support to navigate these domains effectively and maintain optimal mental wellbeing.</p><br><br>
           <p class="fw-bold"style="text-align:right;margin-right: 45px;"> Best Regards,<br>
            Team Ollato.
            </p>
            <p class="lh-3" style="margin-top:30px;text-align:justify;"><span class="fw-bold ">Note -</span>“Mental Wellbeing encompasses a wide range of factors, including emotional,
            psychological, and social well-being. It impacts our thoughts, feelings, and actions, as
            well as our ability to handle stress, connect with others, and make decisions. At The
            Manthan School, we firmly believe that Mental Wellbeing is vital at every stage of life,
            from childhood and adolescence to adulthood. Mental Wellbeing challenges can affect
            a person's thinking, mood, and behaviour over their lifetime. Therefore, maintaining
            good Mental Wellbeing is essential for overall well-being, and it plays a crucial role in
            a student's ability to succeed in life. By promoting good Mental Wellbeing, students
            can cultivate strong relationships, achieve contentment, and manage stress and
            challenges more effectively.”<br>
            The content of this report is the sole property of Ollato, and all copyrights are
            reserved. Any usage of this report for legal purposes is strictly prohibited, unless
            written permission has been obtained from the company. The primary aim of this
            examination and subsequent report is to encourage students to maintain good mental
            health and stay informed about their mental health status. If there are any disputes
            or conflicts, a formal complaint can be sent to the email address provided below.
            </p>
          </div>
          </div>
         <!--page body-->
          </div>
          <!--end second page-->


            <!--third page welcome page --->
            <div class="page container">
            <div class="page-body" style="text-align:justify;">
            <h3 class=" fw-bold">&nbsp</h3>
            <p class="lh-3 mt-5 "style="text-align: justify;"> Dear<span class="fw-bold"> <?php echo $_SESSION['user']." ".$_SESSION['last']?></span>,<br><br>
            We are thrilled to welcome you to the world of happiness and endless possibilities for the future!!<br>
            Congratulations on successfully completing the<span class="fs-6 text-bold">“"Ollato Mind Scope Assessment” </span>
            which evaluated multiple key domains of your mental health, particularly during
            your student phase. Our expert panel at Ollato has carefully crafted a
            comprehensive Mind Scope Assessment report, which outlines your mind status
            across each dimension of your life and helps you gain a deeper understanding of
            your potential. Should you have any questions, please do not hesitate to contact
            us. We are excited to embark on this journey of mental health care with you and
            look forward to working together to enhance your well-being. We have thoroughly
            scrutinized and analysed your responses, and we have summarized our findings
            below in tabular and graphical way: -</p>

             <div class="container d-flex gap-3 justify-content-center">
                         
                    <?php
                         foreach ($newArray_db as $key => $value){
                        
                        if($key == "Adjustment") {
                           $_SESSION['adjustment']=$adjustment_val = $value;
                        }
                        if($key == "Attention") {
                            $attention_val = $value;
                        }
                        if($key == "Self") {
                            $self_val = $value;
                        }
                         if($key == "Study") {
                            $study_val = $value;
                        }
                         if($key == "Depression") {
                            $dep_val = $value;
                        }
                         if($key == "Anxiety") {
                            $anx_val = $value;
                        }
                         if($key == "Stress") {
                            $stress_val = $value;
                        }
                         if($key == "Time Management") {
                            $time_val = $value;
                        }
                         if($key == "Sleep") {
                            $sleep_val = $value;
                        }
                        //  if($key == "Exam") {
                        //     $work_val = $value;
                        // }
                         if($key == "Coping Management") {
                            $copping_val = $value;
                        }
                    } 
                    ?>

              </div> 
             <!--first table-->
             <div>
               
                   <table class="table-print table-bordered p-2">
                               <tr>
                           <th scope="col" class="sn p-2"> S.N</th>
                           <th scope="col" class="domain p-2"> Our Domain</th>
                           <th scope="col" class="score p-2">Your Finding</th>
                       </tr>
                        <tr>
                           <td class="p-2 text-center">1 </td>
                           <td class="p-2 text-center">Adjustment </td>
                           <td class="p-2 text-center"><?php echo $adjustment_val; ?></td>
                        </tr>
                       <tr>
                           <td class="p-2 text-center">2 </td>
                           <td class="p-2 text-center">Attention</td>
                           <td class="p-2 text-center"><?php echo $attention_val; ?></td>
                        </tr>
                        <tr>
                        <td class="p-2 text-center">3 </td>
                           <td class="p-2 text-center">Self-Awareness</td>
                           <td class="p-2 text-center"><?php echo $self_val; ?></td>
                        </tr>
                        <tr class="p-2">
                           <td class="p-2 text-center">4 </td>
                           <td class="p-2 text-center">Study Habit</td>
                           <td class="p-2 text-center"><?php echo $study_val; ?></td>
                        </tr>
                         <tr>
                           <td class="p-2 text-center">5 </td>
                           <td class="p-2 text-center">Depression </td>
                           <td class="p-2 text-center"><?php echo $dep_val; ?></td>
                        </tr>
                         <tr>
                           <td class="p-2 text-center">6 </td> 
                           <td class="p-2 text-center">Anxiety</td>
                           <td class="p-2 text-center"><?php echo $anx_val; ?></td>
                        </tr>
                         <tr>
                           <td class="p-2 text-center">7 </td>
                           <td class="p-2 text-center">Stress</td>
                           <td class="p-2 text-center"><?php echo $stress_val; ?></td>
                        </tr>
                         <tr>
                           <td class="p-2 text-center">8 </td>
                           <td class="p-2 text-center">Time Management</td>
                           <td class="p-2 text-center"><?php echo $time_val; ?></td>
                        </tr>
                         <tr>
                           <td class="p-2 text-center">9 </td>
                           <td class="p-2 text-center">Sleep</td>
                           <td class="p-2 text-center"><?php echo $sleep_val; ?></td>
                        </tr>
                        <tr>
                           <td class="p-2 text-center">10 </td>
                           <td class="p-2 text-center">Coping Mechanism </td>
                           <td class="p-2 text-center"><?php echo $copping_val; ?></td>
                        </tr>
                         
                     </table>
             </div>
            

            </div>
            </div>
           <!-- end third page-->
          
           <!--fith page-->
           <div class="page container">
            <div class="page-body">
            <div>&nbsp</div>
            <h3 class="text-center fw-bold mt-5 fs-4"> DETAILED MENTAL HEALTH ASSESSMENT</h3>
             <p class="mx-auto p-1  w-50" style="background-color: #808080;"></p>
                 
            <div class="mt-5 d-flex justify-content-around">
                
                <div class="indicator  p-2">
                       <h5 class="text-center fw-bold">Indicator - Colour Code</h5>
                    <div class=" red-box"><span class="w-50 fs-6" style="background-color:#7dfd7d">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><span class="fs-6 fw-bold text-center">&nbspGood</span></div>
                    <div class=" red-box"><span class="w-50 fs-6" style="background-color:#ffd27f!important">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><span class="w-50 fs-6 fw-bold text-center">&nbspBorder Line</span></div>
                    <div class=" red-box"><span class="w-50 bg-danger fs-6" style="background-color:#ff7f7f!important">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><span class="w-50 fs-6 fw-bold text-center">&nbspRisk</span></span></div>
                    
                </div>
                  </div>
               
                  <!-- Graph script -->
                
                <div class="container graph-box" style="margin-left: -13px;margin-right: 13px;margin-top: 0;margin-bottom: 0;">
                <div class="g1 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height: 42px;width: 401px;margin-left: 454px;"> </div>
                <div class="g2 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height: 42px;width: 401px;margin-left: 403px;"> </div>
                <div class="g3 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height: 42px;width: 401px;margin-left: 148px;"></div>
                <div class="g4 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:353px;"></div>
                <div class="g5 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:302px;"></div>
                <div class="g6 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:250px;"></div>
                <div class="g7 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:199px;"></div>
                <div class="g8 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:98px;"></div>
                <div class="g9 border border-2 border-end-0  mb-1" style="margin-top: 350px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:47px;"></div>
                <div class="g10 border border-2 border-end-0 mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:-5px;"></div>
               </div>
        
                  
                  <div class="container graph-container mt-5"><div id="columnchart_values"></div></div>
                   <!--table domain-->
                 
                  </div> 
            <!--page body--->
            </div>
            <!--end page-->
            
            <!--table description -->
           <div class="page container"> 
            <div class="page-body">
            <p class="lh-3"style="text-align: justify;"> Your assessment report indicates that you possess good coping mechanisms andare capable of handling challenges in your academic and personal life. Your
              responses demonstrate that you are confident in approaching difficult situations,and you seek inspiration and knowledge to improve your coping mechanismsfurther. <br> You are comfortable in both group and individual settings, and you do not shyaway from participating in discussions or tests. You feel confident in approachingyour parents or family members and discussing your mental state with them. You
              have good management techniques and can identify the reasons for yourshortcomings in critical situations.<br>You frequently engage in problem-solving and try to find ways to correct your flaws.You take practice tests and exams to improve your performance, and you can live
              independently without needing a family member or friend to be with you.<br>You frequently engage in problem-solving and try to find ways to correct your flaws.
              You take practice tests and exams to improve your performance, and you can live
              independently without needing a family member or friend to be with you.<br>Overall, your coping mechanisms are well-developed, and you have a positive
              outlook on life. Keep up the good work and continue to seek inspiration and
                knowledge to improve your coping mechanisms further.<br> 
        <p class="fw-bold"style="text-align:right;margin-right: 45px;"> Best Regards,<br>
            Team Ollato.
            </p>
           </div>
           </div>
                 
         <!--Adjustment Doamin -->
         <div class="page container">
     
          <div class="page-body">
          <div class="fw-bold Blank">&nbsp</div>
          <h3 class="my-2 text-center fw-bold">Attention !! </h3>
          <div class="mx-auto">
          <div id="information_adj" class="text-uppercase fs-6 fw-bold my-3"></div>
          <div class="mx-auto d-flex col-md-4">
          <div  id="progressbar_adj" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
          <div  id="indicator_adj"></div>
          </div>
          </div>
          <div id="content_adj" class="container mt-4"></div>
          </div>
          <!--page content end-->

          </div>
         <!--end container adjustment-->
                             
        <!--Attenstion Domain-->
        <div class="page container ">
       
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_att"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div  class="mx-auto d-flex col-md-4">
        <div  id="progressbar_att" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div  id="indicator_att">Indicator</div>
        </div>
        </div>
        <div id="content_att" class="mt-4"></div>
        </div>
         <!--end page content attention-->
         <!--end attention container-->
         </div>
                             
         <!--Self Domain-->
         <div class="page container">
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_self"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div  class="mx-auto d-flex col-md-4">
        <div  id="progressbar_self" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div  id="indicator_self">Indicator</div>
        </div>
        </div>
        <div id="content_self" class="mt-4"></div>
        </div>
        <!--page body-->
        </div>
                 
        <!--Study-->
        <div class="page container">
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_study"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div  class="mx-auto d-flex col-md-4">
        <div  id="progressbar_study" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div  id="indicator_study">Indicator</div>
        </div>
        </div>
        <div id="content_study" class="mt-4"></div>
        </div>
        <!--page body-->
        </div>
                         
         <!--Depression-->
         <div class="page container">
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_dep"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div class="mx-auto d-flex col-md-4">
        <div  id="progressbar_dep" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div  id="indicator_dep">Indicator</div>
        </div>
        </div>
        <div id="content_dep" class="mt-4"></div>
        </div>
        <!--page body-->
         <!--end page content study-->
        </div>

         <!--Anxity-->
         <div class="page container">
        <div class="page-body">       
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_anx"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div class="mx-auto d-flex col-md-4">
        <div id="progressbar_anx" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div id="indicator_anx">Indicator</div>
        </div>
        </div>
        <div id="content_anx" class="mt-4"></div>
        </div>
        <!--end page body study-->
        </div>  
                            
         <!--Stress-->
        <div class="page container">
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_stress"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div class="mx-auto d-flex col-md-4">
        <div id="progressbar_stress" style="border:1px solid #ccc; border-radius: 5px;width:100%"></div>
        <div id="indicator_stress">Indicator</div>
        </div>
        </div>
        <div id="content_stress" class="mt-4"></div>
        </div>
         <!--end page body -->
         </div>

         <!--Time managemnt -->
         <div class="page container">
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_time"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div class="mx-auto d-flex col-md-4">
        <div id="progressbar_time" style="border:1px solid #ccc; border-radius: 5px;width:100%"></div>
        <div id="indicator_time">Indicator</div>
        </div>
        </div>
        <div id="content_time" class="mt-4"></div>
        </div>
        <!--end page body -->
        </div>

         <!--sleep  -->
          <div class="page container">
        <div class="page-body">      
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_sleep"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div class="mx-auto d-flex col-md-4">
        <div id="progressbar_sleep" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div id="indicator_sleep">Indicator</div>
        </div>
        </div>
        <div id="content_sleep" class="mt-4"></div>
        </div>
         <!--end page body -->
        </div>  

        <!--coping  -->
         <div class="page container">
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_cop"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div class="mx-auto d-flex col-md-4">
        <div id="progressbar_cop" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div id="indicator_cop">Indicator</div>
        </div>
        </div>
        <div id="content_cop" class="mt-4"></div>
        </div>
        <!--body -->
         </div>
         
         <!--Thanking you-->
         
           <div class="page container">
                <div class="page-body">
                <div class="fw-bold Blank">&nbsp</div>
                <div class="mx-auto">
               <div class="col-md-6 mx-auto thanking">
                    <div class=" text-center mt-5 mb-5" style = "margin:auto;">
                    <div class="">
                     <p class="text-dark thank_title" style="font-weight:800">Thanking You</p>
                     <p class="sub_title">Ollato’s Mind Scope Assessment Report</p>
                      <p class="sub_title">info@ollato.com</p>
                     <p class="sub_title">Website www.ollato.com</p>
                     
                     </div>
                     </div>
                </div>
                <div id="content_cop" class="mt-4"></div>
                </div>
                <!--body -->
                 </div>
         
                           <!--end main container-->
                            </div>
                    
                           <?php
                        
                           foreach ($newArray_db as $key => $value){
                    
                            // echo "Doamain Name" . $key . " Value " . $value."<br>";
                     
                            if($key == "Adjustment") {
                    
                                if($value >= 7 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                    
                                   
                    
                                    <?php
                                   $total = $value;
                                    $color_adj = "#81B622;opacity: 0.5";
                                    // green
                                    $content_adj = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the <span class='fw-bold'>Adjustment Domain </span>highlight that your adjustment level is good enough and you keep working towards it. This indicates that your adjustment with other are good enough. You understanding of personal strengths and weaknesses. You have ability to handle adverse circumstances. You always try to get feeling of ease within surrounding environments. You feel comfortable in different aspects of their community such as home, school, work, neighbourhoods, religious organization, etc. You have ability to adequately function, to perform adaptive tasks, general satisfaction in various life domains. </div>";
                                   $ad=0;
                    
                                   for($ad;$ad<=$total;$ad++)
                                   {
                                       $percent = intval($ad*10)."%"; 
                                      
                                        echo '<script>
                                        parent.document.getElementById("progressbar_adj").innerHTML="<div style=\"width:'.$percent.';background:'.$color_adj.'; ;height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_adj").innerHTML="<div style=\"text-align:center;\">Adjustment</div>";
                                        parent.document.getElementById("indicator_adj").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($ad*10).'%'.'</div>";
                                        parent.document.getElementById("content_adj").innerHTML="<div>'.$content_adj.'</div>";

                                       </script>';
                                   
                                   }
                                }
                                else if($value >= 4 && $value <= 6) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                    
                                 
                    
                                    <?php
                                   $total = $value;
                                   
                                    $color_adj = "#FFA500; opacity: 0.5";
                                    $content_adj = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the <span class='fw-bold'>Adjustment Domain</span> have generated moderate score. You have fairunderstanding of your surroundings. You can learn new things for your need but implementation or execution is very difficult. You need a support in the implementation process. You are aware about the environmental challenges but avoid things. You don't try until a problem comes to your head. You have knowledge about your criteria but denied to accept it easily. <br><br>You may need some techniques to improve your adjustment level:<br><span class='fw-bold'>Practice Management Skills: </span>While some stress in inevitable, there are things you can do to prevent or reduce stress. Seek out and learn these methods.<br><span class='fw-bold'>Communicate productively:</span> Be assertive with others so that your own needs are met, but do this in ways that respect others and their differences.<br><span class='fw-bold'>Stay focused: </span>Academic life requires students to focus and concentrate. Work to avoid or reduce things that interfere with your concentration.<br><span class='fw-bold'>Get involved: </span>Involvement with others and campus activities are healthy pursuits. Involvement can breed positive thoughts and feelings and is related to good self-esteem and academic success.</div>";
                                   $ad=0;
                    
                                   for($ad;$ad<=$total;$ad++)
                                   {
                                       $percent = intval($ad*10)."%";  
                                     
                                        echo '<script>
                                       parent.document.getElementById("progressbar_adj").innerHTML="<div style=\"width:'.$percent.';background:'.$color_adj.'; ;height:20px;\">&nbsp;</div>";
                                       parent.document.getElementById("information_adj").innerHTML="<div style=\"text-align:center;\">Adjustment</div>";
                                       parent.document.getElementById("indicator_adj").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($ad*10).'%'.'</div>";
                                       parent.document.getElementById("content_adj").innerHTML="<div>'.$content_adj.'</div>";

                                       
                                       </script>';
                                   
                                   }
                                }
                                else if($value >= 0 && $value <= 3) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                   $total = $value;
                                    $color_adj = "#FF0000;opacity:0.5";
                                  
                                    // red
                                    $content_adj = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the <span class='fw-bold'>Adjustment Domain </span>highlighting a need of improvement . You may find it difficult to understand and handle your environmental challenges, in building relationships with others, in expressing one's point of view, meeting new people, interacting with classmates and teachers, adjusting to new things, new places and new people. It is also possible that you are not aware of your strengths and weaknesses. It may also happen to you that you do not consider yourself capable, which leads to hesitation in taking any decision or doing any work independently.<br> <br><span class='fw-bold'><i> But, nothing to worry about. You can enhance your adjustment skills in the following way:</i></span> <br><span class='fw-bold'>1. Get involved:</span> Involvement with others and campus activities are healthy pursuits. Involvement can breed positive thoughts and feelings and is related to good self-esteem and academic success. <br><span class='fw-bold'>2. Stay positive:</span> Work toward maintaining an optimistic attitude and interacting with others in productive ways. Be accepting and tolerant of yourself and others. 3. Go to class: Attendance in class ought to be one of your top priorities. Your academicsuccess and successful stress management is dependent upon good attendance. 4. Stay on campus when you can: The college years are a time to develop independence and autonomy. This occurs when you become your own person and develop new relationships in your new community.<br><span class='fw-bold'> 5. Eat and sleep well: </span>You function at out best when your body is appropriately nurtured. 6. Practice good stress management: While some stress in inevitable, there are things we can do to prevent or reduce stress. Seek out and learn these methods.<br><span class='fw-bold'> 7. Communicate productively:</span> Be assertive with others so that your own needs are met, but do this in ways that respect others and their differences. <br><span class='fw-bold'>8. Maintain healthy relationships: </span>Work to avoid “toxic” relationships, but also do a lot of give and take with your friends. Put effort into resolving conflicts in ways that honour yourself and others. Stay in touch with those that support you.<br><span class='fw-bold'> 9. Stay focused:</span> Academic life requires students to focus and concentrate. Work to avoid or reduce things that interfere with your concentration.</div>";
                                   $ad=0;
                    
                                   for($ad;$ad<=$total;$ad++)
                                   {
                                       $percent = intval($ad*10)."%";  
                                        echo '<script>
                                        parent.document.getElementById("progressbar_adj").innerHTML="<div style=\"width:'.$percent.';background:'.$color_adj.'; ;height:20px;\">&nbsp;</div>";
                                       parent.document.getElementById("information_adj").innerHTML="<div style=\"text-align:center;\">Adjustment</div>";
                                       parent.document.getElementById("indicator_adj").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($ad*10).'%'.'</div>";
                                       parent.document.getElementById("content_adj").innerHTML="<div>'.$content_adj.'</div>";

                                       </script>';
                                   
                                   }
                                
                                }
                    
                            }
                    
                            if($key == "Attention") {
                    
                                if($value >= 8 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    $m=0;
                                    $total_att= $value;
                                    $color_att = "#00FF00;opacity: 0.5";
                                    $content_att = "<div class='col-md-11 'style=' text-align:justify;margin-left: auto;margin-right: auto;'>Your responses on the <span class='fw-bold'>Attention Domain </span> highlight that your attention is good enough and you keep working towards it. This indicates that You maintain your attention span as per your requirement. You take an active role in class will help you learn the information, and it will keep your mind busy so it does not have time to be distracted. You are more focused for your goal and aware about your strengths and weakness. You always work for your improvement that leads toward your career goals. You always prepare yourself to pay attention before you enter the classroom. Before class, you make sure that you are organized with all your materials. You have organized thinking pattern, you always set high targets. You are much aware of expectations from your parents. You always track your Progress and open to take suggestions with a willingness to Improve.</div>";
                    
                                    for($m;$m<=$total_att;$m++)
                                    {
                                        $percent = intval(($m*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_att").innerHTML="<div style=\"width:'.$percent.';background:'.$color_att.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_att").innerHTML="<div style=\"text-align:center;\">Attension</div>";
                                        parent.document.getElementById("indicator_att").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($m*10).'%'.'</div>";
                                        parent.document.getElementById("content_att").innerHTML="<div>'.$content_att.'</div>";

                                        </script>';
                                    
                                    }
                                } 
                                else if($value >= 5 && $value <= 7) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                                   
                                    <?php
                                    $m=0;
                                    $total_att= $value;
                                    $color_att = "#FFA500;opacity: 0.5";
                                    //orange
                                    $content_att = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the <span class='fw-bold'> Attention Domain </span> have generated moderate score. You have short span that to a large extent you are able to maintain your attention for your goal, your classes, lectures and other activities. You attend classes by getting well motivated in the beginning, but it is not possible for you for long. Can't concentrate on any discussion, after a while. In any discussion you participate in passive mode. You attend each lecture with interest, which makes it easier for you to move towards your goal. But it is not very stable. You have to put a lot of energy into it. You get distracted easily.<br><br><i class='fw-bold'>You may need some techniques to improve your Attention level:</i> <br>1. Include Physical Activity <br>2. Have 'Attention Breaks'<br> 3. Adjust Time Frames <br>4. Remove Visual Distractions <br>5. Play Memory Games <br>6. Rate (and Change) Tasks <br>7. Break Tasks into Pieces </div>";
                    
                                    for($m;$m<=$total_att;$m++)
                                    {
                                        $percent = intval(($m*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_att").innerHTML="<div style=\"width:'.$percent.';background:'.$color_att.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_att").innerHTML="<div style=\"text-align:center;\">Attension</div>";
                                        parent.document.getElementById("indicator_att").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($m*10).'%'.'</div>";
                                        parent.document.getElementById("content_att").innerHTML="<div>'.$content_att.'</div>";
                                        </script>';
                                    
                                    }
                    
                                } else if ($value >= 0 && $value <= 4) {
                                    //  echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                     $m = 0;
                                     $total_att = $value;
                                     $color_att = "#FF0000;opacity:0.5";
                                    // red
                                     $content_att = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the <span class='fw-bold'>Attention Domain highlighting a need of improvement </span>. You may find it difficult to understand and handle the things. You have trouble focusing on tasks for any length of time without being easily distracted. Due to this you have poor performance at work or school. You face inability to complete daily tasks. You always miss important details or information. You always feel communication difficulties in relationships. Sometimes, poor health related to neglect and inability to practice healthy habits. You are physically in class but mentally somewhere else. You always miss important lectures of your class. You forget your goal because of outside obstacles<br><br><span class='fw-bold'><i> But, nothing to worry about. You can enhance your adjustment skills in the following way: </i></span> <br><span class='fw-bold'>1. Include Physical Activity </span><br><span class='fw-bold'>2. Have 'Attention Breaks' </span><br><span class='fw-bold'>3. Adjust Time Frames </span><br><span class='fw-bold'>4. Remove Visual Distractions </span><br><span class='fw-bold'>5. Play Memory Games 6. Rate (and Change) Tasks</span><br><span class='fw-bold'> 7. Break Tasks into Pieces </span><br><span class='fw-bold'>8. Practice attentive behaviour</span></div>";
                    
                                     for ($m; $m <= $total_att; $m++) {
                                         $percent = intval(($m * 10)) . "%";
                                         echo '<script>
                                          parent.document.getElementById("progressbar_att").innerHTML="<div style=\"width:' . $percent . ';background:' . $color_att . ';height:20px;\">&nbsp;</div>";
                                          parent.document.getElementById("information_att").innerHTML="<div style=\"text-align:center;\">Attension</div>";
                                          parent.document.getElementById("indicator_att").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($m*10).'%'.'</div>";
                                          parent.document.getElementById("content_att").innerHTML="<div>' . $content_att . '</div>";

                                        </script>';
                    
                                     }
                                 }
                            }
                    
                            if($key == "Self") {
                    
                                if($value >= 8 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                    <!-- <div id="progressbar_self" style="border:1px solid #ccc; border-radius: 5px;  "></div> -->
                                    <!-- Progress information -->
                                    <!-- <div id="information_self" ></div> -->
                                    <?php
                                    $self=0;
                                    $total= $value;
                                    $content_self = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the <span class='fw-bold'>Self-Awareness Domain </span>highlight that your Self Awareness is excellent and you keep working towards it. You are aware of your strengths and weakness. You always feel that you have the potential to achieve your targets in life. You are very clear about what you want to achieve in your life. You know how to maximize benefits from your teachers, group discussions, and classes to help me do well in the exams. You know how to overcome your weakness. You don’t lose confidence by comparing yourself with others. You always like to discuss ways to improve your performance with teachers and your seniors. you usually use mechanisms to face any stressful situation. You can recognize your strengths and challenges on that basic you prepare your career path. Your responses show that you understand and tal about your needs and feelings. You also recognize other people’s needs and feelings and see how your behaviours affects others. You always develop a growth mindset and learn from your mistakes.</div>";
                                    $color_self = '#81B622;opacity:0.5';
                                    // green
                                    for($self;$self<=$total;$self++)
                                    {
                                        $percent = intval(($self*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_self").innerHTML="<div style=\"width:'.$percent.';background:'.$color_self.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_self").innerHTML="<div style=\"text-align:center;\">Self Awareness</div>";
                                        parent.document.getElementById("indicator_self").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($self*10).'%'.'</div>";
                                        parent.document.getElementById("content_self").innerHTML="<div>'.$content_self.'</div>";
                                        </script>';
                                    
                                    }
                    
                                } 
                                else if($value >= 5 && $value <= 7) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                    <!-- <div id="progressbar_self" style="border:1px solid #ccc; border-radius: 5px;  "></div> -->
                                    <!-- Progress information -->
                                    <!-- <div id="information_self" ></div> -->
                                    <?php
                                    $self=0;
                                    $total= $value;
                                    $content_self = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the Self-Awareness Domain have generated moderate score. That shows average level of Self-Awareness. Most people slip to an average level of self-awareness. It is very common among people. That's what your scores show. You do what you are told. You follow the instructions. You distract yourself with the same mess repeatedly. You have never allowed yourself to express personal feelings and reactions to what is happening around them. You need some motivation from others to get clarity about your strengths and weakness.you have potential but you need some motivation to know the potential to achieve your targets in life. you have partial clarity about what you want to achieve in your life. Sometimes, you maximize benefits from my teachers, group discussions, and classes to help you do well in the exams. You need support to overcome your weakness, sometimes. You lose your confidence by comparing yourself with others. in some situations, you feel you are not the right person for the target/career that you are pursuing. you try to maintain your expectations with or like your parent's expectations from you  <br><i class='fw-bold'>But, nothing to worry about. You can enhance your Self-Awareness Skill in the following way:</i><br><span class='fw-bold'> There are many ways you can practice being present with yourself and your emotions, which, in turn, can help improve your self-awareness.</span><br><span class='fw-bold'> ● Meditation: </span>Meditation can be an especially useful practice because you don't have tocworry about changing anything—simply noticing what happens during a meditation can bring greater awareness of your thoughts and feelings.<br><span class='fw-bold'> ● Journaling: </span>Journaling is a practice in self-reflection that can help you notice the ways in which you tend to think and behave, and even which areas in your life you may wish to improve. It can be a therapeutic way to gain insight into your life events and relationships. <br><span class='fw-bold'>● Talk Therapy: </span>A therapist works with you to address negative thought patterns or behaviours. By understanding the underlying cause of your negative thoughts, for instance, you're in a more advantageous position to change them and use healthy coping mechanisms instead. <br><span class='fw-bold'>● Develop Your Emotional Intelligence: </span>Self-awareness and emotional intelligence (EQ) go hand in hand. EQ refers to a person's ability to perceive their own emotions as well as the emotions of other people. Someone with a high EQ can effectively respond to emotions with empathy and compassion. <br><span class='fw-bold'>● Self-Consciousness: </span>Sometimes, people can become overly self-aware and veer into what is known as self-consciousness. Have you ever felt like everyone was watching you, judging your actions, and waiting to see what you will do next? This heightened state of self-awareness can leave you feeling awkward and nervous in some instances.</div>";
                                    $color_self = '#FFA500;opacity:0.5';
                                    // orange
                                    for($self;$self<=$total;$self++)
                                    {
                                        $percent = intval(($self*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_self").innerHTML="<div style=\"width:'.$percent.';background:'.$color_self.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_self").innerHTML="<div style=\"text-align:center;\">Self Awareness</div>";
                                        parent.document.getElementById("indicator_self").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($self*10).'%'.'</div>";
                                        parent.document.getElementById("content_self").innerHTML="<div>'.$content_self.'</div>";
                                        </script>';
                                    
                                    }
                                }
                                else if($value >= 0 && $value <= 4) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                    <!-- <div id="progressbar_self" style="border:1px solid #ccc; border-radius: 5px;  "></div> -->
                                    <!-- Progress information -->
                                    <!-- <div id="information_self" ></div> -->
                                    <?php
                                    $self=0;
                                    $total= $value;
                                    $content_self = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the Self-Awareness Domain highlighting a need of improvement. You won't listen to or accept critical feedback. You cannot empathize with, or take the perspective of, others. You have difficulty focusing on yourself, your needs, or your emotions. You become hurtful to others without realizing it. You take credit for success and blame others for failures. Mostly of the time you fail to recall your lecture points in exam, classroom or in any debate. You rarely found that lectures are interesting and connecting. If you skip a lecture, you don't have a problem. You are often attracted to external stimuli. You become unable to study effectively for a long time.<br><br><span class='fw-bold'><i> But, nothing to worry about. You can enhance your Self-Awareness Skill in the following way: </i></span> <br>There are many ways you can practice being present with yourself and your emotions, which, in turn, can help improve your self-awareness.<br><span class='fw-bold'> ● Meditation:</span> Meditation can be an especially useful practice because you don't have to worry about changing anything—simply noticing what happens during a meditation can bring greater awareness of your thoughts and feelings. <br><span class='fw-bold'>● Journaling:</span> Journaling is a practice in self-reflection that can help you notice the ways in which you tend to think and behave, and even which areas in your life you may wish to improve. It can be a therapeutic way to gain insight into your life events and relationships.<br><span class='fw-bold'> ● Talk Therapy: </span>A therapist works with you to address negative thought patterns or behaviours. By understanding the underlying cause of your negative thoughts, for instance, you're in a more advantageous position to change them and use healthy coping mechanisms instead.<br><span class='fw-bold'> ● Develop Your Emotional Intelligence: </span>Self-awareness and emotional intelligence (EQ) go hand in hand. EQ refers to a person's ability to perceive their own emotions as well as the emotions of other people. Someone with a high EQ can effectively respond to emotions with empathy and compassion. <br><span class='fw-bold'>● Self-Consciousness: </span>Sometimes, people can become overly self-aware and veer into what is known as self-consciousness. Have you ever felt like everyone was watching you, judging your actions, and waiting to see what you will do next? This heightened state of self-awareness can leave you feeling awkward and nervous in some instances.</div>";
                                    $color_self = '#FF0000;opacity:0.5';
                                    // red
                                    for($self;$self<=$total;$self++)
                                    {
                                        $percent = intval(($self*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_self").innerHTML="<div style=\"width:'.$percent.';background:'.$color_self.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_self").innerHTML="<div style=\"text-align:center;\">Self Awareness '.$range_self.'</div>";
                                        parent.document.getElementById("indicator_self").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($self*10).'%'.'</div>";
                                        parent.document.getElementById("content_self").innerHTML="<div>'.$content_self.'</div>";
                                        </script>';
                                    
                                    }
                                }
                    
                            }
                    
                            if($key == "Study") {
                    
                                if($value >= 9 && $value <= 11) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    
                                    $total= $value;
                                    $color_study = "#81B622;opacity:0.5";
                                    //green
                                    
                                    $content_study = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the <span class='fw-bold'>Study Habit Domain </span> highlight that your Study habit is excellent. you arevery punctual and strict on time for your learning and goal. You always, complete and submit assignments as per set deadlines. You often prepare a plan for study and follow it through. You always follow an organized manner for your preparation. You follow the study schedule prepared by you with ease. You easily put down your thoughts effectively while writing an assignment. Before even work (study, presentation, or activities), You create an outline of the topic to be covered along with the heading and its sequence. You always focus on improvement from your previous performance. You always, do practice tests before appearing for the final exam. You always get important inputs/advice in the assessment of my practice test and you easily accept these inputs.</div>";
                                    $st=0;
                                    for($st;$st<=$total;$st++)
                                    {
                                    $percent = intval(($st*10))."%"; 
                                    echo '<script>
                                    parent.document.getElementById("progressbar_study").innerHTML="<div style=\"width:'.$percent.';background:'.$color_study.';height:20px;\">&nbsp;</div>";
                                    parent.document.getElementById("information_study").innerHTML="<div style=\"text-align:center;\">Study Habit</div>";
                                    parent.document.getElementById("indicator_study").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($st*10).'%'.'</div>";
                                    parent.document.getElementById("content_study").innerHTML="<div>'.$content_study.'</div>";
                                    </script>';
                    
                    }
                                } 
                                else if($value >= 6 && $value <= 8) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                   
                    
                                    <?php
                                    
                                    $total= $value;
                                    $color_study = "#FFA500;opacity:0.5";
                                    //orange
                                    $content_study = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the Study Habit Domain have generated moderate score. That shows, your study habit varies from time to time. You are not able to study by sticking to any one pattern. You need a lot of motivation so that you can maintain continuity in your studies. You always have doubts about yourself whether the way you are studying is right for your goal or not. Due to self-doubt, you have to change your study habit. Because of this, you do not get inputs for exams or any activities. Due to this the result of your work does not come according to the mind and you feel mental pressure. There are many challenges you face in developing good study habits.<br><p> <i><br><span class='fw-bold'>But, nothing to worry about. You can enhance your Study Habit Skill in the following way: </span></i><br>There are many ways you can practices can improve your study habits <br><span class='fw-bold'>● Find a good place to study:</span> Finding a good location to study is one of the most important elements of studying well.Look for a quiet place with minimal distractions—someplace where you’ll be able to focus, and won’t be interrupted by loud sounds or people who constantly want your attention. A school or public library, a coffee shop, or a quiet corner of your house can all be good places to start.<br><span class='fw-bold'> ● Minimize distractions: </span>Picking a good location to study can be the first step in keeping yourself focused on your work. But there are many types of distractions that can reach you no matter where you choose to work. <br>Here are some tips on minimizing these distractions:<br><span class='fw-bold'> ● Turn off your Wi-Fi,</span> <br><span class='fw-bold'>● Be mindful of your phone </span>● Study with a friend </span><br><span class='fw-bold'>● Take breaks: </span>Taking intentional breaks has been linked to better retention, increased attention, and boosts in energy. Research shows that working for around 50 minutes, then giving yourself a 15- to 20-minute break, can lead to optimum productivity. <br><span class='fw-bold'>● Space out your studying: </span>Cramming can still help you get a good grade on a test, but studies show that you’re much more likely to forget that information as soon as the test is over. Really holding onto the material, you learned (and making exam seasons less stressful) requires consistent and well-spaced study sessions.<br><span class='fw-bold'> ● Set study goals for each session:</span> Set study goals for each session of studying you have. These can be time-based or content-based. For example, you might aim to study for two hours, or review three chapters of your textbook—or both.<br><span class='fw-bold'> ● Reward yourself: </span>Rewarding yourself with treats—“bribing” yourself—has been linked to better self-control, and can be helpful in forming good habits. <br><span class='fw-bold'>● Take practice tests: </span>Tests and practice tests have been long seen as useful tools to help students learn and retain information. Besides revealing gaps in knowledge and reducing exam anxiety. <br><span class='fw-bold'>● Use your own words:</span> Expressing an idea in your own words increases your understanding of a subject and helps your brain hang on to information.<br><span class='fw-bold'>● Ask for help: </span>You might find yourself stuck on a problem or unable to understand the explanation in a textbook. Somebody who is able to walk through the issue with you might provide the fresh explanation you need.<br><span class='fw-bold'> ● Take care of yourself: </span>At the end of the day, your brain is an organ in your body—take care of it by taking care of yourself. Get regular exercise, eat well, don’t overdrink, get good sleep, and take care of your mental wellbeing.</div>";
                                    $st=0;
                                    for($st;$st<=$total;$st++)
                                    {
                                    $percent = intval(($st*10))."%"; 
                                    echo '<script>
                                    parent.document.getElementById("progressbar_study").innerHTML="<div style=\"width:'.$percent.';background:'.$color_study.';height:20px;\">&nbsp;</div>";
                                    parent.document.getElementById("information_study").innerHTML="<div style=\"text-align:center;\">Study Habit</div>";
                                    parent.document.getElementById("indicator_study").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($st*10).'%'.'</div>";
                                    parent.document.getElementById("content_study").innerHTML="<div>'.$content_study.'</div>";
                                    </script>';
                    
                    }
                                }
                                else if($value >= 0 && $value <= 5) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                  
                                    <?php
                                    
                                    $total= $value;
                                    $color_study = "#FF0000;opacity:0.5";
                                    $content_study = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your response suggests that you do not enjoy learning with practical hands-on knowledge. Role playing, building models, fieldwork etc. not necessarily facilitate learning for you. Instead, tasks such as reading topics that are explained with diagrams, listening to audiobooks, taking online lectures etc may enhance your understanding. Due to your higher attention span sitting and doing work in closed spaces for a long period of time would not bother you. People who are low on kinaesthetic learning are said to be ill coordinated and they also lack sense of body timing. You hence won’t prefer activities such as sports, drama, dance, acting, sculpture etc which involves body movements and requires to be physically active.<br> <br>However, one can have low to high preference for a particular modality and it can always be improved further. Here are a few improvement strategies that you can consider.<br> <br><span class='fw-bold'>Improvement strategies</span><br> <br><span class='fw-bold'>● Make “Hands on learning” your mantra.</span> <br><span class='fw-bold'>● Participate actively in classroom discussions making use of activities, body gestures, skits, imagery etc.</span> <br><span class='fw-bold'>● Keep your hands busy by taking down notes and drawing diagrams during lectures to keep yourself engaged in class.</span> <br><span class='fw-bold'>● Role playing, in-class demonstrations, laboratory experiments, model building and fieldwork are some of the ways which would promote better understanding and learning for you.</span> <br><span class='fw-bold'>● Building models, designing experiments, reviewing case studies, using props and craft materials are some of the creative ways for you to clarify doubts and gain deeper understanding of concepts.</span> <br><span class='fw-bold'>● Writing and then re-writing the study material would facilitate the learning process.</span> <br><span class='fw-bold'>● Using flash cards (cards with question or concept on one side and the corresponding answer or information on the other side) and memory games would assist you in studying.</span> <br><span class='fw-bold'>● Make your study session shorter in duration; taking 5–10-minute breaks in between sessions.</span> <br><span class='fw-bold'>● Walking while reading out from your book or notes would help you learn better.</span> <br><span class='fw-bold'>● Teaching others using case studies, examples, imagery, role plays, demonstrations, models etc is a great way for you to revise what you have learnt.</span> <br><span class='fw-bold'>● Role play taking the examination and practice answering essay type questions.</span> <br><span class='fw-bold'>● Keep aside some time during the day for exercising as it facilitates overall health and improves learning</span></div>";
                                    // red
                                    $st=0;
                                    for($st;$st<=$total;$st++)
                                    {
                                    $percent = intval(($st*10))."%"; 
                                    echo '<script>
                                    parent.document.getElementById("progressbar_study").innerHTML="<div style=\"width:'.$percent.';background:'.$color_study.';height:20px;\">&nbsp;</div>";
                                    parent.document.getElementById("information_study").innerHTML="<div style=\"text-align:center;\"> Study Habit</div>";
                                    parent.document.getElementById("indicator_study").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($st*10).'%'.'</div>";
                                    parent.document.getElementById("content_study").innerHTML="<div>'.$content_study .'</div>";
                                    
                                    </script>';
                    
                    }
                                }
                    
                            }
                    
                            if($key == "Depression") {
                    
                                if($value >= 8 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                                  
                                    <?php
                                                                        
                                    $total= $value;
                                    $color_dep = "#FF0000;opacity:0.5";
                                    // red
                                    $content_dep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the <span class='fw-bold'>Depression Domain </span> highlight that you have sever level of depression. As we observed that you always have feelings of sadness, tearfulness, emptiness, or hopelessness. You also see in yourself angry outbursts, irritability, or frustration, even over small matters, and loss of interest or pleasure in most or all normal activities. you are facing trouble sleeping, and feeling tiredness and lack of energy, so even small tasks take extra effort. gradually reduced appetite and weight loss or increased cravings for food and weight gain in you. There is a feeling of restlessness and you started Slow thinking, speaking, or body movements. in this stage you feel worthlessness or guilt, fixating on past failures or self-blame. you are not able to concentrate, make decisions and remember things, frequent or recurrent thoughts of death, suicidal thoughts, suicide attempts, or suicide. Also, facing unexplained physical problems, such as back pain or headaches. You generally feel that you are not happy with your circumstances currently. You have guilt and thought of failure. You do not have much hope for your future. You always think or overthink that your situation will not change. You have lost your interest in meeting with friends/relatives.<br> You need support from a psychologist and behaviour therapist. <br><i class='fw-bold'>But, nothing to worry about. You can enhance your Depression stage in the following way:</i><br> There are several steps you can take to manage, and navigate depression. Making small changes to your daily routine, diet, and lifestyle habits can all have a positive effect. <br><br> <span class='fw-bold'> ● Set attainable goals:</span> A lengthy to-do list may be so weighty that you’d rather do nothing. Instead of compiling a long list of tasks, consider setting smaller goals.Setting and accomplishing these goals can provide a sense of control and accomplishment, and help with motivation.<br><span class='fw-bold'> ● You may find it helpful to create a routine:</span> If depressive symptoms disrupt your daily routine, setting a gentle schedule may help you feel in control. These plansdon’t have to map out an entire day.<br><span class='fw-bold'>  ● Do something you enjoy: </span>Depression can push you to give in to your fatigue. It may feel more powerful than preferred emotions. Try to push back and do something youlove — something that’s pleasurable or meaningful. It could be playing an instrument, painting, hiking, or biking.<br><span class='fw-bold'> ● Spend time in nature:</span> Spending time in nature can have a powerful influence on a person’s mood. Time in natural spaces may improve mood and cognition, and lower the risk of mental health disorders. However, there’s only limited research on the direct effect of nature on those with depression. <br><span class='fw-bold'> ● Use writing or journaling to express your feelings:</span> Consider writing or journaling about what you’re experiencing. Then, when the feelings lift, write about that, too. <br><span class='fw-bold'> ● Volunteering: </span>Spending time with other people and doing something new by volunteering and giving your time to someone or something else. You may be used to receiving help from friends, but reaching out and providing help may improve your mental health more.<br><span class='fw-bold'> ● Assess the parts instead of generalizing the whole: </span>Depression can tinge recollections with difficult emotions. You may find yourself focusing on things that are unhelpful or perceived as difficult.<br><span class='fw-bold'> ● Know that today isn’t indicative of tomorrow:</span> Internal emotions and thoughts can change from day to day. Tracking experiences through journaling or keeping a mood diary can help to remember this. If you were unsuccessful at getting out of bed or accomplishing your goals today, remember that you haven’t lost tomorrow’s opportunity to try again.<br><span class='fw-bold'> ● Meet yourself where you are: </span>Depression is common. It affects millions of people, including some in your life. You may not realize they face similar challenges, emotions, and obstacles.<br><span class='fw-bold'> ● </span>The key to navigating depression is to be open, accepting, and loving toward yourself and what you’re going through.</div>";
                                    $d=0;
                                    for($d;$d<=$total;$d++)
                                    {
                                        $percent = intval(($d*10))."%";
                                        
                                        echo '<script>
                                        parent.document.getElementById("progressbar_dep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_dep.'; height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_dep").innerHTML="<div style=\"text-align:center;\">Depression</div>";
                                        parent.document.getElementById("indicator_dep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($d*10).'%'.'</div>";
                                        parent.document.getElementById("content_dep").innerHTML="<div>'.$content_dep.'</div>";
                                        </script>';
                                    
                                    }
                                } 
                                else if($value >= 5 && $value <= 7) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                                  
                                    <?php
                                                                        
                                    $total= $value;
                                    $color_dep = "#FFA500;opacity:0.5";
                                    // orange
                                    $content_dep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the <span class='fw-bold'>Depression Domain  </span>have generated moderate score. That shows, you are facing average level of depression. This is not a crucial situation but it is alarming condition that you must focus on your mental peace and health as soon as possible. Because it is border line of depression severity. If you avoid these symptoms in your behaviour, approach to psychologist or psychotherapist. Generally, you are not happy with my circumstances currently. you do not have any appetite to eat, always feel loneliness, failure, and worthless, lack the motivation to change, and feel that life is meaningless. There is a feeling of restlessness and you started Slow thinking, speaking, or body movements. in this stage you feel worthlessness or guilt, fixating on past failures or self-blame. you are not able to concentrate, make decisions and remember things, frequent or recurrent thoughts of death, suicidal thoughts, suicide attempts, or suicide. Also, facing unexplained physical problems, such as back pain or headaches. Depression is affective your daily life and academic life too. All symptoms are on border line. If you try then you can overcome from it.<br><br> You need support from a psychologist and behaviour therapist. <br><i class='fw-bold'>But, nothing to worry about. You can enhance your Depression stage in the following way: </i><br>There are several steps you can take to manage, and navigate depression. Making small changes to your daily routine, diet, and lifestyle habits can all have a positive effect.<br><span class='fw-bold'> ● Set attainable goals: </span> A lengthy to-do list may be so weighty that you’d rather do nothing. Instead of compiling a long list of tasks, consider setting smaller goals. Setting and accomplishing these goals can provide a sense of control and accomplishment, and help with motivation.<br><span class='fw-bold'> ● You may find it helpful to create a routine: </span>If depressive symptoms disrupt your daily routine, setting a gentle schedule may help you feel in control. These plans don’t have to map out an entire day. <br><span class='fw-bold'>● Do something you enjoy: </span>Depression can push you to give in to your fatigue. It may feel more powerful than preferred emotions. Try to push back and do something youlove — something that’s pleasurable or meaningful. It could be playing an instrument, painting, hiking, or biking.<br><span class='fw-bold'> ● Spend time in nature: </span>Spending time in nature can have a powerful influence on a person’s mood. Time in natural spaces may improve mood and cognition, and lower the risk of mental health disorders. However, there’s only limited research on the direct effect of nature on those with depression. <br><span class='fw-bold'>● Use writing or journaling to express your feelings:</span> Consider writing or journaling about what you’re experiencing. Then, when the feelings lift, write about that, too.<br><span class='fw-bold'> ● Volunteering: </span>Spending time with other people and doing something new by volunteering and giving your time to someone or something else. You may be used to receiving help from friends, but reaching out and providing help may improve your mental health more. <br><span class='fw-bold'>● Assess the parts instead of generalizing the whole:</span> Depression can tingerecollections with difficult emotions. You may find yourself focusing on things that are unhelpful or perceived as difficult.<br><span class='fw-bold'> ● Know that today isn’t indicative of tomorrow:</span> Internal emotions and thoughts can change from day to day. Tracking experiences through journaling or keeping a mood diary can help to remember this. If you were unsuccessful at getting out of bed or accomplishing your goals today, remember that you haven’t lost tomorrow’s opportunity to try again.<br><span class='fw-bold'> ● Physical exercise: </span>On days when you feel as if you can’t get out of bed, exercise may seem like the last thing you’d want to do. However, exercise and physical activity can help to lower symptoms of depression and boost energy levels. <br><span class='fw-bold'>● Meet yourself where you are: </span>Depression is common. It affects millions of people, including some in your life. You may not realize they face similar challenges, emotions, and obstacles. The key to navigating depression is to be open, accepting, and loving toward yourself and what you’re going through</div>";
                                    $d=0;
                                    for($d;$d<=$total;$d++)
                                    {
                                        $percent = intval(($d*10))."%";
                                        
                                        echo '<script>
                                        parent.document.getElementById("progressbar_dep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_dep.'; height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_dep").innerHTML="<div style=\"text-align:center; font-weight:bold\">Depression </div>";
                                        parent.document.getElementById("indicator_dep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($d*10).'%'.'</div>";
                                        parent.document.getElementById("content_dep").innerHTML="<div>'.$content_dep.'</div>";

                                        </script>';
                                    
                                    }
                                }
                                else if($value >= 0 && $value <= 4) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                            <?php
                                                                         
                                     $total= $value;
                                     $color_dep="#81B622;opacity:0.5";
                                    //green
                                     $content_dep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the <span class='fw-bold'> Depression Domain </span> highlighting an excellent sign of good mental wellbeing specially in depression. According to your performance you’re in good position to make clear picture about your career. You are happy with my circumstances currently. You have some positive insights that you can grow yourself. You enjoy your life and are very hopeful for your future. You are very optimistic that any situation is not permanent, and that will change when you make effort. You are very active and ready I am not interested in meeting with friends/relatives. You are hopeful that you will achieve your targets.</div>";
                                     $d=0;
                                     for($d;$d<=$total;$d++)
                                     {
                                         $percent = intval(($d*10))."%";
                                         
                                         echo '<script>
                                        parent.document.getElementById("progressbar_dep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_dep.'; height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_dep").innerHTML="<div style=\"text-align:center; font-weight:bold\">Depression </div>";
                                        parent.document.getElementById("indicator_dep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($d*10).'%'.'</div>";
                                        parent.document.getElementById("content_dep").innerHTML="<div>'.$content_dep.'</div>";
                                         </script>';
                                     
                                     }
                                 }
                    
                            }
                    
                            if($key == "Anxiety") {
                    
                                if($value >= 8 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                                                                        
                                    $total=$value;
                                    $color_anx ="#FF0000;opacity:0.5";
                                    // red
                                    $content_anx = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the  <span class='fw-bold'>Anxiety Domain </span> highlight that you are on the border line of the anxiety. You are struggling to overcome with your irrational and unrealistic fear from your personal and professional life. All this is affecting your study and preparation for the future. Because of the unrealistic fears that you are worried about, in some circumstances your mouth starts drying up, you start sweating, your breathing starts fast, and small things make you hate. This doesn't happen constantly with you, but it does happen quite often. Due to this, you are not able to focus on your career and personal life. You don't have to worry about this. Since you are still aware of the treatment of anxiety, then you can get rid of it soon.<br> You need support from a psychologist and behaviour therapist.<br> <br><span class='fw-bold'><i>But, nothing to worry about. You can enhance your Anxiety stage in the following way:</i></span> <br><span class='fw-bold'>Take time out:</span> It's impossible to think clearly when you're flooded with fear or anxiety. The first thing to do is take time out so you can physically calm down. Distract yourself from the worry for 15 minutes by walking around the block, making a cup of tea or having a bath. <br><span class='fw-bold'>Breathe through panic: </span>If you start to get a faster heartbeat or sweating palms, the best thing is not to fight it. Stay where you are and simply feel the panic without trying to distract yourself. Place the palm of your hand on your stomach and breathe slowly and deeply. The goal is to help the mind get used to coping with panic, which takes the fear of fear away. <br><span class='fw-bold'>Face your fears:</span> Avoiding fears only makes them scarier. Whatever your fear, if you face it, it should start to fade. If you panic one day getting into a lift, for example, it's best to get back into a lift the next day. <br><span class='fw-bold'>Imagine the worst: </span>Try imagining the worst thing that can happen – perhaps it's panicking and having a heart attack. Then try to think yourself into having a heart attack. It's just not possible. The fear will run away the more you chase it. <br><span class='fw-bold'>Look at the evidence: </span>It sometimes helps to challenge fearful thoughts. For example, if you're scared of getting trapped in a lift and suffocating, ask yourself if you have ever heard of this happening to someone. Ask yourself what you would say to a friend who had a similar fear. <br><span class='fw-bold'>Don't try to be perfect:</span> Life is full of stresses, yet many of us feel that our lives must be perfect. Bad days and setbacks will always happen, and it's important to remember that life is messy. <br><span class='fw-bold'>Visualise a happy place: </span>Take a moment to close your eyes and imagine a place of safety and calm. It could be a picture of you walking on a beautiful beach, or snuggled up in bed with the cat next to you, or a happy memory from childhood. Let the positive feelings soothe you until you feel more relaxed. <br><span class='fw-bold'>Talk about it: </span>Sharing fears takes away a lot of their scariness. If you can't talk to a partner, friend, or family member, call a helpline of <span class='fw-bold'>Ollato Living Life</span>. You could also try a Cognitive Behavioural Therapy approach over the telephone, with a service such as <span class='fw-bold'>Ollato Living Life</span>. If you would like to find out more about this appointment-based service, you can visit the <span class='fw-bold'>Ollato Living Life website </span>. <br><span class='fw-bold'>Go back to basics: </span>Lots of people turn to alcohol or drugs to self-treat anxiety, but this will only make matters worse. Simple, everyday things like a good night's sleep, a wholesome meal and a walk are often the best cures for anxiety.<br><span class='fw-bold'>Reward yourself:</span> Finally, give yourself a treat. When you've made that call you've been dreading, for example, reinforce your success by treating yourself to a massage, a country walk, a meal out, a book, a DVD, or whatever little gift makes you happy.</div>";
                                    $an=0;
                                    for($an;$an<=$total;$an++)
                                    {
                                    $percent = intval(($an*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_anx").innerHTML="<div style=\"width:'.$percent.';background:'.$color_anx .'; ;height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_anx").innerHTML="<div style=\"text-align:center;\">Anxiety</div>";
                                        parent.document.getElementById("indicator_anx").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($an*10).'%'.'</div>";
                                        parent.document.getElementById("content_anx").innerHTML="<div>'.$content_anx.'</div>";

                                        </script>';
                                    
                                    }
                                                                    } 
                                else if($value >= 5 && $value <= 7) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                                                                        
                                    $total=$value;
                                    $color_anx ="#FFA500;opacity:0.5";
                                    // orange
                                    $content_anx = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the  <span class='fw-bold'>Anxiety Domain </span> highlight that you are on the border line of the anxiety. You are struggling to overcome with your irrational and unrealistic fear from your personal and professional life. All this is affecting your study and preparation for the future. Because of the unrealistic fears that you are worried about, in some circumstances your mouth starts drying up, you start sweating, your breathing starts fast, and small things make you hate. This doesn't happen constantly with you, but it does happen quite often. Due to this, you are not able to focus on your career and personal life. You don't have to worry about this. Since you are still aware of the treatment of anxiety, then you can get rid of it soon.<br> You need support from a psychologist and behaviour therapist.<br> <br><span class='fw-bold'><i>But, nothing to worry about. You can enhance your Anxiety stage in the following way:</i></span> <br><span class='fw-bold'>Take time out:</span> It's impossible to think clearly when you're flooded with fear or anxiety. The first thing to do is take time out so you can physically calm down. Distract yourself from the worry for 15 minutes by walking around the block, making a cup of tea or having a bath. <br><span class='fw-bold'>Breathe through panic: </span>If you start to get a faster heartbeat or sweating palms, the best thing is not to fight it. Stay where you are and simply feel the panic without trying to distract yourself. Place the palm of your hand on your stomach and breathe slowly and deeply. The goal is to help the mind get used to coping with panic, which takes the fear of fear away. <br><span class='fw-bold'>Face your fears:</span> Avoiding fears only makes them scarier. Whatever your fear, if you face it, it should start to fade. If you panic one day getting into a lift, for example, it's best to get back into a lift the next day. <br><span class='fw-bold'>Imagine the worst: </span>Try imagining the worst thing that can happen – perhaps it's panicking and having a heart attack. Then try to think yourself into having a heart attack. It's just not possible. The fear will run away the more you chase it. <br><span class='fw-bold'>Look at the evidence: </span>It sometimes helps to challenge fearful thoughts. For example, if you're scared of getting trapped in a lift and suffocating, ask yourself if you have ever heard of this happening to someone. Ask yourself what you would say to a friend who had a similar fear. <br><span class='fw-bold'>Don't try to be perfect:</span> Life is full of stresses, yet many of us feel that our lives must be perfect. Bad days and setbacks will always happen, and it's important to remember that life is messy. <br><span class='fw-bold'>Visualise a happy place: </span>Take a moment to close your eyes and imagine a place of safety and calm. It could be a picture of you walking on a beautiful beach, or snuggled up in bed with the cat next to you, or a happy memory from childhood. Let the positive feelings soothe you until you feel more relaxed. <br><span class='fw-bold'>Talk about it: </span>Sharing fears takes away a lot of their scariness. If you can't talk to a partner, friend, or family member, call a helpline of Ollato Living Life. You could also try a Cognitive Behavioural Therapy approach over the telephone, with a service such as Ollato Living Life. If you would like to find out more about this appointment-based service, you can visit the Ollato Living Life website. <br><span class='fw-bold'>Go back to basics: </span>Lots of people turn to alcohol or drugs to self-treat anxiety, but this will only make matters worse. Simple, everyday things like a good night's sleep, a wholesome meal and a walk are often the best cures for anxiety.<br><span class='fw-bold'>Reward yourself:</span> Finally, give yourself a treat. When you've made that call you've been dreading, for example, reinforce your success by treating yourself to a massage, a country walk, a meal out, a book, a DVD, or whatever little gift makes you happy.</div>";
                                    $an=0;
                                    for($an;$an<=$total;$an++)
                                    {
                                    $percent = intval(($an*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_anx").innerHTML="<div style=\"width:'.$percent.';background:'.$color_anx .'; ;height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_anx").innerHTML="<div style=\"text-align:center;\"> Anxiety </div>";
                                        parent.document.getElementById("indicator_anx").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($an*10).'%'.'</div>";
                                        parent.document.getElementById("content_anx").innerHTML="<div>'.$content_anx.'</div>";
                                        </script>';
                                    
                                    }
                                } else if ($value >= 0 && $value <= 4) {
                                    //  echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                    
                                     $total = $value;
                                     $color_anx = "#81B622;opacity:0.5";
                                    //green  
                                     $content_anx = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Congratulations, you have scored a great job in the <span class='fw-bold'>Anxiety Domain </span>. Which shows that you have a low level of anxiety. This is a good thing for you. You are not affected by any unrealistic fears or are very much affected at work level. Which helps you a lot in planning and working for your study and personal life. You easily understand your unrealistic fears and plan and act on them accordingly, which helps you to move forward in your career. You work by focusing on your career goal. Whatever unrealistic fears you have, you solve them logically. Which is a very good thing. You are doing well in yourself and studies, it is commendable. If still you think then you can meet our psychologist</div>";
                                     $an = 0;
                                     for ($an; $an <= $total; $an++) {
                                         $percent = intval(($an * 10)) . "%";
                                         echo '<script>
                                        parent.document.getElementById("progressbar_anx").innerHTML="<div style=\"width:' . $percent . ';background:' . $color_anx . '; ;height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_anx").innerHTML="<div style=\"text-align:center;\"> Anxiety</div>";
                                        parent.document.getElementById("indicator_anx").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($an*10).'%'.'</div>";
                                        parent.document.getElementById("content_anx").innerHTML="<div>'.$content_anx . '</div>";
                                        
                                        </script>';
                    
                                     }
                                 }
                    
                            }
                    
                            if($key == "Stress") {
                    
                                if($value >= 7 && $value <= 11) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                                                            
                                        $total=$value;
                                        $color_stress = "#FF0000;opacity:0.5";
                                        // red
                                         $content_stress = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'> Your responses on the Stress Domain are showing sever level of the stress. That indicates that you are facing a wide range of ongoing stressors related to academic, personal and career demands. Career, Personal & Academic-related stress can reduce academic achievement, decrease motivation, and increase the risk of school or coaching dropout, it impacts on your personal wellbeing too. You become easily irritated by the small thing. Generally, you feel upset in anticipation of failure in the exam. You often experience frustration due to delays in reaching your goals. You get tensed when you are not able to understand what is being taught in the class. Usually, you complain of headaches often and sleeplessness. You always feel that you are not able to keep up with the expectations of your parents. When you missed any important lecture, you become tense. You feel nervous and stressed. Stress causes tension in the body through stiff and sore muscles, headaches, or lowered immune systems.<br> You need support from a psychologist and behaviour therapist.<br> <br><i><span class='fw-bold'>But, nothing to worry about. You can enhance your Anxiety stage in the following way: </span></i><br><span class='fw-bold'>● Get proper rest and sleep:</span> good sleep allows our brains to recharge, repair our muscles, promote memory consolidation, and boost the immune system. If you have trouble sleeping at night, try techniques such as avoiding excess caffeine, turning down the lights, or putting away technology at least one hour before bed. <br><span class='fw-bold'>● Focus on health and nutrition:</span> Stress can both shut down the appetite by releasing a corticotropin-releasing hormone and increase the appetite by releasing cortisol. Developing good habits like eating a balanced diet, exercising regularly, and getting enough sleep can help manage stress and prevent dramatic weight loss or weight gain.<br><span class='fw-bold'> ● Be active:</span> Regular exercise increases overall health and can reduce stress. Exercise is also effective in reducing fatigue, improving mental clarity, and enhancing cognitive function. Relaxation techniques such as meditation, acupuncture, massage therapy, and deep breathing, adding just 15 minutes of physical activity to your daily routine can help your physical and mental health. <br><span class='fw-bold'>● Have a stress outlet: </span>Having a healthy outlet to turn to in times of stress can help calm your mind and clarify how to move forward in a stressful situation. Things like a hobby, social club, physical exercise can all be outlets for relieving stress. <br><span class='fw-bold'>● Find connections:</span> Personal connections provide stress-relief hormones that counteract the body’s fight or flight response. Surrounding yourself with people that you trust can also help you feel safe and calm. Joining a club or organization, talking to classmates, volunteering, or being on an intramural sports team can help create connections on and off-campus. <br><span class='fw-bold'>● Practice self-care: </span>Setting aside time in your busy schedule to prioritize self-care helps reduce tension and stress. Having a spa day, taking a bubble bath, meditating, or taking yourself on a date are just some of the ways you can practice relaxation. <br><span class='fw-bold'>● Stay organized: </span>It may seem overwhelming to keep track of everything with a schedule crammed full of classes, assignments, extracurricular and social activities. But, not having organizational skills will only add more stress and pressure to your plate. Try to keep your living environment and workspace tidy and organized as well to reduce distraction and anxiety.<br><span class='fw-bold'> ● Practice positive thinking: </span>Positive thoughts can improve physical well-being and provide a clear mind. When you feel yourself thinking negatively, counteract these thoughts by giving yourself positive encouragement. Positive reinforcement during stressful times can lessen the chance of developing chronic stress. <br><span class='fw-bold'>● Try mindfulness exercises: </span>Mindfulness helps to drown out the background noise and increase awareness. Meditation is a great way to practice mindfulness, but you can also incorporate it into daily activities. This will not only improve memory and focus but is also a beneficial way to relieve stress.<br><span class='fw-bold'>● Don’t be afraid to reach out for help: </span>Even before you feel like the stress has become too much to handle, reach out for help. Find out what mental health resources your school offers or take the time to talk to a professional. A mental health professional can determine your stress triggers. </div>";
                                        $s=0;
                                        for($s;$s<=$total;$s++)
                                        {
                                        
                                            $percent = intval(($s*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_stress").innerHTML="<div style=\"width:'.$percent.';background:'.$color_stress.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_stress").innerHTML="<div style=\"text-align:center;\"> Stress</div>";
                                            parent.document.getElementById("indicator_stress").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($s*10).'%'.'</div>";
                                            parent.document.getElementById("content_stress").innerHTML="<div>'.$content_stress.'</div>";
                                            </script>';
                                        
                                        }
                                } 
                                else if($value >= 4 && $value <= 6) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                     
                                    <?php
                                                                            
                                        $total=$value;
                                        $color_stress = "#FFA500;opacity:0.5";
                                        //orange 
                                    $content_stress = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the Stress Domain are moderate. It indicates that you are on a threshold of stress. You become easily irritated by small things. You experienced that you feel upset in anticipation of failure in the exam and experienced frustration due to delays in reaching your goals.You get tense when you miss any important thing like lectures, meetings, or any assignment. due to this, you become confused and not able to understand what is being taught in the class. For this, here are some remedies, with the help of which you can work and manage stress. You need support from a psychologist and behaviour therapist.<br><i class='fw-bold'> But, nothing to worry about. You can enhance your Stress stage in the following way:</i> <br><span class='fw-bold'> ● Get proper rest and sleep:</span> good sleep allows our brains to recharge, repair our muscles, promote memory consolidation, and boost the immune system. If you have trouble sleeping at night, try techniques such as avoiding excess caffeine, turning down the lights, or putting away technology at least one hour before bed. <br><span class='fw-bold'>● Focus on health and nutrition:</span> Stress can both shut down the appetite by releasing a corticotropin-releasing hormone and increase the appetite by releasing cortisol. Developing good habits like eating a balanced diet, exercising regularly, and getting enough sleep can help manage stress and prevent dramatic weight loss or weight gain. <br><span class='fw-bold'>● Be active: </span>Regular exercise increases overall health and can reduce stress. Exercise is also effective in reducing fatigue, improving mental clarity, and enhancing cognitive function. Relaxation techniques such as meditation, acupuncture, massage therapy, and deep breathing, adding just 15 minutes of physical activity to your daily routine can help your physical and mental health. <br><span class='fw-bold'>● Have a stress outlet: </span>Having a healthy outlet to turn to in times of stress can help calm your mind and clarify how to move forward in a stressful situation. Things like a hobby, social club, physical exercise can all be outlets for relieving stress.<br><span class='fw-bold'> ● Find connections:</span> Personal connections provide stress-relief hormones that counteract the body’s fight or flight response. Surrounding yourself with people that you trust can also help you feel safe and calm. Joining a club or organization, talking to classmates, volunteering, or being on an intramural sports team can help create connections on and off-campus.<br><span class='fw-bold'> ● Practice self-care: </span>Setting aside time in your busy schedule to prioritize self-care helps reduce tension and stress. Having a spa day, taking a bubble bath, meditating, or taking yourself on a date are just some of the ways you can practice relaxation. <br><span class='fw-bold'>● Manage time effectively:</span> Ineffective time management can cause significant stress for college students. Developing time management strategies helps you stay organized and better prioritize your most important tasks. <br><span class='fw-bold'>● Stay organized:</span> It may seem overwhelming to keep track of everything with a schedule crammed full of classes, assignments, extracurricular and social activities. But, not having organizational skills will only add more stress and pressure to your plate. Try to keep your living environment and workspace tidy and organized as well to reduce distraction and anxiety. <br><span class='fw-bold'>● Practice positive thinking: </span>Positive thoughts can improve physical well-being and provide a clear mind. When you feel yourself thinking negatively, counteract these thoughts by giving yourself positive encouragement. Positive reinforcement duringstressful times can lessen the chance of developing chronic stress.<br><span class='fw-bold'> ● Try mindfulness exercises: </span>Mindfulness helps to drown out the background noise and increase awareness. Meditation is a great way to practice mindfulness, but you can also incorporate it into daily activities. This will not only improve memory and focus but is also a beneficial way to relieve stress.<br><span class='fw-bold'> ● Start journaling: </span>Journaling can be very therapeutic and lower stress levels. Writedown your daily thoughts and feelings or keep a stress journal. <br><span class='fw-bold'>● Don’t be afraid to reach out for help: </span>Even before you feel like the stress has become too much to handle, reach out for help.</div>";
                                        $s=0;
                                        for($s;$s<=$total;$s++)
                                        {
                                        
                                            $percent = intval(($s*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_stress").innerHTML="<div style=\"width:'.$percent.';background:'.$color_stress.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_stress").innerHTML="<div style=\"text-align:center;\">Stress</div>";
                                            parent.document.getElementById("indicator_stress").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($s*10).'%'.'</div>";
                                            parent.document.getElementById("content_stress").innerHTML="<div>'.$content_stress.'</div>";
                                            </script>';
                                        
                                        }
                                }
                                else if($value >= 0 && $value <= 3) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                     
                                    <?php
                                                                            
                                        $total=$value;
                                        $color_stress = "#81B622;opacity:0.5";
                                        // green
                                        $content_stress = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Excellent, you scored very low on your stress level test, which is excellent. This shows that you have lower stress levels and are less affected by stress. This shows that you are not easily irritated by anything. You don't have the fear of failing in the exam. You are always hopeful that you will definitely reach your goal. You are excited and optimistic about the expectations of your parents. Nothing can easily distract you. You listen and understand your class lectures carefully, and you don't get upset if you ever miss a lecture. You know what you must do and how you must achieve your goal, so you do not take stress, which is a very good thing. This gives you a lot of advantage in moving forward in your career. When you are relaxed, the quality of a work automatically increases</div>";
                                        $s=0;
                                        for($s;$s<=$total;$s++)
                                        {
                                        
                                            $percent = intval(($s*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_stress").innerHTML="<div style=\"width:'.$percent.';background:'.$color_stress.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_stress").innerHTML="<div style=\"text-align:center;\">Stress</div>";
                                            parent.document.getElementById("indicator_stress").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($s*10).'%'.'</div>";
                                            parent.document.getElementById("content_stress").innerHTML="<div>'.$content_stress.'</div>";
                                            </script>';
                                        
                                        }
                                }
                    
                            }
                    
                            if($key == "Time Management") {
                    
                                if($value >= 7 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                                                                        
                                    $total= $value;
                                    $content_time = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>According to all the answers given by you, you achieve high level in the field of Time Management. This score shows that you are very punctual about your time. You are good at preparing schedules for studies/exams/work. Whatever plans you make, follow them successfully. You keep track of your actions. You follow your strict schedule. You do your studies in a very organized manner so that you do not face any problem in achieving your career goal. You study for the whole academic year without getting stressed. You make a time table for each of your tasks and follow them so that your work gets done at the right time. And this gives you enough time for other activities</div> ";
                                    $color_time = "#81B622;opacity:0.5";
                                    // green
                                    $t=0;
                                    for($t;$t<=$total;$t++)
                                    {   
                                    $percent = intval(($t*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_time").innerHTML="<div style=\"width:'.$percent.';background:'.$color_time.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_time").innerHTML="<div style=\"text-align:center; font-weight:bold\"> Time Management</div>";
                                        parent.document.getElementById("indicator_time").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($t*10).'%'.'</div>";
                                        parent.document.getElementById("content_time").innerHTML="<div>'.$content_time.'</div>";
                                        </script>';
                                    
                                    }
                    
                    
                                } 
                                else if($value >= 4 && $value <= 6) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                  
                                    <?php
                                                                        
                                    $total= $value;
                                    $content_time = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the Time Management Domain are moderate. It indicates that you are on a threshold of your time management process, punctuality, following the timelines etc. Sometimes you’re not able to see the big picture and plan accordingly. It cannot be denied that you are good at preparing schedules for studies/exams/work. You often make plans, but they are rarely followed. You are not able to track your work keeping in mind the real goal. You are not strict about yourself so that you are not able to follow the programs made by yourself, but this is not always the case. You get tensed from the exam due to not having proper time management. Due to which you do not get the results according to your mind. You make a time table, but you have to make a lot of effort to implement it, it does not happen easily. You understand the importance of time. That's why you always try to complete your work on time. For this you can meet our psychologist. Along with this, we are telling you some tips here which will help you in time management.<br><br> <i class='fw-bold'>But, nothing to worry about. You can enhance your Time Management stage in the following way: </i><br><span class='fw-bold'>● Figure out how you’re currently spending your time: </span>To optimize your personal time management, you first need to figure out where the time is going. Try diligently logging your time for a week by tracking your daily activities. <br><span class='fw-bold'>● Create a daily schedule—and stick with it:</span> Putting everything on paper will prevent you from lying awake at night tossing and turning over the tasks running through your brain. Instead, your subconscious goes to work on your plans while you are asleep, which means you can wake up in the morning with new insights for the workday. If you can’t do it the day before, make sure you write out your list first thing in the morning. You’ll find that the time you spend creating a clear plan is nothing compared to the time you’ll lose jumping between tasks when you lack such a plan <br><span class='fw-bold'>● Prioritize wisely:</span> Prioritization is key for successful time management at work. Start by eliminating tasks that you shouldn’t be performing in the first place. Then identify the three or four most important tasks and do those first—that way, you make sure you finish the essentials.<br><span class='fw-bold'> ● Group similar tasks together:</span> Save yourself time and mental energy by trying to complete all of one type of to-do before moving on to the next.<br><span class='fw-bold'> ● Avoid the urge to multitask:</span> This is one of the simplest time management tips for work, yet it can be one of the hardest to follow. Focus on the task at hand and block outall distractions. <br><span class='fw-bold'>● Assign time limits to tasks:</span> Part of creating your schedule should involve setting timelimits on tasks instead of just working until they’re done. To-do lists are great and wonderful, but sometimes you might feel like you never check anything off. <br><span class='fw-bold'>● Build in buffers: </span>It may sound counterintuitive, but breaks are essential to better time management. Make breaks a part of your schedule. When you finish a task, give yourself time to breathe. Take mini breaks to recharge, whether that be a short walk, a game of ping pong, some meditation, etc.<br><span class='fw-bold'>● Learn to say no:</span> You’ll never learn how to manage time at work if you don’t learn how to say no. Only you truly know what you have time for, so if you need to decline a request in order to focus on more important tasks, don’t hesitate to do so. And if you take on a project that is obviously going nowhere, don’t be afraid to let it go.<br><span class='fw-bold'> ● Get organized:</span> For effective time management, this tip needs to go on your to-do list. Ifyou have piles of papers scattered all over your desk, finding the one you need will be like finding a needle in a haystack. There are few things as frustrating as wasting valuable time looking for misplaced items. <br><span class='fw-bold'>● Eliminate distractions: </span>Social media, web browsing, co-workers, text messages, instant messaging—the distractions at work can be limitless. A key to personal time management is being proactive about getting rid of them. Shut your door to limit interruptions.</div>";
                                    $color_time = "#FFA500;opacity:0.5";
                                    // orange
                                    $t=0;
                                    for($t;$t<=$total;$t++)
                                    {   
                                    $percent = intval(($t*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_time").innerHTML="<div style=\"width:'.$percent.';background:'.$color_time.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_time").innerHTML="<div style=\"text-align:center; font-weight:bold\"> Time Management</div>";
                                        parent.document.getElementById("indicator_time").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($t*10).'%'.'</div>";
                                        parent.document.getElementById("content_time").innerHTML="<div>'.$content_time.'</div>";
                                        </script>';
                                    
                                    }
                                }
                                else if($value >= 0 && $value <= 3) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                                                                        
                                    $total= $value;
                                    $content_time = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>bhghghYour responses are very poor in the time management domain, which highlights that you face  challenges in managing things and your work. This is a significant level in both your personal  and professional life. Your responses suggest that you have a great deal of difficulty creating a  schedule for your studies, tests, and work because of which you are unable to successfully carry  out your study plan. You are unable to keep track of your tasks. You don't follow the rules  strictly and are neither strict with yourself nor the work. Your exam results are unsatisfactory  because of the disorganised way that you studied. You don't study for the whole academic year.  Preferably, you study just before the exam and get stressed. You are constantly preoccupied  with other things.<br><br>  Nothing to worry about, though. You need to seek help from our mental health professional.<br> Also, You can learn to manage your time in the following way: <br><span class= class='fw-bold'>   ●  </span>Seek help from our mental health professional <br><span class='fw-bold'>   ●  </span> Figure out how you are currently spending your time<br><span class='fw-bold'>   ●  </span> Create a daily schedule and stick to it <br><span class='fw-bold'>   ●  </span> Prioritize things wisely <br><span class='fw-bold'>   ●  </span> Group similar task together<br><span class='fw-bold'>   ●  </span>Avoid the urge to multitask <br><span class='fw-bold'>   ●  </span> Assign time limits to tasks <br><span class='fw-bold'>   ●  </span> Take breaks in between the tasks <br><span class='fw-bold'>   ●  </span> Learn to say no assertively<br><span class='fw-bold'>   ●  </span>Get your desk organized <br><span class='fw-bold'>   ●  </span>Eliminate distractions </div>";
                                    $color_time = "#FF0000;opacity:0.5";
                                    // red
                                    $t=0;
                                    for($t;$t<=$total;$t++)
                                    {   
                                    $percent = intval(($t*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_time").innerHTML="<div style=\"width:'.$percent.';background:'.$color_time.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_time").innerHTML="<div style=\"text-align:center; font-weight:bold\"> Time Management</div>";
                                        parent.document.getElementById("indicator_time").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($t*10).'%'.'</div>";
                                        parent.document.getElementById("content_time").innerHTML="<div>'.$content_time.'</div>";
                                        </script>';
                                    
                                    }
                                }
                    
                            }
                    
                            if($key == "Sleep") {
                    
                                if($value >= 8 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                  
                                        <?php
                                                                            
                                        $total= $value;
                                        $content_sleep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>From the responses given to you on the Sleep Domain, it is reflected that you do not have any kind of problem-related to sleep. Which is a very good sign of your good mental health. You get enough sleep. By which you can keep yourself relaxed which increases your concentration, strengthens the thinking process, and you become goal focused. It appears that you have a certain sleep pattern, you usually have no problem falling asleep, you get enough sleep at night. You sleep well so that you do not feel tired or sleepy during the day. You usually sleep well.</div> ";
                                        $color_sleep = "#81B622;opacity:0.5";
                                        // green
                                        $sp=0;
                    
                                        for($sp;$sp<=$total;$sp++)
                                        {
                                        $percent = intval(($sp*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_sleep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_sleep.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_sleep").innerHTML="<div style=\"text-align:center; font-weight:bold\"> Sleep</div>";
                                            parent.document.getElementById("indicator_sleep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($sp*10).'%'.'</div>";
                                            parent.document.getElementById("content_sleep").innerHTML="<div>'.$content_sleep.'</div>";
                                            </script>';
                                        
                                        }
                                } 
                                else if($value >= 4 && $value <= 7) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                  
                                        <?php
                                                                            
                                        $total= $value;
                                        $content_sleep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>All the responses you have given in the <span class='fw-bold'>Sleep domain </span>, it shows that you have a problem relatedto sleep. Which is now on the verge of a big problem. If not taken care of, it will grow into a mental disorder. Although it's still on initial level you can easily improve it. All the answers you have given show that you have not formed a definite sleep pattern yet. You usually have trouble falling asleep. You are not able to get enough sleep at night. Because of which you feel tired / sleepy during the day. You may sometimes need or take medicine to help you sleep. This doesn't always happen. But you are facing sleep problem. <br><i><span class='fw-bold'>But, nothing to worry about. You can enhance your Sleeping stage in the following way:</i></span><br><span class='fw-bold'> ● Go bland before bedtime. </span>To fall asleep quickly, avoid caffeine, nicotine, and alcohol for at least four hours before you go to bed. <br><span class='fw-bold'>● Be predictable. </span>Go to bed around the same time every night and try to follow a similar routine. Waking at the same time every morning is also essential in keeping a regularsleep schedule.<br><span class='fw-bold'> ● Don’t toss and turn: </span>If you can’t sleep after 20 minutes, get out of bed and do something else until you feel sleepy again. Tossing and turning may cause more anxiety than relaxation.<br><span class='fw-bold'> ● Save the bed for sleep and sex: </span>Avoid paying bills, reading the paper or watching TV in bed. It’s important to correlate your bed with sleep, not stress. <br><span class='fw-bold'>● Take a bath: </span>Take a warm bath before bedtime to help your body relax. You may want toadd lavender or other soothing oils into your bath water. Also, taking a bath can be more relaxing than a shower. <br><span class='fw-bold'>● Exercise early: </span>If you exercise, do it before dinner, not after. Exercising late at night may wake you up instead of helping you relax. <br><span class='fw-bold'>● Make your room dark:</span> People usually sleep best in a cool, dark environment. Hanging heavy drapes or wearing a sleep mask may help.<br><span class='fw-bold'> ● Grab a snack: </span>It’s hard to sleep hungry, so try a light snack before bedtime. Warm milk is thought to induce sleep by releasing the natural hormone L-tryptophan. Keep whatever you eat light, because eating a large meal can cause restlessness. <br><span class='fw-bold'>● Cut naps short:</span> If you have trouble falling asleep, consider avoiding naps. At the very least, limit them to less than an hour before mid-afternoon.<br><span class='fw-bold'> ● Address your stress:</span> If daytime troubles keep you awake, try jotting notes about ways to deal with them. Leave stress at the bedroom door, if possible.</div>";
                                        $color_sleep = "#FFA500;opacity:0.5";
                                        // orange
                                        $sp=0;
                    
                                        for($sp;$sp<=$total;$sp++)
                                        {
                                        $percent = intval(($sp*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_sleep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_sleep.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_sleep").innerHTML="<div style=\"text-align:center; font-weight:bold\"> Sleep</div>";
                                            parent.document.getElementById("indicator_sleep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($sp*10).'%'.'</div>";
                                            parent.document.getElementById("content_sleep").innerHTML="<div>'.$content_sleep.'</div>";
                                            </script>';
                                        
                                        }
                                }
                                else if($value >= 0 && $value <= 3) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                  
                                        <?php
                                                                            
                                        $total= $value;
                                        $content_sleep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>All the responses you have given in the <span class='fw-bold'>Sleep domain </span>, it shows that you have a problem relatedto sleep. Which is now on the verge of a big problem. If not taken care of, it will grow into a mental disorder. Although it's still on initial level you can easily improve it. All the answers you have given show that you have not formed a definite sleep pattern yet. You usually have trouble falling asleep. You are not able to get enough sleep at night. Because of which you feel tired / sleepy during the day. You may sometimes need or take medicine to help you sleep. This doesn't always happen. But you are facing sleep problem. <br><i><span class='fw-bold'>But, nothing to worry about. You can enhance your Sleeping stage in the following way:</i></span><br><span class='fw-bold'> ● Go bland before bedtime. </span>To fall asleep quickly, avoid caffeine, nicotine, and alcohol for at least four hours before you go to bed. <br><span class='fw-bold'>● Be predictable. </span>Go to bed around the same time every night and try to follow a similar routine. Waking at the same time every morning is also essential in keeping a regularsleep schedule.<br><span class='fw-bold'> ● Don’t toss and turn: </span>If you can’t sleep after 20 minutes, get out of bed and do something else until you feel sleepy again. Tossing and turning may cause more anxiety than relaxation.<br><span class='fw-bold'> ● Save the bed for sleep and sex: </span>Avoid paying bills, reading the paper or watching TV in bed. It’s important to correlate your bed with sleep, not stress. <br><span class='fw-bold'>● Take a bath: </span>Take a warm bath before bedtime to help your body relax. You may want toadd lavender or other soothing oils into your bath water. Also, taking a bath can be more relaxing than a shower. <br><span class='fw-bold'>● Exercise early: </span>If you exercise, do it before dinner, not after. Exercising late at night may wake you up instead of helping you relax. <br><span class='fw-bold'>● Make your room dark:</span> People usually sleep best in a cool, dark environment. Hanging heavy drapes or wearing a sleep mask may help.<br><span class='fw-bold'> ● Grab a snack: </span>It’s hard to sleep hungry, so try a light snack before bedtime. Warm milk is thought to induce sleep by releasing the natural hormone L-tryptophan. Keep whatever you eat light, because eating a large meal can cause restlessness. <br><span class='fw-bold'>● Cut naps short:</span> If you have trouble falling asleep, consider avoiding naps. At the very least, limit them to less than an hour before mid-afternoon.<br><span class='fw-bold'> ● Address your stress:</span> If daytime troubles keep you awake, try jotting notes about ways to deal with them. Leave stress at the bedroom door, if possible.</div>";
                                        $color_sleep = "#FF0000;opacity:0.5";
                                        // red
                                        $sp=0;
                    
                                        for($sp;$sp<=$total;$sp++)
                                        {
                                        $percent = intval(($sp*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_sleep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_sleep.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_sleep").innerHTML="<div style=\"text-align:center; font-weight:bold\">Sleep</div>";
                                            parent.document.getElementById("indicator_sleep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($sp*10).'%'.'</div>";
                                            parent.document.getElementById("content_sleep").innerHTML="<div>'.$content_sleep.'</div>";
                                            </script>';
                                        
                                        }
                                   }
                    
                            }
                    
                            if($key == "Exam") {
                    
                                if($value >= 7 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                               
                                    <?php
                                                                            
                                        $total=$value;
                                        $color_work="#81B622;opacity:0.5";
                                        // green
                                         $content_work = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto; display:none' >All the responses you have given in the Sleep domain, it shows that you have a problem relatedto sleep. Which is now on the verge of a big problem. If not taken care of, it will grow into a mental disorder. Although it's still on initial level you can easily improve it. All the answers you have given show that you have not formed a definite sleep pattern yet. You usually have trouble falling asleep. You are not able to get enough sleep at night. Because of which you feel tired / sleepy during the day. You may sometimes need or take medicine to help you sleep. This doesn't always happen. But you are facing sleep problem. <br><i><span class='fw-bold'>But, nothing to worry about. You can enhance your Sleeping stage in the following way:</i></span><br><span class='fw-bold'> ● Go bland before bedtime. </span>To fall asleep quickly, avoid caffeine, nicotine, and alcohol for at least four hours before you go to bed. <br><span class='fw-bold'>● Be predictable. </span>Go to bed around the same time every night and try to follow a similar routine. Waking at the same time every morning is also essential in keeping a regularsleep schedule.<br><span class='fw-bold'> ● Don’t toss and turn: </span>If you can’t sleep after 20 minutes, get out of bed and do something else until you feel sleepy again. Tossing and turning may cause more anxiety than relaxation.<br><span class='fw-bold'> ● Save the bed for sleep and sex: </span>Avoid paying bills, reading the paper or watching TV in bed. It’s important to correlate your bed with sleep, not stress. <br><span class='fw-bold'>● Take a bath: </span>Take a warm bath before bedtime to help your body relax. You may want toadd lavender or other soothing oils into your bath water. Also, taking a bath can be more relaxing than a shower. <br><span class='fw-bold'>● Exercise early: </span>If you exercise, do it before dinner, not after. Exercising late at night may wake you up instead of helping you relax. <br><span class='fw-bold'>● Make your room dark:</span> People usually sleep best in a cool, dark environment. Hanging heavy drapes or wearing a sleep mask may help.<br><span class='fw-bold'> ● Grab a snack: </span>It’s hard to sleep hungry, so try a light snack before bedtime. Warm milk is thought to induce sleep by releasing the natural hormone L-tryptophan. Keep whatever you eat light, because eating a large meal can cause restlessness. <br><span class='fw-bold'>● Cut naps short:</span> If you have trouble falling asleep, consider avoiding naps. At the very least, limit them to less than an hour before mid-afternoon.<br><span class='fw-bold'> ● Address your stress:</span> If daytime troubles keep you awake, try jotting notes about ways to deal with them. Leave stress at the bedroom door, if possible.</div>";
                                        $w=0;
                                        for($w;$w<=$total;$w++)
                                        {
                                        
                                            $percent = intval(($w*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_work").innerHTML="<div style=\"width:'.$percent.';background:'.$color_work.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_work").innerHTML="<div style=\"text-align:center; font-weight:bold\"> Work</div>";
                                            parent.document.getElementById("indicator_work").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($w*10).'%'.'</div>";
                                            parent.document.getElementById("content_work").innerHTML="<div>'.$content_work.'</div>";
                                            </script>';
                                        
                                        }
                                } 
                                else if($value >= 4 && $value <= 6) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                                                                            
                                        $total=$value;
                                        $color_work="#FFA500;opacity:0.5";
                                        // orange
                                        $content_work = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto; display:none'>All the responses you have given in the Sleep domain, it shows that you have a problem relatedto sleep. Which is now on the verge of a big problem. If not taken care of, it will grow into a mental disorder. Although it's still on initial level you can easily improve it. All the answers you have given show that you have not formed a definite sleep pattern yet. You usually have trouble falling asleep. You are not able to get enough sleep at night. Because of which you feel tired / sleepy during the day. You may sometimes need or take medicine to help you sleep. This doesn't always happen. But you are facing sleep problem. <br><i><span class='fw-bold'>But, nothing to worry about. You can enhance your Sleeping stage in the following way:</i></span><br><span class='fw-bold'> ● Go bland before bedtime. </span>To fall asleep quickly, avoid caffeine, nicotine, and alcohol for at least four hours before you go to bed. <br><span class='fw-bold'>● Be predictable. </span>Go to bed around the same time every night and try to follow a similar routine. Waking at the same time every morning is also essential in keeping a regularsleep schedule.<br><span class='fw-bold'> ● Don’t toss and turn: </span>If you can’t sleep after 20 minutes, get out of bed and do something else until you feel sleepy again. Tossing and turning may cause more anxiety than relaxation.<br><span class='fw-bold'> ● Save the bed for sleep and sex: </span>Avoid paying bills, reading the paper or watching TV in bed. It’s important to correlate your bed with sleep, not stress. <br><span class='fw-bold'>● Take a bath: </span>Take a warm bath before bedtime to help your body relax. You may want toadd lavender or other soothing oils into your bath water. Also, taking a bath can be more relaxing than a shower. <br><span class='fw-bold'>● Exercise early: </span>If you exercise, do it before dinner, not after. Exercising late at night may wake you up instead of helping you relax. <br><span class='fw-bold'>● Make your room dark:</span> People usually sleep best in a cool, dark environment. Hanging heavy drapes or wearing a sleep mask may help.<br><span class='fw-bold'> ● Grab a snack: </span>It’s hard to sleep hungry, so try a light snack before bedtime. Warm milk is thought to induce sleep by releasing the natural hormone L-tryptophan. Keep whatever you eat light, because eating a large meal can cause restlessness. <br><span class='fw-bold'>● Cut naps short:</span> If you have trouble falling asleep, consider avoiding naps. At the very least, limit them to less than an hour before mid-afternoon.<br><span class='fw-bold'> ● Address your stress:</span> If daytime troubles keep you awake, try jotting notes about ways to deal with them. Leave stress at the bedroom door, if possible.</div>";
                                        $w=0;
                                        for($w;$w<=$total;$w++)
                                        {
                                        
                                            $percent = intval(($w*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_work").innerHTML="<div style=\"width:'.$percent.';background:'.$color_work.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_work").innerHTML="<div style=\"text-align:center; font-weight:bold\">Work</div>";
                                            parent.document.getElementById("indicator_work").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($w*10).'%'.'</div>";
                                            parent.document.getElementById("content_work").innerHTML="<div>'.$content_work.'</div>";
                                            </script>';
                                        
                                        }
                                   
                                }
                                else if($value >= 0 && $value <= 3) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                               
                                    <?php
                                                                            
                                        $total=$value;
                                        $color_work="#FF0000;opacity:0.5";
                                        // red
                                        $content_work = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto; display:none'>All the responses you have given in the Sleep domain, it shows that you have a problem relatedto sleep. Which is now on the verge of a big problem. If not taken care of, it will grow into a mental disorder. Although it's still on initial level you can easily improve it. All the answers you have given show that you have not formed a definite sleep pattern yet. You usually have trouble falling asleep. You are not able to get enough sleep at night. Because of which you feel tired / sleepy during the day. You may sometimes need or take medicine to help you sleep. This doesn't always happen. But you are facing sleep problem. <br><i><span class='fw-bold'>But, nothing to worry about. You can enhance your Sleeping stage in the following way:</i></span><br><span class='fw-bold'> ● Go bland before bedtime. </span>To fall asleep quickly, avoid caffeine, nicotine, and alcohol for at least four hours before you go to bed. <br><span class='fw-bold'>● Be predictable. </span>Go to bed around the same time every night and try to follow a similar routine. Waking at the same time every morning is also essential in keeping a regularsleep schedule.<br><span class='fw-bold'> ● Don’t toss and turn: </span>If you can’t sleep after 20 minutes, get out of bed and do something else until you feel sleepy again. Tossing and turning may cause more anxiety than relaxation.<br><span class='fw-bold'> ● Save the bed for sleep and sex: </span>Avoid paying bills, reading the paper or watching TV in bed. It’s important to correlate your bed with sleep, not stress. <br><span class='fw-bold'>● Take a bath: </span>Take a warm bath before bedtime to help your body relax. You may want toadd lavender or other soothing oils into your bath water. Also, taking a bath can be more relaxing than a shower. <br><span class='fw-bold'>● Exercise early: </span>If you exercise, do it before dinner, not after. Exercising late at night may wake you up instead of helping you relax. <br><span class='fw-bold'>● Make your room dark:</span> People usually sleep best in a cool, dark environment. Hanging heavy drapes or wearing a sleep mask may help.<br><span class='fw-bold'> ● Grab a snack: </span>It’s hard to sleep hungry, so try a light snack before bedtime. Warm milk is thought to induce sleep by releasing the natural hormone L-tryptophan. Keep whatever you eat light, because eating a large meal can cause restlessness. <br><span class='fw-bold'>● Cut naps short:</span> If you have trouble falling asleep, consider avoiding naps. At the very least, limit them to less than an hour before mid-afternoon.<br><span class='fw-bold'> ● Address your stress:</span> If daytime troubles keep you awake, try jotting notes about ways to deal with them. Leave stress at the bedroom door, if possible.</div>";
                                        $w=0;
                                        for($w;$w<=$total;$w++)
                                        {
                                        
                                            $percent = intval(($w*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_work").innerHTML="<div style=\"width:'.$percent.';background:'.$color_work.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_work").innerHTML="<div style=\"text-align:center; font-weight:bold\"> Work</div>";
                                            parent.document.getElementById("indicator_work").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($w*10).'%'.'</div>";
                                            parent.document.getElementById("content_work").innerHTML="<div>'.$content_work.'</div>";
                                            </script>';
                                        
                                        }
                    
                                }
                    
                            }
                    
                            if($key == "Coping Management") {
                    
                                if($value >= 8 && $value <= 11) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                   
                                    <?php
                                    $total=$value;
                                    $color_cop = "#81B622;opacity:0.5";
                                    // green
                                    $content_cop = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Looking at all the answers you've given, your Coping Strategies seem to be of a high standard. Which is very commendable. You know that coping strategies are specific efforts that individuals employ to manage challenges or issues in life. You believe that you can overcome difficulties during your phase in life. You know very well whether it is separation or with everyone, how to live, how to manage with them. You are ready to face any kind of challenge, rather than giving any imaginary reason you want to avoid group discussion/exam. Your coping strategies make you feel confident talking to your parents/family. You share your thoughts on your mental state with your parents/close friends. You keep your fellow friends/relatives/family in balance and do not have any estrangement with them. If there is a conflict, you manage it well. You always try to analyse and find out the reasons for your shortcoming and discuss them with teachers/seniors/fellow friends. You are always looking for ways to make up for your flaws. You work with practice tests with the intention of improving performance and participating fully in practice tests/exams. You are able to live independently. You do not smoke/alcohol/tobacco or use drugs to reduce your stress like other people. You get along with everyone even if their performance is worse than yours. Students whose performance is better than you, you also keep them in sync. You discuss study methods/presentation skills with fellow students who do better than you. Believe your discipline, I am generally well dressed and/or well dressed.</div> ";
                                    $c=0;
                                    for($c;$c<=$total;$c++)
                                    {
                                       
                                        $percent = intval(($c*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_cop").innerHTML="<div style=\"width:'.$percent.';background:'.$color_cop.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_cop").innerHTML="<div style=\"text-align:center; font-weight:bold\">Coping  Mechanism</div>";
                                        parent.document.getElementById("indicator_cop").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($c*10).'%'.'</div>";
                                        parent.document.getElementById("content_cop").innerHTML="<div style=\"text-align:center;\">'.$content_cop.'</div>";
                                        </script>';
                                     
                                    }
                                } 
                                else if($value >= 4 && $value <= 7) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    $total=$value;
                                    $color_cop = "#FFA500;opacity:0.5";
                                    // orange
                                    $content_cop = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>The answers given by you show that your Coping Strategy is of average level to face the challenges. You are now standing on the threshold of what is conceivable for you. Your responses show that you can overcome difficulties during your stage in life but you need some inspiration or insight. You often prefer to be in isolation. You sometimes want to avoid group discussions/exams by giving imaginary reasons when you are not prepared. You do not feel completely confident in talking to your parents/family. You are reluctant to share your thoughts about your mental state with your parents/close friends due to weakness in your management methods. You often get into fights with your fellow friends/relatives/family. You try to analyze and find out the reasons for your shortcoming in a critical situation and discuss it with teachers/seniors/fellow friends. You do it only when it is needed, looking for ways to fix your flaws. You avoid taking practice tests/exams. You sometimes have trouble living independently. In such a situation you need your friends or a family member. You sometimes smoke/drink alcohol/chew tobacco / take medicines to reduce your stress. You spend your time with friends. You shy away from discussing study methods/presentation skills with fellow students who do better than you. You don't give that much importance to the outfit. You are facing problems in Coping Strategy. <br><i><span class='fw-bold'>But, nothing to worry about. You can enhance your Coping Strategy in the following way: </i></span><br><span class='fw-bold'>● Lower your expectations.</span><br><span class='fw-bold'> ● Ask others to help or assist you. </span><br><span class='fw-bold'>● Take responsibility for the situation.</span><br><span class='fw-bold'> ● Engage in problem-solving. </span><br><span class='fw-bold'>● Maintain emotionally supportive relationships.</span><br><span class='fw-bold'> ● Maintain emotional composure or, alternatively, express distressing emotions.</span><br><span class='fw-bold'>● Get enough good quality sleep.</span><br><span class='fw-bold'> ● Eat a well-balanced diet.</span><br><span class='fw-bold'> ● Exercise on a regular basis.</span><br><span class='fw-bold'> ● Take brief rest periods during the day to relax.</span><br><span class='fw-bold'> ● Take vacations away from home and work.</span><br><span class='fw-bold'> ● Engage in pleasurable or fun activities every day.</span><br><span class='fw-bold'> ● Practice relaxation exercises such as yoga, prayer, meditation, or progressive muscle relaxation. </span><br><span class='fw-bold'>● Avoid the use of caffeine and alcohol.</span><br><span class='fw-bold'> ● Challenge previously held beliefs that are no longer adaptive.</span><br><span class='fw-bold'> ● Directly attempt to change the source of stress.</span><br><span class='fw-bold'> ● Distance yourself from the source of stress.</span><br><span class='fw-bold'> ● View the problem from a religious perspective.</span></div> ";
                                    $c=0;
                                    for($c;$c<=$total;$c++)
                                    {
                                       
                                        $percent = intval(($c*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_cop").innerHTML="<div style=\"width:'.$percent.';background:'.$color_cop.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_cop").innerHTML="<div style=\"text-align:center; font-weight:bold\"> Coping  Mechanism</div>";
                                        parent.document.getElementById("indicator_cop").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($c*10).'%'.'</div>";
                                        parent.document.getElementById("content_cop").innerHTML="<div style=\"text-align:center;\">'.$content_cop.'</div>";

                                        </script>';
                                     
                                    }
                                }
                                else if($value >= 0 && $value <= 3) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    $total=$value;
                                    $color_cop = "#FF0000;opacity:0.5";
                                    // red
                                    $content_cop = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Based on the responses given by you, it can be said that your <span class='fw-bold'>Coping Strategies </span> are of low level. Due to this, you have to face challenges in your academic and personal life. You don't even believe that you can overcome difficulties during your stage in life. You always like to be in isolation. You mostly want to avoid group discussions/exams by giving hypothetical reasons. You don't feel confident talking to your parents/family. You do not share your thoughts about your mental state with your parents/close friends. You often have fights with your fellow friends/relatives/family. You always shy away from analyzing and trying to find out the reasons for your lack and don't discuss it with teachers/seniors/fellow friends. You always find ways to improve your shortcomings, not even think about them. You also do not participate in practice tests with the intention of improving your performance. You cannot live independently or with friends such as needing a family member to be with you. You smoke/drink alcohol/smoke or chew tobacco / take medicines or drugs to reduce your stress. You don't like being with a group of fellow friends whose performance is worse than yours. <br>You are facing problems in Coping Strategy. <br><span class='fw-bold'><i>But, nothing to worry about. You can enhance your Coping Strategy in the following way:</i> <br><span class='fw-bold'>● Lower your expectations.</span> <br><span class='fw-bold'>● Ask others to help or assist you.</span> <br><span class='fw-bold'>● Take responsibility for the situation.</span> <br><span class='fw-bold'>● Engage in problem-solving.</span> <br><span class='fw-bold'>● Maintain emotionally supportive relationships.</span> <br><span class='fw-bold'>● Maintain emotional composure or, alternatively, express distressing emotions.</span> <br><span class='fw-bold'>● Get enough good quality sleep.</span> <br><span class='fw-bold'>● Eat a well-balanced diet.</span> <br><span class='fw-bold'>● Exercise on a regular basis.</span> <br><span class='fw-bold'>● Take brief rest periods during the day to relax.</span> <br><span class='fw-bold'>● Take vacations away from home and work.</span> <br><span class='fw-bold'>● Engage in pleasurable or fun activities every day.</span> <br><span class='fw-bold'>● Practice relaxation exercises such as yoga, prayer, meditation, or progressive muscle relaxation.</span> <br><span class='fw-bold'>● Avoid the use of caffeine and alcohol.</span> <br><span class='fw-bold'>● Challenge previously held beliefs that are no longer adaptive.</span> <br><span class='fw-bold'>● Directly attempt to change the source of stress.</span> <br><span class='fw-bold'>● Distance yourself from the source of stress.</span> <br><span class='fw-bold'>● View the problem from a religious perspective</span></div>";
                                    $c=0;
                                    for($c;$c<=$total;$c++)
                                    {
                                       
                                        $percent = intval(($c*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_cop").innerHTML="<div style=\"width:'.$percent.';background:'.$color_cop.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_cop").innerHTML="<div style=\"text-align:center; font-weight:bold\"> Coping  Mechanism</div>";
                                        parent.document.getElementById("indicator_cop").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($c*10).'%'.'</div>";
                                        parent.document.getElementById("content_cop").innerHTML="<div>'.$content_cop.'</div>";
                                        </script>';
                                     
                                    }
                                }
                    
                            }
                    };
                    
                        ?>
                    
                    
                        
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    
                    <script type="text/javascript">
                    google.charts.load("current", {
                    packages: ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);
                    
                    function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                    ["Domain", "Score",{role: "style"}],
                   <?php

// Graph Bar
    
    $x = 0;
    foreach ($newArray_db as $key => $value) {

        if($key == "Adjustment") {

            if($value >= 7 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 6) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Attention") {

            if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 5 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 4) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Self") {

            if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 5 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 4) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Study") {

            if($value >= 9 && $value <= 11) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 8) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Depression") {

            if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            } 
            else if($value >= 5 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 4) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            }

        }

        if($key == "Anxiety") {

            if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            } 
            else if($value >= 5 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 4) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            }

        }

        if($key == "Stress") {

            if($value >= 7 && $value <= 11) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 6) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            }

        }

        if($key == "Time Management") {

            if($value >= 7 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 6) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Sleep") {

            if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

      

        if($key == "Coping Management") {

            if($value >= 8 && $value <= 11) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

       
        $x++;
    }
    ?>
                    ]);
                    
                    var view = new google.visualization.DataView(data);
                    // view.setColumns([0, 1,
                    // {
                    //     calc: "stringify",
                    //     sourceColumn: 1,
                    //     type: "string",
                    //     role: "annotation"
                    // },
                    // 2
                    // ]);
                    
                    
                    var options = {
                   
                    title: "Score for respective domains",
                 
                    height: 650,
                    bar: {
                        groupWidth: "80%"
                    },
                    legend: {
                        position: "none"
                    },
                     vAxis: {
                            maxValue: 10
                        }
                    //   hAxis: {
                    //       scaleType: 'log',
                    //       format: 'number'
                    //   }
                    };
                    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                    chart.draw(view, options);
                    }
                    
                    
                    
                    </script>
                    
                    <!--another graph -->
                
                    
                    <script src="js/student.js"> </script>
                   
     
<?php      

  }
  
$color_array = array('#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#A020F0', '#FFC0CB', '#FFA500', '#00008B', '#8B0000', '#023020', '#FFD700');

}else{
?>
        <!--Student not having any text then it shown -->
         <div class=" container mx-auto row footer" style="margin-top:120px;">
                             <div class="container bg-primary p-3">
                                
                                  <h3 class=" my-1 fw-bold text-center text-light">Welcome To Serac Education  </h3>
                             </div>
                              <div class="container">
                                 <h3 class=" fw-bold">&nbsp;</h3>
                                  <h3 class=" my-2 fw-bold text-center">You don't have take any test   </h3>
                                  <p class=" my-2 fw-bold text-center">Please clicked  Assestment tab  and give a test also get your result within a second</p>
                                   <div class="container align-middle">
                                   <p class="fw-bold text-center"><span class="align-middle">Click Here </span>&nbsp;<a href="dashboard"  class="btn border align-middle btn-outline-primary">Dashboard</a></p>
                                    </div>
                             </div>
                                 
                       <div class="col bg-warning p-3">
                        <h3 class=" my-1 fw-bold text-center text-light">Wish You All The Best !!</h3>
                       
                       </div>
                        
                     </div>  
<?php
}

?>

                         
 </body>
 </html>                 
                    
                    
