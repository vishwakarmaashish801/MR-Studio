<?php
session_start();

 if(!isset($_SESSION['loggedin'])){ //if login in session is not set
     header("Location:/interest/");
}

include 'config.php';
 
$mydate=getdate(date("U"));


// variable defined as
 $user_id = '';
 
$user_id = $_SESSION['user_id'];

// echo "User ID ". $user_id;


    

  $sql1 = "SELECT * FROM result_interest where student_id='$user_id'";
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
      $examDate = $row[9];
      $assestmentDate = date("d-m-Y", strtotime($examDate)); 
      
      $examDate= $_SESSION['dob'];
    //   echo "exam date".$examDate;
      $dbDate = date("Y", strtotime($examDate));
        //   echo"database year ".$dbyear;
             $todayDate = Date('Y');
       //   echo"today year".$todayDate;
         $age = $todayDate - $dbDate;  //year

    
      $Domain_value_db = array();
      $Domain_name = array('REALISTIC', 'INVESTIGATIVE', 'ARTISTIC', 'SOCIAL', 'ENTERPRISING', 'CONVENTIONAL');
      array_push($Domain_value_db, "$adj1", "$att2", "$self3", "$study4", "$dep5", "$anx6");
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
.btn-pdf,.btn-home {background: #56cce1; color: #11486d; width: 150px;
</style>
</head>

<body>
        <!-- HTML content for PDF creation -->
        <!--button-->
          <div class="container gap-2 text-center" style="margin-right:-180px">
              <div><button type="button"  style="background:#56cce1;color:#11486d" class="rounded-pill btn-pdf" onClick="window.print()"> Download Report!</button> </div>
              <div><a href="dashboard.php"><button type="button"  style="background:#56cce1;color:#11486d" class="rounded-pill btn-home"> Home</button></a></div>
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
           <!--<img src="https://www.ollato.com/wp-content/uploads/2023/02/cropped-ollato-new-logo-site-identi-180x180.png" width='80px'>-->
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
               <tr><th>Age:</th><td><?php echo $age;?> Years</td></tr>
               <tr><th>Gender:</th><td class="text-capitalize"><?php echo $_SESSION['gender'] ;?></td></tr>
               <!--<tr><th>Profession: </th><td>12<sup>th</sup>std</td></tr>-->
               <tr><th>Date of Assessment: </th><td><?php echo $assestmentDate;?></span></td></tr>
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

             <!--first table-->
             <div>
               
                   <table class="table-print table-bordered p-2">
                        <tr>
                           <th scope="col" class="sn p-2"> S.N</th>
                           <th scope="col" class="domain p-2"> Our Domain</th>
                           <th scope="col" class="score p-2">Your Finding</th>
                       </tr>
                       
                       <?php
                         $i=1 ;
                         foreach ($newArray_db as $key => $value){ ?>
                     
                        <tr>
                           <td class="p-2 text-center"><?php echo $i?> </td>
                           <td class="p-2 text-center"><?php echo $key?> </td>
                           <td class="p-2 text-center"><?php echo $value?></td>
                        </tr>
                        
                        <?php $i++; }?>
                      
                         
                     </table>
             </div>
            

            </div>
            </div>
           <!-- end third page-->
          
           <!--fith page-->
           <div class="page container">
            <div class="page-body">
            <div>&nbsp</div>
            <h3 class="text-center fw-bold mt-5 fs-4"> DETAILED INTEREST TEST</h3>
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
        <!--   <div class="page container"> -->
        <!--    <div class="page-body">-->
        <!--    <p class="lh-3"style="text-align: justify;"> Your assessment report indicates that you possess good coping mechanisms andare capable of handling challenges in your academic and personal life. Your-->
        <!--      responses demonstrate that you are confident in approaching difficult situations,and you seek inspiration and knowledge to improve your coping mechanismsfurther. <br> You are comfortable in both group and individual settings, and you do not shyaway from participating in discussions or tests. You feel confident in approachingyour parents or family members and discussing your mental state with them. You-->
        <!--      have good management techniques and can identify the reasons for yourshortcomings in critical situations.<br>You frequently engage in problem-solving and try to find ways to correct your flaws.You take practice tests and exams to improve your performance, and you can live-->
        <!--      independently without needing a family member or friend to be with you.<br>You frequently engage in problem-solving and try to find ways to correct your flaws.-->
        <!--      You take practice tests and exams to improve your performance, and you can live-->
        <!--      independently without needing a family member or friend to be with you.<br>Overall, your coping mechanisms are well-developed, and you have a positive-->
        <!--      outlook on life. Keep up the good work and continue to seek inspiration and-->
        <!--        knowledge to improve your coping mechanisms further.<br> -->
        <!--<p class="fw-bold"style="text-align:right;margin-right: 45px;"> Best Regards,<br>-->
        <!--    Team Ollato.-->
        <!--    </p>-->
        <!--   </div>-->
        <!--   </div>-->
        
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
        
         <!--Study  Social-->
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
         
         
          <!--Depression  enterprising-->
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
                     
                     
                           <!--Content Decription--->
                           
                           <?php
                        
                           foreach ($newArray_db as $key => $value){
                    
                            // echo "Doamain Name" . $key . " Value " . $value."<br>";
                     
                            if($key == "REALISTIC") {
                    
                                if($value >= 7 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    $description_ad ="Your responses on the Realistic domain suggest that you would be attracted to a work environment that involves using technical expertise and manual skills. Outdoor work stations are your preference. You are inclined towards tasks which involve operating tools or machinery, dealing with plants or animals as opposed to ideas or people. You are seen as someone who is independent, conforming, practical and values traditional ways of doing things. "; 
                                    $box_content="Related Subjects: Physics, Earth Science, Agricultural Studies, Engineering, Computer Science (Hardware), Physical Education";
                                    ?>
                    
                                      
                    
                                    <?php
                                   $total = $value;
                                    $color_adj = "#00FF00;opacity: 0.5";
                                    //change #81B622;opacity: 0.5
                                    // green
                                    $content_adj = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_ad</div><br>";
                                    $content_adjBox ="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content</span></div></div>";
                                    $ad=0;
                    
                                   for($ad;$ad<=$total;$ad++)
                                   {
                                       $percent = intval($ad*10)."%"; 
                                      
                                        echo '<script>
                                        parent.document.getElementById("progressbar_adj").innerHTML="<div style=\"width:'.$percent.';background:'.$color_adj.'; ;height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_adj").innerHTML="<div style=\"text-align:center;\">REALISTIC</div>";
                                        parent.document.getElementById("indicator_adj").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($ad*10).'%'.'</div>";
                                        parent.document.getElementById("content_adj").innerHTML="<div>'.$content_adj.''.$content_adjBox.'</div>";
                                       </script>';
                                   
                                   }
                                }
                                
                                else if($value >= 4 && $value <= 6) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    $description_ad="Your responses on the Realistic domain suggest that you have a fair inclination towards activities which involve technical expertise and manual skills. More often than not you would prefer to work outdoors, engaging in tasks which involve operating tools or machinery rather than dealing directly with people or working actively with ideas. You are likely to be  drawn towards a set routine, well-defined roles and structured work settings. ";
                                    $box_content ="Related Subjects: Physics, Earth Science, Agricultural Studies, Engineering, Computer Science (Hardware), Physical Education";
                                    ?>
                    
                                 
                    
                                    <?php
                                   $total = $value;
                                   
                                    $color_adj = "#FFA500; opacity: 0.5";
                                    $content_adj = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_ad</div><br>";
                                    $content_adjBox ="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content</span></div></div>";
                                    $ad=0;
                    
                                   for($ad;$ad<=$total;$ad++)
                                   {
                                       $percent = intval($ad*10)."%";  
                                     
                                        echo '<script>
                                       parent.document.getElementById("progressbar_adj").innerHTML="<div style=\"width:'.$percent.';background:'.$color_adj.'; ;height:20px;\">&nbsp;</div>";
                                       parent.document.getElementById("information_adj").innerHTML="<div style=\"text-align:center;\">Adjustment</div>";
                                       parent.document.getElementById("indicator_adj").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($ad*10).'%'.'</div>";
                                       parent.document.getElementById("content_adj").innerHTML="<div>'.$content_adj.''.$content_adjBox.'</div>";

                                       
                                       </script>';
                                   
                                   }
                                }
                                
                                else if($value >= 0 && $value <= 3) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                     $description_ad="Your responses on the Realistic domain suggest that working outdoors will not be your first preference. Tasks which involve fixing, assembling or operating equipment or machinery do not excite you. You might not be too interested in exerting physical strength or using manual skills at work. You rather engage with people or ideas than solving concrete problems.";
                                     $box_content ="Related Subjects: Physics, Earth Science, Agricultural Studies, Engineering, Computer Science (Hardware), Physical Education";

                                    ?>
                                    
                                    <?php
                                    $total = $value;
                                    $color_adj = "#FF0000;opacity:0.5";
                                  
                                    // red
                                     $content_adj = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_ad</div><br>";
                                     $content_adjBox ="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content</span></div></div>";
                                     $ad=0;
                    
                                   for($ad;$ad<=$total;$ad++)
                                   {
                                       $percent = intval($ad*10)."%";  
                                        echo '<script>
                                        parent.document.getElementById("progressbar_adj").innerHTML="<div style=\"width:'.$percent.';background:'.$color_adj.'; ;height:20px;\">&nbsp;</div>";
                                       parent.document.getElementById("information_adj").innerHTML="<div style=\"text-align:center;\">Adjustment</div>";
                                       parent.document.getElementById("indicator_adj").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($ad*10).'%'.'</div>";
                                       parent.document.getElementById("content_adj").innerHTML="<div>'.$content_adj.''.$content_adjBox.'</div>";

                                       </script>';
                                   
                                   }
                                
                                }
                    
                            }
                    
                            if($key == "INVESTIGATIVE") {
                    
                                if($value >= 8 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                   ?>
                                    
                                    <?php
                                    
                                    $total_att= $value;
                                    $color_att = "#00FF00;opacity: 0.5";
                                    
                                    
                                    $description_inv ="Your responses on the Investigative domain suggest that you like to observe, learn, investigate and analyze problems of a scientific or mathematical nature. You prefer to work with ideas as compared to engaging with people or things. You enjoy the freedom of an unstructured setting that allows you to explore concepts and ideas freely. You are seen as someone who is precise, articulate, logical, curious, persistent and explorative in nature.";
                                    $box_content_inv ="Related Subjects: Sciences, Medical Studies, Economics, Mathematics, Psychology, Computer Science";
                                    
                                
                                    $content_att = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_inv</div><br>";
                                    $content_attBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_inv</span></div></div>";
                                    $m=0;
                                    for($m;$m<=$total_att;$m++)
                                    {
                                        $percent = intval(($m*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_att").innerHTML="<div style=\"width:'.$percent.';background:'.$color_att.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_att").innerHTML="<div style=\"text-align:center;\">INVESTIGATIVE</div>";
                                        parent.document.getElementById("indicator_att").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($m*10).'%'.'</div>";
                                        parent.document.getElementById("content_att").innerHTML="<div>'.$content_att.''.$content_attBox.'</div>";

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
                                    //orange  Average
                                    
                                     $description_inv ="Your responses on the Investigative domain indicate an average preference on your behalf for independent and challenging work environments. You mostly prefer to work with ideas as compared to engaging with people or things. You are inclined towards investigating and analysing problems from a scientific standpoint. You are often described as someone who is logical, curious, precise and analytical in nature.";
                                     $box_content_inv ="Related Subjects: Sciences, Medical Studies, Economics, Mathematics, Psychology, Computer Science";
                                    
                                
                                    $content_att = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_inv</div><br>";
                                    $content_attBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_inv</span></div></div>";
                    
                                    for($m;$m<=$total_att;$m++)
                                    {
                                        $percent = intval(($m*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_att").innerHTML="<div style=\"width:'.$percent.';background:'.$color_att.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_att").innerHTML="<div style=\"text-align:center;\">INVESTIGATIVE</div>";
                                        parent.document.getElementById("indicator_att").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($m*10).'%'.'</div>";
                                        parent.document.getElementById("content_att").innerHTML="<div>'.$content_att.''.$content_attBox.'</div>";
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
                                    
                                     $description_inv ="Your responses on the Investigative domain suggest that you are less inclined towards tasks which are scientific and analytical in nature. Prospect of research, logical exploration and detailed analysis is something you are less likely to look forward to. Work settings which are not structured or well defined are not your preference.";
                                     $box_content_inv ="Related Subjects: Sciences, Medical Studies, Economics, Mathematics, Psychology, Computer Science";
                                    
                                    
                                    $content_att = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_inv</div><br>";
                                    $content_attBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_inv</span></div></div>";  
                                    
                                     for ($m; $m <= $total_att; $m++) {
                                         $percent = intval(($m * 10)) . "%";
                                         echo '<script>
                                          parent.document.getElementById("progressbar_att").innerHTML="<div style=\"width:' . $percent . ';background:' . $color_att . ';height:20px;\">&nbsp;</div>";
                                          parent.document.getElementById("information_att").innerHTML="<div style=\"text-align:center;\">INVESTIGATIVE</div>";
                                          parent.document.getElementById("indicator_att").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($m*10).'%'.'</div>";
                                        parent.document.getElementById("content_att").innerHTML="<div>'.$content_att.''.$content_attBox.'</div>";

                                        </script>';
                    
                                     }
                                 }
                            }
                    
                            if($key == "ARTISTIC") {
                    
                                if($value >= 8 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                    <!-- <div id="progressbar_self" style="border:1px solid #ccc; border-radius: 5px;  "></div> -->
                                    <!-- Progress information -->
                                    <!-- <div id="information_self" ></div> -->
                                    <?php
                                    $self=0;
                                    $total= $value;
                                    
                                     $description_art ="Your responses on the Artistic domain suggest that you like to adopt an innovative, creative, expressive and imaginative approach to your work. You enjoy artistic freedom given to you by a flexible work environment which allows you to explore different modes of expression. You enjoy working with self-expressive ideas more than routine tasks or following set rules. You are seen as someone who is innovative, instinctive, impulsive, non-conformist, unique and independent in nature.";
                                     $box_content_art ="Related Subjects: Designing, Music, Drama, Art, English, Language Studies";
                                    
                                    
                                    $content_self = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_art</div><br>";
                                    $content_selfBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_art</span></div></div>";  

                                    $color_self = '#00FF00;opacity: 0.5';
                                    // green
                                    for($self;$self<=$total;$self++)
                                    {
                                        $percent = intval(($self*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_self").innerHTML="<div style=\"width:'.$percent.';background:'.$color_self.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_self").innerHTML="<div style=\"text-align:center;\">ARTISTIC</div>";
                                        parent.document.getElementById("indicator_self").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($self*10).'%'.'</div>";
                                        parent.document.getElementById("content_self").innerHTML="<div>'.$content_self.''.$content_selfBox.'</div>";
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
                                    
                                     $description_art ="Your responses on the Artistic domain indicate that you are drawn towards a work environment which promotes collaboration, creativity and freedom to express. You like to engage with creative ideas more than routine tasks or following set rules. You demonstrate a fair inclination towards engaging in artistic endeavors using varying modes of expression.You are likely to be seen as someone who is unique, innovative, imaginative and independent in nature. ";
                                     $box_content_art ="Related Subjects: Designing, Music, Drama, Art, English, Language Studies";
                                     
                                     $content_self = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_art</div><br>";
                                     $content_selfBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_art</span></div></div>";                                    
                                    
                                    $color_self = '#FFA500;opacity:0.5';
                                    // orange
                                    for($self;$self<=$total;$self++)
                                    {
                                        $percent = intval(($self*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_self").innerHTML="<div style=\"width:'.$percent.';background:'.$color_self.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_self").innerHTML="<div style=\"text-align:center;\">ARTISTIC</div>";
                                        parent.document.getElementById("indicator_self").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($self*10).'%'.'</div>";
                                        parent.document.getElementById("content_self").innerHTML="<div>'.$content_self.''.$content_selfBox.'</div>";
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
                                    
                                     $description_art ="Your responses on the Artistic domain suggest that tasks which require artistic exploration and expression are not of interest to you. An unstructured or flexible work setting may not be best suited for you. You prefer routine tasks and a set schedule to ever evolving ideas which require originality and innovation.";
                                     $box_content_art ="Related Subjects: Designing, Music, Drama, Art, English, Language Studies";
                                     
                                    $content_self = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your responses on the Self-Awareness Domain highlighting a need of improvement. You won't listen to or accept critical feedback. You cannot empathize with, or take the perspective of, others. You have difficulty focusing on yourself, your needs, or your emotions. You become hurtful to others without realizing it. You take credit for success and blame others for failures. Mostly of the time you fail to recall your lecture points in exam, classroom or in any debate. You rarely found that lectures are interesting and connecting. If you skip a lecture, you don't have a problem. You are often attracted to external stimuli. You become unable to study effectively for a long time.<br><br><span class='fw-bold'><i> But, nothing to worry about. You can enhance your Self-Awareness Skill in the following way: </i></span> <br>There are many ways you can practice being present with yourself and your emotions, which, in turn, can help improve your self-awareness.<br><span class='fw-bold'> ● Meditation:</span> Meditation can be an especially useful practice because you don't have to worry about changing anything—simply noticing what happens during a meditation can bring greater awareness of your thoughts and feelings. <br><span class='fw-bold'>● Journaling:</span> Journaling is a practice in self-reflection that can help you notice the ways in which you tend to think and behave, and even which areas in your life you may wish to improve. It can be a therapeutic way to gain insight into your life events and relationships.<br><span class='fw-bold'> ● Talk Therapy: </span>A therapist works with you to address negative thought patterns or behaviours. By understanding the underlying cause of your negative thoughts, for instance, you're in a more advantageous position to change them and use healthy coping mechanisms instead.<br><span class='fw-bold'> ● Develop Your Emotional Intelligence: </span>Self-awareness and emotional intelligence (EQ) go hand in hand. EQ refers to a person's ability to perceive their own emotions as well as the emotions of other people. Someone with a high EQ can effectively respond to emotions with empathy and compassion. <br><span class='fw-bold'>● Self-Consciousness: </span>Sometimes, people can become overly self-aware and veer into what is known as self-consciousness. Have you ever felt like everyone was watching you, judging your actions, and waiting to see what you will do next? This heightened state of self-awareness can leave you feeling awkward and nervous in some instances.</div>";
                                    $content_selfBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_art</span></div></div>";                                    

                                    $color_self = '#FF0000;opacity:0.5';
                                    // red
                                    for($self;$self<=$total;$self++)
                                    {
                                        $percent = intval(($self*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_self").innerHTML="<div style=\"width:'.$percent.';background:'.$color_self.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_self").innerHTML="<div style=\"text-align:center;\">ARTISTIC</div>";
                                        parent.document.getElementById("indicator_self").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($self*10).'%'.'</div>";
                                        parent.document.getElementById("content_self").innerHTML="<div>'.$content_self.''.$content_selfBox.'</div>";
                                        </script>';
                                    
                                    }
                                }
                    
                            }
                    
                            if($key == "SOCIAL") {
                    
                                if($value >= 9 && $value <= 11) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    
                                    $total= $value;
                                    $color_study = "#00FF00;opacity: 0.5";
                                    //green
                                    
                                     $description_socialH ="Your responses on the Social domain suggest that you would enjoy a work environment that is supportive, encourages healthy discussion and involves working closely with other people. Welfare of others, providing guidance and mentorship and solving social problems keeps you motivated and gives you job satisfaction. You are seen as a helpful, empathetic, caring, trustworthy and a responsible individual.";
                                     $box_content_socialH ="Related Subjects: Social Studies, Language Studies, Psychology, Health & Physical Education, Political Science";
                                     
                                    $content_study = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_socialH</div><br>";
                                    $content_studyBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_socialH</span></div></div>";                                    

                                    $st=0;
                                    for($st;$st<=$total;$st++)
                                    {
                                    $percent = intval(($st*10))."%"; 
                                    echo '<script>
                                    parent.document.getElementById("progressbar_study").innerHTML="<div style=\"width:'.$percent.';background:'.$color_study.';height:20px;\">&nbsp;</div>";
                                    parent.document.getElementById("information_study").innerHTML="<div style=\"text-align:center;\">SOCIAL</div>";
                                    parent.document.getElementById("indicator_study").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($st*10).'%'.'</div>";
                                    parent.document.getElementById("content_study").innerHTML="<div>'.$content_study.''.$content_studyBox.'</div>";
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
                                    
                                    $description_socialA ="Your responses on the Social domain reflect a moderate preference for workplaces that demonstrate cooperation, good communication skills and help foster a sense of community. Mostly, you prefer to work with people rather than with things. As you enjoy working with people, you tend to communicate with them in a warm and tactful manner. You are often described as someone who is caring, responsible and patient in nature.";
                                    $box_content_socialA ="Related Subjects: Social Studies, Language Studies, Psychology, Health & Physical Education, Political Science";
                                     
                                    $content_study = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_socialA</div><br>";
                                    $content_studyBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_socialA</span></div></div>";
                                    
                                    $st=0;
                                    for($st;$st<=$total;$st++)
                                    {
                                    $percent = intval(($st*10))."%"; 
                                    echo '<script>
                                    parent.document.getElementById("progressbar_study").innerHTML="<div style=\"width:'.$percent.';background:'.$color_study.';height:20px;\">&nbsp;</div>";
                                    parent.document.getElementById("information_study").innerHTML="<div style=\"text-align:center;\">SOCIAL</div>";
                                    parent.document.getElementById("indicator_study").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($st*10).'%'.'</div>";
                                    parent.document.getElementById("content_study").innerHTML="<div>'.$content_study.''.$content_studyBox.'</div>";
                                    </script>';
                    
                    }
                                }
                                else if($value >= 0 && $value <= 5) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                  
                                    <?php
                                    
                                    $total= $value;
                                    $color_study = "#FF0000;opacity:0.5";
                                    // red
                                    
                                    $description_socialL ="Your responses on the Social domain indicate that on a regular basis, you do not enjoy too much interaction with people. Working towards providing direct welfare services to people does not excite or motivate you. Having a profound understanding of people is not seen as your strength. You like to engage with things, more than with people.";
                                    $box_content_socialL ="Related Subjects: Social Studies, Language Studies, Psychology, Health & Physical Education, Political Science";
                                     
                                    $content_study = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_socialL</div><br>";
                                    $content_studyBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_socialL</span></div></div>";
                                    
                                    $st=0;
                                    for($st;$st<=$total;$st++)
                                    {
                                    $percent = intval(($st*10))."%"; 
                                    echo '<script>
                                    parent.document.getElementById("progressbar_study").innerHTML="<div style=\"width:'.$percent.';background:'.$color_study.';height:20px;\">&nbsp;</div>";
                                    parent.document.getElementById("information_study").innerHTML="<div style=\"text-align:center;\">SOCIAL</div>";
                                    parent.document.getElementById("indicator_study").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($st*10).'%'.'</div>";
                                    parent.document.getElementById("content_study").innerHTML="<div>'.$content_study.''.$content_studyBox.'</div>";
                                    
                                    </script>';
                    
                    }
                                }
                    
                            }
                    
                            if($key == "ENTERPRISING") {
                    
                                if($value >= 8 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                                  
                                    <?php
                                                                        
                                    $total= $value;
                                    $color_dep = "#FF0000;opacity:0.5";
                                    // red
                                    
                                     $description_enterpriseL ="Your responses on the Enterprising domain imply that you are less likely to be comfortable in leadership roles which require you to multitask, influence, motivate and manage people at the workplace. You might not be too comfortable speaking in public or taking on highly demanding projects at work.";
                                     $box_content_enterpriseL ="Related Subjects: Business Studies, Management, Political Science, Economics, Accounting";
                                     
                                    $content_dep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_enterpriseL</div><br>";
                                    $content_depBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_enterpriseL</span></div></div>";                                    

                                    $d=0;
                                    for($d;$d<=$total;$d++)
                                    {
                                        $percent = intval(($d*10))."%";
                                        
                                        echo '<script>
                                        parent.document.getElementById("progressbar_dep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_dep.'; height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_dep").innerHTML="<div style=\"text-align:center;\">ENTERPRISING</div>";
                                        parent.document.getElementById("indicator_dep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($d*10).'%'.'</div>";
                                        parent.document.getElementById("content_dep").innerHTML="<div>'.$content_dep.''.$content_depBox.'</div>";
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
                                    
                                     $description_enterpriseA ="Your responses on the Enterprising domain reflect a moderate preference on your behalf for workplaces that encourage you to persuade or direct others rather than work on scientific or analytical tasks. You prefer working with people and ideas. You are seen as someone who is financially driven, business minded and a good fit in a corporate setup. One can describe you as outgoing, optimistic, sociable and self confident in nature.";
                                     $box_content_enterpriseA ="Related Subjects: Business Studies, Management, Political Science, Economics, Accounting";
                                     
                                    $content_dep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_enterpriseA</div><br>";
                                    $content_depBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_enterpriseA</span></div></div>"; 
                                    
                                    $d=0;
                                    for($d;$d<=$total;$d++)
                                    {
                                        $percent = intval(($d*10))."%";
                                        
                                        echo '<script>
                                        parent.document.getElementById("progressbar_dep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_dep.'; height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_dep").innerHTML="<div style=\"text-align:center; font-weight:bold\">ENTERPRISING </div>";
                                        parent.document.getElementById("indicator_dep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($d*10).'%'.'</div>";
                                        parent.document.getElementById("content_dep").innerHTML="<div>'.$content_dep.''.$content_depBox.'</div>";

                                        </script>';
                                    
                                    }
                                }
                                else if($value >= 0 && $value <= 4) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                            <?php
                                                                         
                                     $total= $value;
                                     $color_dep="#00FF00;opacity: 0.5";
                                    //green
                                    
                                     $description_enterpriseH ="Your responses on the Enterprising domain suggest that you enjoy work spaces where you are able to lead from the front. You are good at persuading, motivating and influencing people to achieve desired goals. You prefer ambitious tasks which require you to be competitive and managerial in your outlook. You are likely to be seen as someone who is  optimistic, energetic, outgoing, self confident and a risk taker.";
                                     $box_content_enterpriseH ="Related Subjects: Business Studies, Management, Political Science, Economics, Accounting";
                                     
                                    $content_dep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_enterpriseH</div><br>";
                                    $content_depBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_enterpriseH</span></div></div>"; 
                                     
                                     $d=0;
                                     for($d;$d<=$total;$d++)
                                     {
                                         $percent = intval(($d*10))."%";
                                         
                                         echo '<script>
                                        parent.document.getElementById("progressbar_dep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_dep.'; height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_dep").innerHTML="<div style=\"text-align:center; font-weight:bold\">ENTERPRISING </div>";
                                        parent.document.getElementById("indicator_dep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($d*10).'%'.'</div>";
                                        parent.document.getElementById("content_dep").innerHTML="<div>'.$content_dep.''.$content_depBox.'</div>";
                                         </script>';
                                     
                                     }
                                 }
                    
                            }
                    
                            if($key == "CONVENTIONAL") {
                    
                                if($value >= 8 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                                                                        
                                    $total=$value;
                                    $color_anx ="#FF0000;opacity:0.5";
                                    // red
                                    
                                     $description_conventionalL ="Your responses on the Conventional domain imply that you would not prefer tasks which are clerical in nature. Detail oriented and repetitive nature of work does not keep you engaged. Working with data or information management and following detailed instructions is not something you enjoy doing. You would enjoy work that allows flexibility rather than well defined tasks.";
                                     $box_content_conventionalL ="Related Subjects: Finance, Business Studies, Accountancy, Basic computing courses, Information Management";
                                     
                                     $content_anx = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_conventionalL</div><br>";
                                     $content_anxBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_conventionalL</span></div></div>";                                    

                                    $an=0;
                                    for($an;$an<=$total;$an++)
                                    {
                                    $percent = intval(($an*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_anx").innerHTML="<div style=\"width:'.$percent.';background:'.$color_anx .'; ;height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_anx").innerHTML="<div style=\"text-align:center;\">CONVENTIONAL</div>";
                                        parent.document.getElementById("indicator_anx").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($an*10).'%'.'</div>";
                                        parent.document.getElementById("content_anx").innerHTML="<div>'.$content_anx.''.$content_anxBox.'</div>";

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
                                    
                                     $description_conventionalA ="Your responses on the Conventional domain reflects your moderate preference for workplaces that follow a conventional theme and encourages work in a structured manner. You posses a fair liking towards maintaining and manipulating data, organizing schedules and operating office equipment. Tasks that expect, following rules and order that eliminates potential for error are generally enjoyed by you. One can say that you have a practical, careful, thrifty, efficient and persistent nature.";
                                     $box_content_conventionalA ="Related Subjects: Finance, Business Studies, Accountancy, Basic computing courses, Information Management";
                                     
                                     $content_anx = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_conventionalA</div><br>";
                                     $content_anxBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_conventionalA</span></div></div>";   
                                    
                                    $an=0;
                                    for($an;$an<=$total;$an++)
                                    {
                                    $percent = intval(($an*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_anx").innerHTML="<div style=\"width:'.$percent.';background:'.$color_anx .'; ;height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_anx").innerHTML="<div style=\"text-align:center;\"> CONVENTIONAL </div>";
                                        parent.document.getElementById("indicator_anx").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($an*10).'%'.'</div>";
                                        parent.document.getElementById("content_anx").innerHTML="<div>'.$content_anx.''.$content_anxBox.'</div>";
                                        </script>';
                                    
                                    }
                                } else if ($value >= 0 && $value <= 4) {
                                    //  echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                    
                                     $total = $value;
                                     $color_anx = "#00FF00;opacity: 0.5";
                                    //green  
                                    
                                     $description_conventionalH ="Your responses on the Conventional  domain suggest that you enjoy working with numbers or records. You are likely to enjoy work which involves organisation, setting up and managing information systems, maintaining records and data. Detail oriented nature of work excites you and you are meticulous and efficient in executing tasks. You prefer indoor work space and are seen as someone who is orderly, practical, conforming and conscientious.";
                                     $box_content_conventionalH ="Related Subjects: Finance, Business Studies, Accountancy, Basic computing courses, Information Management";
                                     
                                     $content_anx = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_conventionalH</div><br>";
                                     $content_anxBox="<div class='card border border-dark p-0'><div class='card-body'><span class='align-middle fw-bold'>$box_content_conventionalH</span></div></div>";   
                                    
                                     $an = 0;
                                     for ($an; $an <= $total; $an++) {
                                         $percent = intval(($an * 10)) . "%";
                                         echo '<script>
                                        parent.document.getElementById("progressbar_anx").innerHTML="<div style=\"width:' . $percent . ';background:' . $color_anx . '; ;height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_anx").innerHTML="<div style=\"text-align:center;\"> CONVENTIONAL</div>";
                                        parent.document.getElementById("indicator_anx").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($an*10).'%'.'</div>";
                                        parent.document.getElementById("content_anx").innerHTML="<div>'.$content_anx.''.$content_anxBox.'</div>";
                                        
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

        if($key == "REALISTIC") {

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

        if($key == "INVESTIGATIVE") {

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

        if($key == "ARTISTIC") {

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

        if($key == "SOCIAL") {

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

        if($key == "ENTERPRISING") {

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

        if($key == "CONVENTIONAL") {

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
                        groupWidth: "60%"
                    },
                    legend: {
                        position: "none"
                    },
                     vAxis: {
                            maxValue:2
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
  
}else{
    
      include_once'../header/head.php';
      header("Location:take-test.php");
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
                                   <p class="fw-bold text-center"><span class="align-middle">Click Here </span>&nbsp;<a href="dashboard.php"  class="btn border align-middle btn-outline-primary">Dashboard</a></p>
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
                    
                    
