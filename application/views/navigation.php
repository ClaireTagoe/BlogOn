<?php
  $user = $this->session->userdata('user');
  if ($user) {
  echo "<div id=nav style='background-color:lightslategray;'>";
  echo " <a id=logo href='".base_url()."'>B</a>";
  echo "<ul id='tab'>";
  echo "<li><a href='".base_url()."/index.php/user/logout'>Logout</a><li>";
  echo "<li><a href='".base_url()."/index.php/search'> Search Posts </a><li>";
  echo "<li><a href='".base_url()."/index.php/user'> Search People </a><li>";
  echo "<li><a href='".base_url()."/index.php/user/view/".$user."'>My Messages</a><li>";
  echo "<li><a href='".base_url()."index.php/message'>Post Message</a><li>";
  echo "<li><a href='".base_url()."/index.php/user/feed/".$user."'>Follows</a><li>";
  echo "</ul>";
} else {
  echo "<div id=nav>";
  echo " <a id=logo href='".base_url()."'>B</a>";
  echo "<a id=login_button2 href= '".base_url()."/index.php/user/login'>Login</a>";
}
  echo "</div";
?>
