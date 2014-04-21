<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

  function __construct()
  {
    parent::__construct();
	$this->load->model('user','',TRUE);
  }

  function index()
  {
	if($this->session->userdata('logged_in')){
		//$this->user->getUser();
		redirect('home','refresh');
	}
	  
    $this->load->helper('form');
    $this->load->view('register_view');
  }
  
  function validate()
  {
    //This method will have the credentials validation
    $this->load->library('form_validation');
	$this->form_validation->set_error_delimiters('<span class="error">','</span>');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|callback_check_username');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
    $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|xss_clean');
    $this->form_validation->set_rules('email', 'Email ID', 'trim|required|xss_clean|valid_email|check_email');
    $this->form_validation->set_rules('cell', 'Phone No', 'trim|xss_clean|callback_check_phone');
    $this->form_validation->set_rules('gender', 'gender', 'trim|required|xss_clean');
    $this->form_validation->set_rules('college', 'Password', 'trim|required|xss_clean');
    $this->form_validation->set_rules('batch', 'Password', 'trim|required|xss_clean');
    $this->form_validation->set_rules('branch', 'Password', 'trim|required|xss_clean');
    $this->form_validation->set_rules('accomodation', 'Password', 'trim|required|xss_clean');
	
    if($this->form_validation->run() == FALSE)
    {
      //Field validation failed.  User redirected to login page
      $this->load->view('register_view');
    }
    else
    {
      //Go to private area
      redirect('home', 'refresh');
    }
    
  }
  
  function check_username($username)
  {
    //Field validation succeeded.  Validate against database
    $username = $this->input->post('username');
    
    //query the database
    $result = $this->db->get_where('users',array('username'=> $username));
    
    if($result-> num_rows() == 1)
    {
		$this->form_validation->set_message('check_username', 'UserName not available');
        return FALSE;
    }
    else
    {
		$this->form_validation->set_message('check_username', 'UserName is available');
      	return TRUE;
    }
  }
  
  function check_email($email)
  {
    //Field validation succeeded.  Validate against database
    $email = $this->input->post('email');
    
    //query the database
    $result = $this->db->get_where('users',array('username'=> $email));
    
    if($result-> num_rows() == 1)
    {
		$this->form_validation->set_message('check_email', 'Email ID already in use');
        return FALSE;
    }
    else
    {
		$this->form_validation->set_message('check_email', 'Email ID Accepted');
      	return TRUE;
    }
  }
  
	public function check_phone($phone)
	{
		if($phone==""){
			return true;
		}
		
		if(preg_match('/^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$/',$phone))
		{
			return true;
		} else {
			$this->form_validation->set_message('check_phone', '%s '.$phone.' is invalid format, Enter in 10 digit format');
			return false;
		}
	}

}

?>