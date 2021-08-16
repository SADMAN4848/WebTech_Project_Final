<?php include 'Admin_header.php';
	include 'controller/faqscontroller.php';
	$f_id = $_GET["f_id"];
	$f = getFaqs($f_id);
?>

<div class="center">
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">FAQs details:</h4> 
			<input type="hidden" name="f_id" value="<?php echo $f["f_id"];?>"> 
			<input type="text" name="f_details" value="<?php echo $f["f_details"];?>" class="form-control">

			<h4 class="text">FAQs Reply:</h4> 
			<input type="text" name="f_reply">
			
		<div class="form-group text-center">
			
			<input type="submit" name="reply" class="btn btn-success" value="Reply FAQs" class="form-control">
		</div>
	</form>
</div>


<?php include 'Admin_footer.php';?>