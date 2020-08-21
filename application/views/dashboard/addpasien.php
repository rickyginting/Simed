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
								<?=form_open('form/addpasien')?>
									<div class="card-body">
										<div class="form-group">
											<label>Nama</label>
											<input type="text" class="form-control" placeholder="Nama Pasien"
												name="nama" required autofocus>
										</div>
										<div class="form-group">
											<label>Nik</label>
											<input type="number" class="form-control" placeholder="Nik Pasien"
												name="nik" required>
										</div>
										<div class="form-group">
											<label>Jenis Kelamin</label>
											<div class="form-check">
												<input class="form-check-input" type="radio"  value="P" name="jk">
												<label class="form-check-label">Perempuan</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="jk" value="L" checked>
												<label class="form-check-label">Laki - Laki</label>
											</div>
                                        </div>
                                        <div class="form-group">
											<label>Pekerjaan</label>
											<input type="text" class="form-control" placeholder="Pekerjaan Pasien"
												name="pekerjaan" required>
										</div>
										<div class="form-group">
											<label>Alamat</label>
											<textarea class="form-control" name="alamat"></textarea>
										</div>
										<div class="form-group">
											<label>No Ponsel</label>
											<input type="number" class="form-control" placeholder="No.Ponsel Pasien"
												name="nohp" required >
										</div>
										<div class="form-group">
											<label>Status Penikahan</label>
											<select class="form-control" name="pernikahan_id">
												<?php foreach ($pernikahan as $p) {?>
                                                    <option value="<?=$p->pernikahan_id;?>"><?=$p->pernikahan;?></option>
                                                <?php }?>
											</select>
                                        </div>
                                        <div class="form-group">
											<label>Status Pendidikan</label>
											<select class="form-control" name="pendidikan">
                                                    <option value="SD Sederajat">SD Sederajat</option>
                                                    <option value="SMP Sederajat">SMP Sederajat</option>
                                                    <option value="SMA Sederajat">SMA Sederajat</option>
                                                    <option value="Sarjana">Sarjana</option>
											</select>
                                        </div>
                                        <div class="form-group">
											<label>Type Client</label>
											<select class="form-control" name="client_id">
												<?php foreach ($types as $i) {?>
                                                    <option value="<?=$i->client_id;?>"><?=$i->typename;?></option>
                                                <?php }?>
											</select>
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
