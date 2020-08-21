<?php $this->load->view('auth/template/head')?>

<body class="hold-transition login-page">
	<div class="login-box">

		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<div class="login-logo">
					<a href=""><?=nameapp()?></a><br>
					<p class="login-box-msg"><?=titleapp()?></p>
				</div>
				<hr>
				<?php if ($this->session->flashdata('pesan')) {
    echo $this->session->flashdata('pesan');
} else {
    echo '<p class="login-box-msg">Login Dengan Username dan Password</p>
    ';
}

if (form_error('username')) {
    echo '<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading"></h4>
  <p>' . form_error('username') . '</p>
  <p class="mb-0"></p>
</div> ';
}

if (form_error('password')) {
    echo '<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading"></h4>
  <p>' . form_error('password') . '</p>
  <p class="mb-0"></p>
</div> ';
}
?>
				<form action="" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Username" name="username" value="<?=set_value('username')?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-users"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" class="form-control" placeholder="Password" name="password">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Sign In</button>
						</div>
						<!-- /.col -->
					</div>
				</form>



			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->
	<?php $this->load->view('auth/template/js')?>
</body>

</html>
