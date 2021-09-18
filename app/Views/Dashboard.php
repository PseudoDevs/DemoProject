<?php echo view('templates/header') ?>


<body class="hold-transition light-skin sidebar-mini theme-primary">

    <?php echo view('templates/sidenav') ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-3 col-6">
                        <div class="box overflow-hidden pull-up hov-rs">
                            <div class="box-body text-center">
                                <div class="icon bg-primary-light rounded w-60 h-60 mx-auto">
                                    <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Total Citizens</p>
                                    <h3 class="text-dark mb-0 font-weight-500"><?php echo number_format(3400); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="box overflow-hidden pull-up hov-rs">
                            <div class="box-body text-center">
                                <div class="icon bg-warning-light rounded w-60 h-60 mx-auto">
                                    <i class="text-warning mr-0 font-size-24 mdi mdi-account-box"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">New Citizens</p>
                                    <h3 class="text-dark mb-0 font-weight-500"><?php echo number_format(150); ?> </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="box overflow-hidden pull-up hov-rs">
                            <div class="box-body text-center">
                                <div class="icon bg-info-light rounded w-60 h-60 mx-auto">
                                    <i class="text-info mr-0 font-size-24 mdi mdi-assistant"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Newly Assist</p>
                                    <h3 class="text-dark mb-0 font-weight-500"><?php echo number_format(3400); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6">
                        <div class="box overflow-hidden pull-up hov-rs">
                            <div class="box-body text-center">
                                <div class="icon bg-danger-light rounded w-60 h-60 mx-auto">
                                    <i class="text-danger mr-0 font-size-24 mdi mdi-account-settings-variant"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Admins</p>
                                    <h3 class="text-dark mb-0 font-weight-500"><?php echo number_format(1); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->

    	<!-- Vendor JS -->
        <?= script_tag('js/vendors.min.js'); ?>
    <?= script_tag('assets/icons/feather-icons/feather.min.js'); ?>
	<?= script_tag('assets/vendor_components/easypiechart/dist/jquery.easypiechart.js'); ?>
	<?= script_tag('assets/vendor_components/apexcharts-bundle/irregular-data-series.js'); ?>
	<?= script_tag('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js'); ?>
	
	<!-- Sunny Admin App -->
	<?= script_tag('js/template.js'); ?>
	<?= script_tag('js/pages/dashboard.js'); ?>