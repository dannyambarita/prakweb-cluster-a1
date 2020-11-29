<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Usera extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get('user')->result_array();
        $role = 2;
        $name = $this->session->userdata('username');
        $data['artikel'] = $this->db->get_where('artikel', array('id_role' => $role, 'username' => $name))->result_array();
        $this->load->view('usera/index', $data);
    }

    function hapus($id)
    {
        $this->model_model->hapus_data($id);
        redirect('usera/index');
    }
}
