<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/images/logo.png" />
  <title>BlogOn</title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/login_page.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/global.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
 <script type='text/javascript' src="<?php echo base_url(); ?>/js/global.js"></script>
</head>
<body>
  <div id=nav>
    <a id=logo href="<?php echo base_url()?>">B</a>
    <a id=login_button2 href="<?php echo base_url();?>/index.php/user/login">Login</a>
  </div>
<div>
  <?php echo form_open('/user/doLogin', array('id'=>'login','method'=>'post')); ?>
  <h1>Enter login details below</h1>
  <input type="text" placeholder="Enter Username" name="username">
  <input type="password" placeholder="Enter Password" name="password">
  <input id='submit' type="submit" value="Login">
</form>
</div>

</body>
</html>
