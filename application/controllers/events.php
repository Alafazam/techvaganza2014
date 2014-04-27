<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Events extends CI_Controller {

  function __construct()
  {
    parent::__construct();
	$this->load->model('event','',TRUE);
  }
  
  function index(){
	  
	  	// print categories of all the events
	 
  }
  
  function creatives($eventid=0){
	  $name=__FUNCTION__;
	  if(!$eventid){
		  // Print all the events
	  	print_r($this->event->getEvents($name));
	  }
	  else{
		  $event = $this->event->getEvent($eventid);
		  $len =sizeof($event);
		  echo $len;
		  if($len){
			  print_r($event);
		  }
		  else{
			  show_404();
		  }
	  }
  } 
  
  function technophoria(){
	  $name=__FUNCTION__;
	  
	  print_r($this->event->getEvents($name));
  } 
  
  function preciphers(){
	  $name=__FUNCTION__;
	  
	  print_r($this->event->getEvents($name));
  } 
  
  function autodrift(){
	  $name=__FUNCTION__;
	  
	  print_r($this->event->getEvents($name));
  } 
  
  function robonoid(){
	  $name=__FUNCTION__;
	  
	  print_r($this->event->getEvents($name));
  } 

}

?>