<?php
Class Event extends CI_Model
{	
	public $tlEvents = array(
		'technophoria'	=>	'Technophoria',
		'preciphers'	=>	'Preciphers',
		'creatives'		=>	'Creatives',
		'autodrift'		=>	'Autodrift',
		'robonoid'		=>	'Robonoid'
	);
	// use array_key_exists($key,$array)
	function getEvent($category,$event_id){
		$query=$this->db->get_where('events',array(
			'event_id'=> $event_id,
			'category'=> $category
		));
		$data= array();
		$result = $query->result();
		foreach( $result as $row){
			$data = array(
				'name' => $row->name,
				'event_id'=> $event_id, 
				'view_name' => $row->view_name,
				'time' => strtotime($row->time),
				'category' => $row->category
			);
		}
		return $data;
	}
	
	function categoryExists($parent){
		if(array_key_exists($parent,$this->tlEvents))
			return true;
		return false;
	}
	
	function getCategories(){
		return $this->tlEvents;
	}
	
	function getEvents($category){
		$query=$this->db->get_where('events',array('category'=> $category));
		$data= array();
		$result = $query->result();
		foreach( $result as $row){
			$data[] =array(
				'name' => $row->name,
				'event_id'=> $row->event_id, 
				'view_name' => $row->view_name,
				'time' => strtotime($row->time),
				'category' => $row->category
			);
		}
		return $data;
	}
	
	function register($eventid){		
		if($session_data = $this->session->userdata('logged_in')){
			
			$query= $this->db->get_where('events_registration',array(
				'username' => $session_data['username'],
				'event_id' =>$eventid
			));
			
			if($query->num_rows()==0)			
				$this->db->insert('events_registration',array(
					'username' => $session_data['username'],
					'event_id' =>$eventid
				));
		}		
	}
	
	function unregister($eventid){
		if($session_data = $this->session->userdata('logged_in')){
			$this->db->delete('events_registration',array(
				'username' => $session_data['username'],
				'event_id' =>$eventid
			));
		}		
	}
	
}
?>