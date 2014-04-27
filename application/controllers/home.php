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
		$user = $this->user->getUser();
      	//print_r($user);
		$this->load->template('home_view', $user);
	  
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
  
  function profile($action){
	  
  }


}

?>