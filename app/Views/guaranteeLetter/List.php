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
						<h3 class="page-title">Accredited Hospital</h3>
						<div class="d-inline-block align-items-center">
							<nav>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
									<li class="breadcrumb-item" aria-current="page">Admin</li>
									<li class="breadcrumb-item active" aria-current="page">List of Accredited Hospital</li>
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
							<h3 class="box-title">Guarantee Letter</h3>
							<h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
						</div>
						<div class="box-body">
							<div class="table-responsive">
								<table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 text-center">
									<thead>
										<tr>
											<th>Firstname</th>
											<th>Lastname</th>
											<th>Birthday</th>
											<th>Age</th>
											<th>Gender</th>
											<th>Contact Number</th>
											<th>District</th>
											<th>Barangay</th>
											<th>Diagnosis</th>
											<th>Hospital</th>
										
											<th>Amount</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($guarantees as $guarantee) { ?>
										<tr>
											<td><?=$guarantee['firstname']?></td>
											<td><?=$guarantee['lastname']?></td>
											<td><?=$guarantee['birthday']?></td>
											<td>
											<?php $birthdate = explode("-", $guarantee['birthday']);
												echo date('Y') - $birthdate[0];?>
											</td>										
											<td><?=$guarantee['gender']?></td>
											<td><?=$guarantee['contactNumber']?></td>
											<td><?=$guarantee['district']?></td>
											<td><?=$guarantee['barangay']?></td>
											<td><?=$guarantee['diagnosis']?></td>
											<td><?=$guarantee['hospital']?></td>
										
											<td><?= "₱" . number_format($guarantee['amount'])?></td>
											<td>
												<!-- <a href="/admin/guarantee-letter/view/<?=$guarantee['id']?>" class="btn btn-secondary btn-xs"><i class="fa fa-eye"></i> View </a> -->
												<a href="/admin/guarantee-letter/edit/<?=$guarantee['id']?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Edit </a>
												<a href="/admin/guarantee-letter/delete/<?=$guarantee['id']?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete </a>
											</td>
										</tr>
										<?php } ?>
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
				
			
				<!-- Vendor JS -->
				<script src="/js/vendors.min.js"></script>
				<script src="/assets/icons/feather-icons/feather.min.js"></script>
				<script src="/assets/vendor_components/datatable/datatables.min.js"></script>
				<script src="/js/pages/data-table.js"></script>

				<!-- Sunny Admin App -->
				<script src="/js/template.js"></script>
				<script src="/js/pages/dashboard.js"></script>