<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        ceklogin();
        $this->load->model('M_Data');
    }

    public function index()
    {
        $this->load->view('dashboard/index', [
            'segment' => "Dashboard",
            'countType' => $this->M_Data->countType(),
            'countPasien' => $this->M_Data->countPasien()]);
    }

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
