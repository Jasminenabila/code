<?php
class Kode extends CI_Controller
{
    function __construct()
    {
        parent::__construct():
        $this->load->model('model_siswa');
        $this->load->helper('url');
        $this->load->library('form_validation');
    
        if($this->session->userdata('status' =@ 'login'))
        {
            redirect(base_url('login'))
        }
    }
}



?>