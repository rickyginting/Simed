<?php
class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        ceklogin();
        $this->load->model('M_Data');
    }

    public function index()
    {
        return redirect('dashboard');
    }

    public function pasien()
    {
        $data = [
            'segment' => "Data Pasien",
            'query' => $this->M_Data->getPasien()->result(),
        ];

        $this->load->view('dashboard/pasien', $data);
    }

    public function addpasien()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'No Hp', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('dashboard/addpasien', [
                'segment' => "Tambah Pasien",
                'pernikahan' => $this->M_Data->getPernikahan(),
                'types' => $this->M_Data->getType(),
            ]);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'jk' => $this->input->post('jk'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat' => $this->input->post('alamat'),
                'nohp' => $this->input->post('nohp'),
                'pernikahan_id' => $this->input->post('pernikahan_id'),
                'pendidikan' => $this->input->post('pendidikan'),
                'client_id' => $this->input->post('client_id'),
            ];

            $this->db->insert('pasiens', $data);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            <h4 class="alert-heading"></h4>
            <p>Data pasien <b>' . $data['nama'] . '</b> berhasil di tambahkan ke database</p>
            <p class="mb-0"></p>
          </div>');

            return redirect('form/pasien');
        }

    }

    public function pasienupdate()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'No Hp', 'required');

        if ($this->form_validation->run() == false) {
            $id = $this->uri->segment(3);
            $cek = $this->db->get_where('pasiens', ['id' => $id]);
            if ($cek->num_rows() == 1) {
                $this->load->view('dashboard/updatepasien', [
                    'segment' => "Update Pasien",
                    'p' => $this->db->get_where('pasiens', ['id' => $id])->row_array(),
                    'pernikahan' => $this->M_Data->getPernikahan(),
                    'types' => $this->M_Data->getType(),
                ]);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
            <h4 class="alert-heading"></h4>
            <p>Pasein Tidak Ditemukan</p>
            <p class="mb-0"></p>
          </div>');
                // echo $cek->num_rows();
                return redirect('form/pasien');
            }
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'jk' => $this->input->post('jk'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat' => $this->input->post('alamat'),
                'nohp' => $this->input->post('nohp'),
                'pernikahan_id' => $this->input->post('pernikahan_id'),
                'pendidikan' => $this->input->post('pendidikan'),
                'client_id' => $this->input->post('client_id'),
            ];

            $this->db->update('pasiens', $data, ['id' => $this->input->post('id')]);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading"></h4>
                <p>Data pasien <b>' . $data['nama'] . '</b> berhasil di update ke database</p>
                <p class="mb-0"></p>
              </div>');

            return redirect('form/pasien');
        }
    }

    public function pasienhapus($id)
    {
        $pasien = $this->db->get_where('pasiens', ['id' => $id])->row_array();

        $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
            <h4 class="alert-heading"></h4>
            <p>Data pasien <b>' . $pasien['nama'] . '</b> berhasil di hapus dari database</p>
            <p class="mb-0"></p>
          </div>');

        $this->db->delete('pasiens', ['id' => $id]);

        return redirect('form/pasien');
    }

    public function pernikahan()
    {

        $data = [
            'segment' => "Data Pernikahan",
            'query' => $this->M_Data->getPernikahan(),
        ];

        $this->load->view('dashboard/pernikahan', $data);
    }

    public function addpernikahan()
    {
        $this->db->insert('pernikahan', [
            'pernikahan' => $this->input->post('pernikahan'),
        ]);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        <h4 class="alert-heading"></h4>
        <p>Data pernikahan berhasil di tambahkan ke database</p>
        <p class="mb-0"></p>
      </div>');

        return redirect('form/pernikahan');
    }

    public function pernikahanupdate()
    {
        $this->form_validation->set_rules('pernikahan', 'Pernikahan', 'required');

        if ($this->form_validation->run() == false) {
            $pernikahan_id = $this->uri->segment(3);
            $cek = $this->db->get_where('pernikahan', ['pernikahan_id' => $pernikahan_id]);
            if ($cek->num_rows() == 1) {
                $this->load->view('dashboard/updatepernikahan', [
                    'segment' => "Update Pernikahan",
                    'p' => $this->db->get_where('pernikahan', ['pernikahan_id' => $pernikahan_id])->row_array(),
                ]);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
            <h4 class="alert-heading"></h4>
            <p>Data Tidak Ditemukan</p>
            <p class="mb-0"></p>
          </div>');
                // echo $cek->num_rows();
                return redirect('form/pernikahan');
            }
        } else {
            $data = [
                'pernikahan' => $this->input->post('pernikahan'),
            ];

            $this->db->update('pernikahan', $data, ['pernikahan_id' => $this->input->post('pernikahan_id')]);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading"></h4>
                <p>Data berhasil di update ke database</p>
                <p class="mb-0"></p>
              </div>');

            return redirect('form/pernikahan');
        }

    }

    public function pernikahanhapus($pernikahan_id)
    {

        $this->db->delete('pernikahan', ['pernikahan_id' => $pernikahan_id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        <h4 class="alert-heading"></h4>
        <p>Data pernikahan berhasil di hapus dari database</p>
        <p class="mb-0"></p>
      </div>');

        return redirect('form/pernikahan');

    }

    public function type()
    {
        $data = [
            'segment' => "Data Type Client",
            'query' => $this->M_Data->getType(),
        ];

        $this->load->view('dashboard/type', $data);
    }

    public function addtype()
    {
        $this->db->insert('types', [
            'typename' => $this->input->post('typename'),
        ]);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        <h4 class="alert-heading"></h4>
        <p>Data Type Client berhasil di tambahkan ke database</p>
        <p class="mb-0"></p>
      </div>');

        return redirect('form/type');
    }

    public function typeupdate()
    {
        $this->form_validation->set_rules('typename', 'Type Name', 'required');

        if ($this->form_validation->run() == false) {
            $client_id = $this->uri->segment(3);
            $cek = $this->db->get_where('types', ['client_id' => $client_id]);
            if ($cek->num_rows() == 1) {
                $this->load->view('dashboard/updatetype', [
                    'segment' => "Update Type Client",
                    'p' => $this->db->get_where('types', ['client_id' => $client_id])->row_array(),
                ]);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-info" role="alert">
            <h4 class="alert-heading"></h4>
            <p>Data Tidak Ditemukan</p>
            <p class="mb-0"></p>
          </div>');
                // echo $cek->num_rows();
                return redirect('form/type');
            }
        } else {
            $data = [
                'typename' => $this->input->post('typename'),
            ];

            $this->db->update('types', $data, ['client_id' => $this->input->post('client_id')]);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading"></h4>
                <p>Data berhasil di update ke database</p>
                <p class="mb-0"></p>
              </div>');

            return redirect('form/type');
        }

    }

    public function typehapus($client_id)
    {

        $this->db->delete('types', ['client_id' => $client_id]);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        <h4 class="alert-heading"></h4>
        <p>Data Type Client berhasil di hapus dari database</p>
        <p class="mb-0"></p>
      </div>');

        return redirect('form/type');

    }
}
