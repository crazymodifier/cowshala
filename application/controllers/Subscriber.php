<?php

/**
 * undocumented class
 */
class Subscriber extends My_Controller
{
  function __construct()
  {
    parent :: __construct();
    
    $this->is_logged_in();
  }
  function index($slug="dashboard")
  {
    $data = array(
      'title' => 'Dashboard', 
    );
    $this->load->view('subscriber/header',$data);
    $this->load->view('subscriber/sidebar',$data);
    $this->load->view('subscriber/'.$slug,$data);
    $this->load->view('subscriber/footer',$data);
  }
}
