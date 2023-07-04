<?php  
session_start();
require_once "wp_config.php";

//  $record_per_page = 15;  
$record_per_page = 12; 
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
   $page = $_POST["page"]; 
   //  echo " Section Page ".$page."<br><br>"
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
                <th class='header-table sr-col' scope='col'>Sr. No</th>
                <th class='header-table ' scope='col'>Question</th>
                <th class='header-table option-hidden' scope='col' class='text-center'></th>
                <th class='header-table option-col' scope='col' colspan = 2 class='text-center'>Options</th>
            
            </tr>
            </thead>
            <tbody>";
          
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
           <tr class="td-data">  
                <td>'.$row["sr_no"].'</td>  
                <td>'.$row["question"].'</td>

                <td class="option-col">'."<label><input type='radio' class='question-option'  name='choice-".$row["sr_no"]."' domain='".$row["domain"]."' domainno='domain-".$row["sr_no"]."' value='".$row["option1"]."'>  ".$row["option1"].'</label'.'.</td>
                <td class="option-col">'."<label><input type='radio' class='question-option'  name='choice-".$row["sr_no"]."' domain='".$row["domain"]."' domainno='domain-".$row["sr_no"]."' value='".$row["option2"]."'> ".$row["option2"].'</label'.'.</td>
                <td class="option-hidden">'."<input type='hidden' name='domain-".$row["sr_no"]."'value='".$row["domain"]."'>".'</td>

               


          </tr>  
      ';  
 }  
 $output .= '</tbody>'; 
 $output .= '</table>';

//  $output .= '<button  id="submit_btn" class="btn btn-primary">Save karna </button>';
//  end table body

 $page_query = "SELECT * FROM questions ORDER BY sr_no ASC";  
 $page_result = mysqli_query($link, $page_query);  
 $total_records = mysqli_num_rows($page_result);  

 $total_pages = ceil($total_records/$record_per_page);  
//  echo "total Pages".$total_pages;
//  echo "<br><br>";
//  echo "Current Pages".$start_from;
//  echo "<br><br>";

 $output .= '<div class=" container  text-center #pagination_link">';
//  for($i=1; $i<=$total_pages; $i++)  
//  {  
//       $output .= "<span class='pagination_link'  style='cursor:pointer; padding: 0px 8px; border:1px solid #ccc;' Page id='".$i."'>".$i."</span>";
//       $output .= "<span> </span";
//      //  $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;'>  .............</span>";  
//  }  
 $output .= '</div';
$next = $page+1 ;
$prev = $page-1 ;

$output .= '<div class="text-center #pagination_link">
            
            <p class="">Complete all Section Question then Click Submit Button .</p>';

        //     if($page > 1){
     
        //       $output .= "<span class='pagination_link btn btn-primary next'  style='cursor:pointer; padding:6px; border:1px solid #ccc;' Page id='".$prev." '>PREVIOUS ".$next."</span>";
          
        //   }
         
            if($page == $total_pages){

               $output .= '<br><br>';
               $output .= "<button type='submit' class='pagination_link_submit btn btn-primary btn-success' style='cursor:pointer; padding:6px; border:1px solid #ccc'>SUBMIT FORM</button>";
               // $output .= '<span class="pagination_link  btn btn-danger px-2"> Your are in last Page </span>';
         }
         

if($next  <=10){

   
          $output .= "<span class='pagination_link  btn btn-primary px-2' style='cursor:pointer; padding:6px; border:1px solid #ccc; onClick='validateForm();' Page id='".$next."'>NEXT</span>";
          

}else{

  
     // $output .= '<span class="pagination_link  btn btn-danger px-2"> Your are in last Page </span>';
   
}





$output .= '<br><br>';
$output .='</div> </div>'; 
 echo $output;  

 ?>  