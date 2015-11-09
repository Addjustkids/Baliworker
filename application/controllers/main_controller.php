<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {

	public function index()
	{
		$data['page']="page_main";
		$this->load->view('templates/header',$data);
		$this->load->view('modals/modal_login');
		$this->load->view('contents/body_main');
		$this->load->view('templates/footer',$data);
	}

	public function register()
	{
		$data['page']="page_register";
		$this->load->view('templates/header',$data);
		$this->load->view('modals/modal_login');
		$this->load->view('contents/body_register');
		$this->load->view('templates/footer',$data);
	}
}

/* End of file login_controller.php */
/* Location: ./application/controllers/login_controller.php */