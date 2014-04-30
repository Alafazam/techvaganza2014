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
		
		print_r($this->event->getCategories());
		//$this->load->template(EVENTVIEW,$data);
	 
  }
  
  function creatives($eventid=0,$register=0){
	  $name=__FUNCTION__;
	  
	  if(!$eventid){ 
		  // Print all the events
	  	print_r($this->event->getEvents($name));
	  }
	  else{
		  $event = $this->event->getEvent($name,$eventid);
		  $len =sizeof($event);
		  if($len){
			  
			  if($register==="register"){ // if user wants to register for that event
			  	echo 'registered';
				  $this->event->register($eventid);
			  }
			  else if($register==="unregister"){ // if user wants to unregister for that event
			  	echo 'unregistered';
				  $this->event->unregister($eventid);
			  }
			  
			  
			  print_r($event);
		  }
		  else{
			  show_404();
		  }
	  }
  } 
  
  function technophoria($eventid=0){
	  $name=__FUNCTION__;
	  if(!$eventid){ 
		  // Print all the events
	  	print_r($this->event->getEvents($name));
	  }
	  else{
		  $event = $this->event->getEvent($name,$eventid);
		  $len =sizeof($event);
		  if($len){
			  print_r($event);
		  }
		  else{
			  show_404();
		  }
	  }
  } 
  
  function preciphers($eventid=0){
	  $name=__FUNCTION__;
	  if(!$eventid){ 
		  // Print all the events
	  	print_r($this->event->getEvents($name));
	  }
	  else{
		  $event = $this->event->getEvent($name,$eventid);
		  $len =sizeof($event);
		  if($len){
			  print_r($event);
		  }
		  else{
			  show_404();
		  }
	  }
  } 
  
  function autodrift($eventid=0){
	  $name=__FUNCTION__;
	  if(!$eventid){ 
		  // Print all the events
	  	print_r($this->event->getEvents($name));
	  }
	  else{
		  $event = $this->event->getEvent($name,$eventid);
		  $len =sizeof($event);
		  if($len){
			  print_r($event);
		  }
		  else{
			  show_404();
		  }
	  }
  } 
  
  function robonoid($eventid=0){
	  $name=__FUNCTION__;
	  if(!$eventid){ 
		  // Print all the events
	  	print_r($this->event->getEvents($name));
	  }
	  else{
		  $event = $this->event->getEvent($name,$eventid);
		  $len =sizeof($event);
		  if($len){
			  print_r($event);
		  }
		  else{
			  show_404();
		  }
	  }
  } 
}

?>