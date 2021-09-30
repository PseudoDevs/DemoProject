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
                    <p class="page-title"><a href="<?=base_url('admin/citizen')?>"><i class="fa fa-arrow-left"></i> Back to List Citizen</a></p>
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

					<main id="main-container">
                <!-- Page Content -->
                <div class="content">
						<!-- Addresses -->
						<div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">User Details</h3>
                        </div>
                        <div class="block-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Billing Address -->
                                    <div class="block block-rounded block-bordered">
                                        <div class="block-content">
									
                                            <!-- <p class="font-size-h4 mb-1">Fullname: <?=$user['firstname']." ".$user['lastname'] ?></p> -->
                                            <p class="font-size-h4 mb-1">Fullname: Alex Bryan Arellano</p>
                                            <address class="font-size-sm">
										
											<?=$user['address']?><br>
										
                                                <i class="fa fa-phone"></i> <?=$user['contactNumber']?><br>
                                                <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a>
                                            </address>

                                        </div>
                                    </div>
                                    <!-- END Billing Address -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Addresses -->

                    <!-- Shopping Cart -->
            
                    <!-- END Shopping Cart -->
					</div>
            </main>
						<!-- /.box-header -->
					</div>
				</div>
			</section>
			<!-- /.content -->
		</div>
	</div>
	<!-- /.content-wrapper -->
	<!-- /.control-sidebar -->
				
				<?php echo view('modals/addAssist') ?>
				<!-- Vendor JS -->

                <script src="/js/dashmix.core.min.js"></script>
        		<script src="/js/dashmix.app.min.js"></script>
        		<!-- <script src="/assets/vendor_c/bootstrap.min.js"></script> -->
<!-- 

				<script src="/js/vendors.min.js"></script>
				<script src="/assets/icons/feather-icons/feather.min.js"></script>
				<script src="/assets/vendor_components/datatable/datatables.min.js"></script>
				<script src="/js/pages/data-table.js"></script> -->

                <!-- <script src="/js/toggle-check-all.js"></script>
                <script src="/js/check-selected-row.js"></script>
                <script src="/js/dropdown.js"></script>
                <script src="/js/sidebar-mini.js"></script>
                <script src="/js/app.js"></script> -->

				<!-- Sunny Admin App -->
				<!-- <script src="/js/template.js"></script> -->
				

		