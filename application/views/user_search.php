<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/images/logo.png" />
  <title>Search</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/view_search.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/global.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script type='text/javascript' src="<?php echo base_url(); ?>/js/global.js"></script>
</head>
<body >
  <?php include 'navigation.php'; ?>
  <div id=outer>
  <?php echo form_open('/user/view', array('id'=>'search','method'=>'get')); ?>
  <input id=search_box type="text" placeholder="Enter name of person" name="person">
  <input id=search_button type="submit" value="Search">
  <?php echo form_close(); ?>
</div>
</body>
