<?php
session_start();

 if(!isset($_SESSION['loggedin'])){ //if login in session is not set
    header("Location:/police/");
}

include('police_config.php');
// include ('header_report.php');
 
$mydate=getdate(date("U"));

// variable defined as
 $user_id = '';
 
$user_id = $_SESSION['user_id'];
// echo "User ID ". $user_id;


    

  $sql1 = "SELECT * FROM result where user_id='$user_id'";
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
      $anx = round(($row[3]/12)*10);
      $dep = round(($row[4]/12)*10);
      $ss = round(($row[5]/11)*10);
      $pstd = round(($row[6]/10)*10);
      $burn = round(($row[7]/9)*10);
      $js = round(($row[8]/12)*10);
      $we = round(($row[9]/10)*10);
      $wl = round(($row[10]/12)*10);
      $jobs = round(($row[11]/10)*10);
      $wlb = round(($row[12]/12)*10);
      $co = round(($row[13]/12)*10);
      $cm = round(($row[14]/12)*10);
      $fs = round(($row[15]/10)*10);
      $fp = round(($row[16]/28)*10);
      $examDate =$row[17];
      
      $assestmentDate = date("d-m-Y", strtotime($examDate)); 
      
      $ageDate= $_SESSION['dob'];
      $dbDate = date("Y", strtotime($ageDate));
        //   echo"database year ".$dbyear;
             $todayDate = Date('Y');
       //   echo"today year".$todayDate;
         $age = $todayDate - $dbDate;  //year

      $Domain_value_db = array();
   
    $Domain_name = array('Anxiety','Depression', 'Stress', 'PTSD', 'Burnout', 'Job Security', 'Work Environment', 'Work Load', 'Job Satisfaction', 'Work Life Balance','Career Opportunities','Coping Mechanism','Family Support','Female Police Person');
    
    array_push($Domain_value_db,"$anx", "$dep", "$ss", "$pstd", "$burn", "$js", "$we", "$wl", "$jobs","$wlb","$co","$cm","$fs"," $fp");
     
          //   print_r($Domain_value_db);
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
    <title><?php echo   $_SESSION['user'];?> - Police Professional Report</title>
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
.btn-pdf,.btn-home {background: #56cce1; color: #11486d; width: 150px;
}
</style>
</head>

