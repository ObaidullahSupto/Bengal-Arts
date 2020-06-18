<?php
@session_start();
require_once ('connection_class.php');
$db = new Database();
if(!$db->connect()){
    print_r($db->getResult()) ;
    exit(0);
}
$message="";
$idimg= time().rand().'_'.session_id();
if(isset($_POST['submit'])){


    //if($db->numRows()==0) {



	//    Images one
        $img1_name = $_FILES['img1']['name'];
        $img1_size = $_FILES['img1']['size'];
        $img1_tmp = $_FILES['img1']['tmp_name'];

      
            $img1 = '';
           
                $img1_ext = strtolower(end(explode(".", $img1_name)));
				$ext_img1 = array("jpg", "jpeg", "png", "gif", "bmp");
                if (in_array($img1_ext, $ext_img1)) {
                    $newimg1Name = $idimg . '1.' . $img1_ext;
                    $img1 = $newimg1Name;
                    $newimg1FleName = "../uploads/art_artist_home/" . $newimg1Name;
                    @move_uploaded_file($img1_tmp, $newimg1FleName);
                }
				
				
	//	Images two
        $img2_name = $_FILES['img2']['name'];
        $img2_size = $_FILES['img2']['size'];
        $img2_tmp = $_FILES['img2']['tmp_name'];

      
            $img2 = '';
           
                $img2_ext = strtolower(end(explode(".", $img2_name)));
				$ext_img2 = array("jpg", "jpeg", "png", "gif", "bmp");
                if (in_array($img2_ext, $ext_img2)) {
                    $newimg2Name = $idimg . '2.' . $img2_ext;
                    $img2 = $newimg2Name;
                    $newimg2FleName = "../uploads/art_artist_home/" . $newimg2Name;
                    @move_uploaded_file($img2_tmp, $newimg2FleName);
                }
				
				
	//	Images three
        $img3_name = $_FILES['img3']['name'];
        $img3_size = $_FILES['img3']['size'];
        $img3_tmp = $_FILES['img3']['tmp_name'];

      
            $img3 = '';
           
                $img3_ext = strtolower(end(explode(".", $img3_name)));
				$ext_img3 = array("jpg", "jpeg", "png", "gif", "bmp");
                if (in_array($img3_ext, $ext_img3)) {
                    $newimg3Name = $idimg . '3.' . $img3_ext;
                    $img3 = $newimg3Name;
                    $newimg3FleName = "../uploads/art_artist_home/" . $newimg3Name;
                    @move_uploaded_file($img3_tmp, $newimg3FleName);
                }
				
				
	//	Images 4 
        $img4_name = $_FILES['img4']['name'];
        $img4_size = $_FILES['img4']['size'];
        $img4_tmp = $_FILES['img4']['tmp_name'];

      
            $img4 = '';
           
                $img4_ext = strtolower(end(explode(".", $img4_name)));
				$ext_img4 = array("jpg", "jpeg", "png", "gif", "bmp");
                if (in_array($img4_ext, $ext_img4)) {
                    $newimg4Name = $idimg . '4.' . $img4_ext;
                    $img4 = $newimg4Name;
                    $newimg4FleName = "../uploads/art_artist_home/" . $newimg4Name;
                    @move_uploaded_file($img4_tmp, $newimg4FleName);
                }
				
				
	//	Images five
        $img5_name = $_FILES['img5']['name'];
        $img5_size = $_FILES['img5']['size'];
        $img5_tmp = $_FILES['img5']['tmp_name'];

      
            $img5 = '';
           
                $img5_ext = strtolower(end(explode(".", $img5_name)));
				$ext_img5 = array("jpg", "jpeg", "png", "gif", "bmp");
                if (in_array($img5_ext, $ext_img5)) {
                    $newimg5Name = $idimg . '5.' . $img5_ext;
                    $img5 = $newimg5Name;
                    $newimg5FleName = "../uploads/art_artist_home/" . $newimg5Name;
                    @move_uploaded_file($img5_tmp, $newimg5FleName);
                }
            
            $db->insert("artist_gallery_home", array(
                //"artist_link" => $db->escapeString($_POST['artist_link']),
                "img1" => $db->escapeString($img1),
                "img2" => $db->escapeString($img2),
				"img3" => $db->escapeString($img3),
                "img4" => $db->escapeString($img4),
                "img5" => $db->escapeString($img5)
                
                
            ));
            $message = "Data Insert Successfully...";
       // }
   
}

?>
 <div class="x_content">
<h1><?php echo $message;?></h1>
     <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
					 
					<!-- <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="artist_link">Artis Link:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="artist_link" name="artist_link" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> -->
					  
					 <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="img1">Image Top<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="img1" name="img1" required="required" class="form-control col-md-7 col-xs-12">
                          <span>Images Dimensions: 456 * 456px</span>
                        </div>
                      </div>
					  
					    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="img2">Image 1<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="img2" name="img2" required="required" class="form-control col-md-7 col-xs-12">
<span">Images Dimensions: 216 * 216px</span>
                        </div>
                      </div>
					  
					   <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="img3">Image 2<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="img3" name="img3" required="required" class="form-control col-md-7 col-xs-12">
<span">Images Dimensions: 216 * 216px</span>
                        </div>
                      </div>
					  
					    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="img4">Image 3<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="img4" name="img4" required="required" class="form-control col-md-7 col-xs-12">
<span">Images Dimensions: 216 * 216px</span>
                        </div>
                      </div>
					  
					  
					  
					  	<div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="img5">Image 4<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="img5" name="img5" required="required" class="form-control col-md-7 col-xs-12">
