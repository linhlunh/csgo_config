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
			$this->session->set_flashdata('error', 'Xóa thất bại.');
		}

		redirect('admin/dashboard');
	}

	function save_file()
	{
		$file = $_FILES['file_csgo'];

		$file_config = array(
			'name' => $file['name']
		);

		$file_type = explode('.', $file['name']);

		$file_type = end($file_type);

		if($file_type == 'cfg'){
			$id = $this->Csgo_Config_Flies_Model->save_file($file_config);

			move_uploaded_file($file['tmp_name'], 'storage/csgo_config_files/'.$file['name']);

			if(!empty($id)){
				$this->session->set_flashdata('message', 'Upload thành công.');
			}else{
				$this->session->set_flashdata('error', 'Upload thất bại.');
			}

		}else{
			$this->session->set_flashdata('error', 'File upload phải là .cfg');
		}
		redirect('admin/dashboard');
	}
}
