<?php
Class User extends CI_Model
{	
	function updateUser($data){
		if($session_data = $this->session->userdata('logged_in')){
			try{
				$this->db->where('username', $session_data['username']);
				$this->db->update('users', $data); 
			}
			catch(Exception $e){
				// TODO : Display error message
			}
		}
	}
	
	function getUser(){
		if($session_data = $this->session->userdata('logged_in')){
			$query=$this->db->get_where('users',array('username'=> $session_data['username']));
			return $query;
		}
		else
			return FALSE;
	}
	
	function isLoggedIn(){
		if($session_data = $this->session->userdata('logged_in')){
			return TRUE;
		}
		return false;
	}
	
	
	function login($username, $password)
	{
		$query=$this -> db ->get_where('users', array('username'=>$username,'password'=>MD5($password))); // TODO : Optimize this query

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
	
	function register($data){
		
	}
}
?>