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
					<?php $this->load->view('dashboard/template/infobox')?>
					<!-- /.row -->
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Informasi Login</h5>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
											<table>
												<tr>
													<td>Nama : </td>
													<th><?=$this->session->userdata('nama');?></th>
												</tr>
												<tr>
													<td>Username : </td>
													<th><?=$this->session->userdata('username');?></th>
												</tr>

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
