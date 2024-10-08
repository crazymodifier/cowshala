<?php

/**
 * undocumented class
 */
class Login extends My_Controller
{
  function index($slug)
  {
    $data = array(
      'title' => ucwords($slug), 
    );
    $this->load->view('includes/header',$data);
    $this->load->view('pages/'.$slug,$data);
    $this->load->view('includes/footer',$data);
  }

  function login_me()
  {
    $user  = $this->membership->get_users($this->input->post());
    if($user)
    {
      $this->session->set_userdata('logged_in', TRUE);
      redirect($user->rights.'/dashboard');
    }
    else{
      $this->index('login');
    }
  }

  function register_me()
  {
    if ($this->form_validation->run('signup') == FALSE)
    {
        $this->index('registration');
    }
    else
    {
      $data = $this->input->post();
      if($this->membership->user_registration($data))
      {
          $this->session->set_flashdata('success', 'Your registration has successfuly completed, please check your email.');
          redirect($_SERVER["HTTP_REFERER"]);
      }
      
    }
  }
}
