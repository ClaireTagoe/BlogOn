<?php
  class Messages_model extends CI_Model {

    public function __construct() {
      parent::__construct();
      $this->load->database();
    }

    public function getMessagesByPoster($name){
      /*Returns all messages posted by the user with the
      specified username, most recent first
      */
      $query = 'SELECT user_username, text, posted_at FROM Messages WHERE user_username= ?'.' ORDER BY posted_at DESC';
      $query = $this->db->query($query, $name);
      if ($query) {
      return $query->result();
    } else {
      return 'database error';
      }
    }

    public function searchMessages($term) {
      /*Returns all messages containing the specified
      search term, most recent first*/
      $search_string = '"%'.$term.'%"';
      $query = 'SELECT user_username, text, posted_at FROM Messages WHERE text LIKE '.$search_string.' ORDER BY posted_at DESC';
      $query = $this->db->query($query);
      return $query->result();
    }

    public function insertMessage($poster, $message) {
      /* Inserts message into database*/
      $timestamp = date('Y-m-d H:i:s');
      $query = "INSERT INTO Messages(user_username, text, posted_at) VALUES (?,?,?)";
      $query = $this->db->query($query, array($poster, $message, $timestamp));
    }

    public function getFollowedMessages($name) {
      /* Returns all messages posted by users followed by current
      logged in user */
      $query = 'SELECT user_username, text, posted_at FROM Messages WHERE Messages.user_username = ANY (SELECT followed_username FROM User_Follows WHERE follower_username = ?) ORDER BY posted_at DESC';
      $query = $this->db->query($query, $name);
      return $query->result();
    }
  }
 ?>
