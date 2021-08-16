<?php include 'householder_header.php';
  include 'controllers/PropertyController.php';
  include 'main_header.php';
  //session_start();
  //var_dump($_SESSION);
  //$properties = getProperties($_SESSION["h_id"]);
  
  $h_uname = $_SESSION["h_uname"];//bujhte hobe
  $prop =  getHouseholderWithUsername($h_uname);//bujhte hobe
  //$h_uname = $_GET["h_uname"];//bujhte hobe
  //$prop = getCustomerWithUsername($h_uname);//bujhte hobe
  
  $p_location = $_GET["p_location"];
  $search = searchPropertyLocation($p_location);

  

 
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>
  </head>
  <style>
table, td, th {
  border: 2px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
<html>
  <head>
    <title>Search Result</title>
  </head>
  <body>
    <div align="center" class="add_property">
    <h3>Properties Sold</h3>
<script src="js/search_ajax.js"></script>
<table>
  <thead>
      <th>Property Type</th>
      <th>Property Area</th>
      <th>Property Location</th>
      <th>Property Price</th>
      <th>Householder</th>
      <th>Image</th>
  </thead>
  <tbody>
      <?php
      $search = searchPropertyLocation($p_location);
        foreach($search as $p){
          $p_id = $p["p_id"];
          echo "<tr>";
            echo "<td>".$p["p_type"]."</td>";
            echo "<td>".$p["p_area"]."</td>";
            echo "<td>".$p["p_location"]."</td>";
            echo "<td>".$p["p_price"]."</td>";
            echo "<td>".$p["h_id"]."</td>";
            echo "<td><img width='80px' height='100px' src='".$p["p_img"]."'></td>";
          echo "</tr>";
        }
      ?>
  </tbody>
</table>

    </div>
  </body>
</html>
<center><?php include 'householder_footer.php';?></center>