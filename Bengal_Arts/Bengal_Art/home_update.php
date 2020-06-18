<script src="ckeditor/ckeditor.js"></script>
<!-- page content -->

            <div class="page-title">
              <div class="title_left">
                <h3>Home Resource of Bengal Foundation</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            
			
<!-- home update table view -->
                
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Home Resource Information</small></h2>
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
			$tquery=mysqli_query($con,"select count(*) as id from artists where slider='no'");
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
                Total : <?php echo $tcust['id'];?></br>
				<h2 style="color:blue">Total artists List</h2>
				
            </p>
			<form action="home_update_action.php" method="post" enctype="multipart/form-data">
			<table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
			
					   <thead>
                        <tr>
                          
							<th>Select column</th>
                          <th>Images</th>
                          <th>artist name</th>
						  
						  
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
	
				
				$query=mysqli_query($con,"SELECT * FROM artists where slider='no' order by id DESC LIMIT $from,$max_results ");
				while($row=mysqli_fetch_array($query))
				{
				?>
				
				<tbody>
                        <tr>
                          <td>
							 <input type="checkbox" class="flat"  value="<?php echo $row['id'];?>" name="id">
							 
							
						  </td>
						 
                          <td>
						  						  
						  <img src="../uploads/art_artist/artist/<?php echo $row['image_'];?>" style="width:100px;height:100px;">
						  </td>
                          <td>
						  <?php echo $row['artists_name'];?>
						  </td>	
							
                          
                        </tr>
						
						
				</tbody>
				
				<?php

				$nr++;}
				
		
				?>

			</table>
			
			
			<input type="submit" class="btn btn-danger" value="select" onclick="return confirm('Are you sure?')">
			<input type="hidden" name="filename" id="filename" value="content.php?sk=home_update&pk=1">
			<input type="hidden" name="save" id="action" value="home_update">
			
			<br/>
			
			 <?php 
  
  
			  // Figure out the total number of results in DB:
			  
			$total_results = mysqli_num_rows(mysqli_query($con,"SELECT * FROM artists where slider='no'"));

			// Figure out the total number of pages. Always round up using ceil()
			$total_pages = ceil($total_results / $max_results);

			// Build Page Number Hyperlinks
			echo "<p class=\"pagination\"><strong>Pages :</strong> ";

			// Build Previous Link
			if($page > 1){
			$prev = ($page - 1);
			echo "<a href=\"".$_SERVER['php_SELF']."?page=$prev&&letter=$letter&sk=home_update\">&laquo;</a>";
			}

			for($i = 1; $i <= $total_pages; $i++){
			if(($page) == $i){
			echo "$i ";
			} else {
			echo "<a href=\"".$_SERVER['php_SELF']."?page=$i &letter=$letter&sk=home_update\">$i</a> ";
			}
			}

			// Build Next Link
			if($page < $total_pages){
			$next = ($page + 1);
			echo "<a href=\"".$_SERVER['php_SELF']."?page=$next&sk=home_update\">&raquo;</a>";
			}
			echo "</p>";

			mysqli_close($con);
			  
			?>
			
			
		
			</form>
		</div>
		
		<h2 style="color:blue">Home Resource List</h2>
		
		<div class="x_content">
		<form id="removedata" action="removedata.php" method="POST">
		<table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
		<thead>
                        <tr>
						<th>Select</th>
                          <th>Images</th>
                          <th>artist name</th>
						  
						  
                        </tr>
                      </thead>
				<?php
				include('db.php');
				$sql=mysqli_query($con,"SELECT * FROM home_update");
				while($row=mysqli_fetch_array($sql)){ ?>
					<tbody>
                        <tr>
						<td>
						<input type="checkbox" class="flat"  value="<?php echo $row['id'];?>" name="id_data[<?php echo $row['id'];?>]">
						</td>
						<td>						  						  
						  <img src="../uploads/art_artist/artist/<?php echo $row['image'];?>" style="width:100px;height:100px;">
						  </td>
                          <td>
						  <?php echo $row['img_cap'];?>
						  </td>	
						  
                        </tr>
						
						
				</tbody>
					
				<?php }
				?>
		</table>
		<input type="submit" class="btn btn-danger" value="Remove Selected" onclick="return confirm('Are you sure?')">
							<input type="hidden" name="filename" id="filename" value="content.php?sk=home_update&pk=1">
							<input type="hidden" name="action" id="action" value="home_update">
		</form>
		</div>
      
		