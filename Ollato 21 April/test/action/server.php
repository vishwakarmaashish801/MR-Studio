<?php  

session_start();
   
if(!isset($_SESSION['loggedin'])){ //if login in session is not set
     header("Location:/test/");
}

 require_once "config.php";
 
 $payment_fail='';

$payment_status = $_SESSION['payment'];
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'easiness_test');
// define('DB_PASSWORD', 'test@2022');
// define('DB_NAME','easiness_test');  Pending          Active

if($payment_status == 'Active'){
    
              
             $record_per_page = 15;  
             $page = '';  
             $output = '';  
             if(isset($_POST["page"]))  
             {  
                  $page = $_POST["page"]; 
            
                 //  echo " Section Page ".$page."<br><br>";
                 
              
             }  
             else  
             {  
                  $page = 1;
                 
                 //  echo "Section Page ".$page."<br>";
                 
                  
                 
             }  
            //  echo"currenttab  ".$page;
             $start_from = ($page - 1)*$record_per_page;  
            //  $query = "SELECT * FROM tbl_student ORDER BY student_id DESC LIMIT $start_from, $record_per_page";  
            
            $query = "SELECT * FROM questions ORDER BY sr_no ASC LIMIT $start_from, $record_per_page";  
             $result = mysqli_query($link, $query);  
             $output .= "  
                        <table class='table table-hover'>  
                        <thead style='position: sticky;top: 0' class='thead-dark'>
                        <tr>
                            <th class='header-table sr-col' scope='col'>SR No</th>
                            <th class='header-table ' scope='col'>Question</th>
                            <th class='header-table option-col' scope='col' colspan = 3><span style='margin:31px;'>Options</span></th>
                        
                        </tr>
                        </thead>
                        <tbody>";
                      
             while($row = mysqli_fetch_array($result))  
             {  
                  $output .= '  
                       <tr class="td-data">  
                            <td>'.$row["sr_no"].'</td>  
                            <td>'.$row["question"].'</td>
            
                            <td class="option-col">'."<label><input type='radio' class='question-option'  name='choice-".$row["sr_no"]."' domain='".$row["domain"]."' domainno='domain-".$row["sr_no"]."' value='".$row["option1"]."'> ".$row["option1"].'</label> </td>
                            <td class="option-col">'."<label><input type='radio' class='question-option'  name='choice-".$row["sr_no"]."' domain='".$row["domain"]."' domainno='domain-".$row["sr_no"]."' value='".$row["option2"]."'> ".$row["option2"].'</label> </td>
                            <td class="option-hidden">'."<input type='hidden' name='domain-".$row["sr_no"]."'value='".$row["domain"]."'>".'</td>
            
                           
            
            
                      </tr>  
                  ';  
             }  
             $output .= '</tbody><br>'; 
             $output .= '</table>';
            
            //  $output .= '<button  id="submit_btn" class="btn btn-primary">Save karna </button>';
            //  end table body
            
             $page_query = "SELECT * FROM questions ORDER BY sr_no ASC";  
             $page_result = mysqli_query($link, $page_query);  
             $total_records = mysqli_num_rows($page_result);  
            
             $total_pages = ceil($total_records/$record_per_page);  
           
             $output .= '<div class=" container  text-center #pagination_link">';
             $output .= '</div';
            $next = $page+1 ;
            $prev = $page-1 ;
            
            $output .= '<div class="text-center #pagination_link">
                        
                        <p class="">Complete all Section Question then Click Submit Button .</p>';
            
                    //     if($page > 1){
                 
                    //       $output .= "<span class='pagination_link btn btn-primary next'  style='cursor:pointer; padding:6px; border:1px solid #ccc;' Page id='".$prev." '>PREVIOUS ".$next."</span>";
                      
                    //   }
                     
                        if($page == $total_pages-1){
            
                           $output .= '<br><br>';
                        //   $output .= "<button type='submit' class='pagination_link_submit btn btn-primary btn-success' style='cursor:pointer; padding:6px; border:1px solid #ccc'>SUBMIT FORM</button>";
                           // $output .= '<span class="pagination_link  btn btn-danger px-2"> Your are in last Page </span>';
                     }
                     
            
            if($next  <=8){
            
              $output .= "<span class='pagination_link  btn btn-primary px-2' style='cursor:pointer; padding:6px; border:1px solid #ccc; onClick='validateForm();' Page id='".$next."'>NEXT</span>";
                      
            }else{
                $output .= "<button type='submit' class='pagination_link_submit btn btn-primary btn-success' style='cursor:pointer; padding:6px; border:1px solid #ccc'>SUBMIT FORM</button>";
            }
            
            
            
            
            
            $output .= '<br><br>';
            $output .='</div> </div>'; 
             echo $output;  
                
            }
            else{ 
                
              $payment_fail  .='<div class="col-md-6 mx-auto">
                                <div class="card text-center mt-5 mb-5" style = "margin:auto;border:2px solid rebeccapurple;">
                                <div class="card-body">
                                 <h3 class="card-title text-primary" style="color:solid rebeccapurple;font-weight:800">Please Purchase package first</h3>
                                 <p class="card-text">You don’t have any purchased package.</p>
                                 <a href="/test/package" class="btn btn-primary">Back to Package OR Payment Mode</a> 
                                 </div></div>';
               echo $payment_fail;
           }
            

 ?>  