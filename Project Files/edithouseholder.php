<?php include 'Admin_header.php';
	include 'controller/householdercontroller.php';
	$h_id = $_GET["h_id"];
	$h = getHouseholder($h_id);
?>

<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="h_id" value="<?php echo $h["h_id"];?>"> 
			<input type="text" name="h_name" value="<?php echo $h["h_name"];?>" class="form-control">
			<h4 class="text">Userame:</h4> 
			<input type="text" name="h_uname" value="<?php echo $h["h_uname"];?>" class="form-control">
			<h4 class="text">Password:</h4> 
			<input type="text" name="h_pass" value="<?php echo $h["h_pass"];?>" class="form-control">
			<h4 class="text">Date of Birth:</h4> 
			<input type="text" name="h_dob" value="<?php echo $h["h_dob"];?>" class="form-control">
			<h4 class="text">Gender:</h4> 
			<input type="text" name="h_gender" value="<?php echo $h["h_gender"];?>" class="form-control">
			<h4 class="text">Email:</h4> 
			<input type="text" name="h_email" value="<?php echo $h["h_email"];?>" class="form-control">
			<h4 class="text">Address:</h4> 
			<input type="text" name="h_address" value="<?php echo $h["h_address"];?>" class="form-control">
			<h4 class="text">Phone:</h4> 
			<input type="text" name="h_phone" value="<?php echo $h["h_phone"];?>" class="form-control">
			<h4 class="text">Nid:</h4> 
			<input type="text" name="h_nid" value="<?php echo $h["h_nid"];?>" class="form-control">			
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="edit_householder" class="btn btn-success" value="Edit Householder" class="form-control">
		</div>
	</form>
</div>


<?php include 'Admin_footer.php';?>