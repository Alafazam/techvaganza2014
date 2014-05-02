<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
	
	if ( $this->input->post( 'remember' ) ) {  // improvement needed
		$this->session->sess_expire_on_close = FALSE;
    	$this->session->sess_update(); // implementation of remember me feature 
	}
    if($this->session->userdata('logged_in')){
		redirect('home','refresh');
	}
	
	$this->load->model('user','',TRUE);
	$this->load->library('UserAgent');
	
  }

  function index()
  {	  
    $this->load->helper('form');
	$this->load->helper('date');
	
	if($this->useragent->isOpera()){
		$this->load->opera('login_view');
		return false;	
	}
	
	$this->load->template('login_view');
  }
  
  function password(){
	  	  
	  if($this->input->post('email')!=''){ // if user already entered email
		  
		  //get email from form
		  $email = $this->input->post('email');
		  $username = "";
		  // validate if it exists in our record
		  $this->db->select('username');
		  $this->db->where(array('email'=>$email));
		  $this->db->limit(1);
		  $query = $this->db->get('users');
		  $result = $query->result();
		  
		  if($query-> num_rows() == 1){ //if user exists
			  foreach($result as $row)
			  {
				$username = $row->username;
			  }
			  $this->load->library('email');
			  $this->email->from('no-reply@techvaganza.org', 'Techvaganza');
			  $this->email->to($email);			  
			  $this->email->subject('Password Reset e-mail');			  
			  
			  $v_id= md5($username.time()."reset"); //reset hash
			  $this->db->select('email');
			  $this->db->where(array('email'=>$email));
		  	  $this->db->limit(1);
			  $query = $this->db->get('pwd_reset');
			  
			  if($query-> num_rows() == 1){  // if pwd reset already requested
				  $this->db->update('pwd_reset',array(
					  'username'=>$username,
					  'v_id' => $v_id,
					  'email'=> $email			  
				  ));				  				  
			  }
			  else{  // if pwd reset not requested
				  $this->db->insert('pwd_reset',array(
					  'username'=>$username,
					  'v_id' => $v_id,
					  'email'=> $email			  
				  ));
			  }
			  
			  
			  $this->email->message("Please Click the Link below to reset your password
				  <a href='".base_url("login/reset/".
									  $username."/".$v_id)."'>".
									  base_url("login/reset/".$username."/".$v_id)."</a>");				  
			  $this->email->send();	
			  
			  
	  		  $this->load->template('password_reset',array(
			  	'message'=>'Password Reset email has been sent to '.$email
			  )); // Display pwd reset form	  
		  }
		  else{
			  $this->load->template('password_reset',array(
			  	'message'=>$email.' does not exist in our database. You may register first.'
			  )); // TODO show user a way to create account	  
		  }
	  }
	  else{ // if user entered email
		  $this->load->template('password_reset',array('message'=>""));
	  }
  }
  
  function reset($username=0,$v_id=0){
	  $query=$this->db->select('username')
					->where(array('username'=>$username, 'v_id'=>$v_id))
					->limit(1)
					->get('pwd_reset');
		if(!$query->num_rows()){
			$this->load->template('message_view',array(
			'message'=>"<p class='clearfix'>Link Might have Expired...</p>".
						"<p class='clearfix'><a href='/login'><input type='submit' value='Sign In'></a></p>"
		));
			return false;
		}
	  
	$this->load->library('form_validation');
	$this->form_validation->set_error_delimiters('<span class="error">','</span>');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[6]|md5');
	$this->form_validation->set_rules('c_password', 'Password Confirmation', 'trim|xss_clean|matches[password]');
	 if($this->form_validation->run() == FALSE){
		//Field validation failed.
		$this->load->template('pwd_reset');
	}
	else{
		$this->user->resetPassword($username,$this->input->post('password'));
		$this->load->template('message_view',array(
			'message'=>"Your password has Been reset, Please visit ".
			"<a href='/login'>here</a> to continue..."
		));
	}
  }
  
  
  function verify()
  {
    //This method will have the credentials validation
    $this->load->library('form_validation');

    $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|strtolower');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|md5|callback__check_database');
	
    if($this->form_validation->run() == FALSE)
    {

      //Field validation failed.  User redirected to login page
      $this->load->template('login_view');
    }
    else
    {
      //Go to private area
      redirect('home', 'refresh');
    }
    
  }
  
  function _check_database($password)
  {
    //Field validation succeeded.  Validate against database
    $username = $this->input->post('username');
	
	$query = $this->db	->select('username')
						->where(array('username'=>$username))
						->get('verification_queue');
						
	if($query->num_rows()>=1){
      $this->form_validation->set_message('_check_database', 'Verify you email Before Login');
      return false;		
	}
	
    //query the database
    $result = $this->user->login($username, $password);
    
    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array(
          'id' => $row->id,
          'username' => $row->username
        );
        $this->session->set_userdata('logged_in', $sess_array);
      }
      return TRUE;
    }
    else
    {
      $this->form_validation->set_message('_check_database', 'Invalid username or password');
      return false;
    }
  }
  
  
   function _check_email($email)
  {
    //Field validation succeeded.  Validate against database
    $email = $this->input->post('email');
    
    //query the database
    $result = $this->db->get_where('users',array('email'=> $email));
    
    if($result-> num_rows() == 1)
    {
		$this->form_validation->set_message('_check_email', 'Email ID already in use');
        return FALSE;
    }
    else
    {
		$this->form_validation->set_message('_check_email', 'Email ID Accepted');
      	return TRUE;
    }
  }
  
  


}

?>