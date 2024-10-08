<?php

$config = array(
  'signup' => array(
          array(
                  'field' => 'name',
                  'label' => 'Full Name',
                  'rules' => 'required|min_length[3]'
          ),
          array(
                  'field' => 'mobile',
                  'label' => 'Mobile',
                  'rules' => 'required|numeric|exact_length[10]'
          ),
          array(
                  'field' => 'email',
                  'label' => 'Email',
                  'rules' => 'required|valid_email|is_unique[users.email]'
          )
  ),
  'subscribe' => array(
          array(
                  'field' => 'email',
                  'label' => 'Email',
                  'rules' => 'required|valid_email'
          ),
          array(
                  'field' => 'name',
                  'label' => 'Name',
                  'rules' => 'required|alpha'
          ),
          array(
                  'field' => 'mobile',
                  'label' => 'Mobile',
                  'rules' => 'required}numeric|exact_length[10]'
          )
  )
);

$config['error_prefix'] = '<div class="alert alert-danger" role="alert">';
$config['error_suffix'] = '</div>';