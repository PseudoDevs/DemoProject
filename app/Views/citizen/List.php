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
						<h3 class="page-title">Mga Kalingkod</h3>
						<div class="d-inline-block align-items-center">
							<nav>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
									<li class="breadcrumb-item" aria-current="page">Admin</li>
									<li class="breadcrumb-item active" aria-current="page">Mga Kalingkod</li>
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
							<h3 class="box-title">Listahan ng mga Kalingkod</h3>
							<h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
						</div>
						<div class="box-body">
							<div class="table-responsive">
								<table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 text-center">
									<thead>
										<tr>
											<th>Precint #</th>
											<th>Firstname</th>
											<th>LastName</th>
											<th>Birthday</th>
											<th>Age</th>
											<th>Address</th>
											<!-- <th>Uri ng Pagtulong</th>
											<th>Tinulungan Ni</th> -->
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($citizens as $citizen) { ?>
										<tr>
											<td><?=$citizen['precintNumber']?></td>
											<td><?=$citizen['firstname']?></td>
											<td><?=$citizen['lastname']?></td>
											<td>
												<?=$citizen['birthday']?>
											</td>
											<td>
											<?php $birthdate = explode("-", $citizen['birthday']);
												echo date('Y') - $birthdate[0];?>
											</td>
											<td><?=$citizen['address'].", ".$citizen['barangay'].", ".$citizen['district'] ?></td>
											<!-- <td><?//=$citizen['assistance_type'] ?></td>
											<td><?//=$citizen['assistedBy'] ?></td> -->
											<td>
												
												<a href="/admin/citizen/view/<?=$citizen['id']?>" class="btn btn-secondary btn-xs"><i class="fa fa-eye"></i> View </a>
												<a href="/admin/citizen/edit/<?=$citizen['id']?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit </a>
												<a href="/admin/citizen/delete/<?=$citizen['id']?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete </a>
											</td>
										</tr>
										<?php } ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /.content -->
		</div>
	</div>
	<!-- /.content-wrapper -->
	<!-- /.control-sidebar -->

				<!-- Vendor JS -->
				<script src="/js/vendors.min.js"></script>
				<script src="/assets/icons/feather-icons/feather.min.js"></script>
				<script src="/assets/vendor_components/datatable/datatables.min.js"></script>
				<script src="/js/pages/data-table.js"></script>

				<!-- Sunny Admin App -->
				<script src="/js/template.js"></script>
				<script src="/js/pages/dashboard.js"></script>