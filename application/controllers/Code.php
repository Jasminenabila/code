<?php
class Code extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_code');
        $this->load->helper('url');
        $this->load->library('form_validation');

        if($this->session->userdata('status' != 'login'))
        {
            redirect(base_url('login'));
        }
        $this->load->view('header');
    }

    function index()
    {
        
    }
}


?>