<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
		$this->load->library('session');
		$this->load->model('tank_auth/users');
	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			//$data['user_id']	= $this->tank_auth->get_user_id();
			//$data['username']	= $this->tank_auth->get_username();
			$user_data = $this->users->get_user_by_id($this->tank_auth->get_user_id(),1);
			$data['firstname'] = $user_data->firstname;
			$data['lastname'] = $user_data->lastname;
			
			if( !$this->session->userdata('image') == '' ){
			$data['image'] = $this->session->userdata('image');
			}else{
			$data['image'] = '/images/blank_man.gif';
			}
			
			$this->load->view('welcome', $data);
			//echo $this->session->userdata('user_id');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */