<?php include 'Admin_header.php';
	include 'controller/faqscontroller.php';
?>

	
	<div class="center">
		<h5 class="text-danger"><?php echo $err_db;?></h5>
		<form action=""  method="post" class="form-horizontal form-material">

			<div class="form-group">
				<h4 class="text">FAQs details:</h4> 
				<input type="text" name="f_details" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Customer id:</h4> 
				<input type="text" name="c_id" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">FAQs reply:</h4> 
				<input type="text" name="f_reply" class="form-control">
			</div>			

				
				<input type="submit" name="replyfaqs" class="btn btn-success" value="Reply FAQs" class="form-control">
			</div>
		</form>
	</div>


<?php include 'Admin_footer.php';?>