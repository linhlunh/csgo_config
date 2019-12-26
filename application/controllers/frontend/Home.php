<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent:: __construct();

		$this->load->model('Csgo_Config_Flies_Model');
	}

	public function index()
	{
		$list_files = $this->Csgo_Config_Flies_Model->get_all_file();

		$view_data['list_files'] = $list_files;

		$this->load->view('frontend/home', $view_data);
	}
}
