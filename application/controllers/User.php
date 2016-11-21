<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  function __construct() {
        parent::__construct();

        // Load url helper
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
  }

  /** User page for CI_Controller
  Maps to:
   index.php/user/index
  or
  index.php/user

  **/
  public function index() {
    /* Display search form to search for posts by poster name*/
    $this->load->view('user_search');
  }

  private function _generateData($data, $follows=True) {
    /* Returns array with data to be sent for display*/
    $dat = array('info'=> $data,
                  'follows'=> $follows
                );
    return $dat;
  }

  private function _checkFollow($followed) {
    /*Returns false if there is no logged in user or if user is viewing
    his own messages.*/
    $cur_user = $this->session->userdata('user');
    if (!$cur_user) return False;
    if (strcmp($cur_user, $followed) == 0) return False;
    return True;
  }

  public function login() {
    /* Load login page if user is not logged in or messages page if
    user is logged in */
    $user = $this->session->userdata('user');
    if ($user) {
      redirect('/user/view/'.$user);
    }
    $this->load->view('view_login');
  }

  public function doLogin() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    if (!$username || !$password) {
      echo 'Null values';
    } else {
      $sha_password = sha1($password);
      $this->load->model('User_model');
      $login = $this->User_model->checkLogin($username, $sha_password);
      if ($login) {
        $_SESSION['user'] = $username;
        redirect('/user/view/'.$username);
      } else {
        redirect('/user/login');
      }
    }
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('/user/login');
  }


  public function view($name=null) {
    /*Display messages posted by user*/
    if (!$name) {
      $name = $this->input->get('person');
      if ($name) redirect('user/view/'.$name);
    }
    if (!$name) {
        echo 'Please provide login name';
    } else {
      $this->load->model('Messages_model');
      $info = $this->Messages_model->getMessagesByPoster($name);
      $follows = True;
      if ($this->_checkFollow($name)) {
        //Go Ahead and Check if user follows the person being viewed.
        $follower = $this->session->userdata('user');
        $this->load->model('User_model');
        $follows = $this->User_model->isFollowing($follower, $name);
      }
      $data = $this->_generateData($info, $follows);
      $this->load->view('view_messages', $data);
    }
  }

  public function follow($followed) {
    /*Add db entry to indicate current user is now a
    follower of %$followed and redirect to view/{followed}*/
    $this->load->model('User_model');
    $this->User_model->follow($followed);
    redirect('/user/view/'.$followed);
  }

  public function feed($name) {
    /*Display messages from all users followed by current logged
    in user */
    $this->load->model('Messages_model');
    $data = $this->Messages_model->getFollowedMessages($name);
    $data = $this->_generateData($data);
    $this->load->view('view_messages', $data);
  }

}
?>
