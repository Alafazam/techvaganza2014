<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Aboutus extends CI_Controller {

  function __construct()
  {
    parent::__construct();  }
  
  function index(){
	  
	  	// print categories of all the events
		$this->load->template('about_us_view');
		//$this->load->template(EVENTVIEW,$data);
	 
  }
  function ajax(){
	  
	  	// print categories of all the events
		$this->load->view('about_us_view');
		//$this->load->template(EVENTVIEW,$data);
	 
  }
  
}


?>