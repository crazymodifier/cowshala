<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($slug='')
	{
	    $slug = empty($slug) ? 'home' : $slug;
	    if($data = $this->logics->is_page_exists($slug))
	    {
	        $this->load->view('includes/header',$data);
    		$this->load->view('pages/'.$slug,$data);
    		$this->load->view('templates/widgets',$data);
    		$this->load->view('includes/footer',$data);
	    }
	    else
	    {
	        show_404();
	    }
	}

	public function products($slug='')
	{
		$slug = empty($slug) ? 'products' : $slug;
		$product['product'] = $this->logics->is_product_exists($slug);
		
		if($product['product'])
		{
		    $meta = array(
    			'title'	=> $product['product']->name,
    		);
    		$data = array_merge($product, $meta);
    		$this->load->view('includes/header',$data);
    		$this->load->view('templates/product-page',$data);
    		$this->load->view('templates/widgets',$data);
    		$this->load->view('includes/footer',$data);
		}
		else
		{
		    show_404();
		}
	}
	
	function send_message()
	{
	   // print_r($_POST);
	    $data = $this->input->post();
	    if($this->emails->contact_email($data))
	    {
	        $this->session->set_flashdata('alert', 'Thank you for contacting us');
	        redirect($_SERVER['HTTP_REFERER']);
	    }
	    else{
	        $this->session->set_flashdata('alert', 'Something went wrong');
	        redirect($_SERVER['HTTP_REFERER']);
	    }
	    
	}
	
	function subscribe_now()
	{
	    if(isset($_POST['coupon-code']))
	    {
	        if($_POST['coupon-code'] != 'COWSHALAPROMO')
	        {
	            $this->session->set_flashdata('alert', 'Invalid Coupon Code');
	        }
	    }
	    
	    if($this->form_validation->run('subscribe'))
	    {
	        $this->session->set_flashdata('alert', 'Thank you for our subscription');
	    }
	    else
	    {
	        $this->session->set_flashdata('error', 'true');
	    }
	    redirect($_SERVER['HTTP_REFERER']);
	}
}
