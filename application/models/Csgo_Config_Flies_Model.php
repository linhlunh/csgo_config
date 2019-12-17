<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Csgo_Config_Flies_Model extends CI_Model
{
    function __construct(){
        parent::__construct();	
		$this->load->database();
	}

    function get_all_file()
    {
        $this->db->select();

        $this->db->where('deleted !=', DELETED);

        $query = $this->db->get('csgo_config_flies');

        $reusult = $query->result_array();

        return $reusult;
    }

    function update_file($file)
    {

    }

    function delete_file($id)
    {
        $this->db->where('id', $id);
        $this->db->update('csgo_config_flies', array('deleted' => DELETED));
        return $this->db->affected_rows();
    }
}
?>