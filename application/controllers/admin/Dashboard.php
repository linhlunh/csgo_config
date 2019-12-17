<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends LDC_Controller {

	function __construct()
	{
		parent:: __construct();

		$this->load->library('form_validation');

		$this->load->model('Csgo_Config_Flies_Model');
	}

	public function index()
	{
		$list_files = $this->Csgo_Config_Flies_Model->get_all_file();

		$view_data['list_files'] = $list_files;

		$this->load->view('admin/dashboard/template/dashboard', $view_data);
	}

	function delete_file($id)
	{
		$status = $this->Csgo_Config_Flies_Model->delete_file($id);

		if($status){
			$this->session->set_flashdata('message', 'Xóa thành công.');
		}else{
			$this->session->set_flashdata('message', 'Xóa thất bại.');
		}

		redirect('admin/dashboard');
	}
}
