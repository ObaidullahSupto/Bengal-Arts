<script src="ckeditor/ckeditor.js"></script>
<!-- page content -->

            <div class="page-title">
              <div class="title_left">
                <h3>Info's of Bangal Foundation</h3>
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
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>About <small> Vision / History / People</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="about_action.php" method="post" enctype="multipart/form-data">

					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="Catagories">Catagories  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="Catagories" class="form-control" name="catagories" required="required">
                            <option value="">Choose option</option>
                            <option value="Vision">Vision</option>
                            <option value="History">History</option>
                            <option value="People">People</option>
                          </select>
                        </div>
                      </div>
					  
				
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="Catagories_Details"> Catagories Details<span class="required">*</span>
                        </label>
						<div class="col-md-10 col-sm-10 col-xs-12">
							<textarea id="Catagories_Details" rows="10" name="editor" class="resizable_textarea form-control ckeditor" placeholder="write down your Company information & must be followed categories.." required="required"></textarea>
						</div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success" name="save" value="Submit">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
			

			<!-- About table view -->
                <div class="x_panel">
                  <div class="x_title">
                    <h2>About Information</small></h2>
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
			$tquery=mysqli_query($con,"select count(*) as id from about");
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
                          <th>Catagories</th>
						  <th>Catagories Description</th>
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
	
				
				$query=mysqli_query($con,"SELECT * FROM about order by id ASC LIMIT $from,$max_results ");
				while($row=mysqli_fetch_array($query))
				{
				?>
				
				<tbody>
                        <tr>
                          <td>
							 <input type="checkbox" class="flat"  value="<?php echo $row['id'];?>" name="id_data[<?php echo $row['id'];?>]">
						  </td>
                          <td><?php echo $row['catagories'];?></td>
                          <td><?php echo $row['catagories_details'];?></td>
                          <td>
							
							<a type="button" class="btn btn-info btn-lg" href="content.php?sk=edit_about&id=<?php echo $row['id'];?>">Edit</a>
						  </td>
                          
                        </tr>
						
						
				</tbody>
				
				<?php

				$nr++;}
				
		
				?>

			</table>
			
			
			<input type="submit" class="btn btn-danger" value="Remove Selected" onclick="return confirm('Are you sure?')">
			<input type="hidden" name="filename" id="filename" value="content.php?sk=office_info&pk=1">
			<input type="hidden" name="action" id="action" value="office_info">
			
			<br/>
			
			 <?php 
  
  
			  // Figure out the total number of results in DB:
			$total_results = mysqli_num_rows(mysqli_query($con,"SELECT * FROM about"));

			// Figure out the total number of pages. Always round up using ceil()
			$total_pages = ceil($total_results / $max_results);

			// Build Page Number Hyperlinks
			echo "<p class=\"pagination\"><strong>Pages :</strong> ";

			// Build Previous Link
			if($page > 1){
			$prev = ($page - 1);
			echo "<a href=\"".$_SERVER['php_SELF']."?page=$prev&&letter=$letter&sk=About\">&laquo;</a>";
			}

			for($i = 1; $i <= $total_pages; $i++){
			if(($page) == $i){
			echo "$i ";
			} else {
			echo "<a href=\"".$_SERVER['php_SELF']."?page=$i &letter=$letter&sk=About\">$i</a> ";
			}
			}

			// Build Next Link
			if($page < $total_pages){
			$next = ($page + 1);
			echo "<a href=\"".$_SERVER['php_SELF']."?page=$next&sk=About\">&raquo;</a>";
			}
			echo "</p>";

			mysqli_close($con);
			  
			?>
			
			
		
			</form>
		</div>
      </div>
  
	



			  
	
