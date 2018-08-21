<?php
class Admin extends CI_Controller{
    
    function __construct()
    {
      parent::__construct();
      $this->load->model('model_admin');
      $this->load->helper('url');
      $this->load->library('form_validation');
      if ($this->session->userdata('status') != 'login') {
          redirect(base_url('login'));
        }
      $this->load->view('header');
    }

    function index()
    {
      $data['admin'] = $this->model_admin->tampil_admin();
      $this->load->view('view_admin', $data);
    }

    function form_tambah()
     {
        $this->load->view('add_admin');
     }

  function action_tambah()
  {
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if ($this->form_validation->run() != FALSE)
    {
      $username     = $this->input->post('username');
      $password     = $this->input->post('password');
      $data = array(
        'username' => $username,
        'password' => $password
      );
      $this->model_admin->tambah_admin('admin', $data);
      redirect('admin/index');
    }
    else
    {
      $this->load->view('add_admin');
    }
  }

  function form_edit($id_admin)
  {
    $where = array('id_admin' => $id_admin);
    $data['admin'] = $this->model_admin->tampil_edit_admin('admin', $where);
    $this->load->view('edit_admin', $data);
  }

  function action_edit()
  {
    $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if ($this->form_validation->run() != FALSE)
    {
      $id_admin       = $this->input->post('id_admin');
      $username       = $this->input->post('username');
      $password       = $this->input->post('password');
      $data = array(
        'username' => $username,
        'password' => $password
      );
      $where = array('id_admin' => $id_admin);
      $this->model_admin->edit_admin('admin', $data, $where);
      redirect('admin/index');
    }
    else
    {
      $this->load->view('edit_admin');
    }
  }

  function action_hapus($id_admin)
  {
    $where = array('id_admin' => $id_admin);
    $this->model_admin->hapus_admin($where);
    redirect('admin/index');
  }
}

?>