<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/images/logo.png" />
	<title>User Blogs</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/global.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/view_search.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
  <?php include 'navigation.php'; ?>
  <div id=outer>
  <?php echo form_open('/message/doPost'); array('method'=>'post'); ?>
  <textarea id=post_box placeholder="What's on your mind?" name="post"></textarea>
  <input id=post_button type="submit">
  <?php echo form_close(); ?>
</body>
