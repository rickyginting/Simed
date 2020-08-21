<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
      <img src="<?=asset('dist/img/AdminLTELogo.png');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?=nameapp()?></span>
    </a>

	<!-- Sidebar -->
	<div class="sidebar">

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="<?=base_url('dashboard');?>" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-copy"></i>
						<p>
							Rekamana Data
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?=base_url('form/addpasien');?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Input Data Pasien</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('form/pasien');?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Data Pasien</p>
							</a>
						</li>
					</ul>
                </li>
                <li class="nav-item has-treeview">
					<a href="#" class="nav-link">
                    <i class="nav-icon fas fa-cogs"></i>
						<p>
							Pengaturan
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
						<a href="<?=base_url('form/pernikahan');?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Status Pernikahan</p>
							</a>	
						<a href="<?=base_url('form/type');?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Type Client</p>
							</a>
						</li>
					</ul>
                </li>
                <li class="nav-item">
					<a href="<?=base_url('auth/logout');?>" class="nav-link">
					<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>
							Log Out
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
