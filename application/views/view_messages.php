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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/view_messages.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
  <?php include 'navigation.php'; ?>
  <div id=outer>
  <?php
    if (empty($info)) {echo "<p id='head'>No results for query</p>";}
    else if (!$follows) {
    $followed = $this->uri->segment($this->uri->total_segments());
    $new_url = base_url().'/index.php/user/follow/'.$followed;
    echo "<p id='head' > You are currently not a follower <a href='".$new_url."'>Follow</a></p>";
  } else {
     echo "<p id='head' >What's happening?</p>";
  }
 ?>
  <div id=messages>
    <?php foreach ($info as $row) {
      echo "<div>";
      echo "<a href='".base_url()."/index.php/user/view/".$row->user_username."'><h3>".$row->user_username."</h3></a>";
      echo "<h4>".$row->posted_at."</h4>";
      echo "<p>".$row->text."</p>";
      echo "</div";
    }
    ?>
  </div>
</div>
</body>
</html>
