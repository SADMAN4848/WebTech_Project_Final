<?php include 'Admin_header.php';
	include 'controller/householdercontroller.php';
?>

	
	<div class="center">
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action=""  method="post" class="form-horizontal form-material">

			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" name="h_name" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Username:</h4> 
				<input type="text" name="h_uname" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Password:</h4> 
				<input type="text" name="h_pass" class="form-control">
			</div>			
			<div class="form-group">
				<h4 class="text">DOB:</h4> 
				<input type="text" name="h_dob" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Gender:</h4> 
				<input type="text" name="h_gender" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Email:</h4> 
				<input type="text" name="h_email" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Address:</h4> 
				<input type="text" name="h_address" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Phone:</h4> 
				<input type="text" name="h_phone" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Nid:</h4> 
				<input type="text" name="h_nid" class="form-control">
			</div>			
			<div class="form-group text-center">
				
				<input type="submit" name="add_householder" class="btn btn-success" value="Add Householder" class="form-control">
			</div>
		</form>
	</div>


<?php include 'Admin_footer.php';?>