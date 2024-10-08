<?php

class Emails

{
    protected $CI;
    
    function __construct()
    {
        $this->CI =& get_instance();
        
        $this->CI->load->helper('url');
        $this->CI->load->library('email');
        $this->CI->config->item('base_url');
    }
    
    function registration_email($data)
    {
        $config['mailtype'] = 'html';
        $this->CI->email->initialize($config);
        $this->CI->email->from('admin@cowshala.co.in', 'Cowshala');
        $this->CI->email->to($data['email']);
        $this->CI->email->subject('New Registration'); 
        
        
        $message = '<p><b>Dear customer,</b><br><br>';
        $message .= 'Welcome to cowshala!!! Thank you for registering with us. Avail the goodness of A2 milk, desi ghee and paneer at your doorstep and ensure good health. Hope to give you the best services.';
        $message .= '</p><br>';
        $message .= '<p>Your Email : '. $data['email'].'</p>';
        $message .= '<p>Your Password : '. $data['password'].'</p>';
        $message .= '<p>Coupon Code : COWSHALAPROMO</p>';
        $this->CI->email->message($message);
        
        

        if($this->CI->email->send())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function subscription_email($data)
    {
        $config['mailtype'] = 'html';
        $this->CI->email->initialize($config);
        $this->CI->email->from('admin@cowshala.co.in', 'Cowshala');
        $this->CI->email->to($data['email']);
        $this->CI->email->bcc('cowshala.official@gmail.com');
        $this->CI->email->subject('New Subscription'); 
        
        
        $message = '<p><b>Dear customer,</b><br><br>';
        $message .= 'Welcome to cowshala!!! Thank you for registering with us. Avail the goodness of A2 milk, desi ghee and paneer at your doorstep and ensure good health. Hope to give you the best services.';
        $message .= '</p><br>';
        $message .= '<p>Your Subscription Plan : '. get_package($data['merchant_product_info_id']).'</p>';
        $message .= '<p>Your Subscription Date : '. date('d-m-Y').'</p>';
        $this->CI->email->message($message);
        
        

        if($this->CI->email->send())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function order_email($data)
    {
        $config['mailtype'] = 'html';
        $this->CI->email->initialize($config);
        $this->CI->email->from('admin@cowshala.co.in', 'Cowshala');
        $this->CI->email->to($data['email']);
        $this->CI->email->bcc('cowshala.official@gmail.com');
        $this->CI->email->subject('New Order For '); 
        
        
        $message = '<p><b>Dear customer,</b><br><br>';
        $message .= 'Order Successful';
        $message .= '<p>Your Order Date : '. date('d-m-Y').'</p>';
        $this->CI->email->message($message);
        
        

        if($this->CI->email->send())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function contact_email($data)
    {
        $config['mailtype'] = 'html';
        $this->CI->email->initialize($config);
        $this->CI->email->from('no-reply@cowshala.co.in', 'Cowshala');
        $this->CI->email->to($data['email']);
        $this->CI->email->subject('New Inquiry'); 
        
        $message = '
        <style>
            td,th{border:1px solid #ccc;text-align:left}
        </style>
        <table border="1" Style="border:1px solid #ccc; border-collapse:collapse;width:100%">
            <tr>
                <th>Name</th>
                <td>'.$data['name'].'</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>'.$data['email'].'</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>'.$data['mobile'].'</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>'.$data['message'].'</td>
            </tr>
        </table>';
        
        $this->CI->email->message($message);
        if($this->CI->email->send())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}