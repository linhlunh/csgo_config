<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Model extends CI_Model
{
    function __construct(){
        parent::__construct();	
		$this->load->database();
	}
    function login_check($user)
    {
        $this->db->select('id');

        $this->db->where('username', $user['username']);

        $this->db->where('password', $user['password']);

        $result = $this->db->count_all_results('users');

        return $result;
    }

    function get_user_by_username($username)
    {
        $this->db->select();

        $this->db->where('username', $username);

        $query = $this->db->get('users');

        $result = $query->result_array();

        return !empty($result) ? $result[0] : '';
    }
}
?>