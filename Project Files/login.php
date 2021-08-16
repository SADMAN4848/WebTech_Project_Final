
<?php
    include 'controllers/HouseholderController.php';
    include 'main_header.php';
?>
<!DOCTYPE html>
<html>
<script src="js/login.js"></script>
  <head>
      <title>Log In</title>
  </head>
  <body>
      <div class="body_1">
      <center>
      <img src="storage/navana_logo.jpg" alt="Navana Logo">
      <h1>Log In</h1>
      <h5><?php echo $err_db;?></h5>
      <form action="" method="post">
          <table>
              <tr>
                  <td align="center" class="login-info"><b>Username:</b></td>
                  <td><input id="h_uname" type="text" name="h_uname" value="<?php echo $h_uname;?>">
                  <span class="id" id="err_h_uname"><?php echo $err_h_uname;?></span></td>
              </tr>
              <tr>
                  <td align="center"><b>Password:</b></td>
                  <td><input id="h_pass" type="password" name="h_pass" value="<?php echo $h_pass;?>">
                  <span class="id" id="err_h_pass"><?php echo $err_h_pass;?></span></td>
              </tr>
              <tr>
                  <td align="center"></td>
                  <td><input type="submit" name="login" value="Log in"></td>
              </tr>
              <tr>
                  <td align="center"></td>
                  <td><a href="register.php" class="not_registered"><b>Not registered yet? Register</b></a></td>
              </tr>
          </table>
      </form>
      </center>
      </div>
  </body>
</html>
