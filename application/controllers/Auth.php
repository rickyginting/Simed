<?php
class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => "Silahkan Masukan Username Terlebih Dahulu",
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => "Silahkan Masukan Password Terlebih Dahulu",
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/index');
        } else {
            $this->__login();
        }

    }
    private function __login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $akun = $this->db->get_where('users', ['username' => $username])->row_array();
        if ($akun) {
            if ($akun['password'] == $password) {
                $data = [
                    'nama' => $akun['nama'],
                    'username' => $akun['username'],
                ];
                $this->session->set_userdata($data);
                return redirect('dashboard');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            <h4 class="alert-heading"></h4>
            <p>Password Salah</p>
            <p class="mb-0"></p>
            </div> ');
                return redirect('auth');
            }

        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            <h4 class="alert-heading"></h4>
            <p>Username Tidak Ditemukan</p>
            <p class="mb-0"></p>
            </div> ');
            return redirect('auth');
        }

    }

    public function logout()
    {
        $this->session->unset_userdata([
            'username', 'nama',
        ]);

        $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
            <h4 class="alert-heading"></h4>
            <p>Logout Succes</p>
            <p class="mb-0"></p>
            </div> ');
        return redirect('auth');
    }
}
