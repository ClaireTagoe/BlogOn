<?php

class User_Model extends CI_Model {
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  private function _getUserPassword($username) {
    $query = 'SELECT username, password FROM Users WHERE username= ? ';
    $query = $this->db->query($query, $username);
    return $query->result();
  }

  public function checkLogin($username, $sha_password) {
    /*Returns TRUE if a user exists in the databasewith the
    specified username and sha1 hashed password,and FALSE if not.*/
    $user_info = $this->_getUserPassword($username);
    foreach ($user_info as $row) {
      $valid_password = $row->password;
    }
    if (strcmp($valid_password, $sha_password) == 0) {
      return True;
    }
    return False;
  }

  public function isFollowing($follower, $followed) {
    /* REturn True if current user is a follower of $followed*/
    $query = 'SELECT * FROM User_Follows WHERE follower_username=? AND followed_username=? ';
    $query = $this->db->query($query, array($follower, $followed));
    if (empty($query->result())) {
      return False;
    }
    return True;
  }

  public function follow($followed) {
    /*Insert db entry to indicate current user is a follower of
    $followed */
    $follower = $this->session->userdata('user');
    $query = 'INSERT INTO User_Follows(follower_username, followed_username) VALUES(?,?)';
    $this->db->query($query, array($follower, $followed));
  }

}
