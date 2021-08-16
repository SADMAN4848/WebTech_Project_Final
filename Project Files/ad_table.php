<?php include 'Admin_header.php';
	require_once 'controller/adscontroller.php';
	$ads = getAds();
?>


<div class="center">
	<h3 class="text">All Ads</h3>

	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th></th>
			<th> Name</th>
			<th> Price</th>
			<th> Description</th>
			<th>Image</th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($ads as $ads){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td><img width='80px' height='100px' src='".$p["img"]."'></td>";
						echo "<td>".$ads["ads_name"]."</td>";
						echo "<td>".$ads["ads_price"]."</td>";
						echo "<td>".$ads["ads_desc"]."</td>";
						echo "<td>".$ads["ads_image"]."</td>";
						echo '<td><a href="editproduct.php?ads_id='.$ads["ads_id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
<script src="js/products.js"></script>

<?php include 'Admin_footer.php';?>