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
                        <p class="page-title"><a href="/admin/citizen"><i class="fa fa-arrow-left"></i> Back to List Citizen</a></p>
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
                            <h4 class="box-title">Detalye ng Nakalibing:</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    <form action="/admin/burial/update" method="post">
                                        <!-- THIS IS THE START FORM  -->
                                        <!-- -->
                                        <input type="hidden" value="<?=$burial['id']?>" name="burial_id">
                                        <div class="form-row" id="impormasyonNgNakalibing">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p class="text-muted"> Pangalan <span class="text-danger">*</span></p>
                                                            <div class="controls">
                                                                <input type="text" value="<?=$burial['firstname']?>" id="firstName" name="firstName" class="form-control" data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p class="text-muted"> Apilyedo <span class="text-danger">*</span></p>
                                                            <div class="controls">
                                                                <input type="text" value="<?=$burial['lastname']?>" id="lastName" name="lastName" class="form-control" data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p class="text-muted"> Kailan Namatay <span class="text-danger">*</span></p>
                                                            <div class="controls">
                                                                <input type="date" value="<?=$burial['dateOfDeath']?>" id="dateOfDeath" name="dateOfDeath" class="form-control" data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p class="text-muted"> Kaano-ano ang Namatay <span class="text-danger">*</span></p>
                                                            <div class="controls">
                                                                <select name="relationship" id="relationship" class="form-control">
                                                                    <option value="<?=$burial['relationship']?>" selected hidden><?=$burial['relationship']?></option>
                                                                    <option value="Kamag-anak">Kamag-anak</option>
                                                                    <option value="Asawa">Asawa</option>
                                                                    <option value="Mag-asawa">Mag-asawa</option>
                                                                    <option value="Kapatid">Kapatid</option>
                                                                    <option value="Magkapatid">Magkapatid</option>
                                                                    <option value="Magulang">Magulang</option>
                                                                    <option value="Tatay">Tatay</option>
                                                                    <option value="Nanay">Nanay</option>
                                                                    <option value="Anak">Anak</option>
                                                                    <option value="Ate">Ate</option>
                                                                    <option value="Kuya">Kuya</option>
                                                                    <option value="Panganay">Panganay</option>
                                                                    <option value="Bunso">Bunso</option>
                                                                    <option value="Apo">Apo</option>
                                                                    <option value="Lolo">Lolo</option>
                                                                    <option value="Lola">Lola</option>
                                                                    <option value="Tiyo">Tiyo</option>
                                                                    <option value="Tiya">Tiya</option>
                                                                    <option value="Pamangkin">Pamangkin</option>
                                                                    <option value="Pinsan">Pinsan</option>
                                                                    <option value="Biyenan">Biyenan</option>
                                                                    <option value="Manugang">Manugang</option>
                                                                    <option value="Balae">Balae</option>
                                                                    <option value="Bayaw">Bayaw</option>
                                                                    <option value="Hipag">Hipag</option>
                                                                    <option value="Inaanak">Inaanak</option>
                                                                    <option value="Ninong">Ninong</option>
                                                                    <option value="Ninang">Ninang</option>
                                                                    <option value="Kinakapatid">Kinakapatid</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p class="text-muted"> Saan Inilibing <span class="text-danger">*</span></p>
                                                            <div class="controls">
                                                                <input type="text" value="<?=$burial['cemeteryAddress']?>" id="cemeteryAddress" name="cemeteryAddress" class="form-control" data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p class="text-muted"> Distrito <span class="text-danger">*</span></p>
                                                            <div class="controls">
                                                                <input type="text" value="<?=$burial['district']?>" id="distrito"  name="distrito" class="form-control" data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p class="text-muted"> Barangay <span class="text-danger">*</span></p>
                                                            <div class="controls">
                                                                <input type="text" value="<?=$burial['barangay']?>" id="barangay" name="barangay" class="form-control" data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
  
                                                </div>  
                                                </div>  
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

                <script src="/js/vendors.min.js"></script>
                <script src="/assets/icons/feather-icons/feather.min.js"></script>
                <script src="/assets/vendor_components/datatable/datatables.min.js"></script>
                <script src="/js/pages/data-table.js"></script>
                <script src="/js/template.js"></script>
                <script src="/js/Validation.js"></script>
                <script src="/js/pages/dashboard.js"></script>
                <!-- <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.0.js"></script> -->
            