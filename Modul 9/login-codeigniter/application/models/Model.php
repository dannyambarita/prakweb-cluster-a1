<?php

class Model extends CI_Model
{

    public function getUsername($username)
    {
        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        return $user;
        if ($user) {
            if ($user['active'] == 1) {
                $data = [
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('user');
                } else {
                    $this->load->view('coba/index');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="center col-lg-13 alert alert-danger "role="alert">Your Password is wrong</div>'
                );
                redirect('login');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="center col-lg-13 alert alert-danger "role="alert">Your Email is not registered. why dont you create one?</div>'
            );
            redirect('login');
        }
    }

    public function isLoginSessionExpired()
    {
        $login_session_duration = 10000;
        $current_time = time();
        if (isset($_SESSION['loggedin_time']) and isset($_SESSION['username'])) {
            if ((time() - $this->session->userdata('loggedin_time')) > $login_session_duration) {
                return true;
            }
        }
        return false;
    }

    public function data_artikel()
    {
        return $this->db->get('artikel')->result_array();
        return $this->db->get_where('artikel', 'id' > 0)->result_array();
    }

    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('artikel');
    }

    public function input_data($data, $table)
    {
        return $this->db->insert($table, $data);
    }
}
