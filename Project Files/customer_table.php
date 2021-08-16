<?php include 'Admin_header.php';
	include 'controller/customercontroller.php';
	$customer = getcustomer_table();
	
?>


<div class="center">
	<h3 class="text">All Customer</h3>
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
				foreach($customer as $c){
					$c_id = $c["c_id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$c["c_name"]."</td>";
						echo "<td>".$c["c_uname"]."</td>";
						echo "<td>".$c["c_pass"]."</td>";
						echo "<td>".$c["c_dob"]."</td>";
						echo "<td>".$c["c_gender"]."</td>";
						echo "<td>".$c["c_email"]."</td>";
						echo "<td>".$c["c_address"]."</td>";
						echo "<td>".$c["c_phone"]."</td>";
						echo "<td>".$c["c_nid"]."</td>";						
						echo '<td><a href="editcustomer.php?c_id='.$c_id.'" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>

<?php include 'Admin_footer.php';?>