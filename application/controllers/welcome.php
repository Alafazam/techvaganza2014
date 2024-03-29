
<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user', '', TRUE);
		$this->load->helper('url');
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $username = $this->user->getUsername();
            //print_r($user);
			$user =array();
			$user['username'] = $username;
			$user['home'] = 'yes';
			
            $this->load->template('welcome_view', $user);

        } else {
            $user = array('home' =>'yes');
            //$user->first_name = 'Guest';
            //If no session, redirect to login page
            $this->load->template('welcome_view', $user);
        }
    }


  function ajax(){
            $this->load->view('welcome_view');
  }
    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login', 'refresh');
    }

}

// function ajax($eventid = 0) {
//     $name = __FUNCTION__;
//     if (!$eventid) {
//         // Print all the events
//         print_r($this->event->getEvents($name));
//     } else {
//         $event = $this->event->getEvent($name, $eventid);
//         $len = sizeof($event);
//         if ($len) {
//             print_r($event);
//         } else {
//             show_404();
//         }
//     }
// }


?>