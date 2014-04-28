<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
	
	public $accomodation ;

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
    $this->load->template('register_view');
  }
  
  function verify($username,$v_id){
	  $r= $this->user->isNotVerified($username);
	  if($r){
		  if($r==$v_id){
			  $this->db->delete('verification_queue', array('username' => $username));
			  
			  echo "you have been verified, You may continue to login page";
		  }
		  else{
			  echo "Invalid Verification Code";
		  }
	  }
	  else{
		  echo "You have already been verified... Continue with login ";
	  }
  }
  
  function validate()
  {
    //This method will have the credentials validation
	//print($this->input->post('accomodation'));
	
    $this->load->library('form_validation');
	$this->form_validation->set_error_delimiters('<p class="error">','</p>');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|callback__check_username');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[6]|md5');
    $this->form_validation->set_rules('c_password', 'Password Confirmation', 'trim|xss_clean|matches[password]');
    $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|xss_clean');
    $this->form_validation->set_rules('email', 'Email ID', 'trim|required|xss_clean|valid_email|_check_email');
    $this->form_validation->set_rules('cell', 'Phone No', 'trim|xss_clean|callback__check_phone');
    $this->form_validation->set_rules('gender', 'Gender', 'trim|required|xss_clean|callback__check_gender');
    $this->form_validation->set_rules('college', 'College Name', 'trim|required|xss_clean');
    $this->form_validation->set_rules('batch', 'Batch', 'trim|required|xss_clean');
    $this->form_validation->set_rules('branch', 'Branch', 'trim|required|xss_clean');
    $this->form_validation->set_rules('accomodation', 'Accomodation', 'trim|xss_clean|callback__check_accomodation');
	
    if($this->form_validation->run() == FALSE)
    {
      //Field validation failed.  User redirected to login page
      $this->load->template('register_view');
    }
    else
    {
		$data = array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'email'=>$this->input->post('email'),
			'cell'=>$this->input->post('cell'),
			'gender'=>$this->input->post('gender'),
			'college'=>$this->input->post('college'),
			'batch'=>$this->input->post('batch'),
			'branch'=>$this->input->post('branch'),
			'accomodation'=>$this->accomodation,
		);
		$this->user->register($data);
      	//print_r($data);
		
		//redirect('login','refresh');
    }
    
  }
  
  function _check_username($username)
  {
    //Field validation succeeded.  Validate against database
    $username = $this->input->post('username');
    
	if(!preg_match('/^[a-z0-9_-]{3,15}$/',$username))
	{
		$this->form_validation->set_message('_check_username', 'UserName Must only contains small Alphabets, Numbers, Underscore and Hyphen');
        return false;
	}
	
    //query the database
    $result = $this->db->get_where('users',array('username'=> $username));
    
    if($result-> num_rows() == 1)
    {
		$this->form_validation->set_message('_check_username', 'UserName not available');
        return FALSE;
    }
    else
    {
		$this->form_validation->set_message('_check_username', 'UserName is available');
      	return TRUE;
    }
  }
  
  function _check_email($email)
  {
    //Field validation succeeded.  Validate against database
    $email = $this->input->post('email');
    
    //query the database
    $result = $this->db->get_where('users',array('email'=> $email));
    
    if($result-> num_rows() == 1)
    {
		$this->form_validation->set_message('_check_email', 'Email ID already in use');
        return FALSE;
    }
    else
    {
		$this->form_validation->set_message('_check_email', 'Email ID Accepted');
      	return TRUE;
    }
  }
  
	public function _check_phone($phone)
	{
		if($phone==""){
			return true;
		}
		
		if(preg_match('/^([0-9]( |-)?)?(\(?[0-9]{3}\)?|[0-9]{3})( |-)?([0-9]{3}( |-)?[0-9]{4}|[a-zA-Z0-9]{7})$/',$phone))
		{
			return true;
		} else {
			$this->form_validation->set_message('_check_phone', '%s '.$phone.' is invalid format, Enter in 10 digit format');
			return false;
		}
	}
	
	public function _check_accomodation($val){
		$text = 'y';
		if(strcmp($val,'y')==0){
			$this->accomodation= 'y';
		}
		else{
			$this->accomodation='n';
		}
	}
	
	public function _check_gender($val){
		$text = 'y';
		if($val=='Male' || $val=='Female'){
			return TRUE; // Fuck you
		}
		else{
			$this->form_validation->set_message('_check_gender', 'Please Don\'t take PANGA with Source Code');
			return false;
		}
	}

}

?>