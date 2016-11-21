<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

  function __construct() {
        parent::__construct();

        // Load url helper
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
    }

  private function _generateData($data, $follows=True) {
    /* Returns array with data to be sent for display*/
    $dat = array('info'=> $data,
                  'follows'=> $follows
                );
    return $dat;
    }

    public function index() {
      /*Load search page*/
      $this->load->view('view_search.php');
    }

     public function doSearch(){
       /* Search posts with given string*/
       $term = $this->input->get('search_term');
       $this->load->model('Messages_model');
       $search_results = $this->Messages_model->searchMessages($term);
       $search_results = $this->_generateData($search_results);
       $this->load->view('view_messages', $search_results);
     }
}