<span>Images Dimensions: 216 * 216px</span>
                        </div>
						</div>
						
                       <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                          <input style="font-size:17px;" class="btn btn-success submit" type="submit" name="submit" value="Submit"/>
                        </div>
                      </div>

                    </form>
				</div>




<!-- art artist table view -->
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Artist Information</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
			
			<?php 
			include('db.php');
			$tquery=mysqli_query($con,"select count(*) as id from artist_gallery_home");
			$tcust=mysqli_fetch_assoc($tquery);
			?>
			<style>
			p.pagination {
				padding: 3px;
				margin: 3px;
			}
			a
			{
			text-decoration:none;
			}
			p.pagination a {
				padding: 2px 5px 2px 5px;
				margin: 2px;
				border: 1px solid #AAAADD;
				
				text-decoration: none; /* no underline */
				color: #000099;
			}
			p.pagination a:hover, div.pagination a:active {
				border: 1px solid #000099;
				background-color:#2a3f54;

				color: #fff;
			}
			p.pagination span.current {
				padding: 2px 5px 2px 5px;
				margin: 2px;
					border: 1px solid #000099;
					
					font-weight: bold;
					background-color: #000099;
					color: #FFF;
				}
				p.pagination span.disabled {
					padding: 2px 5px 2px 5px;
					margin: 2px;
					border: 1px solid #EEE;
					color: #DDD;
				}
				tr
				{
				border:1px solid #ddd;
				}

			</style>


		<?php
			$sk=$_GET['pk'];if ($sk==1){?>
			<p class="msg done">Succes</p>
			<?php } ?>
		<!-- Content (Right Column) -->
			<!-- Table (TABLE) -->
			<div class="x_content">
			<p class="text-muted font-13 m-b-30">
                Total : <?php echo $tcust['id'];?>
            </p>
			<form id="removedata" action="removedata.php" method="post">
			<table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
			
					   <thead>
                        <tr>
                          
							<th>Select column</th>
                          <!-- <th>Artist Link</th> -->
						  <th>Images One </th>
						  <th>Images Two</th>
						  <th>Images Three</th>
						  <th>Images Four</th>
						  <th>Images Five</th>
						  
						 
						  <th>Action</th>
                        </tr>
                      </thead>
				
				<?php 
				if(!isset($_GET['page'])){
				$page = 1;
				} else {
				$page = $_GET['page'];
				}

				// Define the number of results per page
				$max_results = 3;

				// Figure out the limit for the query based
				// on the current page number.
				$from = (($page * $max_results) - $max_results);

			 	$nr=1;
	
				
				$query=mysqli_query($con,"SELECT * FROM artist_gallery_home order by id ASC LIMIT $from,$max_results ");
				while($row=mysqli_fetch_array($query))
				{
				?>
				
				<tbody>
                        <tr>
                          <td>
							 <input type="checkbox" class="flat"  value="<?php echo $row['id'];?>" name="id_data[<?php echo $row['id'];?>]">
						  </td>
						  <!-- <td><?php //echo $row['artist_link'];?></td> -->
                          <td><img src="../uploads/art_artist_home/<?php echo $row['img1'];?>" style="width:100px;height:100px;"></td>
                          <td><img src="../uploads/art_artist_home/<?php echo $row['img2'];?>" style="width:100px;height:100px;"></td>
                          <td><img src="../uploads/art_artist_home/<?php echo $row['img3'];?>" style="width:100px;height:100px;"></td>
                          <td><img src="../uploads/art_artist_home/<?php echo $row['img4'];?>" style="width:100px;height:100px;"></td>
                          <td><img src="../uploads/art_artist_home/<?php echo $row['img5'];?>" style="width:100px;height:100px;"></td>
                          
                           <td>
							
							<a type="button" class="btn btn-info btn-lg" href="content.php?sk=edit_home_artartist&id=<?php echo $row['id'];?>">Edit</a>
						  </td>
                          
                        </tr>
						
						
				</tbody>
				
				<?php

				$nr++;}
				
		
				?>

			</table>
			
			
			<input type="submit" class="btn btn-danger" value="Remove Selected" onclick="return confirm('Are you sure?')">
			<input type="hidden" name="filename" id="filename" value="content.php?sk=home_artartist&pk=1">
			<input type="hidden" name="action" id="action" value="home_artartist">
			
			<br/>
			
			 <?php 
  
  
			  // Figure out the total number of results in DB:
	
			  $total_results = mysqli_num_rows(mysqli_query($con,"SELECT * FROM artist_gallery_home"));

			// Figure out the total number of pages. Always round up using ceil()
			$total_pages = ceil($total_results / $max_results);

			// Build Page Number Hyperlinks
			echo "<p class=\"pagination\"><strong>Pages :</strong> ";

			// Build Previous Link
			if($page > 1){
			$prev = ($page - 1);
			echo "<a href=\"".$_SERVER['php_SELF']."?page=$prev&&letter=$letter&sk=home_artartist\">&laquo;</a>";
			}

			for($i = 1; $i <= $total_pages; $i++){
			if(($page) == $i){
			echo "$i ";
			} else {
			echo "<a href=\"".$_SERVER['php_SELF']."?page=$i &letter=$letter&sk=home_artartist\">$i</a> ";
			}
			}

			// Build Next Link
			if($page < $total_pages){
			$next = ($page + 1);
			echo "<a href=\"".$_SERVER['php_SELF']."?page=$next&sk=home_artartist\">&raquo;</a>";
			}
			echo "</p>";

			mysqli_close($con);
			  
			?>
			
			
		
			</form>
		</div>
      </div>


