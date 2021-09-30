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
                    <p class="page-title"><a href="/admin/citizen"><i class="fa fa-arrow-left"></i> Bumalik sa Listahan ng mga Kalingkod</a></p>
						<div class="d-inline-block align-items-center">
							<nav>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
									<li class="breadcrumb-item" aria-current="page">Admin</li>
									<li class="breadcrumb-item active" aria-current="page">Listahan ng mga Kalingkod</li>
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
                   
                        <div class="block-content">
                            <div class="row">
                                <div class="col-lg-6">
                                   
                                    <!-- Billing Address -->
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Detalye ng Namatay</h3>
                                    </div>
                                    <div class="block block-rounded block-bordered">
                                        <div class="block-content">

                                            <p class="font-size-h4 mb-1"><b>Pangalan: </b><?=$burial['firstname']." ".$burial['lastname'] ?></p>
                                            <p class="font-size-h4 mb-1"><b>Petsa ng Kamatayan: </b> <?=$burial['dateOfDeath']?></p>
                                            <p class="font-size-h4 mb-1"><b>Distrito: </b> <?=$burial['district']?></p>
                                            <p class="font-size-h4 mb-1"><b>Barangay: </b> <?=$burial['barangay']?></p>
                                            <p class="font-size-h4 mb-1"><b>Sementeryo:</b> <?=$burial['cemeteryAddress']?></p>
                                        </div>
                                    </div>
                                    <!-- END Billing Address -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Billing Address -->
                                    <div class="bt-3 d-block d-md-none mt-1 mb-1"></div>
                                    <div class="bl-3 d-block d-xl-none"></div>
                                    <div class="block block-rounded block-bordered">
                                    <div class="block-header block-header-default">
                                            <h3 class="block-title">Detalye ng Kalingkod</h3>
                                        </div>
                                        <div class="block-content">

                                        <div class="row">
                                            <div class="col-md-6">
                                            <p class="font-size-h4 mb-1"><b>Kalingkod:</b> <a target="_blank" href="/admin/citizen/view/<?=$citizen['id']?>"><?=$citizen['firstname']." ".$citizen['lastname'] ?></a> </p>
                                            <p class="font-size-h4 mb-1"><i class="fa fa-phone"></i> <?=$citizen['contactNumber']?></p>
                                            <p class="font-size-h4 mb-1"><b>Relasyon ng kalingkod: </b> <?=$burial['relationship']?></p>
                                            </div>
                                        </div>

                                        </div>
                                    </div>
                                    <!-- END Billing Address -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Addresses -->

                    <!-- Shopping Cart -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
					
						<!-- <a href="#" class="float-right btn btn-success btn-xs mb-2" data-toggle="modal" data-target="#modal-default" data-toggle="modal" data-target="#modal-default">+ Dagdag ng Tulong</a> -->
                        <!-- <a href="<?php //base_url('/admin/citizen/'.$citizen_slugs.'/assist/add')?>" class="float-right btn btn-primary btn-xs">+ Add Assist</a> -->
                        <h5 class="block-title mt-5">Detalye ng Pagtulong</h5>
                        </div>
                        <div class="block-content">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-center" >Uri ng Tulong</th>
                                            <th class="d-none d-sm-table-cell text-center">Petsa ng pagtulong</th>
                                            <th class="d-none d-md-table-cell">Paglalarawan ng Pagtulong</th>
                                            <th>Stado ng Pagtanggap</th>
                                            <th class="d-none d-sm-table-cell text-right">Tinulungan ni</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php //foreach ($assists as $assist) { ?>
                                        <tr>
                                            <td class="text-center font-size-sm">
                                                   <?= $assist['assistance_type']?>                        
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center font-size-sm"><?= $assist['created_at']?>     </td>
                                            <td class="d-none d-md-table-cell font-size-sm"> <strong> <?= $assist['assistance_description']?>   </strong>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">Received</span>
                                            </td>
                                            <td class="text-right d-none d-sm-table-cell font-size-sm">
											<?= $assist['assistedBy']?>   
                                            </td>

                                            <td class="text-center font-size-sm">
                                                <a class="btn btn-sm btn-alt-secondary" href="">
                                                    <i class="fa fa-fw fa-check"></i>
                                                </a>
                                                <!-- <a  href="<?=base_url('admin/assist/delete/'.$assist['id'])?>" class="btn btn-sm btn-alt-secondary">
                                                    <i class="fa fa-fw fa-times text-danger"></i>  
                                                </a> -->
                                            </td>
                                        </tr>
										<?php // }?>
									
                                        <!-- <tr>
                                            <td class="text-center font-size-sm">
                                            <a class="font-w600" href="">
												Health Care/Medical Assistance                            </a>
                                            </td>
                                            <td class="d-none d-sm-table-cell text-center font-size-sm">09/03/2019</td>
											<td class="d-none d-md-table-cell font-size-sm">
                                               10 Boxes of Paracetamol
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">Not Received</span>
                                            </td>
                                            <td class="text-right d-none d-sm-table-cell font-size-sm">
                                              Mayor Jose Rizal
                                            </td>
                                            <td class="text-center font-size-sm">
                                                <a class="btn btn-sm btn-alt-secondary" href="">
                                                    <i class="fa fa-fw fa-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-alt-secondary" href="#">
                                                    <i class="fa fa-fw fa-times text-danger"></i>
                                                </a>
                                            </td>
                                        </tr> -->
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
				

				<!-- Vendor JS -->

                <script src="/js/dashmix.core.min.js"></script>
        		<script src="/js/dashmix.app.min.js"></script>
        		<!-- <script src="/assets/vendor_c/bootstrap.min.js"></script> -->
                <script src="/js/vendors.min.js"></script>
                <script src="/assets/icons/feather-icons/feather.min.js"></script>
                <!-- <script src="/assets/vendor_components/easypiechart/dist/jquery.easypiechart.js"></script>
                <script src="/assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
                <script src="/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script> -->
                <script src="/js/template.js"></script>
                <script src="/js/pages/dashboard.js"></script>
                <script src="/assets/vendor_components/datatable/datatables.min.js"></script>
				<script src="/js/pages/data-table.js"></script>
                <script>
                // select text in select type
                $(document).ready(function(){
                    $('#impormasyonNgNakalibing').hide();
                    $('#assistance_type').change(function(){
                        $(this).find("option:selected").each(function(){
                            var optionValue = $(this).attr("value");
                            if(optionValue == "Burial"){
                                $('#impormasyonNgNakalibing').show();
                                $("#relationship").prop('required',true);
                                $("#barangay").prop('required',true);
                                $("#distrito").prop('required',true);
                                $("#cemeteryAddress").prop('required',true);
                                $("#dateOfDeath").prop('required',true);
                                $("#lastName").prop('required',true);
                                $("#firstName").prop('required',true);
                            }
                             else {
                                $('#impormasyonNgNakalibing').hide();
                                $("#relationship").prop('required',false);
                                $("#barangay").prop('required',false);
                                $("#distrito").prop('required',false);
                                $("#cemeteryAddress").prop('required',false);
                                $("#dateOfDeath").prop('required',false);
                                $("#lastName").prop('required',false);
                                $("#firstName").prop('required',false);
                            }
                        });
                    }).change();
                });
                </script>
            

		