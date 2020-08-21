<?php $this->load->view('dashboard/template/head');?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">
		<?php $this->load->view('dashboard/template/navbar');?>
		<!-- Main Sidebar Container -->
		<?php $this->load->view('dashboard/template/sidebar');?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark"><?=$segment?></h1>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<?php //$this->load->view('dashboard/template/infobox')?>
					<!-- /.row -->
					<div class="row">
						<div class="col-md-12">
<?php if ($this->session->flashdata('pesan')) {
    echo $this->session->flashdata('pesan');
}

?>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title"><?=$segment?></h5>
								</div>
                                <!-- /.card-header -->

								<div class="card-body">
									<div class="row">
										<table id="example1" class="table table-bordered table-striped">
											<thead>
												<tr>
													<th>Nama</th>
													<th>Nik</th>
													<th>Jenis Kelamin</th>
													<th>Pekerjaan</th>
                                                    <th>Alamat</th>
                                                    <th>No Hp</th>
                                                    <th>Status Pernikahan</th>
                                                    <th>Pendidikan</th>
                                                    <th>Type Client</th>
                                                    <th>Aksi</th>
												</tr>
											</thead>
											<tbody>
                                                <?php foreach ($query as $i) {?>
                                                    <tr>
                                                        <td><?=$i->nama;?></td>
                                                        <td><?=$i->nik;?></td>
                                                        <td>
                                                            <?php if ($i->jk == "L") {
    echo 'Laki Laki (' . $i->jk . ')';
} else {
    echo 'Perempuan (' . $i->jk . ')';
}
    ?>
                                                        </td>
                                                        <td><?=$i->pekerjaan;?></td>
                                                        <td><?=$i->alamat;?></td>
                                                        <td><?=$i->nohp;?></td>
                                                        <td><?=$i->pernikahan;?></td>
                                                        <td><?=$i->pendidikan;?></td>
                                                        <td><?=$i->typename;?></td>
                                                        <td>
                                                            <div class="dropdown open">
                                                                <a class="btn btn-info dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                            Aksi</a>
                                                                <div class="dropdown-menu" aria-labelledby="triggerId">
                                                                    <a class="dropdown-item" href="<?=base_url('form/pasienupdate/' . $i->id)?>">Update Data</a>
                                                                    <a class="dropdown-item" href="<?=base_url('form/pasienhapus/' . $i->id)?>">Hapus Data</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php }?>
											</tbody>
											<tfoot>
												<tr>
												    <th>Nama</th>
													<th>Nik</th>
													<th>Jenis Kelamin</th>
													<th>Pekerjaan</th>
                                                    <th>Alamat</th>
                                                    <th>No Hp</th>
                                                    <th>Status Pernikahan</th>
                                                    <th>Pendidikan</th>
                                                    <th>Type Client</th>
                                                    <th>Aksi</th>
												</tr>
											</tfoot>
										</table>
									</div>
									<!-- /.row -->
								</div>
								<!-- ./card-body -->
								<!-- /.card-footer -->
							</div>
							<!-- /.card -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!--/. container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->

		<!-- Main Footer -->
		<?=creditapp()?>
	</div>
	<!-- ./wrapper -->

	<?php $this->load->view('dashboard/template/js');?>
</body>

</html>
