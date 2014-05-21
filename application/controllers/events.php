<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Events extends CI_Controller {

	private	$r = "";
  function __construct()
  {
    parent::__construct();
	$this->load->model('event','',TRUE);
	$this->load->model('user');
	if(isset($_GET['r']))
		$this->r=$_GET['r'];
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
				  if($this->r!='home')
				  	redirect("/events/".$event['category']."/".$event['event_id']);
				  else				  	
				  	redirect("/home");
				  $this->load->template('message_view',array('message'=>'You have been registered!'));
			  }
			  else if($register==="unregister"){ // if user wants to unregister for that event
				  $this->event->unregister($eventid);
				  if($this->r!='home')
				  	redirect("/events/".$event['category']."/".$event['event_id']);
				  else				  	
				  	redirect("/home");
				  $this->load->template('message_view',array('message'=>'You have been unregistered. If you want to register again, go back and click register'));				  
			  }
			  else if($register==="ajax"){
				  $this->load->view('events/'.$event['view_name'],array(
				  	'event'=>$event,
					'isRegistered'=>$this->user->isRegistered($event['event_id']),
					'username' => $this -> user ->getUsername()
				));
			  }
			  else{
				  $this->load->template('events/'.$event['view_name'],array(
				  	'event'=>$event,
					'isRegistered'=>$this->user->isRegistered($event['event_id']),
					'username' => $this -> user ->getUsername()
				));
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
				  if($this->r!='home')
				  	redirect("/events/".$event['category']."/".$event['event_id']);
				  else				  	
				  	redirect("/home");
				  $this->load->template('message_view',array('message'=>'You have been registered!'));
			  }
			  else if($register==="unregister"){ // if user wants to unregister for that event
				  $this->event->unregister($eventid);
				  if($this->r!='home')
				  	redirect("/events/".$event['category']."/".$event['event_id']);
				  else				  	
				  	redirect("/home");
				  $this->load->template('message_view',array('message'=>'You have been unregistered. If you want to register again, go back and click register'));				  
			  }
			  else if($register==="ajax"){
				  $this->load->view('events/'.$event['view_name'],array(
				  	'event'=>$event,
					'isRegistered'=>$this->user->isRegistered($event['event_id']),
					'username' => $this -> user ->getUsername()
				));
			  }
			  else{
				  $this->load->template('events/'.$event['view_name'],array(
				  	'event'=>$event,
					'isRegistered'=>$this->user->isRegistered($event['event_id']),
					'username' => $this -> user ->getUsername()
				));
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
				  if($this->r!='home')
				  	redirect("/events/".$event['category']."/".$event['event_id']);
				  else				  	
				  	redirect("/home");
				  $this->load->template('message_view',array('message'=>'You have been registered!'));
			  }
			  else if($register==="unregister"){ // if user wants to unregister for that event
				  $this->event->unregister($eventid);
				  if($this->r!='home')
				  	redirect("/events/".$event['category']."/".$event['event_id']);
				  else				  	
				  	redirect("/home");
				  $this->load->template('message_view',array('message'=>'You have been unregistered. If you want to register again, go back and click register'));				  
			  }
			  else if($register==="ajax"){
				  $this->load->view('events/'.$event['view_name'],array(
				  	'event'=>$event,
					'isRegistered'=>$this->user->isRegistered($event['event_id']),
					'username' => $this -> user ->getUsername()
				));
			  }
			  else{
				  $this->load->template('events/'.$event['view_name'],array(
				  	'event'=>$event,
					'isRegistered'=>$this->user->isRegistered($event['event_id']),
					'username' => $this -> user ->getUsername()
				));
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
				  if($this->r!='home')
				  	redirect("/events/".$event['category']."/".$event['event_id']);
				  else				  	
				  	redirect("/home");
				  $this->load->template('message_view',array('message'=>'You have been registered!'));
			  }
			  else if($register==="unregister"){ // if user wants to unregister for that event
				  $this->event->unregister($eventid);
				  if($this->r!='home')
				  	redirect("/events/".$event['category']."/".$event['event_id']);
				  else				  	
				  	redirect("/home");
				  $this->load->template('message_view',array('message'=>'You have been unregistered. If you want to register again, go back and click register'));				  
			  }
			  else if($register==="ajax"){
				  $this->load->view('events/'.$event['view_name'],array(
				  	'event'=>$event,
					'isRegistered'=>$this->user->isRegistered($event['event_id']),
					'username' => $this -> user ->getUsername()
				));
			  }
			  else{
				  $this->load->template('events/'.$event['view_name'],array(
				  	'event'=>$event,
					'isRegistered'=>$this->user->isRegistered($event['event_id']),
					'username' => $this -> user ->getUsername()
				));
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
				  if($this->r!='home')
				  	redirect("/events/".$event['category']."/".$event['event_id']);
				  else				  	
				  	redirect("/home");
				  $this->load->template('message_view',array('message'=>'You have been registered!'));
			  }
			  else if($register==="unregister"){ // if user wants to unregister for that event
				  $this->event->unregister($eventid);
				  if($this->r!='home')
				  	redirect("/events/".$event['category']."/".$event['event_id']);
				  else				  	
				  	redirect("/home");
				  $this->load->template('message_view',array('message'=>'You have been unregistered. If you want to register again, go back and click register'));				  
			  }
			  else if($register==="ajax"){
				  $this->load->view('events/'.$event['view_name'],array(
				  	'event'=>$event,
					'isRegistered'=>$this->user->isRegistered($event['event_id']),
					'username' => $this -> user ->getUsername()
				));
			  }
			  else{
				  $this->load->template('events/'.$event['view_name'],array(
				  	'event'=>$event,
					'isRegistered'=>$this->user->isRegistered($event['event_id']),
					'username' => $this -> user ->getUsername()
				));
			  }
		  }
		  else{
			  show_404();
		  }
	  }
  }
  
  function crossfire($eventid=0,$register=0){
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
				  if($this->r!='home')
				  	redirect("/events/".$event['category']."/".$event['event_id']);
				  else				  	
				  	redirect("/home");
				  $this->load->template('message_view',array('message'=>'You have been registered!'));
			  }
			  else if($register==="unregister"){ // if user wants to unregister for that event
				  $this->event->unregister($eventid);
				  if($this->r!='home')
				  	redirect("/events/".$event['category']."/".$event['event_id']);
				  else				  	
				  	redirect("/home");
				  $this->load->template('message_view',array('message'=>'You have been unregistered. If you want to register again, go back and click register'));				  
			  }
			  else if($register==="ajax"){
				  $this->load->view('events/'.$event['view_name'],array(
				  	'event'=>$event,
					'isRegistered'=>$this->user->isRegistered($event['event_id']),
					'username' => $this -> user ->getUsername()
				));
			  }
			  else{
				  $this->load->template('events/'.$event['view_name'],array(
				  	'event'=>$event,
					'isRegistered'=>$this->user->isRegistered($event['event_id']),
					'username' => $this -> user ->getUsername()
				));
			  }
		  }
		  else{
			  show_404();
		  }
	  }
  }  
  function technofun($eventid=0,$register=0){
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
				  if($this->r!='home')
				  	redirect("/events/".$event['category']."/".$event['event_id']);
				  else				  	
				  	redirect("/home");
				  $this->load->template('message_view',array('message'=>'You have been registered!'));
			  }
			  else if($register==="unregister"){ // if user wants to unregister for that event
				  $this->event->unregister($eventid);
				  if($this->r!='home')
				  	redirect("/events/".$event['category']."/".$event['event_id']);
				  else				  	
				  	redirect("/home");
				  $this->load->template('message_view',array('message'=>'You have been unregistered. If you want to register again, go back and click register'));				  
			  }
			  else if($register==="ajax"){
				  $this->load->view('events/'.$event['view_name'],array(
				  	'event'=>$event,
					'isRegistered'=>$this->user->isRegistered($event['event_id']),
					'username' => $this -> user ->getUsername()
				));
			  }
			  else{
				  $this->load->template('events/'.$event['view_name'],array(
				  	'event'=>$event,
					'isRegistered'=>$this->user->isRegistered($event['event_id']),
					'username' => $this -> user ->getUsername()
				));
			  }
		  }
		  else{
			  show_404();
		  }
	  }
  }
}


?>