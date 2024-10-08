<?php

  /**
   * My_controller class
   */
  class My_controller extends CI_Controller
  {
    function is_logged_in()
    {
      // $_SESSION('logged_id');
      if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != TRUE)
      {
        redirect('login');
      }
      else
      {
        return FALSE;
      }
    }
  }
  