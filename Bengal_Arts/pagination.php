   <style>


 
 <?php  

 $connect = mysqli_connect("localhost", "wwwbijoy_bengal", "ckk(F)K@L!]u", "new_bijoy_bangla");  
 $record_per_page = 5;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM people LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($connect, $query);  
 $output .= "  
      <div class='tab-pane'> 
	  </div>
	  
            
 ";  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
           <div class="row">
 
							
                    <!--col-md-4-->
								<div class="col-md-3">
								
								
								<img src="Bengal_Art/People_image/'.$row["picture"].'" alt='.$row["name"].' width="390px" height="201px">
								
								</div>
				  <!--/col-md-4-->
				  <!--col-md-4-->
				  <div class="col-md-9 apply_text">
                                      <h3 style="margin-top: 0px;"><span>'.$row["name"].'</h3></span>
                           
			  
			  <p class="align_justiphy">'.$row["about"].'</p>
				
                          
			
                            </div>

							</div> 
      ';  
 }  
 
 
 
 
 
 $output .= '<div align="right">';  
 $page_query = "SELECT * FROM people ORDER BY id DESC";  
 $page_result = mysqli_query($connect, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);
 
   for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link pagination' style='cursor:pointer;'' id='".$i."'>".$i."</span>";  
 }  

  $output .= '</div>';
 echo $output;  
 
 ?> 