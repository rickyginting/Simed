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
						<div class="col">
							<div class="d-flex justify-content-between">
								<div>
									<h1 class="m-0 text-dark"><?=$segment?></h1>
								</div>
								<div>
									<button type="button" class="btn btn-primary" data-toggle="modal"
										data-target="#exampleModal">
										Tambah Data
									</button>
								</div>

							</div>
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
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th>#</th>
													<th>Nama</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php $no = 1;foreach ($query as $i) {?>
												<tr>
													<td><?=$no;?></td>
													<td><?=$i->pernikahan;?></td>
													<td>
														<div class="dropdown open">
															<a class="btn btn-info dropdown-toggle" type="button"
																id="triggerId" data-toggle="dropdown"
																aria-haspopup="true" aria-expanded="false">
																Aksi</a>
															<div class="dropdown-menu" aria-labelledby="triggerId">
																<a class="dropdown-item"
																	href="<?=base_url('form/pernikahanupdate/' . $i->pernikahan_id)?>">Update
																	Data</a>
																<a class="dropdown-item"
																	href="<?=base_url('form/pernikahanhapus/' . $i->pernikahan_id)?>">Hapus
																	Data</a>
															</div>
														</div>
													</td>
												</tr>
												<?php $no++;}?>
											</tbody>
											<tfoot>
												<tr>
													<th>#</th>
													<th>Nama</th>
													<th>Aksi</th>
												</tr>
											</tfoot>

										</table>
										"Jangan Menghapus Data Jika Telah Digunakan Untuk Input Data Pasien"
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
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><?=$segment;?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?=form_open('form/addpernikahan');?>
					<div class="modal-body">

						<div class="form-group">
							<label>Tipe Pernikahan</label>
							<input type="text" class="form-control" name="pernikahan" required>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>
