
			<!-- Form -->
			<h3 class="tit">Add New User</h3>
				<form action="addnewadmin_sql.php" method="post" enctype="multipart/form-data">
				<table class="nostyle">
					<tr>
						<td>User Name</td>
						<td><input type="text" size="30" class="input-text" name="username" value="" required/></td>
					</tr>
					<tr>
						<td>Email Id</td>
						<td><input type="text" size="30" class="input-text" name="email" value="" required/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" size="30" class="input-text" name="pass" required/></td>
					</tr>
					<tr>
						<td>Designation</td>
						<td><input type="text" size="30" class="input-text" name="designation" value="" required/></td>
					</tr>
					
					<tr>
						<td>Permission: </td>
						<td><select name="permissionL">
						<option value="Editor">Editor</option>
						<option value="Admin">Admin</option>
						</select></td>
					</tr>
					<tr>
					<td></td>
						<td>
						<input type="submit" class="input-submit" name="save" value="Submit" />
						</td>
					</tr>
				</table>
				
				</form>


