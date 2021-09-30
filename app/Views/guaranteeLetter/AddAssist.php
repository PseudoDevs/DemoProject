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
                                    <li class="breadcrumb-item active" aria-current="page">Add Citizen</li>
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
                            <h4 class="box-title">Add Assistance</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    <!-- <form id="frmAddCitizen"> -->
                                    <form method="post" action="/admin/assist/add">
                                    <input type="hidden" value="<?=$citizen_id?>" name="citizen_id">
                                                <div class="form-group">
                                                    <h5> Assistance Description <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <textarea name="assistance_description" class="form-control" required data-validation-required-message="This field is required"
                                                        rows="8" cols="40"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5> Assistance Type <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="assistance_type" class="form-control" required  data-validation-required-message="This field is required">
                                                    </div>
                                                    <!-- <div class="input-group controls">
                                                        <select name="gender" id="select" required class="form-control">
                                                            <option value="" selected disabled hidden>Select Assistance Type</option>
                                                            <option value="Male">Medical</option>
                                                            <option value="Female">Cash</option>
                                                        </select>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addcategory">+</button>
                                                        </div>
                                                    </div> -->
                                                </div>                                   

                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> Assisted By <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="assistedBy" class="form-control" required  data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="col">  
                                                            <div class="form-group">
                                                                <h5> Assist Date: <span class="text-danger">*</span></h5>
                                                                <div class="controls">
                                                                    <input type="date" value="<?= date('Y-m-d') ?>" name="assistDate"   class="form-control" required data-validation-required-message="This field is  required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                           
                                        <!-- THIS IS THE START FORM  -->
                                        
                                                <div class="text-xs-right">
                                                    <input type="submit" class="btn btn-block btn-primary" value="Submit">
                                                </div>
                                    </form>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
	</div>
				</div>
			</section>
                <!-- Vendor JS -->
		      
                <script src="/js/vendors.min.js"></script>
                <script src="/assets/icons/feather-icons/feather.min.js"></script>
                <script src="/assets/vendor_components/datatable/datatables.min.js"></script>
                <script src="/js/pages/data-table.js"></script>
                <script src="/js/template.js"></script>
                <script src="/js/Validation.js"></script>
                <script src="/js/pages/dashboard.js"></script>
