<!-- About table view -->
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
			
			
			

		
		<!-- Content (Right Column) -->
			<!-- Table (TABLE) -->
			<div class="x_content">
			
			<form id="removedata" action="removedata.php" method="post">
			<table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
			
					   <thead>
                        <tr>
                          
							<th>Select column</th>
                          <th>Images</th>
						  
                        </tr>
                      </thead>
				
				<?php 
				
				include('db.php');
				$id=$_POST['artists_id'];
				echo $id;
				$query=mysqli_query($con,"SELECT * FROM art where artists_id='$id'");
				while($row=mysqli_fetch_array($query))
				{
				?>
				
				<tbody>
                        <tr>
                          <td>
							 <input type="checkbox" class="flat"  value="<?php echo $row['id'];?>" name="id_data[<?php echo $row['id'];?>]">
						  </td>
                          <td><img src="../uploads/art_artist/artwork/<?php echo $row['photo'];?>" style="width:100px;height:100px;"></td>
                          
                        </tr>
						
						
			</tbody>
				
				<?php

				 }
				
		
				 ?>

			</table>
			
			
			<input type="submit" class="btn btn-danger" value="Remove Selected" onclick="return confirm('Are you sure?')">
			<input type="hidden" name="filename" id="filename" value="content.php?sk=artist_slider&pk=1">
			<input type="hidden" name="action" id="action" value="artist_slider">
			
			<br/>
			
			 
			
		
			</form>
		</div>
      </div>