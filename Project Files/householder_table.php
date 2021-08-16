<?php include 'Admin_header.php';
	include 'controller/householdercontroller.php';
	$householder = gethouseholder_table();
	
?>


<div class="center">
	<h3 class="text">All Householder</h3>
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th> Name</th>
			<th>Username</th>
			<th>Password</th>
			<th>DOB</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Address</th>
			<th>Phone</th>
			<th>Nid</th>
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($householder as $h){
					$h_id = $h["h_id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$h["h_name"]."</td>";
						echo "<td>".$h["h_uname"]."</td>";
						echo "<td>".$h["h_pass"]."</td>";
						echo "<td>".$h["h_dob"]."</td>";
						echo "<td>".$h["h_gender"]."</td>";
						echo "<td>".$h["h_email"]."</td>";
						echo "<td>".$h["h_address"]."</td>";
						echo "<td>".$h["h_phone"]."</td>";
						echo "<td>".$h["h_nid"]."</td>";						
						echo '<td><a href="edithouseholder.php?h_id='.$h_id.'" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>

<?php include 'Admin_footer.php';?>