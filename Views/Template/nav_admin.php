

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

	<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
			<div class="sidebar-brand-icon rotate-n-15">
				<i class="fas fa-laugh-wink"></i>
			</div>
			<div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
		</a>

		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url();?>/dashboard">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Dashboard</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Interface
		</div>

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
				aria-expanded="true" aria-controls="collapseTwo">
				<i class="fas fa-users"></i>
				<span>Usuarios</span>
			</a>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Componentes usuarios:</h6>
					<a class="collapse-item" href="<?= base_url();?>/usuarios">Usuarios</a>
					<a class="collapse-item" href="<?= base_url();?>/roles">Roles</a>
					<a class="collapse-item" href="<?= base_url();?>/permisos">Permisos</a>
				</div>
			</div>
		</li>

		<!-- Nav Item - Utilities Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
				aria-expanded="true" aria-controls="collapseUtilities">
				<i class="fas fa-user"></i>
				<span>Clientes</span>
			</a>
			<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
				data-parent="#accordionSidebar">
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Componentes clientes:</h6>
					<a class="collapse-item" href="utilities-color.html">Colors</a>
					<a class="collapse-item" href="utilities-border.html">Borders</a>
					<a class="collapse-item" href="utilities-animation.html">Animations</a>
					<a class="collapse-item" href="utilities-other.html">Other</a>
				</div>
			</div>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">


		

		<!-- Nav Item - Charts -->
		<li class="nav-item">
			<a class="nav-link" href="charts.html">
			<i class="fab fa-product-hunt"></i>
				<span>Productos</span></a>
		</li>

		<!-- Nav Item - Tables -->
		<li class="nav-item">
			<a class="nav-link" href="tables.html">
			<i class="fas fa-truck"></i>
				<span>Envios</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider d-none d-md-block">
		<li class="nav-item">
			<a class="nav-link" href="tables.html">
			<i class="fas fa-sign-out-alt"></i>
				<span>Salir</span></a>
		</li>

		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

	</ul>
	<!-- End of Sidebar -->

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

			<!-- Topbar -->
			<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

				<!-- Sidebar Toggle (Topbar) -->
				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					<i class="fa fa-bars"></i>
				</button>

				<!-- Topbar Search -->
			  

				<!-- Topbar Navbar -->
				<ul class="navbar-nav ml-auto">

					
				  

				   

					<div class="topbar-divider d-none d-sm-block"></div>

					<!-- Nav Item - User Information -->
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
							<img class="img-profile rounded-circle"
								src="<?= media(); ?>/img/undraw_profile.svg">
						</a>
						<!-- Dropdown - User Information -->
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
							aria-labelledby="userDropdown">
							<a class="dropdown-item" href="<?= base_url();?>/perfil">
								<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
								Perfíl
							</a>
							<a class="dropdown-item" href="<?= base_url();?>/configuraciones">
								<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
								Configuraciones
							</a>
						   
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?= base_url();?>/logout" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								Salir
								
							</a>
						</div>
					</li>

				</ul>

			</nav>