<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Add2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get('user')->result_array();
        $role = 1;
        $name = $this->session->userdata('username');
        $data['artikel'] = $this->db->get_where('artikel', array('id_role' => $role, 'username' => $name))->result_array();
        $this->load->view('add2/index', $data);
    }

    public function tambah()
    {
        $artikel = $this->input->post('artikel');
        $username = $this->session->userdata('username');
        $role = 1;

        $data = array(
            'artikel' => $artikel,
            'username' => $username,
            'id_role' => $role
        );
        $this->db->insert('artikel', $data);
        redirect('admin');
    }
}
