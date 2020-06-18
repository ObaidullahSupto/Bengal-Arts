<?php
include('db.php');
$id=$_SESSION['id'];
$query=mysql_query("select * from admin where aid='$id' LIMIT 1");
$row=mysql_fetch_assoc($query);
?>
			<!-- Form -->
			<h3 class="tit">User Information</h3>
				<form action="javascript:void(0);" method="post" enctype="multipart/form-data">
				<table class="nostyle">
					<tr>
						<td>User Name</td>
						<td><input type="text" size="30" class="input-text" name="username" value="<?php echo $row['username'];?>"/></td>
					</tr>
					<tr>
						<td>Email Id</td>
						<td><input type="text" size="30" class="input-text" name="email" value="<?php echo $row['email'];?>"/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" size="30" class="input-text" name="pass"/></td>
					</tr>
					<tr>
						<td>designation</td>
						<td><input type="text" size="30" class="input-text" name="designation" value="<?php echo $row['designation'];?>"/></td>
					</tr>
					
					
					<tr>
					<td></td>
						<td>
						<input type="submit" class="input-submit" name="save" value="Submit" />
						</td>
					</tr>
				</table>
				
				</form>


