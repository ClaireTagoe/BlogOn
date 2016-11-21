<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/images/logo.png" />
  <title>BlogOn</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/homepage.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/global.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type='text/javascript' src="<?php echo base_url(); ?>/js/homepage.js"></script>
  <script type='text/javascript' src="<?php echo base_url(); ?>/js/typed.js"></script>
</head>
<body >
  <div id=main>
  <div id=nav>
    <a id=logo href="<?php echo base_url();?>">B</a>
    <a id=login_button2 href= "<?php echo base_url().'/index.php/user/login'?>"> Login </a>
  </div>
  <div id=outer >
    <h1> BlogOn</h1>
    <div id=signs>
      <a href="<?php echo base_url().'/index.php/user/login';?>"><button id=login_button> Login </button></a>
      <button id=explore_button> Get Started </button>
      <h2 id=writing>...</h2>
    </div>

  </div>
  <div id=bottom>
  <div id=bottom1>
    <h2> Click any button below to explore </h2>
    <a href="<?php echo base_url().'/index.php/search';?>"><button id=search_post_button> Search Posts </button></a>
    <a href="<?php echo base_url().'/index.php/user';?>"><button id=search_people_button> Search People </button></a>
  </div>
  <div id=foot><h5>What is BlogOn?</h5></div>
</div>
</body>
