<?php include 'Admin_header.php';
	include 'controller/customercontroller.php';
	$c_id = $_GET["c_id"];
	$c = getCustomer($c_id);
?>

<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="c_id" value="<?php echo $c["c_id"];?>"> 
			<input type="text" name="c_name" value="<?php echo $c["c_name"];?>" class="form-control">
			<h4 class="text">Userame:</h4> 
			<input type="text" name="c_uname" value="<?php echo $c["c_uname"];?>" class="form-control">
			<h4 class="text">Password:</h4> 
			<input type="text" name="c_pass" value="<?php echo $c["c_pass"];?>" class="form-control">
			<h4 class="text">Date of Birth:</h4> 
			<input type="text" name="c_dob" value="<?php echo $c["c_dob"];?>" class="form-control">
			<h4 class="text">Gender:</h4> 
			<input type="text" name="c_gender" value="<?php echo $c["c_gender"];?>" class="form-control">
			<h4 class="text">Email:</h4> 
			<input type="text" name="c_email" value="<?php echo $c["c_email"];?>" class="form-control">
			<h4 class="text">Address:</h4> 
			<input type="text" name="c_address" value="<?php echo $c["c_address"];?>" class="form-control">
			<h4 class="text">Phone:</h4> 
			<input type="text" name="c_phone" value="<?php echo $c["c_phone"];?>" class="form-control">
			<h4 class="text">Nid:</h4> 
			<input type="text" name="c_nid" value="<?php echo $c["c_nid"];?>" class="form-control">			
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="edit_customer" class="btn btn-success" value="Edit Customer" class="form-control">
		</div>
	</form>
</div>


<?php include 'Admin_footer.php';?>