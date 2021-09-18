<?php echo view('templates/header') ?>


<body class="hold-transition light-skin sidebar-mini theme-primary">

	<?php echo view('templates/sidenav') ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<div class="container-full">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
                    <p class="page-title"><a href="citizenList"><i class="fa fa-arrow-left"></i> Back to List Citizen</a></p>
						<div class="d-inline-block align-items-center">
							<nav>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
									<li class="breadcrumb-item" aria-current="page">Admin</li>
									<li class="breadcrumb-item active" aria-current="page">Citizen List</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="box">
						
						<!-- /.box-header -->
					</div>
				</div>
			</section>
			<!-- /.content -->
		</div>
	</div>
	<!-- /.content-wrapper -->
	<!-- /.control-sidebar -->
				
				<?php echo view('modals/deleteModal') ?>
				<!-- Vendor JS -->
				<?= script_tag('js/vendors.min.js'); ?>
				<?= script_tag('assets/icons/feather-icons/feather.min.js'); ?>
				<?= script_tag('assets/vendor_components/datatable/datatables.min.js'); ?>
				<?= script_tag('js/pages/data-table.js'); ?>

				<!-- Sunny Admin App -->
				<?= script_tag('js/template.js'); ?>