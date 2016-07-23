<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('login', $data);
	}

	public function process(){
		// Load the model
		$this->load->model('login_model');
		// Authenticate the user
		$result =  $this->login_model->validate();
		if (! $result){
			// If user is not athenticate reload the login view
			$msg = '<font color=red>Invalid username and/or password.</font>';
			$this->index($msg);
		}else{
			// if user is authenitcated 
			// redirecting to home view
			$this->load->view('home');
		}
	}
}

/* End of file Login_controller.php */
/* Location: ./application/controllers/Login_controller.php */