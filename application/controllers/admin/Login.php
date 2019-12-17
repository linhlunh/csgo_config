<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent:: __construct();

		$this->load->library('form_validation');

		$this->load->model('Login_Model');
	}

	public function index()
	{
		$action = $this->input->post('action');
		
		if($action == 'save'){

			$data_submit = $this->input->post();
			
			$username = $data_submit['username'];

			$password = $data_submit['password'];

			$user = $this->Login_Model->get_user_by_username($username);

			if(password_verify($password, $user['password']))
			{
				//dung
			}else{
				echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng!")</script>';
			}
		}
		$this->load->view('admin/login');

	}
}
