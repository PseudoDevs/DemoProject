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
						<h3 class="page-title">Citizen List</h3>
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
						<div class="box-header with-border">
							<h3 class="box-title">Citizen Table</h3>
							<h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 text-center">
									<thead>
										<tr>
											<th>Precint #</th>
											<th>Firstname</th>
											<th>LastName</th>
											<th>Age</th>
											<th>Address</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>2345232</td>
											<td>John Lester</td>
											<td>Legaspi</td>
											<td>22</td>
											<td>#15 Sample Street Malanday Marikina City</td>
											<td>
												<a href="citizenView" class="btn btn-secondary btn-xs"><i class="fa fa-eye"></i> View </a>
												<a href="citizenEdit" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit </a>
												<a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-default"><i class="fa fa-trash"></i> Delete </a>
											</td>
										</tr>
								</table>
							</div>
						</div>
						<!-- /.box-body -->
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