<?php 
include 'Main_header.php';
?>
<html>
<head>
<style type = "text/css">
table{
	border:1px solid black;
	border-collapse : collapse;
	width : 1200px;
	color : black;
	font-family : consolas;
	font-size : 15px;
	text-align : left;
	margin-left : 10px;
}


th{
	background-color : rgb(255, 153, 51);
	color : white;
}


tr:nth-child(even) {background-color: #ededed}
</style>
</head>
<body>
<table>
<tr>
<br>
<th>Review id</th>
<th>Householder's name</th>
<th>Review</th>
<th>Rating</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "","webtech_final_project");
$sql = "SELECT * FROM householder_review";
$result = $conn->query($sql);


if ($result ->num_rows > 0)
{
	while ($row = $result-> fetch_assoc())
	{
		echo "<tr><td>" . $row["r_id_h" ] . 
		"</td><td>" . $row[ "h_name" ] . "</td><td>" . $row["h_review"] . "</td><td>" . $row["h_rating"] . "</td></tr>";
		
	}
}
else
{
	echo "No result";
}
$conn -> close();
?>
</table>
</body>
</html>