<body>
        <!-- HTML content for PDF creation -->
        <!--button-->
          <div class="container gap-2 text-center" style="margin-right:-180px">
              <div><button type="button"   class="rounded-pill btn-pdf" onClick="window.print()"> Download Report!</button> </div>
              <div><a href="dashboard.php"><button type="button"  class="rounded-pill btn-home"> Home</button></a></div>
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
               <tr><th>Name:</th><td><?php echo   $_SESSION['user'];?></td></tr>
               <tr><th>Age:</th><td><?php echo $age ;?> Years</td></tr>
               <tr><th>Gender:</th><td class="text-capitalize"><?php echo $_SESSION['gender'] ;?></td></tr>
               <!--<tr><th>Profession: </th><td>12<sup>th</sup>std</td></tr>-->
               <!--<tr><th>Date Of Assessment: </th><td><?php echo "$mydate[month] $mydate[mday], $mydate[year]";?></span></td></tr>-->
                   <tr><th>Date of Assessment: </th><td><?php echo $assestmentDate ?></span></td></tr>
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
            <!--<img src="img\student-domain-img.png" class="mt-5 img-domain">-->
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
            <p class="lh-3 mt-5 "style="text-align: justify;"> Dear<span class="fw-bold"> <?php echo $_SESSION['user'];?></span>,<br><br>
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
                         
                   

              </div> 
             <!--first table-->
             <div>
               
                   <table class="table-print table-bordered p-2">
                      <thead>
                          <tr>
                            <th scope="col" class="sn p-2"> S.N</th>
                            <th scope="col" class="domain p-2"> Our Domain</th>
                            <th scope="col" class="score p-2">Your Finding</th>
                         </tr>
                      </thead>
                       
                       <tbody>
                            <?php
                            $i=1;
                         foreach ($newArray_db as $key => $value){  ?>
                             
                         <tr>
                              <td class="p-2 text-center"> <?php echo $i ?> </td>
                              <td class="p-2 text-center"> <?php echo $key ?> </td>
                              <td class="p-2 text-center"> <?php echo $value ?></td>
                        </tr>
                     
                    <?php $i++;} ?>
                    
                    </tbody>
                    
                </table>
             </div>
            

            </div>
            </div>
           <!-- end third page-->
          
           <!--fith page-->
           <div class="page container">
            <div class="page-body">
            <div>&nbsp</div>
            <h3 class="text-center fw-bold mt-5 fs-4">DETAILED POLICE PROFESSIONAL ASSESSMENT</h3>
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
                
               <!-- <div class="container graph-box" style="margin-left: -13px;margin-right: 13px;margin-top: 0;margin-bottom: 0;">-->
               <!-- <div class="g1 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height: 42px;width: 401px;margin-left: 454px;"> </div>-->
               <!-- <div class="g2 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height: 42px;width: 401px;margin-left: 403px;"> </div>-->
               <!-- <div class="g3 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height: 42px;width: 401px;margin-left: 148px;"></div>-->
               <!-- <div class="g4 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:353px;"></div>-->
               <!-- <div class="g5 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:302px;"></div>-->
               <!-- <div class="g6 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:250px;"></div>-->
               <!-- <div class="g7 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:199px;"></div>-->
               <!-- <div class="g8 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:98px;"></div>-->
               <!-- <div class="g9 border border-2 border-end-0  mb-1" style="margin-top: 350px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:47px;"></div>-->
               <!-- <div class="g10 border border-2 border-end-0 mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:-5px;"></div>-->
               <!--</div>-->
        
                  
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
         
        <!--family Support Content-->
        
        <div class="page container">
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_fem"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div class="mx-auto d-flex col-md-4">
        <div id="progressbar_fem" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div id="indicator_fem">Indicator</div>
        </div>
        </div>
        <div id="content_fem" class="mt-4"></div>
        </div>
        <!--body -->
         </div>
        <!--<div class="page container">-->
        <!--<div class="page-body">-->
        <!--<div class="fw-bold Blank">&nbsp</div>-->
        <!--<div class="mx-auto">-->
        <!-- Progress information -->
        <!--<<div id="information_fem"  class="text-uppercase fs-5 fw-bold my-2 text-center"> </div>-->
        <!--<div class="mx-auto d-flex col-md-4">-->
        <!--<div id="progressbar_fem" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>-->
        <!--<div id="indicator_fem">Indicator</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div id="content_fem" class="mt-4"></div>-->
        <!--</div>-->
        <!--body -->
        <!-- </div>-->
         
         <!-- Female Police Person  domaint-->
         
        <div class="page container">
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_fp"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div class="mx-auto d-flex col-md-4">
        <div id="progressbar_fp" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div id="indicator_fp">Indicator</div>
        </div>
        </div>
        <div id="content_fp" class="mt-4"></div>
        </div>
        <!--body -->
         </div>

        <!--<div class="page container">-->
        <!--<div class="page-body">-->
        <!--<div class="fw-bold Blank">&nbsp</div>-->
        <!--<div class="mx-auto">-->
        <!-- Progress information -->
        <!--<<div id="information_fp"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>-->
        <!--<div class="mx-auto d-flex col-md-4">-->
        <!--<div id="progressbar_fp" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>-->
        <!--<div id="indicator_fp">Indicator</div>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div id="content_fp" class="mt-4"></div>-->
        <!--</div>-->
        <!--body -->
        <!-- </div>-->
         
         
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
                    
                            // echo "Doamain Name High" . $key . " Value " . $value."<br>";
                     
                            if($key == "Anxiety") {
                    
                                if($value >= 10 && $value <= 12) { ?>
                    
                                   <?php
                                   $total = $value;
                                    $color_adj = "#81B622;opacity: 0.5";
                                    // green High
                                    $content_adj = "<div class='col-md-11 '>We recently received the results of your mental health test, which revealed that you have a high level of anxiety. We conducted a thorough investigation to better understand the factors contributing to your anxiety, including a review of your work environment, job responsibilities, and personal life.<br><br>  Our investigation uncovered several potential causes of your anxiety. To begin, as a police officer, you are subjected to a high-stress work environment that can be mentally and emotionally draining. Officers are frequently subjected to traumatic events such as violence, accidents, and natural disasters, all of which can cause feelings of fear, worry, and anxiety.<br><br>  Your job responsibilities and work schedule may also be contributing to your anxiety. Long and irregular shifts in police work can disrupt work-life balance and make it difficult for employees to maintain a healthy lifestyle. The nature of police work may also result in a sense of pressure to maintain public safety and order, which can increase stress and anxiety.<br><br>  Our investigation also uncovered potential personal factors that could be causing your anxiety. These may include financial stress, family issues, and other personal concerns that may be impacting your mental health and well-being.<br><br>  Based on our findings, we recommend a number of measures to help you deal with your anxiety and improve your overall well-being. To begin, we recommend that you should be given access to mental health resources and counselling services to assist you in managing their anxiety and maintaining their mental health. We also recommend implementing workplace accommodations such as flexible scheduling options and opportunities for rest and relaxation to reduce stress and improve work-life balance.<br><br>  Furthermore, we recommend that you should be provided with training and support for dealing with traumatic events as well as developing coping strategies for dealing with stress and anxiety. Finally, we advise you to make an effort to identify and address any personal factors that may be contributing to your anxiety.<br><br>  Finally, we are committed to creating a supportive workplace environment that prioritises all employees' mental health and well-being. We can improve your overall well-being and job performance by addressing the potential causes of your anxiety and providing the necessary support and resources.<br><br></div>";
                                    $ad=0;
                    
                                   for($ad;$ad<=$total;$ad++)
                                   {
                                       $percent = intval($ad*10)."%"; 
                                      
                                        echo '<script>
                                        parent.document.getElementById("progressbar_adj").innerHTML="<div style=\"width:'.$percent.';background:'.$color_adj.'; ;height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_adj").innerHTML="<div style=\"text-align:center;\">Anxiety</div>";
                                        parent.document.getElementById("indicator_adj").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($ad*10).'%'.'</div>";
                                        parent.document.getElementById("content_adj").innerHTML="<div>'.$content_adj.'</div>";

                                       </script>';
                                   
                                   }
                                }
                                else if($value >= 6 && $value <= 9) { ?>

                                    <?php
                                    // Average
                                   $total = $value;
                                   
                                    $color_adj = "#FFA500; opacity: 0.5";
                                    $content_adj = "<div class='col-md-11 '>We recently received the results of a mental health test you took, which revealed that you have a normal level of anxiety. While this level of anxiety is within the normal range, we take our clients' and individuals' mental health and well-being very seriously and have conducted a thorough investigation to better understand the potential factors contributing to your anxiety.<br><br>  Our investigation uncovered several potential contributors to your average level of anxiety. To begin, as a police officer, you are subjected to a high-stress work environment that can be mentally and emotionally draining. Officers are frequently subjected to traumatic events such as violence, accidents, and natural disasters, all of which can cause feelings of fear, worry, and anxiety.<br><br>  Furthermore, the nature of police work may result in a sense of pressure to maintain public safety and order, which can lead to increased stress and anxiety. Your job responsibilities and work schedule could also be factors. Long and irregular shifts in police work can disrupt work-life balance and make it difficult for you to maintain a healthy lifestyle.<br><br>  Our investigation also uncovered potential personal factors that may be contributing to your overall anxiety level. These may include financial stress, family issues, and other personal concerns that may be impacting your mental health and well-being.<br><br>  Based on our findings, we recommend a number of measures to help you deal with your anxiety and improve your overall well-being. To begin, we recommend that you should be given access to mental health resources and counselling services to assist you in managing their anxiety and maintaining their mental health. We also recommend implementing workplace accommodations such as flexible scheduling options and opportunities for rest and relaxation to reduce stress and improve work-life balance.<br><br>  Furthermore, we recommend that you should be provided with training and support for dealing with traumatic events as well as developing coping strategies for dealing with stress and anxiety. Finally, we advise you to make an effort to identify and address any personal factors that may be contributing to your anxiety.<br><br>  Finally, we are committed to creating a supportive workplace environment that prioritises all employees' mental health and well-being. We can improve your overall well-being and job performance by addressing the potential causes of your anxiety and providing the necessary support and resources.<br><br></div>";
                                    $ad=0;
                    
                                   for($ad;$ad<=$total;$ad++)
                                   {
                                       $percent = intval($ad*10)."%";  
                                     
                                        echo '<script>
                                       parent.document.getElementById("progressbar_adj").innerHTML="<div style=\"width:'.$percent.';background:'.$color_adj.'; ;height:20px;\">&nbsp;</div>";
                                       parent.document.getElementById("information_adj").innerHTML="<div style=\"text-align:center;\">Anxiety</div>";
                                       parent.document.getElementById("indicator_adj").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($ad*10).'%'.'</div>";
                                       parent.document.getElementById("content_adj").innerHTML="<div>'.$content_adj.'</div>";

                                       
                                       </script>';
                                   
                                   }
                                }
                                else if($value >= 0 && $value <= 5) { ?>
                                             <!--Low-->
                                    <?php
                                   $total =$value;
                                    $color_adj = "#FF0000;opacity:0.5";
                                  
                                    $content_adj = "<div class='col-md-11 '>We recently received the results of a mental health test you took, which revealed that you have a low level of anxiety. While this is a positive outcome, we recognise the significance of understanding the potential factors that may influence your mental health and well-being. <br><br>  Our investigation into your mental health revealed several factors that could be contributing to your low anxiety level. To begin, you may be receiving adequate support from your coworkers and supervisors, which can help reduce workplace stress and anxiety. Furthermore, you may have developed effective coping strategies for dealing with stress, which has aided in the management of any potential anxiety feelings. <br><br>  Furthermore, you could be experiencing positive personal factors that have contributed to your low anxiety level. This may include having a stable personal life, strong social support, and engaging in positive recreational activities outside of work. <br><br>  It is important to note that a low level of anxiety does not always indicate that you are free of all mental health issues. As a result, we recommend that you receive ongoing support and access to resources that can assist you in maintaining your mental health and well-being. This may include stress management training, counselling services, and encouragement to maintain a positive work-life balance. <br><br>  Overall, we understand the value of maintaining a supportive workplace environment that prioritises your mental health and well-being. We can create a positive and healthy work environment for all by identifying and addressing potential factors that may contribute to anxiety and other mental health concerns. <br><br><div>";
                                    $ad=0;
                    
                                   for($ad;$ad<=$total;$ad++)
                                   {
                                       $percent = intval($ad*10)."%";  
                                        echo '<script>
                                        parent.document.getElementById("progressbar_adj").innerHTML="<div style=\"width:'.$percent.';background:'.$color_adj.'; ;height:20px;\">&nbsp;</div>";
                                       parent.document.getElementById("information_adj").innerHTML="<div style=\"text-align:center;\">Anxiety</div>";
                                       parent.document.getElementById("indicator_adj").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($ad*10).'%'.'</div>";
                                       parent.document.getElementById("content_adj").innerHTML="<div>'.$content_adj.'</div>";

                                       </script>';
                                   
                                   }
                                
                                }
                    
                            }
                    
                            if($key == "Depression") {
                    
                                if($value >= 10 && $value <= 12) {
                                    // High";
                                    ?>
                                    
                                    <?php
                                    $m=0;
                                    $total_att=$value;
                                    $color_att = "#00FF00;opacity: 0.5";
                                    $content_att = "<div class='col-md-11 'style=' text-align:justify;margin-left: auto;margin-right: auto;'>We received the results of your mental health test, which revealed a high level of depression. We understand that this is a concerning result and we want to provide an explanation for your high level of depression.<br><br>  There could be several factors contributing to your high level of depression. To begin with, working in police departments can be a demanding and stressful job that can lead to mental health issues such as depression. The job's nature, which includes dealing with traumatic events and witnessing violence, can also have a significant impact on mental health. .<br><br>  You may also be dealing with personal issues that are exacerbating your depression. This may include personal difficulties such as relationship issues, financial issues, or health concerns. These personal issues can have a big impact on your mental health and may be contributing to your depression. .<br><br>  It is important to note that depression is treatable, and we strongly advise you to seek professional assistance. We recommend that you should be given access to counselling services and mental health resources to assist you in managing your depression. You may also benefit from workplace support from colleagues and supervisors, as well as initiatives to promote mental health and well-being. .<br><br>  We understand the importance of supporting you for your mental health and well-being, and we are committed to providing the resources and support you need to stay mentally healthy while performing your duties. .<br><br></div>";
                                    for($m;$m<=$total_att;$m++)
                                    {
                                        $percent = intval(($m*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_att").innerHTML="<div style=\"width:'.$percent.';background:'.$color_att.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_att").innerHTML="<div style=\"text-align:center;\">Depression</div>";
                                        parent.document.getElementById("indicator_att").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($m*10).'%'.'</div>";
                                        parent.document.getElementById("content_att").innerHTML="<div>'.$content_att.'</div>";

                                        </script>';
                                    
                                    }
                                } 
                                else if($value >= 6 && $value <= 9) {
                                    // echo  Average    "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                                   
                                    <?php
                                    $m=0;
                                    $total_att=$value;
                                    $color_att = "#FFA500;opacity: 0.5";
                                    //orange
                                    $content_att = "<div class='col-md-11 '>We received the results of your mental health test, which revealed an average level of depression. While this result may not be as concerning as a high level of depression, we still want to provide an explanation for your average level of depression.<br><br>  Your average level of depression could be caused by a number of factors. As with any profession, working in law enforcement can be a challenging and stressful job that may lead to mental health issues such as depression. You could be subjected to traumatic events and experiences that have an impact on your mental health and well-being. <br><br>  You may also be dealing with personal issues that are exacerbating your depression. This may include personal difficulties such as relationship issues, financial issues, or health concerns. These personal issues can have a significant impact on mental health and may contribute to your overall depression level. <br><br>  It is critical to recognise that depression is a treatable condition, and we encourage you to seek professional assistance. We recommend that you should be given access to counselling services and mental health resources to assist you in dealing with your depression. You may also benefit from workplace support from colleagues and supervisors, as well as initiatives to promote mental health and well-being. <br><br>  We understand the importance of supporting your mental health and well-being, and we are committed to providing the resources and support needed to ensure that all the employees can maintain good mental health while performing their duties.</div>";
                                    for($m;$m<=$total_att;$m++)
                                    {
                                        $percent = intval(($m*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_att").innerHTML="<div style=\"width:'.$percent.';background:'.$color_att.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_att").innerHTML="<div style=\"text-align:center;\">Depression</div>";
                                        parent.document.getElementById("indicator_att").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($m*10).'%'.'</div>";
                                        parent.document.getElementById("content_att").innerHTML="<div>'.$content_att.'</div>";
                                        </script>';
                                    
                                    }
                    
                                } else if ($value >= 0 && $value <= 5) {
                                    //  echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                     $m = 0;
                                     $total_att =$value;
                                     $color_att = "#FF0000;opacity:0.5";
                                    //Low  red
                                     $content_att = "<div class='col-md-11 '>We received the results of your mental health test, which revealed a low level of depression. This is a positive outcome, and we are glad to see that you are in good mental health.<br><br>  It is important to note that working in law enforcement can be a difficult and stressful job, which can lead to mental health problems such as depression. You have, however, demonstrated a low level of depression, indicating that you may have effective coping mechanisms in place to manage any stressors that you may be experiencing. <br><br>  Positive personal factors that contribute to your good mental health may also benefit you. A supportive family, a strong social network, or positive coping strategies such as exercise or hobbies can all help. <br><br>  If you are in good mental health, it is critical that you continue to monitor your mental health. We recommend that you be given access to mental health resources and support to assist you in maintaining your mental health. This may include workplace initiatives to promote mental health and well-being, as well as support from coworkers and supervisors. <br><br>  We understand the importance of supporting your mental health and well-being, and we are committed to providing the resources and support you need to stay mentally healthy while performing your duties.</div>";
                                     for ($m; $m <= $total_att; $m++) {
                                         $percent = intval(($m * 10)) . "%";
                                         echo '<script>
                                          parent.document.getElementById("progressbar_att").innerHTML="<div style=\"width:' . $percent . ';background:' . $color_att . ';height:20px;\">&nbsp;</div>";
                                          parent.document.getElementById("information_att").innerHTML="<div style=\"text-align:center;\">Depression</div>";
                                          parent.document.getElementById("indicator_att").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($m*10).'%'.'</div>";
                                          parent.document.getElementById("content_att").innerHTML="<div>' . $content_att . '</div>";

                                        </script>';
                    
                                     }
                                 }
                            }
                            
                            if($key == "Stress") {
                    
                                if($value >= 10 && $value <= 12) {
                                    // echo High   "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                            
                                    <?php
                                    $self=0;
                                    $total=$value;
                                    $content_self = "<div class='col-md-11 '>We received the results of a mental health test you took, which revealed a high level of stress. This is a concerning finding, and we recognise that working in law enforcement can be a difficult and stressful job, which can lead to mental health issues such as stress. <br> You may be under a lot of stress because of the nature of your job, which can involve dealing with high-pressure situations and potentially dangerous people. You may also be dealing with work-related stressors such as long hours, heavy workloads, and a lack of work-life balance.<br>  It is critical to address your high level of stress in order to keep it from affecting your mental health and job performance. We recommend that you be given access to mental health resources and support, such as counselling and stress management techniques, to assist them in managing your stress levels.<br>  We also recommend that you review the employee's workload and working hours to ensure that they are not contributing to your high stress levels. Furthermore, initiatives to promote mental health and well-being in the workplace, such as stress reduction training and resources, may be beneficial to you and other police officers.<br>  It is critical to recognise the importance of supporting our employees' mental health and well-being, particularly those in high-stress occupations such as law enforcement. We are committed to providing you with the resources and support you need to perform your duties effectively while maintaining your mental health.<br></div>";
                                    $color_self = '#FF0000;opacity:0.5';  
                                   
                                    for($self;$self<=$total;$self++)
                                    {
                                        $percent = intval(($self*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_self").innerHTML="<div style=\"width:'.$percent.';background:'.$color_self.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_self").innerHTML="<div style=\"text-align:center;\">Stress</div>";
                                        parent.document.getElementById("indicator_self").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($self*10).'%'.'</div>";
                                        parent.document.getElementById("content_self").innerHTML="<div>'.$content_self.'</div>";
                                        </script>';
                                    
                                    }
                    
                                } 
                                else if($value >= 6 && $value <= 9) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                   
                                    <?php
                                    $self=0;
                                    $total=$value;
                                    $content_self = "<div class='col-md-11 '>We received the results of your mental health test, which revealed an average level of stress. While this result is not as concerning as a high level of stress, it is still critical to address and monitor your stress levels in order to prevent it from negatively impacting your mental health and job performance.<br>  You may be stressed because of the nature of your job, which can involve dealing with high-pressure situations and potentially dangerous individuals. You may also be dealing with work-related stressors such as long hours, a heavy workload, and a poor work-life balance.<br>  It is important to assist you in managing your stress levels. We recommend that you be given access to mental health resources and support, such as counselling and stress management techniques, to assist you in effectively managing your stress levels.<br>  We also recommend that you review your workload and working hours to ensure that they are not adding to your stress levels. Initiatives to promote mental health and well-being in the workplace, such as stress reduction training and resources, may also be beneficial to you and other police officers.<br>  It is important to recognize the significance of supporting your mental health and well-being, especially if you work in a high-stress occupation like law enforcement. We are committed to providing you with the resources and support you need to perform your duties effectively while maintaining your mental health.</div>";
                                    $color_self = '#FFA500;opacity:0.5';
                                    // Average  orange
                                    for($self;$self<=$total;$self++)
                                    {
                                        $percent = intval(($self*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_self").innerHTML="<div style=\"width:'.$percent.';background:'.$color_self.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_self").innerHTML="<div style=\"text-align:center;\">Stress</div>";
                                        parent.document.getElementById("indicator_self").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($self*10).'%'.'</div>";
                                        parent.document.getElementById("content_self").innerHTML="<div>'.$content_self.'</div>";
                                        </script>';
                                    
                                    }
                                }
                                else if($value >= 0 && $value <= 5) {
                                    // LOW   echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                  
                                    <?php
                                    $self=0;
                                    $total=$value;
                                    $content_self = "<div class='col-md-11 '>We received the results of a mental health test you took, which revealed a low level of stress. This is a positive outcome, indicating that you are effectively managing your stress levels and may have effective coping mechanisms in place<br>.  It is important to recognize your efforts in stress management and to continue to support them in maintaining good mental health. Access to resources such as counselling, stress management techniques, and mental health support can assist you in effectively managing your stress levels.<br> Your low stress level could be attributed to a variety of factors, including a healthy work-life balance, a manageable workload, supportive coworkers and managers, and effective coping mechanisms. We encourage you to continue to prioritise your mental health and well-being, and to seek help if your stress levels or mental health change.<br>   We also recognise that maintaining good mental health and well-being is critical for you, particularly if you work in a high-stress occupation like law enforcement. We are committed to providing you with the resources and support you need to perform your duties effectively while maintaining your mental health.<br></div>";
                                    // red
                                    $color_self = '#81B622;opacity:0.5';
                                    for($self;$self<=$total;$self++)
                                    {
                                        $percent = intval(($self*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_self").innerHTML="<div style=\"width:'.$percent.';background:'.$color_self.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_self").innerHTML="<div style=\"text-align:center;\">Stress</div>";
                                        parent.document.getElementById("indicator_self").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($self*10).'%'.'</div>";
                                        parent.document.getElementById("content_self").innerHTML="<div>'.$content_self.'</div>";
                                        </script>';
                                    
                                    }
                                }
                    
                            }
                    
                            if($key == "PTSD") {
                    
                                if($value >= 10 && $value <= 12) {
                                    //High  echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    
                                    $total=$value;
                                    $color_study = "#81B622;opacity:0.5";
                                    
                                    $content_study = "<div class='col-md-11 '>We received the results of a mental health test you took, which revealed a high level of PTSD (post-traumatic stress disorder). This is an alarming result, indicating that you may have been subjected to a traumatic event or events that have had a long-term impact on your mental health.<br>  After experiencing or witnessing a traumatic event, such as physical or sexual assault, natural disaster, or combat exposure, PTSD can develop. PTSD symptoms include intrusive thoughts or memories, avoidance of traumatic event reminders, negative mood or thought changes, and hyperarousal or hypervigilance.<br>  It is critical to understand that having PTSD is not a sign of weakness and that you may need specialised support and resources to manage your symptoms. We recommend that you be referred to a mental health professional with experience treating PTSD as soon as possible, and that you receive appropriate treatment.<br>  Aside from seeking professional assistance, you can take several steps to manage your symptoms and improve your mental health. Self-care activities such as exercise and relaxation techniques, maintaining a healthy sleep schedule, and participating in activities that bring them joy and fulfillment are examples of these. Connecting with PTSD support groups or peer networks may also be beneficial.<br>  We understand that the nature of law enforcement can expose officers to traumatic events, and we are committed to providing the necessary support and resources to ensure that you can effectively manage your mental health and well-being. We encourage you to prioritise your mental health and seek help if you are experiencing PTSD symptoms or other mental health issues.<br></div>";                   
                                    $st=0;
                                    for($st;$st<=$total;$st++)
                                    {
                                    $percent = intval(($st*10))."%"; 
                                    echo '<script>
                                    parent.document.getElementById("progressbar_study").innerHTML="<div style=\"width:'.$percent.';background:'.$color_study.';height:20px;\">&nbsp;</div>";
                                    parent.document.getElementById("information_study").innerHTML="<div style=\"text-align:center;\">PSTD</div>";
                                    parent.document.getElementById("indicator_study").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($st*10).'%'.'</div>";
                                    parent.document.getElementById("content_study").innerHTML="<div>'.$content_study.'</div>";
                                    </script>';
                    
                    }
                                } 
                                else if($value >= 6 && $value <= 9) {
                                    // Average echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    <?php
                                    
                                    $total=$value;
                                    $color_study = "#FFA500;opacity:0.5";
                                    //orange
                                    $content_study = "<div class='col-md-11 '>According to the assessment, you have an average level of PTSD. PTSD, or Post-Traumatic Stress Disorder, is a mental health condition that occurs when a person witnesses or experiences a traumatic event. PTSD symptoms include flashbacks, nightmares, avoidance behaviour, hyperarousal, and intrusive thoughts.<br>  PTSD was diagnosed using standard diagnostic criteria during the mental health assessment. You are said to have been involved in several traumatic events while on duty, including witnessing violence and dealing with high-stress situations. However, you claim that these incidents had no significant impact on your daily life or work performance.<br>  While you have some PTSD symptoms, you did not meet the diagnostic criteria for severe PTSD. Your symptoms were found to be in the average range, indicating that you are in some discomfort but can still function effectively in your daily life and work. It is recommended that you continue to receive mental health support in order to manage your symptoms and keep them from worsening. Furthermore, it is critical to provide adequate support and resources to assist you in coping with work-related stressors and preventing the development of more severe mental health conditions.<br>  Overall, it is important to continue monitoring your mental health and provide any necessary support to ensure your well-being and job performance.<br></div>";
                                    $st=0;
                                    for($st;$st<=$total;$st++)
                                    {
                                    $percent = intval(($st*10))."%"; 
                                    echo '<script>
                                    parent.document.getElementById("progressbar_study").innerHTML="<div style=\"width:'.$percent.';background:'.$color_study.';height:20px;\">&nbsp;</div>";
                                    parent.document.getElementById("information_study").innerHTML="<div style=\"text-align:center;\">PSTD</div>";
                                    parent.document.getElementById("indicator_study").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($st*10).'%'.'</div>";
                                    parent.document.getElementById("content_study").innerHTML="<div>'.$content_study.'</div>";
                                    </script>';
                    
                    }
                                }
                                else if($value >= 0 && $value <= 5) {
                                    // echo LOW "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                  
                                    <?php
                                    
                                    $total=$value;
                                    $color_study = "#FF0000;opacity:0.5";
                                    $content_study = "<div class='col-md-11 '>In the assessment, you demonstrated a low level of PTSD. The evaluation included a thorough clinical interview, self-reported measures, and behavioral observation. According to the results of the assessment, you have a low level of PTSD. This means you've been through some traumatic events, but the symptoms of PTSD aren't interfering with your daily life or functioning.<br>  It is important to note that trauma is a common occurrence for police officers in the line of duty. You may have witnessed traumatic events such as violence or been in dangerous situations. <br>  However, a low level of PTSD indicates that you have dealt with the stress and are no longer experiencing significant difficulties as a result of the trauma.<br>  To maintain your mental health and prevent any potential escalation of symptoms, it is recommended that you receive regular mental health check-ups and support services, such as counselling or stress management workshops.<br>  Overall, you have a low level of PTSD and are currently coping well with any traumatic experiences you may have experienced. Please do not hesitate to contact team Ollato if you have any questions or concerns about this report.<br></div>";  
                                    // red
                                    $st=0;
                                    for($st;$st<=$total;$st++)
                                    {
                                    $percent = intval(($st*10))."%"; 
                                    echo '<script>
                                    parent.document.getElementById("progressbar_study").innerHTML="<div style=\"width:'.$percent.';background:'.$color_study.';height:20px;\">&nbsp;</div>";
                                    parent.document.getElementById("information_study").innerHTML="<div style=\"text-align:center;\">PSTD</div>";
                                    parent.document.getElementById("indicator_study").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($st*10).'%'.'</div>";
                                    parent.document.getElementById("content_study").innerHTML="<div>'.$content_study .'</div>";
                                    
                                    </script>';
                    
                    }
                                }
                    
                            }
                    
                            if($key == "Burnout") {
                    
                                if($value >= 10 && $value <= 12) {
                                    // echo High  "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                                  
                                    <?php
                                                                        
                                    $total=$value;
                                    // $color_dep = "#FF0000;opacity:0.5";
                                     $color_dep = "#81B622;opacity:0.5";
                                    //green
                            
                                    $content_dep = "<div class='col-md-11 '>According to the assessment results, you have a high level of burnout. Burnout is a state of emotional, mental, and physical exhaustion caused by prolonged stress, and it can result in decreased motivation, job satisfaction, and a sense of helplessness. Burnout is frequently caused by workplace stressors such as long work hours, heavy workloads, limited resources, a lack of support, and exposure to traumatic events.<br>  In your case, it appears that your high level of burnout may be due to the demanding and often stressful nature of your job. You may be subjected to traumatic incidents on a regular basis, resulting in emotional exhaustion and decreased work engagement. Furthermore, the long hours and heavy workload demanded of police officers can contribute to feelings of overwhelm and being stretched too thin.<br>  It is important that you receive assistance and resources in order to address your burnout and improve your mental health. This may include access to counselling services, self-care resources, and measures to reduce work-related stressors. You can regain a sense of motivation and engagement in your work by taking proactive steps to address burnout, leading to improved job satisfaction and overall well-being.<br>  Please do not hesitate to contact team Ollato if you have any questions or concerns about this report.<br></div>";
                                    $d=0;
                                    for($d;$d<=$total;$d++)
                                    {
                                        $percent = intval(($d*10))."%";
                                        
                                        echo '<script>
                                        parent.document.getElementById("progressbar_dep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_dep.'; height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_dep").innerHTML="<div style=\"text-align:center;\">Burnout</div>";
                                        parent.document.getElementById("indicator_dep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($d*10).'%'.'</div>";
                                        parent.document.getElementById("content_dep").innerHTML="<div>'.$content_dep.'</div>";
                                        </script>';
                                    
                                    }
                                } 
                                else if($value >= 6 && $value <= 9) {
                                    // echo Average "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                                                                        
                                    $total=$value;
                                    $color_dep = "#FFA500;opacity:0.5";
                                    // orange
                                    $content_dep = "<div class='col-md-11 '>According to the results of your mental health tests, you have an average level of burnout. This means you may be exhausted emotionally, physically, or mentally, but not to the point where your job performance or quality of life suffers significantly. Burnout is a state of emotional, physical, and mental exhaustion brought on by prolonged and excessive workplace stress. It is a common problem among law enforcement officers; you frequently face high levels of stress and pressure on the job.<br>  A high workload, long working hours, a lack of control over your job, or poor relationships with colleagues or superiors are all factors that could contribute to burnout. Addressing these factors is essential for preventing burnout from worsening and potentially leading to more severe mental health issues such as depression or anxiety.<br>  We recommend implementing workplace interventions that promote work-life balance, provide emotional support, and provide opportunities for self-care to address your average level of burnout. Regular breaks, flexible work arrangements, or access to mental health resources such as counselling or support groups, for example, can help you manage your stress and improve your overall well-being.<br>  Finally, your result indicated an average level of burnout in your mental health test, indicating that you may be experiencing some level of exhaustion and stress at work. It is critical to address this issue as soon as possible to prevent burnout from worsening and potentially leading to more severe mental health issues. Implementing workplace interventions that promote work-life balance, emotional support, and self-care can help you manage your stress and improve your overall well-being.</div>";
                                    $d=0;
                                    for($d;$d<=$total;$d++)
                                    {
                                        $percent = intval(($d*10))."%";
                                        
                                        echo '<script>
                                        parent.document.getElementById("progressbar_dep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_dep.'; height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_dep").innerHTML="<div style=\"text-align:center; font-weight:bold\">Burnout</div>";
                                        parent.document.getElementById("indicator_dep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($d*10).'%'.'</div>";
                                        parent.document.getElementById("content_dep").innerHTML="<div>'.$content_dep.'</div>";

                                        </script>';
                                    
                                    }
                                }
                                else if($value >= 0 && $value <= 5) {   ?>
                                     <!--echo low  "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";-->
                                   
                                     <?php
                                                                         
                                     $total=$value;
                                     $color_dep="#FF0000;opacity:0.5";
                                    //red
                                     $content_dep = "<div class='col-md-11 '>In the test, your mental health report revealed a low level of Burnout. Based on the evaluation, your mental health seems to be in good condition with no major signs of burnout.<br>  Burnout is a condition characterised by emotional, physical, and mental exhaustion as a result of prolonged and intense stress. It can result in decreased work effectiveness and productivity, negative attitudes, and detachment from work and colleagues. In this case, however, you received a low score on the burnout section of the mental health test.<br>  The low score may indicate that you have good coping skills for dealing with stress and maintaining a healthy work-life balance. It could also indicate that your work environment is encouraging and promotes a healthy lifestyle.<br>  To avoid burnout, it is important to recognize and maintain a healthy work-life balance, and you have demonstrated good practices in achieving this balance. To ensure your mental well-being, it is recommended that you continue to promote healthy habits, encourage open communication, and provide stress management resources.<br>  Please do not hesitate to contact team Ollato if you have any further questions or concerns.</div>";
                                     $d=0;
                                     for($d;$d<=$total;$d++)
                                     {
                                         $percent = intval(($d*10))."%";
                                         
                                         echo '<script>
                                        parent.document.getElementById("progressbar_dep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_dep.'; height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_dep").innerHTML="<div style=\"text-align:center; font-weight:bold\">Burnout </div>";
                                        parent.document.getElementById("indicator_dep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($d*10).'%'.'</div>";
                                        parent.document.getElementById("content_dep").innerHTML="<div>'.$content_dep.'</div>";
                                         </script>';
                                     
                                     }
                                 }
                    
                            }
                    
                            if($key == "Job Security") {
                    
                                if($value >= 10 && $value <= 12) {
                                    // High echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                               
                                    <?php
                                                                        
                                    $total=$value;
                                     $color_anx = "#81B622;opacity:0.5";
                                    //green  
                                    
                                    $content_anx = "<div class='col-md-11 '>The findings of your recent mental health test, particularly your high level of job security. According to the test results, you have a high level of job security, indicating that you feel secure and stable in your current job. This is a good sign because job security can have a significant impact on a person's mental health and well-being. Feeling secure in your job can help reduce stress and anxiety and promote a healthy work-life balance.<br>  As a police officer, you must have a sense of job security because the job can be demanding and challenging at times. Knowing that your job is stable and secure can help alleviate any worries or stress caused by the nature of your work. Even with a high level of job security, it is critical to prioritise self-care and maintain a healthy work-life balance. This can include taking breaks as needed, setting boundaries, and seeking help as needed.<br>  Overall, your high level of job security reflects positively on your mental health and well-being as a Police officer. Maintain your good work and prioritise your self-care.</div>";
                                    $an=0;
                                    for($an;$an<=$total;$an++)
                                    {
                                    $percent = intval(($an*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_anx").innerHTML="<div style=\"width:'.$percent.';background:'.$color_anx .'; ;height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_anx").innerHTML="<div style=\"text-align:center;\">Job Security</div>";
                                        parent.document.getElementById("indicator_anx").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($an*10).'%'.'</div>";
                                        parent.document.getElementById("content_anx").innerHTML="<div>'.$content_anx.'</div>";

                                        </script>';
                                    
                                    }
                                                                    } 
                                else if($value >= 6 && $value <= 9) {
                                    // echo Average "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                                                                        
                                    $total=$value;
                                    $color_anx ="#FFA500;opacity:0.5";
                                    // orange
                                    $content_anx = "<div class='col-md-11 '>The report indicates that you demonstrated an average level of job security in your recent mental health test. Job security is an important factor influencing your mental health and well-being. In your mental health test, you scored an average level of job security, indicating that you have moderate levels of job stability and confidence in your position.<br>  Your average job security score could be influenced by a number of factors, including your position within the organisation, length of service, and perceived level of job satisfaction. External factors such as the current economic situation or the ongoing pandemic could also have an impact on job security for all employees.<br>  It is essential to recognise the importance of job security in maintaining mental health and well-being and to provide support to employees who may experience job insecurity. This can be accomplished by communicating clearly about job expectations, providing opportunities for professional development and growth, and providing support services like counselling or employee assistance programmes.<br>  Finally, in your mental health test, you demonstrated an average level of job security. It is critical to address any job-security concerns and provide the necessary support to ensure your mental health and well-being.</div>";
                                    $an=0;
                                    for($an;$an<=$total;$an++)
                                    {
                                    $percent = intval(($an*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_anx").innerHTML="<div style=\"width:'.$percent.';background:'.$color_anx .'; ;height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_anx").innerHTML="<div style=\"text-align:center;\">Job Security</div>";
                                        parent.document.getElementById("indicator_anx").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($an*10).'%'.'</div>";
                                        parent.document.getElementById("content_anx").innerHTML="<div>'.$content_anx.'</div>";
                                        </script>';
                                    
                                    }
                                } else if ($value >= 0 && $value <= 5) {
                                    //  echo Low "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                                    
                                     $total =$value;
                                     $color_anx ="#FF0000;opacity:0.5";
                                    // red
                                     $content_anx = "<div class='col-md-11 '>The result of your mental health assessment has shown a low level of job security in the test. Job security is an important factor that affects your mental health and contributes to your overall sense of well-being. In this case, your lack of job security is a source of concern that must be addressed.<br>  Job insecurity can cause stress and anxiety because you may be unsure of your employment status and future career prospects. This uncertainty can lead to feelings of powerlessness, helplessness, and loss of control, which can lead to depression and other mental health problems.<br>  It is important to recognize that job security is not the only factor that can affect your mental health. Workload, work relationships, and support from supervisors and coworkers can all have a significant impact. As a result, it is critical to take a comprehensive approach to addressing mental health issues in the workplace.<br>  We recommend that you discuss your job security concerns with your supervisor or an HR representative. You should be given clear information about your job duties, expectations, and opportunities for growth and development. Regular feedback and recognition for your work can also help you feel more secure in your job.<br>  When you are experiencing mental health issues, it is also important that you receive support. This can include access to counselling services, assistance programmes, and stress and anxiety management resources.<br>  Finally, it is critical to address job security concerns among police officers because they can have a significant impact on your mental health. We can help create a workplace environment that promotes your well-being and productivity by providing clear communication, support, and resources.</div>";     
                                     $an = 0;
                                     for ($an; $an <= $total; $an++) {
                                         $percent = intval(($an * 10)) . "%";
                                        echo '<script>
                                        parent.document.getElementById("progressbar_anx").innerHTML="<div style=\"width:' . $percent . ';background:' . $color_anx . '; ;height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_anx").innerHTML="<div style=\"text-align:center;\">Job Security</div>";
                                        parent.document.getElementById("indicator_anx").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($an*10).'%'.'</div>";
                                        parent.document.getElementById("content_anx").innerHTML="<div>'.$content_anx . '</div>";
                                        
                                        </script>';
                    
                                     }
                                 }
                    
                            }
                    
                            if($key == "Work Environment") {
                    
                                if($value >= 0 && $value <= 5) {
                                    // echo High "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                                                            
                                        $total=$value;
                                        $color_stress = "#81B622;opacity:0.5";
                                        // green
                                         $content_stress = "<div class='col-md-11 '>In your mental health test, your result indicated a high level of Work Environment. This report is intended to help you understand the factors that contribute to your high level of Work Environment.<br>  The physical, social, and psychological conditions under which an individual works are referred to as the work environment. A pleasant working environment can improve job satisfaction, productivity, and overall well-being. A negative work environment, on the other hand, can lead to stress, burnout, and other mental health issues.<br>  Based on the findings of your mental health test, it is clear that your work environment has a significant impact on your mental health. You have expressed a high level of satisfaction with your workplace's physical conditions, such as cleanliness, safety, and comfort. This indicates that you are physically secure and comfortable while carrying out your responsibilities.<br>  Furthermore, you have expressed a high level of satisfaction with your workplace's social aspects, such as relationships with coworkers and supervisors. This indicates that you feel supported and valued by your colleagues and supervisors, which benefits your mental health.<br>  You have also expressed a high level of satisfaction with the psychological aspects of your workplace, such as your level of autonomy and control over work tasks. This indicates that you feel empowered and motivated to carry out your responsibilities, which benefits your mental health.<br>  Finally, your high level of Work Environment indicates that the physical, social, and psychological conditions of your workplace are positively influencing your mental health. To ensure your continued well-being and to promote a positive work culture within the organisation, it is important to maintain this positive work environment.</div>";
                                         $s=0;
                                        for($s;$s<=$total;$s++)
                                        {
                                        
                                            $percent = intval(($s*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_stress").innerHTML="<div style=\"width:'.$percent.';background:'.$color_stress.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_stress").innerHTML="<div style=\"text-align:center;\"> Work Environment</div>";
                                            parent.document.getElementById("indicator_stress").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($s*10).'%'.'</div>";
                                            parent.document.getElementById("content_stress").innerHTML="<div>'.$content_stress.'</div>";
                                            </script>';
                                        
                                        }
                                } 
                                else if($value >= 6 && $value <= 9) {
                                    // work eviromment Average
                                    ?>
                                     
                                    <?php
                                                                            
                                        $total=$value;
                                        $color_stress = "#FFA500;opacity:0.5";
                                        //orange 
                                        $content_stress = "<div class='col-md-11 '>The result of your mental health assessment has shown an average level of Work Environment in the test. Your mental health assessment has been conducted in accordance with established protocols, and the results indicate an average level of Work Environment.<br>  Your evaluation revealed that you are generally pleased with your working environment. However, you have expressed some reservations in some areas. These concerns include workload, communication, and support from your colleagues and supervisors.<br>  While you have stated that your workload is manageable, you have also stated that it can be overwhelming at times. You have also expressed that communication within the workplace can be improved and that you sometimes feel isolated from your colleagues. Finally, you've stated that you'd appreciate additional support and guidance from your bosses.<br>  Overall, your average level of Work Environment may indicate that you are generally satisfied with your work but that certain aspects of your work environment could be improved. Addressing your concerns may help to improve your mental health and job satisfaction, which may lead to improved performance and productivity.<br>  We recommend that you should be given additional resources and support to help you manage your workload, improve communication with colleagues, and receive guidance from your supervisors. Such measures could go a long way towards addressing your concerns and improving your overall work environment. Please do not hesitate to contact team Ollato if you have any questions or require additional information.</div>";
                                        $s=0;
                                        for($s;$s<=$total;$s++)
                                        {
                                        
                                            $percent = intval(($s*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_stress").innerHTML="<div style=\"width:'.$percent.';background:'.$color_stress.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_stress").innerHTML="<div style=\"text-align:center;\">Work Environment</div>";
                                            parent.document.getElementById("indicator_stress").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($s*10).'%'.'</div>";
                                            parent.document.getElementById("content_stress").innerHTML="<div>'.$content_stress.'</div>";
                                            </script>';
                                        
                                        }
                                }
                                else if($value >= 10 && $value <= 12) {
                                    //work environment  low
                                    ?>
                                     
                                    <?php
                                                                            
                                        $total=$value;
                                        $color_stress = "#FF0000;opacity:0.5";
                                        // red
                                        $content_stress = "<div class='col-md-11 '>As a result, your mental health test revealed a low level of work environment. A poor work environment may indicate that you are dissatisfied with the physical or emotional aspects of your job. In your case, it is important to identify the factors that may be contributing to this poor working environment and to investigate potential solutions to improve it.<br>  The physical environment of the workplace may be one of the factors contributing to the low level of work environment. This could include things like poor lighting, inadequate ventilation, uncomfortable seating, or excessive noise levels. These factors can cause physical discomfort and divert your attention away from your work. Addressing these issues through physical space improvements can contribute to a more comfortable and productive work environment.<br>  The emotional or interpersonal environment of the workplace may also be contributing to the low level of the work environment. Poor communication, a lack of support from colleagues or superiors, or a negative workplace culture are all examples of this. These factors can contribute to feelings of isolation, anxiety, or job dissatisfaction. Addressing these issues through positive communication, teamwork, and fostering a supportive workplace culture can help to create a more positive emotional environment for employees.<br>  It is important to note that addressing the low level of work environment is not only important for the mental health and well-being of the employee, but it can also have positive impacts on their job performance, productivity, and job satisfaction. Creating a positive work environment can aid in stress reduction and job retention, which benefits both the employee and the organisation.<br> Finally, addressing the poor quality of the work environment is critical for promoting their mental health and job satisfaction. The organisation can help you create a more positive and supportive work environment by identifying and addressing the physical and emotional factors that are contributing to your low level.</div>";
                                        $s=0;
                                        for($s;$s<=$total;$s++)
                                        {
                                        
                                            $percent = intval(($s*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_stress").innerHTML="<div style=\"width:'.$percent.';background:'.$color_stress.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_stress").innerHTML="<div style=\"text-align:center;\">Work Environment</div>";
                                            parent.document.getElementById("indicator_stress").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($s*10).'%'.'</div>";
                                            parent.document.getElementById("content_stress").innerHTML="<div>'.$content_stress.'</div>";
                                            </script>';
                                        
                                        }
                                }
                    
                            }
                    
                            if($key == "Work Load") {
                    
                                if($value >= 0 && $value <= 5) {
                                    //Work Load High
                                    ?>
                                 
                                    <?php
                                                                        
                                    $total=$value;
                                    $content_time = "<div class='col-md-11 '>Your mental health test result revealed a high level of workload. Based on the results of the test, it is clear that you are under a lot of stress, which is affecting your mental health.<br>  Workload is the amount of work or tasks that a person must manage on a daily basis. In your case, it is clear that you are under a lot of stress, anxiety, and other negative emotions as a result of your workload. Working long hours, managing multiple tasks at once, and dealing with difficult situations on a regular basis can be exhausting.<br>  You are dealing with a lot of work, which can have a lot of negative consequences. For example, you could suffer from burnout, which can result in a lack of motivation, decreased job satisfaction, and even physical health issues. Furthermore, due to exhaustion and stress, you may be more prone to making mistakes, having difficulty making decisions, and even struggling with basic tasks.<br>  To address this issue, it is suggested that your workload be re-evaluated and, if necessary, adjusted. This could include re-prioritizing tasks, delegating responsibilities, and providing you with the resources and support you need to manage your workload.  Furthermore, it is important to encourage you to engage in self-care strategies such as taking regular breaks, engaging in physical activity, and seeking help from colleagues or mental health professionals as needed.<br>  Finally, the high level of workload you are experiencing is cause for concern and requires immediate attention. You can improve your mental health and job satisfaction by addressing this issue and providing the necessary support, which will ultimately benefit the organisation as a whole.</div>";
                                    $color_time = "#81B622;opacity:0.5";
                                    // green
                                    $t=0;
                                    for($t;$t<=$total;$t++)
                                    {   
                                    $percent = intval(($t*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_time").innerHTML="<div style=\"width:'.$percent.';background:'.$color_time.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_time").innerHTML="<div style=\"text-align:center; font-weight:bold\"> Work Load</div>";
                                        parent.document.getElementById("indicator_time").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($t*10).'%'.'</div>";
                                        parent.document.getElementById("content_time").innerHTML="<div>'.$content_time.'</div>";
                                        </script>';
                                    
                                    }
                    
                    
                                } 
                                else if($value >= 6 && $value <= 9) {
                                    // Work Load Average 
                                    ?>
                                  
                                    <?php
                                                                        
                                    $total=$value;
                                    $content_time = "<div class='col-md-11 '>Your result has shown the average level of workload in your mental health test. Based on the test results, it is clear that you are working at an average level, which can have a significant impact on your mental health.<br>  You have demonstrated an average level of workload based on the results of the mental health test. This indicates that, while you may face some stress and pressure as a result of your job responsibilities, you are still capable of managing your workload and completing your tasks without undue strain or burnout.<br>  It's important to remember that police work is inherently stressful, with long hours, high-pressure situations, and a lot of responsibility. An average workload, on the other hand, indicates that you are able to balance the demands of your job with your personal life and are not feeling overwhelmed or unable to cope.<br>  Having said that, it is still important that you take priority of your mental health and well-being, as even a moderate workload can lead to stress and burnout over time. Exercise, mindfulness, and spending time with family and friends can all help reduce stress and promote a healthy work-life balance.<br>  In conclusion, while your workload in your mental health test was average, it is still important to prioritise your mental health and well-being in order to maintain a healthy and sustainable work-life balance.</div>";
                                    $color_time = "#FFA500;opacity:0.5";
                                    // orange
                                    $t=0;
                                    for($t;$t<=$total;$t++)
                                    {   
                                    $percent = intval(($t*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_time").innerHTML="<div style=\"width:'.$percent.';background:'.$color_time.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_time").innerHTML="<div style=\"text-align:center; font-weight:bold\"> Work Load</div>";
                                        parent.document.getElementById("indicator_time").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($t*10).'%'.'</div>";
                                        parent.document.getElementById("content_time").innerHTML="<div>'.$content_time.'</div>";
                                        </script>';
                                    
                                    }
                                }
                                else if($value >= 10 && $value <= 12) {
                                    // work load Low
                                    ?>
                                 
                                    <?php
                                                                        
                                    $total=$value;
                                    $content_time = "<div class='col-md-11 '>Your mental health test result revealed a low level of workload. According to the test results, you have a low level of workload, which can have a significant impact on your overall well-being and job performance.<br>  According to the assessment, you feel comfortable with your current workload and are able to manage your tasks efficiently. You also mentioned that you have a good support system in place, including colleagues and supervisors who are available to assist them with any work-related challenges.<br>  It is important to note that a low workload does not always imply a lack of productivity or engagement, but rather a positive work-life balance and effective time management. To avoid burnout and maintain your mental health, you must maintain a healthy workload.<br>  Finally, your assessment result indicates that you have a manageable workload and are well-equipped to handle your responsibilities. I recommend that you continue with your current workload and do good work.<br></div>";
                                    $color_time = "#FF0000;opacity:0.5";
                                    // red
                                    $t=0;
                                    for($t;$t<=$total;$t++)
                                    {   
                                    $percent = intval(($t*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_time").innerHTML="<div style=\"width:'.$percent.';background:'.$color_time.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_time").innerHTML="<div style=\"text-align:center; font-weight:bold\"> Work Load</div>";
                                        parent.document.getElementById("indicator_time").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($t*10).'%'.'</div>";
                                        parent.document.getElementById("content_time").innerHTML="<div>'.$content_time.'</div>";
                                        </script>';
                                    
                                    }
                                }
                    
                            }
                    
                            if($key == "Job Satisfaction") {
                    
                                if($value >= 0 && $value <= 5) {
                                    // echo Job Satisfaction High "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                  
                                        <?php
                                                                            
                                        $total=$value;
                                        $content_sleep = "<div class='col-md-11 '>Your recent mental health test results indicate a high level of job satisfaction. According to the results of your test, you are currently very satisfied with your job as a police officer.<br>  Job satisfaction is an important factor in one's mental health and overall well-being. To achieve personal and professional goals, you must feel fulfilled and satisfied with your work. Your high level of job satisfaction indicates that you find meaning and purpose in your work as a police officer, and that you derive fulfillment from helping others and contributing to society.<br>  Furthermore, job satisfaction can lead to increased productivity, creativity, and motivation, all of which can contribute to your overall career success. It can also lead to better physical and mental health, as well as increased career longevity.<br>  It is encouraging to see that you are experiencing a high level of job satisfaction, and it is essential to maintain this level of satisfaction. You can do so by continuing to participate in activities that give you fulfillment and meaning, such as helping others, staying connected with colleagues, and seeking out new challenges and learning opportunities.<br><br>  Please let us know if you have any questions or concerns about the results of your mental health tests, and we will be happy to address them.</div>";
                                        $color_sleep = "#81B622;opacity:0.5";
                                        // green
                                        $sp=0;
                    
                                        for($sp;$sp<=$total;$sp++)
                                        {
                                        $percent = intval(($sp*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_sleep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_sleep.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_sleep").innerHTML="<div style=\"text-align:center; font-weight:bold\">Job Satisfaction</div>";
                                            parent.document.getElementById("indicator_sleep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($sp*10).'%'.'</div>";
                                            parent.document.getElementById("content_sleep").innerHTML="<div>'.$content_sleep.'</div>";
                                            </script>';
                                        
                                        }
                                } 
                                else if($value >= 6 && $value <= 9) {
                                    // echoJob Satisfaction  Average "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                  
                                        <?php
                                                                            
                                        $total=$value;
                                        $content_sleep = "<div class='col-md-11 '>According to the results, you have an average level of job satisfaction.  Job satisfaction is a complex and nuanced concept that reflects your overall assessment of your job and working environment. Workload, work-life balance, compensation, organisational culture, and opportunities for growth and development all have an impact. In this case, you have indicated that you are moderately satisfied with your job.<br>  An average level of job satisfaction can indicate that you are not entirely satisfied with your job, but you are also not dissatisfied. You may be satisfied with some aspects of your job while feeling stressed or unsatisfied with others. There may be some areas where you would like to see improvements in order to increase your level of satisfaction.<br>  It is important to note that even a moderate level of job satisfaction can affect your overall well-being, productivity, and motivation. Even if you are not actively looking for a new job or are not experiencing high levels of stress, there is still a risk of burnout or disengagement if the factors contributing to your moderate level of satisfaction are not addressed.<br>   Finally, in your mental health test, you demonstrated an average level of job satisfaction. To promote a positive work environment and prevent burnout, it is recommended that your specific areas of dissatisfaction and areas for improvement be identified and addressed.</div>";
                                        $color_sleep = "#FFA500;opacity:0.5";
                                        // orange
                                        $sp=0;
                    
                                        for($sp;$sp<=$total;$sp++)
                                        {
                                        $percent = intval(($sp*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_sleep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_sleep.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_sleep").innerHTML="<div style=\"text-align:center; font-weight:bold\"> Job Satisfaction</div>";
                                            parent.document.getElementById("indicator_sleep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($sp*10).'%'.'</div>";
                                            parent.document.getElementById("content_sleep").innerHTML="<div>'.$content_sleep.'</div>";
                                            </script>';
                                        
                                        }
                                }
                                else if($value >= 10 && $value <= 12) {
                                    // Job Satisfaction LOw  "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                  
                                        <?php
                                                                            
                                        $total=$value;
                                        $content_sleep = "<div class='col-md-11 '>In the mental health test, you demonstrated a low level of job satisfaction. Job satisfaction is an important factor in your mental health and overall well-being. When you are dissatisfied with your job, you may experience anxiety, stress, and depression. Low job satisfaction can also lead to decreased productivity, absences, and turnover, all of which can have an impact on the department's overall performance.<br>  A lack of recognition for your work, feeling undervalued or unappreciated, poor working conditions, or a lack of growth opportunities are all possible reasons for your low job satisfaction. It is critical to address these issues if you want to improve your job satisfaction and overall mental health.<br>  We would suggest that the department provide opportunities for professional development and training to assist you in developing new skills and growing in your roles. Furthermore, the department should assess your workload and working conditions to ensure they are reasonable and supportive of a healthy work-life balance.<br>  Finally, the low level of job satisfaction revealed by your mental health test results should not be dismissed. It is critical to address the underlying causes of this problem in order to ensure your well-being and maintain a high level of job performance.</div>";
                                        $color_sleep = "#FF0000;opacity:0.5";
                                        // red
                                        $sp=0;
                    
                                        for($sp;$sp<=$total;$sp++)
                                        {
                                        $percent = intval(($sp*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_sleep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_sleep.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_sleep").innerHTML="<div style=\"text-align:center; font-weight:bold\">Job Satisfaction</div>";
                                            parent.document.getElementById("indicator_sleep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($sp*10).'%'.'</div>";
                                            parent.document.getElementById("content_sleep").innerHTML="<div>'.$content_sleep.'</div>";
                                            </script>';
                                        
                                        }
                                   }
                    
                            }
                    
                            if($key == "Work Life Balance") {
                    
                                if($value >= 10 && $value <= 12) {
                                    // echo Work Life Balance High "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                   
                                    <?php
                                    $total=$value;
                                    $color_cop = "#81B622;opacity:0.5";
                                    // green
                                    $content_cop = "<div class='col-md-11 '>Your mental health test results indicated that you have a good work-life balance, which is important for overall mental and emotional health.<br>  Work-life balance refers to your ability to manage your work responsibilities and personal life in such a way that you can achieve your goals and live a healthy lifestyle. Work-life balance can be an indicator of job satisfaction, reduced stress, and improved mental health. <br>  In this case, you have demonstrated a high level of work-life balance, which could indicate that you are effectively balancing your work responsibilities with your personal life. This can lead to increased job satisfaction, motivation, and overall well-being. It is important to note that a good work-life balance is beneficial not only to you but also to the organisation, as it can lead to increased productivity and job performance. <br>  Based on these findings, it is recommended that you continue to prioritise your work-life balance and maintain healthy boundaries between your work and personal lives. You should also consider sharing your strategies for achieving work-life balance with your coworkers, as this can foster a positive work culture and encourage others to prioritise your well-being. <br>  Overall, your high level of work-life balance demonstrates your ability to effectively manage your personal and professional life, which can lead to a happier, healthier, and more productive work environment.</div>";
                                    $c=0;
                                    for($c;$c<=$total;$c++)
                                    {
                                       
                                        $percent = intval(($c*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_cop").innerHTML="<div style=\"width:'.$percent.';background:'.$color_cop.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_cop").innerHTML="<div style=\"text-align:center; font-weight:bold\">Work Life Balance</div>";
                                        parent.document.getElementById("indicator_cop").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($c*10).'%'.'</div>";
                                        parent.document.getElementById("content_cop").innerHTML="<div>'.$content_cop.'</div>";
                                        </script>';
                                     
                                    }
                                } 
                                else if($value >= 6 && $value <= 9) {
                                    // echoWork Life Balance Average "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    $total=$value;
                                    $color_cop = "#FFA500;opacity:0.5";
                                    // orange
                                    $content_cop = "<div class='col-md-11 '>Your mental health test results, specifically your work-life balance, indicate that you have an average level of work-life balance. Work-life balance is the balance of your job demands and other aspects of your life, such as personal time, family time, and leisure time. Maintaining a balance between these areas is critical to avoiding burnout, stress, and other negative effects on your mental and physical health.<br>   An average level of work-life balance indicates that, while you are able to maintain some level of balance between your work and personal life, there may be room for improvement.<br>  Maintaining a work-life balance can be difficult, especially in a demanding and high-pressure profession such as law enforcement.<br>  There are several strategies you can use to improve your work-life balance. First, try to draw clear lines between your professional and personal lives. This may entail limiting the amount of time you spend working and making time for activities that you enjoy outside of work.<br> Consider seeking assistance from your supervisor or coworkers as well. They may be able to assist you with workload management or provide resources to help you improve your work-life balance. Finally, schedule time for self-care activities such as exercise, meditation, or spending time with family and friends.<br></div>";
                                    $c=0;
                                    for($c;$c<=$total;$c++)
                                    {
                                       
                                        $percent = intval(($c*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_cop").innerHTML="<div style=\"width:'.$percent.';background:'.$color_cop.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_cop").innerHTML="<div style=\"text-align:center; font-weight:bold\">Work Life Balance</div>";
                                        parent.document.getElementById("indicator_cop").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($c*10).'%'.'</div>";
                                        parent.document.getElementById("content_cop").innerHTML="<div style=\"text-align:center;\">'.$content_cop.'</div>";

                                        </script>';
                                     
                                    }
                                }
                                else if($value >= 0 && $value <= 5) {
                                    // echoWork Life Balance Low "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    $total=$value;
                                    $color_cop = "#FF0000;opacity:0.5";
                                    // red
                                    $content_cop = "<div class='col-md-11 '>Your recent mental health test revealed that you have a poor work-life balance. Work-life balance refers to the balance between your professional and personal lives, and it is essential to maintain a healthy balance to ensure your overall well-being.<br>  Your mental health test results indicate that you may be experiencing a lack of balance between your work and personal lives. This could be due to a variety of factors, including long work hours, a heavy workload, or a lack of support from coworkers or superiors.<br>  It is important to address this issue as soon as possible to avoid it negatively impacting your mental health and overall well-being. Setting boundaries between work and personal time, delegating tasks to others, and taking time off when needed are all ways to improve your work-life balance.<br>  We would like to encourage you to discuss your concerns with your supervisor or seniors and work together to find solutions that can help improve your work-life balance. Seeking help from friends and family outside of work can also help you achieve a better balance between work and personal life.<br>  Remember that maintaining a healthy work-life balance is essential for your overall well-being, and I hope this report has been helpful in explaining your lack of work-life balance and providing some suggestions for how to improve it.</div>";
                                    $c=0;
                                    for($c;$c<=$total;$c++)
                                    {
                                       
                                        $percent = intval(($c*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_cop").innerHTML="<div style=\"width:'.$percent.';background:'.$color_cop.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_cop").innerHTML="<div style=\"text-align:center; font-weight:bold\">Work Life Balance</div>";
                                        parent.document.getElementById("indicator_cop").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($c*10).'%'.'</div>";
                                        parent.document.getElementById("content_cop").innerHTML="<div>'.$content_cop.'</div>";
                                        </script>';
                                     
                                    }
                                }
                    
                            }
                
                            if($key == "Career Opportunities") {
                    
                                if($value >= 10 && $value <= 12) {
                                    // echo High career o"['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                   
                                    <?php
                                    $total=$value;
                                    $color_cop = "#81B622;opacity:0.5";
                                    // green
                                    $content_cop = "<div class='col-md-11 '>In your mental health test, you demonstrated a high level of career opportunity, indicating that you are optimistic about your current and future career prospects within the organisation.<br>  A high level of career opportunity can benefit your mental health and well-being because it gives you a sense of purpose, motivation, and direction in your work. It enables them to set goals and work towards them, which can improve their job satisfaction and overall happiness. <br>  Career opportunities in the police organisation may include opportunities for advancement, professional development, and specialised training. These opportunities can help you gain experience, develop new skills, and advance in your career. <br>  Employees' overall job satisfaction and motivation can be increased if the organisation continues to provide opportunities for career growth and development. This can be accomplished through regular performance evaluations, feedback and guidance, training and development programmes, and making job openings known and accessible to you. <br>  However, it is also critical to ensure that all people have equal access to career opportunities, regardless of their background, gender, race, or any other factor. The organisation should strive to foster an inclusive and equal culture in which all employees have equal access to career advancement and development opportunities. <br>  Finally, your high level of career opportunity is a positive sign that you are confident and optimistic about your career prospects within the police department. To ensure job satisfaction and well-being, the organisation must continue to provide opportunities for career growth and development to all employees.</div>";
                                    $c=0;
                                    for($c;$c<=$total;$c++)
                                    {
                                       
                                        $percent = intval(($c*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_cop").innerHTML="<div style=\"width:'.$percent.';background:'.$color_cop.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_cop").innerHTML="<div style=\"text-align:center; font-weight:bold\">Coping  Mechanism</div>";
                                        parent.document.getElementById("indicator_cop").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($c*10).'%'.'</div>";
                                        parent.document.getElementById("content_cop").innerHTML="<div>'.$content_cop.'</div>";
                                        </script>';
                                     
                                    }
                                } 
                                else if($value >= 6 && $value <= 9) {
                                    // echo carrer op Average "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    $total=$value;
                                    $color_cop = "#FFA500;opacity:0.5";
                                    // orange
                                    $content_cop = "<div class='col-md-11 '>The results of your mental health test in relation to the average level of career opportunity. Your test results indicate that you have an average level of career opportunity in your role as a police officer. <br>  Career opportunity refers to the extent to which an employee believes that their current role provides them with opportunities to progress and advance their career. It can also refer to the availability of training, development, and support to help you advance in your career. <br>   Your average level of career opportunity suggests that you may have some opportunities for advancement in your current role, but there may also be areas where you need to improve. <br>  It is important to note that career opportunities include the ability to develop skills, take on new challenges, and receive feedback and recognition for your work, in addition to promotion or upward mobility. <br>  Seek out opportunities for professional development and training, engage in career conversations with your supervisor or manager, and seek out challenging assignments or projects that will allow you to develop new skills and expand your experience to improve your career opportunities. <br>  We hope that this explanation has given you a better understanding of your average level of career opportunity and some ideas for how to improve it. Please do not hesitate to discuss your findings with your supervisor or manager, or to seek additional assistance from our mental health services.</div>";
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
                                else if($value >= 0 && $value <= 5) {
                                    // echo carressr op Low "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    $total=$value;
                                    $color_cop = "#FF0000;opacity:0.5";
                                    // red
                                    $content_cop = "<div class='col-md-11 '>Your recent mental health test, specifically in regards to your low level of career opportunity. This suggests that you may feel constrained in your professional development within the police force. The potential for growth, advancement, and development within your profession is referred to as a career opportunity. Education, experience, and available job openings can all have an impact. Your low score in this category indicates that you may be feeling stuck in your current position or unsure about your future within the force. <br>  It is critical to understand that career opportunities are not solely determined by external factors. Your own attitudes and behaviours can influence your professional development. <br>  Seeking out training and development opportunities, networking with colleagues, and actively seeking out new challenges, for example, can all contribute to a sense of career advancement. <br>  We encourage you to reflect on your current goals and aspirations in your role with the Mumbai Police Department. Consider talking to a boss or a mentor about potential opportunities for advancement or any concerns you may have. They may be able to offer advice or connect you with resources to help you achieve your objectives. <br>  Remember that career growth is not always a linear process, and it is normal to experience setbacks or obstacles along the way. However, by taking a proactive approach and seeking out opportunities for learning and development, you can take steps towards achieving your professional aspirations. <br>  If you have any questions or concerns about your results, please do not hesitate to reach out to us or to a mental health professional for further support.</div>";
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
                            
                            if($key == "Coping Mechanism") {
                    
                                if($value >= 10 && $value <= 12) {
                                    // echo High "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                   
                                    <?php
                                    $total=$value;
                                    $color_cop = "#81B622;opacity:0.5";
                                    // green
                                    $content_cop = "<div class='col-md-11 '>In the recent mental health test, you received a high score, indicating a high level of Coping Mechanism. Coping mechanisms are the strategies that people use to deal with stress and difficult situations. A high level of coping mechanism indicates that you have developed effective coping strategies in your personal and professional life. <br>  In your case, you have demonstrated a high level of coping mechanism, which is an excellent indicator of your resilience and ability to effectively manage stress. It is worth noting that the job of a police officer is fraught with unique stressors and challenges that can be overwhelming for many people. <br>  Your ability to deal with these challenges, on the other hand, suggests that you have developed the necessary skills and strategies to deal with stress and difficult situations. <br>  You demonstrated excellent problem-solving abilities, the ability to adapt to changing situations, and the ability to maintain a positive outlook even in difficult circumstances during the mental health test. These are all important characteristics that contribute to your strong coping mechanism. You also demonstrated a proactive approach to stress management by engaging in regular physical exercise, maintaining healthy relationships, and seeking help when needed. <br>  It is important to note that a strong coping mechanism is a valuable asset in any profession, but especially in high-stress jobs like law enforcement. Your ability to effectively manage stress benefits not only you, but also helps you perform your job effectively and ensures the safety and well-being of the community you serve. <br>  Finally, your high level of coping mechanism is an excellent indicator of your resilience, problem-solving skills, and ability to effectively manage stress. To maintain your mental and emotional well-being, we encourage you to continue to build on your strengths and seek help when needed.</div>";
                                    $c=0;
                                    for($c;$c<=$total;$c++)
                                    {
                                       
                                        $percent = intval(($c*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_cop").innerHTML="<div style=\"width:'.$percent.';background:'.$color_cop.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_cop").innerHTML="<div style=\"text-align:center; font-weight:bold\">Coping  Mechanism</div>";
                                        parent.document.getElementById("indicator_cop").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($c*10).'%'.'</div>";
                                        parent.document.getElementById("content_cop").innerHTML="<div>'.$content_cop.'</div>";
                                        </script>';
                                     
                                    }
                                } 
                                else if($value >= 6 && $value <= 9) {
                                    // echo Average "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    $total=$value;
                                    $color_cop = "#FFA500;opacity:0.5";
                                    // orange
                                    $content_cop = "<div class='col-md-11 '>According to your mental health assessment, you have an average level of Coping Mechanisms. This means you have some effective coping strategies but may struggle to manage stress and emotions at times. <br>  As a police officer, you face numerous challenges, including high levels of stress, danger, and trauma. It is important to have strong coping skills to help you manage these challenges and maintain good mental health. <br>   Your average Coping Mechanism level indicates that you can effectively deal with some of the stressors in your work and personal life. You may have some healthy coping mechanisms in place, such as exercising, spending time with family and friends, and participating in hobbies or other activities. <br>  However, your average score suggests that you could improve your coping skills in some areas. Additional coping strategies for dealing with stress and trauma may be beneficial. Mindfulness and relaxation techniques, seeking support from colleagues or mental health professionals, and engaging in self-care practises such as getting enough rest, eating a healthy diet, and staying physically active are some strategies that may be beneficial. <br>  Overall, it's encouraging that you've implemented some effective coping strategies, but there's always room for improvement. We would like to encourage you to continue working on developing and strengthening your coping skills in order to better manage the stress and challenges of your job and maintain good mental health. <br>  Please contact your supervisor or a mental health professional if you have any questions or concerns about your mental health or coping skills. <br></div>";
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
                                else if($value >= 0 && $value <= 5) {
                                    // echo Low "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    $total=$value;
                                    $color_cop = "#FF0000;opacity:0.5";
                                    // red
                                    $content_cop = "<div class='col-md-11 '>Your recent mental health test results indicate a low level of Coping Mechanism. Coping mechanisms, as you may know, are the strategies we use to deal with stress and difficult situations in our lives. With a low level of coping mechanism, you may struggle to manage stress and may struggle to deal with challenges and difficult situations. <br>  It's critical to have effective coping mechanisms in your line of work. You are regularly exposed to high-stress situations as a police officer, which can have a significant impact on your mental health if not managed effectively. As a result, it's important to devise strategies to help you cope better. <br>  Identifying the sources of stress in your life and finding ways to reduce or manage them is one way to develop effective coping mechanisms. For example, you may find that practising mindfulness, exercising regularly, or seeking support from friends or family is beneficial. You can also learn stress-reduction techniques like deep breathing, visualisation, and progressive muscle relaxation. <br>  It is critical to understand that seeking help from others is not a sign of weakness. On the contrary, it demonstrates resilience and strength. If you find yourself struggling to cope, don't be afraid to seek assistance. There are a variety of resources available, such as counselling or therapy, that can aid in the development of effective coping mechanisms. <br>  Finally, developing effective coping mechanisms is critical for overall well-being, particularly in your line of work. We  encourage you to improve your coping mechanisms by identifying sources of stress, practise self-care, and seeking support from others. We can collaborate to make sure you have the resources and support you need to thrive both personally and professionally. <br> If you have any questions or require additional assistance, please do not hesitate to contact team Ollato.</div>";
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
                            
                            if($key == "Family Support") {
                    
                                if($value >= 10 && $value <= 12) {
                                    // echo High "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                   
                                    <?php
                                    $total=$value;
                                    $color_fem = "#81B622;opacity:0.5";
                                    // green
                                    $content_fem = "<div class='col-md-11 '>Your mental health test results indicate a high level of family support. This is a good sign of your overall health and an important factor in maintaining a healthy work-life balance. <br>  Family support is important to an individual's overall mental health and well-being. Individuals are better able to cope with stress and life's challenges when they feel supported by their families. This can help to lower the risk of mental health problems like anxiety and depression. <br>  A strong family support system can also help to promote positive coping mechanisms. This can include discussing your concerns and feelings with family members, seeking advice and guidance, and receiving emotional support as needed. <br>  Your strong family support is a valuable asset to you as a police officer. It can help you manage the stress and demands of your job, which can be difficult at times. Furthermore, a strong support system can aid in the promotion of resilience and positive mental health. <br>  We encourage you to keep and strengthen your family relationships. This can include spending quality time with family members, communicating openly and honestly, and seeking support when needed. You can continue to build a strong foundation for your overall well-being by prioritising your family relationships. <br>  If you have any concerns or questions about your mental health test results, or if you want to discuss any other issues concerning your mental health, please contact team Ollato or a mental health professional. <br></div>";
                                    $fc=0;
                                    for($fc;$fc<=$total;$fc++)
                                    {
                                       
                                        $percent = intval(($fc*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_fem").innerHTML="<div style=\"width:'.$percent.';background:'.$color_fem.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_fem").innerHTML="<div style=\"text-align:center; font-weight:bold\">Family Support</div>";
                                        parent.document.getElementById("indicator_fem").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($fc*10).'%'.'</div>";
                                        parent.document.getElementById("content_fem").innerHTML="<div style=\"text-align:left;\">'.$content_fem.'</div>";
                                        </script>';
                                     
                                    }
                                } 
                                else if($value >= 6 && $value <= 9) {
                                    // echo Average "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    $total=$value;
                                    $color_fem = "#FFA500;opacity:0.5";
                                    // orange
                                    $content_fem = "<div class='col-md-11 '>Your mental health test results indicate that you have an average level of family support. Your mental health test revealed that you have average family support. This means you have some support from your family, but there is still room for improvement. It is important to note that having a good support system, including family, can be important in maintaining good mental health, especially in high-stress jobs like yours in the Police Department. <br>  A low level of family support could be due to a number of factors. For example, it is possible that your family members are unaware of the demands of your job and the level of stress that it can cause, or that they do not fully understand how to support you in a helpful manner. <br>  It is important that you communicate with your family members about how they can help you with your job. You can also seek help from colleagues or other members of your community who are more familiar with the demands of your job. You should also consider seeking professional counselling or therapy to help you cope with the stresses of your job and improve your overall well-being. <br>  In conclusion, while your mental health test revealed that you have an average level of family support, there is always room for improvement. We encourage you to improve your support system and, if necessary, seek professional assistance. If you have any questions or concerns, please let us know.</div>";
                                    $fc=0;
                                    for($fc;$fc<=$total;$fc++)
                                    {
                                       
                                        $percent = intval(($fc*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_fem").innerHTML="<div style=\"width:'.$percent.';background:'.$color_fem.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_fem").innerHTML="<div style=\"text-align:center; font-weight:bold\">Family Support</div>";
                                        parent.document.getElementById("indicator_fem").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($fc*10).'%'.'</div>";
                                        parent.document.getElementById("content_fem").innerHTML="<div style=\"text-align:center;\">'.$content_fem.'</div>";

                                        </script>';
                                     
                                    }
                                }
                                else if($value >= 0 && $value <= 5) {
                                    // echo Low "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    $total=$value;
                                    $color_fem = "#FF0000;opacity:0.5";
                                    // red
                                    $content_fem = "<div class='col-md-11 '>According to the findings of your recent mental health test, you have a low level of family support. Family support is essential for maintaining one's mental health and well-being. It is critical to comprehend the reasons for your low level of family support and work to improve it for your benefit. <br>  Stress, emotional instability, and feelings of loneliness and isolation can all be exacerbated by a lack of family support. It is important to have a support system that can assist you in dealing with the difficulties that you may face in your personal and professional life. <br>  There could be a number of reasons for the lack of family support. It could be because of the nature of your job as a police officer, which often involves long hours and unpredictable work schedules. This can make it difficult to spend time with your family and form strong bonds with them. <br>  There could also be interpersonal conflicts or misunderstandings within the family, leading to a lack of support. In such cases, it is critical to identify the underlying cause of the problem and work towards its resolution through open and honest communication.  You can take several steps to increase your level of family support. To begin, make a concerted effort to spend quality time with your family, even if only for brief periods of time. This can include activities such as going for a walk or sharing a meal.  It is also important to communicate with your family members about your work and the difficulties you are experiencing. This will allow them to better understand your situation and offer assistance as needed. <br>  You can also seek the assistance of a counsellor or therapist to work through any unresolved issues or conflicts within the family. They can provide a safe and nonjudgmental environment for you to express your thoughts and feelings, as well as assist you in developing strategies to improve your family relationships. <br>  Finally, a lack of family support can have a negative impact on your mental health and overall well-being. It is important to work on improving your relationships with family members and creating a strong support system to help you deal with life's challenges. <br></div>";
                                    $fc=0;
                                    for($fc;$fc<=$total;$fc++)
                                    {
                                       
                                        $percent = intval(($fc*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_fem").innerHTML="<div style=\"width:'.$percent.';background:'.$color_fem.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_fem").innerHTML="<div style=\"text-align:center; font-weight:bold\">Family Support</div>";
                                        parent.document.getElementById("indicator_fem").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($fc*10).'%'.'</div>";
                                        parent.document.getElementById("content_fem").innerHTML="<div style=\"text-align:center;\">'.$content_fem.'</div>";
                                        </script>';
                                     
                                    }
                                }
                    
                            }
                            
                            
                             if($key == "Female Police Person") {
                    
                                    if($value >= 10 && $value <= 12) {
                                        // echo High "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                        ?>
                                       
                                        <?php
                                        $total=$value;
                                        $color_fp = "#81B622;opacity:0.5";
                                        // green
                                        $content_fp = "<div class='col-md-11 '>The results of your recent mental health test showed a high level of score. To perform your duties effectively as a female police officer, you must take care of your mental and physical well-being. <br>  Let's start with psychological symptoms. According to the results of the test, you have been experiencing high levels of stress, anxiety, and depressive symptoms. These symptoms can have a negative impact on your overall mental health, as well as your work performance, relationships, and daily life. To improve your mental health, you must address these issues and seek professional help. <br>  We recommend stress-reduction techniques such as meditation, exercise, and breathing exercises to help you deal with your psychological symptoms. Speaking with a therapist or counsellor can also aid in the management of stress, anxiety, and depression. The police department also offers mental health services, such as counselling and workshops, which may be beneficial to you. <br>  Let us now discuss the physical symptoms. The test revealed that you have been suffering from physical symptoms such as headaches, back pain, and fatigue. These physical symptoms may be related to psychological symptoms, and it is important to address both in order to improve your overall well-being. <br>  We recommend that you take care of your physical health by eating well, staying hydrated, and getting enough sleep. Regular exercise, yoga, and meditation can also aid in the reduction of physical symptoms and the improvement of mental health. <br>  Finally, it is important for a female police officer to prioritise self-care and seek support from family and colleagues. The department provides its employees with a variety of resources, including peer support programmes and employee assistance programmes. Please do not be afraid to reach out for assistance and support. <br>  Finally, your mental health is critical, and it is important that you address the psychological and physical symptoms you are experiencing. Please take care of yourself and seek help if you are unhappy. Please do not hesitate to contact Us if you have any questions or concerns.</div>";
                                        $fp=0;
                                        for($fp;$fp<=$total;$fp++)
                                        {
                                           
                                            $percent = intval(($fp*10))."%"; 
                                             echo '<script>
                                            parent.document.getElementById("progressbar_fp").innerHTML="<div style=\"width:'.$percent.';background:'.$color_fp.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_fp").innerHTML="<div style=\"text-align:center; font-weight:bold\">Female Police Person</div>";
                                            parent.document.getElementById("indicator_fp").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($fp*10).'%'.'</div>";
                                            parent.document.getElementById("content_fp").innerHTML="<div>'.$content_fp.'</div>";
                                            </script>';
                                         
                                        }
                                    } 
                                    else if($value >= 6 && $value <= 9) {
                                        // echo Average "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                        ?>
                                        
                                        <?php
                                        $total=$value;
                                        $color_fp = "#FFA500;opacity:0.5";
                                        // orange
                                        $content_fp = "<div class='col-md-11 '>Based on your assessment, you have shown an average level of score. While your results may not be as impressive as those of your colleagues, they do demonstrate that there are some areas where you could benefit from additional assistance or resources. <br>  It is important to remember that everyone's mental health has ups and downs, and seeking help when needed is a sign of strength, not weakness. Our department has many resources available to you, such as counselling services, stress management workshops, and other mental health programmes. <br>  It is also important to prioritise self-care in your daily routine. This includes getting enough sleep, exercising, eating properly, and engaging in activities that bring you joy and relaxation. It is also critical to communicate with your supervisor or coworkers about any concerns or stressors at work. <br>  Overall, please know that you are not alone in dealing with mental health issues, and that there are resources and support available to assist you in managing and improving your mental health. When you need assistance or direction, don't be afraid to ask for it.</div>";
                                        $fp=0;
                                        for($fp;$fp<=$total;$fp++)
                                        {
                                           
                                            $percent = intval(($fp*10))."%"; 
                                             echo '<script>
                                           parent.document.getElementById("progressbar_fp").innerHTML="<div style=\"width:'.$percent.';background:'.$color_fp.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_fp").innerHTML="<div style=\"text-align:center; font-weight:bold\">Female Police Person</div>";
                                            parent.document.getElementById("indicator_fp").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($fp*10).'%'.'</div>";
                                            parent.document.getElementById("content_fp").innerHTML="<div>'.$content_fp.'</div>";
    
                                            </script>';
                                         
                                        }
                                    }
                                    else if($value >= 0 && $value <= 5) {
                                        // echo Low "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                        ?>
                                        
                                        <?php
                                        $total=$value;
                                        $color_fp = "#FF0000;opacity:0.5";
                                        // red
                                        $content_fp = "<div class='col-md-11 '>Your scores indicate a low level of mental health, including psychological and physical symptoms. It is impotant to recognise that mental health is just as important as physical health, and we want to ensure that you have access to the support and resources you require to address any concerns you may be having. <br>  Work-related stress, personal life challenges, and other external factors are all factors that can contribute to poor mental health. It is important to recognise that these issues do not reflect your personal abilities or worth, and that seeking help is a sign of strength, not weakness. <br>  We recognise that working in Police department can be a difficult and demanding job, and we are committed to providing you with the support and resources you require to manage your mental health. We encourage you to speak with your supervisor or an HR representative about any concerns you may have and to look into options for support and resources, such as counselling or therapy. <br>  Furthermore, there are several things you can do on your own to improve your mental health, such as getting regular exercise, eating a healthy diet, getting enough sleep, and practising stress-reduction techniques such as meditation or yoga. We encourage you to put your mental health and well-being first and to use the resources that are available to you. <br>  Please know that we appreciate your work and want to help you in any way we can. Please do not hesitate to contact us if you have any questions or concerns.</div>";
                                        $fp=0;
                                        for($fp;$fp<=$total;$fp++)
                                        {
                                           
                                            $percent = intval(($fp*10))."%"; 
                                             echo '<script>
                                           parent.document.getElementById("progressbar_fp").innerHTML="<div style=\"width:'.$percent.';background:'.$color_fp.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_fp").innerHTML="<div style=\"text-align:center; font-weight:bold\">Female Police Person</div>";
                                            parent.document.getElementById("indicator_fp").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($fp*10).'%'.'</div>";
                                            parent.document.getElementById("content_fp").innerHTML="<div>'.$content_fp.'</div>";
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

        if($key == "Anxiety") {

            if($value >= 10 && $value <= 12) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 9) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Depression") {

            if($value >= 10 && $value <= 12) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 9) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Stress") {

            if($value >= 10 && $value <= 12) {
              echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";   
            } 
            else if($value >= 6 && $value <= 9) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            }

        }

        if($key == "PTSD") {

            if($value >= 10 && $value <= 12) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 9) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Burnout") {

            if($value >= 10 && $value <= 12) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 9) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Job Security") {

            if($value >= 10 && $value <= 12) {
               echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 9) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
               
            }

        }

        if($key == "Work Environment") {

            if($value >= 10 && $value <= 12) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 9) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            }

        }

        if($key == "Work Load") {

            if($value >= 10 && $value <= 12) {
               
                 echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 9) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
               
                 echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                
            }

        }

        if($key == "Job Satisfaction") {

            if($value >= 10 && $value <= 12) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 9) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            }

        }


        if($key == "Work Life Balance") {

            if($value >= 10 && $value <= 12) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 9) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }
        
        // add new domain
        
        if($key == "Career Opportunities") {

            if($value >= 10 && $value <= 12) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 9) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }
        
        if($key == "Coping Mechanism") {

            if($value >= 10 && $value <= 12) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 9) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }
        
        if($key == "Family Support") {

            if($value >= 10 && $value <= 12) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 9) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }
        
        if($key == "Female Police Person") {

            if($value >= 10 && $value <= 12) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 9) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
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
                    width:  00,
                    height: 650,
                    bar: {
                        groupWidth: "80%"
                    },
                    legend: {
                        position: "none"
                    },
                     vAxis: {
                            maxValue: 1
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
    include_once'../header/head.php';
      header("Location:take-test2.php");
?>
        <!--Student not having any text then it shown -->
         <!--<div class=" container mx-auto row footer" style="margin-top:120px;">-->
         <!--                    <div class="container bg-primary p-3">-->
                                
         <!--                         <h3 class=" my-1 fw-bold text-center text-light">Welcome To Serac Education  </h3>-->
         <!--                    </div>-->
         <!--                     <div class="container">-->
         <!--                        <h3 class=" fw-bold">&nbsp;</h3>-->
         <!--                         <h3 class=" my-2 fw-bold text-center">You don't have take any test   </h3>-->
         <!--                         <p class=" my-2 fw-bold text-center">Please clicked  Assestment tab  and give a test also get your result within a second</p>-->
         <!--                          <div class="container align-middle">-->
         <!--                          <p class="fw-bold text-center"><span class="align-middle">Click Here </span>&nbsp;<a href="dashboard"  class="btn border align-middle btn-outline-primary">Dashboard</a></p>-->
         <!--                           </div>-->
         <!--                    </div>-->
                                 
         <!--              <div class="col bg-warning p-3">-->
         <!--               <h3 class=" my-1 fw-bold text-center text-light">Wish You All The Best !!</h3>-->
                       
         <!--              </div>-->
                        
         <!--            </div>  -->
<?php
}

?>

                         
 </body>
 </html>                 
                    
                    
