<?php 
include_once 'Admin_header.php';
session_start();
$uname=$_SESSION["loggeduser"];
?>
		<div class="text-center">
		<h1 align = "center">Welcome <?php echo $_SESSION["loggeduser"]?></h1>
			<a href="customer_table.php" class="btn btn-primary">Customer</a>
			<a href="add_customer.php" class="btn btn-primary">Add Customer</a>
			<a href="householder_table.php" class="btn btn-warning">Householder</a>
			<a href="addhouseholder.php" class="btn btn-warning">Add Householder</a>
			<a href="ad_table.php" class="btn btn-danger">Ads</a>
			<a href="add_ads.php" class="btn btn-danger">Add Ads</a>
			<a href="customer_review.php" class="btn btn-primary">Customers Reviews & Rating</a>
			<a href="householder_review.php" class="btn btn-warning">Householders Reviews & Rating</a>
			<a href="faqs_table.php" class="btn btn-info">FAQs</a>
			<a href="notice.php" class="btn btn-info">Notice</a>
			<a href="Admin_login.php" class="btn btn-danger">Logout</a>	
		</div>
<?php include 'Admin_footer.php';?>