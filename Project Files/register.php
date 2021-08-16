<?php include 'controllers/HouseholderController.php';
      include 'main_header.php';

?>

<html>
  <script src="js/register.js"></script>
  <head>
      <title>Householder Registration</title>
  </head>
  
  <script src="js/register_ajax.js"></script>
  <body>
     <div class="body_3" align="center">
      <legend><h1>Householder Registration</h1></legend>
      <h5><?php echo $err_db;?></h5>
      <form action="" onsubmit="return validate()" method="post">
          <table>
              <tr>
                  <td align="right"><b>Property for:</b></td>
                  <td>
                      <select id="h_purpose" name="h_purpose">
                          <option selected disabled value="">--Choose--</option>
                          <option value="renting">Renting</option>
                          <option value="selling">Selling</option>
                    </select><span class="id" id="err_h_purpose"><?php echo $err_h_purpose;?></span>
                  </td>
              </tr>
              <tr>
                  <td align="right"><b>Name:</b></td>
                  <td><input id="h_name" type="text" name="h_name" value="<?php echo $h_name;?>">
                  <span class="id" id="err_h_name"><?php echo $err_h_name;?><span></td>
              </tr>
              <tr>
                  <td align="right"><b>Username:</b></td>
                  <td><input id="h_uname" type="text" name="h_uname" onfocusout="checkUsername(this)" value="<?php echo $h_uname;?>">
                  <span class="id" id="err_h_uname"><?php echo $err_h_uname;?></span></td>
              </tr>
              <tr>
                  <td align="right"><b>Password:</b></td>
                  <td><input id="h_pass" type="password" name="h_pass" value="<?php echo $h_pass;?>">
                  <span class="id" id="err_h_pass"><?php echo $err_h_pass;?></span></td>
              </tr>
              <tr>
                <td align="right"><b>Date of Birth:</b></td>
				      	<td><select id="h_day" name="h_day" value="<?php echo $h_day;?>">
					      <option disabled selected>Day</option>
						    <?php
							     for($i=1;$i<=31;$i++){
								   echo "<option>$i</option>";
							     }
						    ?>
              </select><span class="id" id="err_h_day"><?php echo $err_h_day;?></span>
						   <select id="h_month" name="h_month" value="<?php echo $h_month;?>">
						       <option disabled selected>Month</option>
							  <?php
								   $h_month = array("January","February","March","April","May","June","July","August","September","October","November","December");
								   foreach($h_month as $m){
								  	 echo "<option>$m</option>";
								   }
							  ?>
							</select>
							     <span class="id" id="err_h_month"><?php echo $err_h_month;?></span>
                   <select id="h_year" name="h_year" value="<?php echo $h_year;?>">
								   <option disabled selected>Year</option>
								<?php
									 for($i=1990;$i<=2021;$i++){
									 	 echo "<option>$i</option>";
									 }
								?>
							</select>
							     <span class="id" id="err_h_year"><?php echo $err_h_year;?></span>
							  </td>
							</tr>
              <tr>
								<td align="right"><b>Gender:</b></td>
								<td><input id="male" type="radio" value="Male" name="h_gender"> Male <input id="female" type="radio" value="Female" name="h_gender"> Female
								<span class="id" id="err_h_gender"><?php echo $err_h_gender;?></span></td>
							</tr>
              <tr>
					      <td align="right"><b>Email Address:</b></td>
					      <td><br><input id="h_email" name="h_email"type="text" value="<?php echo $h_email;?>">
					      <span class="id" id="err_h_email"><?php echo $err_h_email;?></span></td>
				     </tr>
             <tr>
               <td align="right"><b>Address:</b></td>
               <td><input id="h_address" name="h_address" type="text" value="<?php echo $h_address;?>">
               <span class="id" id="err_h_address"><?php echo $err_h_address;?></span></td>
             </tr>
             <tr>
               <td align="right"><b>Phone:</b></td>
               <td><input id="h_phone" name="h_phone" type="text" onfocusout="checkPhone(this)" value="<?php echo $h_phone;?>">
               <span class="id" id="err_h_phone"><?php echo $err_h_phone;?></span></td>
              </tr>
              <tr>
                <td align="right"><b>NID:</b></td>
                <td><input id="h_nid" name="h_nid" type="text" onfocusout="checkNid(this)" value="<?php echo $h_nid;?>">
                <span class="id" id="err_h_nid"><?php echo $err_h_nid;?></span></td>
              </tr>
              <tr>
                  <td align="right"></td>
                  <td><input type="submit" name="register" value="Register">
                  <a href="login.php" class="btn-link3">Log In</a></td>
              </tr>
          </table>
      </form>

     </div>
  </body>
</html>
<!--<script src="js/register.js"></script>-->

<?php include 'main_footer.php';?>
