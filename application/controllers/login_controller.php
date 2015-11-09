<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function index()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		echo json_encode($username);
	}

}

/* End of file login_controller.php */
/* Location: ./application/controllers/login_controller.php */