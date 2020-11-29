<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get('user')->result_array();
        $role = $this->db->get_where('user', array('role' => '1'))->result_array();
        //$name = $this->db->get_where('user', 'name' == '1')->result_array();
        $data['artikel'] = $this->db->get('artikel')->result_array();
        $this->load->view('admin/index', $data);
    }
    function hapus($id)
    {
        $this->model_model->hapus_data($id);
        redirect('admin/index');
    }
}
