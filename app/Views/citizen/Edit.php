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
                                    <li class="breadcrumb-item active" aria-current="page">Edit Citizen</li>
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
                            <h4 class="box-title">Edit Citizen Information</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    <form novalidate>
                                        <!-- THIS IS THE START FORM  -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h5> Precint Number <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="precintNumber" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5> First Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="firstName" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5> Last Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="lastName" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5> Nickname <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="nickName" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5> Address <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="address" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5> Gender <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="gender" id="select" required class="form-control">
                                                            <option value="">Select Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
        
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5> Birthday <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="date" name="birthDay" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>

                                                <h3> Assistance Info </h3>

                                                <div class="form-group">
                                                    <h5> Assistance Description <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <textarea name="assistanceDescription" class="form-control" required data-validation-required-message="This field is required"></textarea>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <h5> Assistance Type <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="gender" id="select" required class="form-control">
                                                            <option value="">Select Assistance</option>
                                                            <option value="Male">Medical</option>
                                                            <option value="Female">Cash</option>
        
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5> Assisted By <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="assistedBy" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5> Assist Date <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="date" name="assistDate" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>




                                                <div class="text-xs-right">
                                                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
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

                <!-- Vendor JS -->
                <?= script_tag('js/vendors.min.js'); ?>
                <?= script_tag('assets/icons/feather-icons/feather.min.js'); ?>
                <?= script_tag('assets/vendor_components/datatable/datatables.min.js'); ?>
                <?= script_tag('js/pages/data-table.js'); ?>

                <!-- Sunny Admin App -->
                <?= script_tag('js/template.js'); ?>