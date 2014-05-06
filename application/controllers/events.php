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
		$this->load->template('events_view');
		//$this->load->template(EVENTVIEW,$data);
	 
  }
  


  function ajax($value='')
  {
  			$this->load->view('events_view');
  }

  function codeshode($eventid=0,$register=0){
	  $name=__FUNCTION__;
	  
	  if($eventid==='ajax'){ 
		  // Print all the events
	  	//print_r($this->event->getEvents($name));
		$events= $this->event->getEvents($name);
		
		$this->load->view('events_cat',array('events'=>$events));
	  }
	  else if($eventid===0){
		$events= $this->event->getEvents($name);
		
		$this->load->template('events_cat',array('events'=>$events));
	  }
	  else{
		  $event = $this->event->getEvent($name,$eventid);
		  $len =sizeof($event);
		  if($len){
			  
			  if($register==="register"){ // if user wants to register for that event
				  $this->event->register($eventid);
			  }
			  else if($register==="unregister"){ // if user wants to unregister for that event
				  $this->event->unregister($eventid);
			  }
			  else if($register==="ajax"){
				  $this->load->view('events/'.$event['view_name'],$event);
			  }
			  else{
				  $this->load->template('events/'.$event['view_name'],$event);
			  }
		  }
		  else{
			  show_404();
		  }
	  }
  } 
  
  function creatives($eventid=0,$register=0){
	  $name=__FUNCTION__;
	  
	  if($eventid==='ajax'){ 
		  // Print all the events
	  	//print_r($this->event->getEvents($name));
		$events= $this->event->getEvents($name);
		
		$this->load->view('events_cat',array('events'=>$events));
	  }
	  else if($eventid===0){
		$events= $this->event->getEvents($name);
		
		$this->load->template('events_cat',array('events'=>$events));
	  }
	  else{
		  $event = $this->event->getEvent($name,$eventid);
		  $len =sizeof($event);
		  if($len){
			  
			  if($register==="register"){ // if user wants to register for that event
				  $this->event->register($eventid);
			  }
			  else if($register==="unregister"){ // if user wants to unregister for that event
				  $this->event->unregister($eventid);
			  }
			  else if($register==="ajax"){
				  $this->load->view('events/'.$event['view_name'],$event);
			  }
			  else{
				  $this->load->template('events/'.$event['view_name'],$event);
			  }
		  }
		  else{
			  show_404();
		  }
	  }
  } 
  
  function builder($eventid=0,$register=0){
	 $name=__FUNCTION__;
	  
	  if($eventid==='ajax'){ 
		  // Print all the events
	  	//print_r($this->event->getEvents($name));
		$events= $this->event->getEvents($name);
		
		$this->load->view('events_cat',array('events'=>$events));
	  }
	  else if($eventid===0){
		$events= $this->event->getEvents($name);
		
		$this->load->template('events_cat',array('events'=>$events));
	  }
	  else{
		  $event = $this->event->getEvent($name,$eventid);
		  $len =sizeof($event);
		  if($len){
			  
			  if($register==="register"){ // if user wants to register for that event
				  $this->event->register($eventid);
			  }
			  else if($register==="unregister"){ // if user wants to unregister for that event
				  $this->event->unregister($eventid);
			  }
			  else if($register==="ajax"){
				  $this->load->view('events/'.$event['view_name'],$event);
			  }
			  else{
				  $this->load->template('events/'.$event['view_name'],$event);
			  }
		  }
		  else{
			  show_404();
		  }
	  }
  } 
  
  function fixerelixir($eventid=0,$register=0){
	 $name=__FUNCTION__;
	  
	  if($eventid==='ajax'){ 
		  // Print all the events
	  	//print_r($this->event->getEvents($name));
		$events= $this->event->getEvents($name);
		
		$this->load->view('events_cat',array('events'=>$events));
	  }
	  else if($eventid===0){
		$events= $this->event->getEvents($name);
		
		$this->load->template('events_cat',array('events'=>$events));
	  }
	  else{
		  $event = $this->event->getEvent($name,$eventid);
		  $len =sizeof($event);
		  if($len){
			  
			  if($register==="register"){ // if user wants to register for that event
				  $this->event->register($eventid);
			  }
			  else if($register==="unregister"){ // if user wants to unregister for that event
				  $this->event->unregister($eventid);
			  }
			  else if($register==="ajax"){
				  $this->load->view('events/'.$event['view_name'],$event);
			  }
			  else{
				  $this->load->template('events/'.$event['view_name'],$event);
			  }
		  }
		  else{
			  show_404();
		  }
	  }
  } 
  
  function robonoid($eventid=0,$register=0){
	  $name=__FUNCTION__;
	  
	  if($eventid==='ajax'){ 
		  // Print all the events
	  	//print_r($this->event->getEvents($name));
		$events= $this->event->getEvents($name);
		
		$this->load->view('events_cat',array('events'=>$events));
	  }
	  else if($eventid===0){
		$events= $this->event->getEvents($name);
		
		$this->load->template('events_cat',array('events'=>$events));
	  }
	  else{
		  $event = $this->event->getEvent($name,$eventid);
		  $len =sizeof($event);
		  if($len){
			  
			  if($register==="register"){ // if user wants to register for that event
				  $this->event->register($eventid);
			  }
			  else if($register==="unregister"){ // if user wants to unregister for that event
				  $this->event->unregister($eventid);
			  }
			  else if($register==="ajax"){
				  $this->load->view('events/'.$event['view_name'],$event);
			  }
			  else{
				  $this->load->template('events/'.$event['view_name'],$event);
			  }
		  }
		  else{
			  show_404();
		  }
	  }
  }

}


?>