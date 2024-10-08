<?php
class Membership extends CI_Model
{
  function user_registration($data)
  {
      $pass = uniqid();
    $data['password'] = md5($pass) ;
    if($this->db->insert('users', $data))
    {
      $data['password'] = $pass ;
      return $this->emails->registration_email($data);
    }
  }
  
  function get_users($data)
  {
      
      $check = $this->db->where('email', $data['email'])->get('users')->row();
      
      if($check)
      {
          if($check->password == md5($data['password']))
          {
              return $check;
          }
          else
          {
              $this->session->set_flashdata('error','Invalid Password.');
              return false;
          }
      }
      
      else
      {
          $this->session->set_flashdata('error','Invalid Email Address.');
          return false;
      }
  }
  
  function subscribe($data)
  {
      unset($data['merchant_surl_id']);
      unset($data['merchant_furl_id']);
      return $this->db->insert('payments', $data);
      
  }
  
  function avalbility($data)
  {
      $user_count = $this->db->where('email', $data['email'])->get('payments')->num_rows();
      $total_count = $this->db->get('payments')->num_rows();
      
      if($total_count <= 100 && $user_count <= 5)
      {
          return true;
      }
      else
      {
          return false;
      }
  }
}
