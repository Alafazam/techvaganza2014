<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Workshops extends CI_Controller {

  function __construct()
  {
    parent::__construct();
	$this->load->model('event','',TRUE);
  }
  
  function index(){
		$this->load->template('coming_soon_view');
  }
  
  function ajax(){
		$this->load->view('coming_soon_view');	 
  } 
  
}