<?php include 'admin_header.php';
	require_once 'controller/adscontroller.php';
	//$categories = getAllCategories();
?>

<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" name="ads_name" class="form-control">
		</div>

		<div class="form-group">
			<h4 class="text">Price:</h4> 
			<input type="text" name="ads_price" class="form-control">

		<div class="form-group">
			<h4 class="text">Description:</h4> 
			<textarea type="text" name="ads_desc" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<h4 class="text">Image</h4> 
			<input type="file" name="ads_image" class="form-control">
			
		</div>
		<div class="form-group text-center">
			
			<input type="submit" name="add_ads" class="btn btn-success" value="Add Ads" class="form-control">
		</div>
	</form>
</div>
<?php include 'Admin_footer.php';?>
