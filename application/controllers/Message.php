<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

  function __construct() {
        parent::__construct();

        // Load url helper
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
  }

  public function index() {
    if (!$this->session->userdata('user')) redirect('/user/login');
    $this->load->view('view_post');
  }

  public function doPost() {
    $cur_user = $this->session->userdata('user');
    $message = $this->input->post('post');
    if (!$cur_user) {
      redirect('/user/login');
    }
    if ($message) {
      $this->load->model('Messages_model');
      $response = $this->Messages_model->insertMessage($cur_user,$message);
      redirect('/user/view/'.$cur_user);
    } else {
      redirect('/message');
    }
  }
}

?>
