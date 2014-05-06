<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contacts extends CI_Controller {

  function __construct()
  {
    parent::__construct();
	$this->load->model('event','',TRUE);
  }
  
  function index(){
	  	// print categories of all the events
		$this->load->template('contacts_view');
		//$this->load->template(EVENTVIEW,$data);
	 
  }
  
  function ajax(){
	  	// print categories of all the events
		$this->load->view('contacts_view');
		//$this->load->template(EVENTVIEW,$data);
	 
  }
}


?>