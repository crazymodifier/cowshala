<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Razorpay extends CI_Controller {

	public function index() {
		$data = $this->input->post();
		
		if($data['package'] > 0)
		{
		    $data['amount']= 3000 * $data['package'];
		}
		else
		{
		    $data['amount']= 400;
		}
		if(isset($_POST['coupon']) && !empty($_POST['coupon']))
	    {
	        if($_POST['coupon'] != 'COWSHALAPROMO')
	        {
	            $this->session->set_flashdata('alert', 'Invalid Coupon Code');
	            redirect($_SERVER['HTTP_REFERER']);
	        }
	        elseif($this->membership->avalbility($data))
	        {
	            $data['amount'] = $data['amount'] - 100;
	        }
	        else{
	            $this->session->set_flashdata('alert', 'Coupon Code Expired');
	            redirect($_SERVER['HTTP_REFERER']);
	        }
	    }
	    
	    $this->checkout($data);
	}
	public function checkout($data) {
        $data['title']              = 'Checkout';  
        $data['callback_url']       = base_url().'razorpay/callback';
        $data['surl']               = base_url().'razorpay/success';;
        $data['furl']               = base_url().'razorpay/failed';;
        $data['currency_code']      = 'INR';
        $data['description']        = $data['package'];
        $this->load->view('pages/pay-now', $data);
    }
    // initialized cURL Request
    private function curl_handler($payment_id, $amount)  {
        $url            = 'https://api.razorpay.com/v1/payments/'.$payment_id.'/capture';
        $key_id         = "rzp_live_QDydGGhjl4F3wV";
        $key_secret     = "awkT0wFBjLwOsR6wZHlTYxHa";
        $fields_string  = "amount=$amount";
        //cURL Request
        $ch = curl_init();
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $key_id.':'.$key_secret);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        return $ch;
    }    
    // callback method
    public function callback() {   
        print_r($this->input->post());     
        if (!empty($this->input->post('razorpay_payment_id')) && !empty($this->input->post('merchant_order_id'))) {
            $razorpay_payment_id = $this->input->post('razorpay_payment_id');
            $merchant_order_id = $this->input->post('merchant_order_id');
            
            $this->session->set_flashdata('razorpay_payment_id', $this->input->post('razorpay_payment_id'));
            $this->session->set_flashdata('merchant_order_id', $this->input->post('merchant_order_id'));
            $currency_code = 'INR';
            $amount = $this->input->post('merchant_total');
            $success = false;
            $error = '';
            try {                
                $ch = $this->curl_handler($razorpay_payment_id, $amount);
                //execute post
                $result = curl_exec($ch);
                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                if ($result === false) {
                    $success = false;
                    $error = 'Curl error: '.curl_error($ch);
                } else {
                    $response_array = json_decode($result, true);
                        //Check success response
                        if ($http_status === 200 and isset($response_array['error']) === false) {
                            $success = true;
                        } else {
                            $success = false;
                            if (!empty($response_array['error']['code'])) {
                                $error = $response_array['error']['code'].':'.$response_array['error']['description'];
                            } else {
                                $error = 'RAZORPAY_ERROR:Invalid Response <br/>'.$result;
                            }
                        }
                }
                //close curl connection
                curl_close($ch);
            } catch (Exception $e) {
                $success = false;
                $error = 'Request to Razorpay Failed';
            }
            
            if ($success === true) {
                $this->membership->subscribe($this->input->post());
                $this->emails->subscription_email($this->input->post());
                
                // Orderdata Save To DB
                $this->logics->order($this->input->post());
                $this->emails->order_email($this->input->post());
                
                redirect($this->input->post('merchant_surl_id'));
            } else {
                redirect($this->input->post('merchant_furl_id'));
                // print($response_array);
            }
        } else {
            echo 'An error occured. Contact site administrator, please!';
        }
    } 
    public function success() {
        $data['title'] = 'Transaction Success';
        echo 'Your transaction has been successful check your email. Redirecting to home page...';
        ?>
        <script>
            setTimeout(function(){ window.location = '<?=base_url()?>' }, 5000);
        </script>
        <?php
    }  
    public function failed() {
        $data['title'] = 'Transaction Failed'; 
        echo 'Your transaction has been failed.';
        echo '<a href="'.base_url('our-plans').'">Retry</a> | ';
        echo '<a href="'.base_url().'">Home</a>';
    }
    
    function order_now($id)
    {
        $data = array(
            'title' => 'Order Now',
            'product_id' => $id
        );
        
        $this->load->view('includes/header',$data);
        $this->load->view('templates/navbar',$data);
        $this->load->view('pages/order',$data);
        $this->load->view('templates/widgets',$data);
        $this->load->view('includes/footer',$data);
    }
    
    function purchase_product()
    {
        $data = $this->input->post();
        $data['title']              = 'Checkout';  
        $data['callback_url']       = base_url().'razorpay/callback';
        $data['surl']               = base_url().'razorpay/success';;
        $data['furl']               = base_url().'razorpay/failed';;
        $data['currency_code']      = 'INR';
        $data['description']        = $data['package'];
        $this->load->view('pages/order-now', $data);
    }
}