<?php include 'controllers/HouseholderController.php';
      include 'householder_header.php';
      include 'main_header.php';


      $h_uname = $_SESSION["h_uname"];
      $profile = getHouseholderWithUsername($h_uname);
?>

<html>
  <head>
      <title>Edit Profile</title>
  </head>
  <body>
      <div align="center" class="add_property">
      <h1>Edit Profile</h1>
      <h5><?php echo $err_db;?></h5>
      <form action="" method="post">
          <table>
              <tr>
                  <td align="right">Property for:</td>
                  <td>
                      <select name="h_purpose" value="<?php echo $profile["h_purpose"];?>">
                          <option selected disabled value="">--Choose--</option>
                          <option value="renting"
                          <?php
                            if($profile["h_purpose"]=='renting'){
                                echo "selected";
                            }
                          ?>>Renting</option>
                          <option value="selling"
                          <?php
                            if($profile["h_purpose"]=='selling'){
                                echo "selected";
                            }
                          ?>>Selling</option>
                    </select><span><?php echo $err_h_purpose;?></span>
                  </td>
              </tr>
              <tr>
                  <td align="right">Name:</td>
                  <td><input type="text" name="h_name" value="<?php echo $profile["h_name"];?>">
                  <span><?php echo $err_h_name;?><span></td>
              </tr>
              <tr>
                  <td align="right">Username:</td>
                  <td><input type="text" name="h_uname" value="<?php echo $profile["h_uname"];?>">
                  <span><?php echo $err_h_uname;?></span></td>
              </tr>
              <tr>
                  <td align="right">Password:</td>
                  <td><input type="password" name="h_pass" value="<?php echo $profile["h_pass"];?>">
                  <span><?php echo $err_h_pass;?></span></td>
              </tr>
              <tr>
                <td align="right">Date of Birth:</td>
				      	<td><select name="h_day">
					      <option disabled selected>Day</option>
						    <?php

							     for($i=1;$i<=31;$i++){
                     if($i == $profile["h_day"]){
                       echo "<option selected>$i</option>";
                     }
								     else{
                       echo "<option>$i</option>";
                     }

							     }
						    ?>
                            </select><span><?php echo $err_h_day;?></span>
						   <select name="h_month">
						       <option disabled selected>Month</option>
							  <?php
								   $h_month = array("January","February","March","April","May","June","July","August","September","October","November","December");
								   foreach($h_month as $m){
                     if($m == $profile["h_month"]){
                       echo "<option selected>$m</option>";
                     }
								  	 echo "<option>$m</option>";
								   }
							  ?>
							</select>
							     <span><?php echo $err_h_month;?></span>
                            <select name="h_year">
								   <option disabled selected>Year</option>
								<?php
									 for($i=1990;$i<=2021;$i++){
                     if($i == $profile["h_year"]){
                       echo "<option selected>$i</option>";
                     }
									 	 echo "<option>$i</option>";
									 }
								?>
							</select>
							     <span><?php echo $err_h_year;?></span>
							  </td>
							</tr>
                            <tr>
								<td align="right">Gender:</td>
								<td><input type="radio" value="Male"
                                <?php
                                    if($profile["h_gender"]=='Male'){
                                        echo "checked";
                                    }
                                ?>> Male <input type="radio" value="Female"
                                <?php
                                    if($profile["h_gender"]=='Female'){
                                        echo "checked";
                                    }
                                ?>>Female<span><?php echo $err_h_gender;?></span></td>
							</tr>
                        <tr>
					      <td align="right"><br>Email Address:</td>
					      <td><br><input name="h_email"type="text" value="<?php echo $profile["h_email"];?>">
					      <span><?php echo $err_h_email;?></span></td>
				     </tr>
             <tr>
               <td align="right">Address:</td>
               <td><input name="h_address" type="text" value="<?php echo $profile["h_address"];?>">
               <span><?php echo $err_h_address;?></span></td>
             </tr>
             <tr>
               <td align="right">Phone:</td>
               <td><input name="h_phone" type="text" value="<?php echo $profile["h_phone"];?>">
               <span><?php echo $err_h_phone;?></span></td>
              </tr>
              <tr>
                <td align="right">NID:</td>
                <td><input name="h_nid" type="text" value="<?php echo $profile["h_nid"];?>">
                <span><?php echo $err_h_nid;?></span></td>
              </tr>
              <tr>
		        <td align="right"></td>
		        <td><input type="hidden" name="h_id" value="<?php echo $profile["h_id"];?>"></td>
             </tr>
              <tr>
                  <td align="right"></td>
                  <td><input type="submit" name="update" value="Update"></td>
              </tr>
          </table>
      </form>

      </div>
  </body>
</html>

<center><?php include 'householder_footer.php';?></center>
