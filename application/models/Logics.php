<?php 
class Logics extends CI_Model
{
  function get_product_details($slug='')
  {
    if($slug)
    {
      return $this->db->where('slug',$slug)->get('products')->row();
    }
    else
    {
      return $this->db->get('products')->result();
    }
  }
  
  function is_page_exists($slug='')
  {
      if($slug)
      {
          return $this->db->where('slug', $slug)->get('pages')->row();
      }
      else
      {
          return false;
      }
  }
  
  function is_product_exists($slug='')
  {
    if($slug)
    {
      return $this->db->where('slug',$slug)->get('products')->row();
    }
    else
    {
      return false;
    }
  }
  
  function order($data)
  {
      unset($data['merchant_surl_id']);
      unset($data['merchant_furl_id']);
      return $this->db->insert('order', $data);
      
  }
  
  function price_tags($data)
  {
      if($data)
      {
          return $this->db->where('product_id', $data)->get('price_tags')->result();
      }
      else{
          return false;
          
      }
  }
}
 