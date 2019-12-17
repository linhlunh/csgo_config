<?php
class LDC_Controller extends CI_Controller{
    
    function __construct()
    {
        parent:: __construct();

        $this->load->library('session');

        $user = $this->session->userdata(LOGIN);
        
        if(empty($user)){
            redirect(site_url('admin/login'));
        }
    }
}
?>