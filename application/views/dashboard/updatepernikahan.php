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
						<div class="col">
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title"><?=$segment?></h3>
								</div>
								<!-- /.card-header -->
								<!-- form start -->
								<?=form_open('form/pernikahanupdate')?>
									<div class="card-body">
										<div class="form-group">
											<label>Status Pernikahan</label>
											<input type="text" class="form-control" placeholder="Status Pernikahan"
                                                name="pernikahan" value="<?=$p['pernikahan'];?>" required autofocus>
                                                <input type="hidden" name="pernikahan_id" value="<?=$p['pernikahan_id'];?>">
										</div>

									</div>
									<!-- /.card-body -->

									<div class="card-footer">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
							</div>
						</div>
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
