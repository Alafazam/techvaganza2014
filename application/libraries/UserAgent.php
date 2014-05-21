<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class UserAgent{

	function isOpera(){
		/*
		 *	Checks weather the current browser is a target browser	
		 */
		
		$u_agent = $_SERVER['HTTP_USER_AGENT'];
		$list = array('Opera');
		
		foreach($list as $browser){
			if(preg_match('/'.$browser.'/i',$u_agent))
			{
				return true;
			}
		}
		return false;	
	}

}