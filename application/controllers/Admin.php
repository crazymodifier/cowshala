<?php

/**
 * undocumented class
 */
class Admin extends My_Controller
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
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar',$data);
    $this->load->view('admin/'.$slug,$data);
    $this->load->view('admin/footer',$data);
  }
}
