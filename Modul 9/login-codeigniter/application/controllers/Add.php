<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Add extends CI_Controller
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
        $this->load->view('add/index', $data);
    }

    public function tambah()
    {
        $artikel = $this->input->post('artikel');
        $username = $this->session->userdata('username');
        $role = 2;

        $data = array(
            'artikel' => $artikel,
            'username' => $username,
            'id_role' => $role
        );
        $this->db->insert('artikel', $data);
        redirect('usera');
    }

    public function add()
    {
        $artikel = $this->input->post('artikel');
        $username = $this->session->userdata('username');
        $role = 2;

        $data = array(
            'artikel' => $artikel,
            'username' => $username,
            'id_role' => $role
        );
        $this->db->insert('artikel', $data);
        redirect('usera');
    }
}
