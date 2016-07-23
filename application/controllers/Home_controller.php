<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->check_isvalidate();
	}

	public function index()
	{
		// If the user is validated, then this function will run
		echo 'Congratulations, you are logged in.';
	}

	private function check_isvalidated(){
		if(! $this->session->userdata('validated')){
			redirect('login');
		}
	}

}

/* End of file Home_controller.php */
/* Location: ./application/controllers/Home_controller.php */