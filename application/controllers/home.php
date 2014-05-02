<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

  function __construct()
  {
    parent::__construct();
	$this->load->model('user','',TRUE);
  }

  function index()
  {
    if($this->session->userdata('logged_in'))
    {
		$this->profile();
	  
    }
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  }
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('login', 'refresh');
  }
  
  function profile($action=0){
	  
	  if($action=== 'edit'){
		  $user= $this->user->getUser();
		  if($user){  
    		$this->load->helper('form');
		  	$this->load->template('profile_edit_view',$user);
		  }
		  else
		  	show_404();
		return false;
	  }
	  if($action ==="save"){
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="error">','</p>');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean|max_length[50]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|xss_clean|max_length[50]');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|xss_clean|valid_email|max_length[128]|callback__check_email');
		$this->form_validation->set_rules('cell', 'Phone No', 'trim|xss_clean|max_length[13]|callback__check_phone');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required|xss_clean|callback__check_gender');
		$this->form_validation->set_rules('college', 'College Name', 'trim|required|xss_clean|max_length[128]');
		$this->form_validation->set_rules('batch', 'Batch', 'trim|required|xss_clean|max_length[4]');
		$this->form_validation->set_rules('branch', 'Branch', 'trim|required|xss_clean|max_length[30]');
		$this->form_validation->set_rules('accomodation', 'Accomodation', 'trim|xss_clean|callback__check_accomodation');
		
		if($this->form_validation->run() == FALSE)
		{
		  //Field validation failed.  User redirected to login page
		  $this->load->template('profile_edit_view');
		}
		else
		{
			$data = array(
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
			$this->user->update($data);
			//print_r($data);
			
			//redirect('login','refresh');
		}
		return false;
	  }
	  
	if($this->session->userdata('logged_in'))
    {
		$user = $this->user->getUser();
		$this->load->template('profile_view', $user);
	  
    }
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
	  
  }


}

?>