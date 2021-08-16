<?php include 'Admin_header.php';
	include 'controller/faqscontroller.php';
	$faqs = getfaqs_table();
	
?>


<div class="center">
	<h3 class="text">All FAQs</h3>
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th> FAQ details</th>
			<th>Customer id</th>

	
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($faqs as $f){
					$h_id = $f["f_id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$f["f_details"]."</td>";
						echo "<td>".$f["c_id"]."</td>";
						echo "<td>".$f["f_reply"]."</td>";
						
						echo '<td><a href="reply.php?f_id='.$f_id.'" class="btn btn-success">Reply</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>

<?php include 'Admin_footer.php';?>