<?php
//Ambil Assets Css, Js dan Img
function asset($url)
{
    return base_url('assets/' . $url);
}

//Menampilkan Nama Aplikasi
function nameapp()
{
    return "SIMED";
}

//Menampilkan Title
function titleapp()
{
    return "Sistem Medis";
}

//Menmapilkan Credit
function creditapp()
{
    return '<footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="' . base_url() . '">W-Lab</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
    </div>
</footer>';
}

//LoginFilter
function ceklogin()
{
    $ci = get_instance();
    $users = $ci->session->userdata('username');
    if (!$users) {
        $ci->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">
		<h4 class="alert-heading"></h4>
		<p>Silahkan Login Dengan Akun Kamu</p>
		<p class="mb-0"></p>
	  </div>');
        return redirect('auth');
    }
}
