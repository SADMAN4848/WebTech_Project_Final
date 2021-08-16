<?php 
include_once 'Main_header.php';?>
<?php

	include_once 'controller/admincontroller.php';
?>


<div class="center-login">
	<h1 class="text text-center">Admin Sign Up</h1>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="text" placeholder="Enter your name" name="name" value="<?php echo $name;?>" class="form-control">
			<span class="text-danger"><?php echo $err_name;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" placeholder="Enter your username" name="uname" value="<?php echo $uname;?>" class="form-control">
			<span class="text-danger"><?php echo $err_uname;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" placeholder="Enter your password" name="pass" value="<?php echo $pass;?>" class="form-control">
			<span class="text-danger"><?php echo $err_pass;?></span>
<!--		</div>
		<div class="form-group">
			<h4 class="text">Confirm Password</h4> 
			<input type="password" placeholder="Enter your password again" name="confirm_pass" value="<?php echo $confirm_pass;?>" class="form-control">
			<span class="text-danger"><?php echo $err_confirm_pass;?></span>
		</div>
		-->
		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" placeholder="Enter your mail" name="email" value="<?php echo $email;?>" class="form-control">
			<span class="text-danger"><?php echo $err_email;?></span>
		</div>
		
		<div class="form-group">
			<h4 class="text">Gender</h4> 
			<input type="radio" value="Male" name="gender"> Male
			<input type="radio" value="Female" name="gender"> Female
			<span class="text-danger"><?php echo $err_gender;?></span>
		</div>
	
		<div class="form-group">
			<h4 class="text">Phone No</h4> 
			<input type="text" placeholder="Enter your phone number" name="phone" value="<?php echo $phone;?>" class="form-control">
			<span class="text-danger"><?php echo $err_phone;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">NID</h4> 
			<input type="text" placeholder="Enter your NID number" name="nid" value="<?php echo $nid;?>" class="form-control">
			<span class="text-danger"><?php echo $err_nid;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Address</h4> 
			<input type="text" placeholder="Enter your address" name="address" value="<?php echo $address;?>" class="form-control">
			<span class="text-danger"><?php echo $err_address;?></span>
		</div>		
		<div class="form-group">
			<h4 class="text">Date of Birth</h4> 
			<input type="text" placeholder="dd/mm/yyyy" name="dob" value="<?php echo $dob;?>" class="form-control">
			<span class="text-danger"><?php echo $err_dob;?></span>
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="sign_up" class="btn btn-success" value="Sign Up" class="form-control">
		</div>
	</form>
</div>


<?php include 'Main_footer.php';?>