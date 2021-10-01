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
                        <p class="page-title"><a href="/admin/citizen"><i class="fa fa-arrow-left"></i> Back to Recipients List</a></p>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Admin</li>
                                    <li class="breadcrumb-item active" aria-current="page">Recipients List</li>
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
                                        <h3 class="block-title">Recipients Details</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- Billing Address -->
                                                <div class="block block-rounded block-bordered">
                                                    <div class="block-content">

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p class="font-size-h4 mb-1"><b> Precint Number:</b> <?= $citizen['precintNumber'] ?></p>
                                                                <p class="font-size-h4 mb-1"><b>Pangalan: </b><?= $citizen['firstname'] . " " . $citizen['lastname'] ?></p>
                                                                <p class="font-size-h4 mb-1"><b>Kaarawan: </b> <?= $citizen['birthday'] ?></p>
                                                                <p class="font-size-h4 mb-1"><b>Kasarian: </b> <?= $citizen['gender'] ?></p>
                                                                <p class="font-size-h4 mb-1"><b>Edad:</b> <?php $birthdate = explode("-", $citizen['birthday']);
                                                                                                            echo date('Y') - $birthdate[0]; ?></p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="font-size-h4 mb-1"><b>Civil Status:</b> Single</p>
                                                                <p class="font-size-h4 mb-1"><b>Occupation: </b>Self-Employed </p>
                                                                <p class="font-size-h4 mb-1"><b>Tirahan:</b> </p>

                                                                <address class="font-size-sm">
                                                                    <?= $citizen['address'] ?>, <?= $citizen['barangay'] ?>, <?= $citizen['district'] ?>, Manila<br>
                                                                    <i class="fa fa-phone"></i> <?= $citizen['contactNumber'] ?><br>
                                                                    <!-- <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">company@example.com</a> -->
                                                                </address>
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

                                        <a href="#" class="float-right btn btn-success btn-xs mb-2" data-toggle="modal" data-target="#modal-default" data-toggle="modal" data-target="#modal-default">+ Dagdag ng Tulong</a>
                                        <!-- <a href="<?php //base_url('/admin/citizen/'.$citizen_slugs.'/assist/add')
                                                        ?>" class="float-right btn btn-primary btn-xs">+ Add Assist</a> -->
                                        <h5 class="block-title">Detalye ng Pagtulong</h5>
                                    </div>
                                    <div class="block-content">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 text-center">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Uri ng Tulong</th>
                                                        <th class="d-none d-sm-table-cell text-center">Petsa ng ppaghingi ng tulong</th>
                                                        <th class="d-none d-md-table-cell">Paglalarawan ng Pagtulong</th>
                                                        <th>Stado ng Pagtanggap</th>
                                                        <th >Araw na tulungan</th>
                                                        <th class="d-none d-sm-table-cell text-right">Tinulungan ni</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($assists as $assist) { ?>
                                                        <tr>
                                                            <td class="text-center font-size-sm">
                                                                <?= $assist['assistance_type'] ?>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell text-center font-size-sm">
                                                            <?php
                                                               $created = new DateTime($assist['created_at']);
                                                               echo $created->format("F d, Y");
                                                            ?>
                                                      
                                                        
                                                        </td>
                                                            <td class="d-none d-md-table-cell font-size-sm">
                                                                <strong> <?= $assist['assistance_description'] ?> </strong>
                                                            </td>
                                                            <td>
                                                                <?= ($assist['received_at'] == null) ? "<span class='badge badge-danger'>Not Received</span>" : "<span class='badge badge-success'>Received</span>" ?>
                                                            </td>
                                                            <td class="text-right d-none d-sm-table-cell font-size-sm">
                                                            <?php
                                                               $begin = new DateTime($assist['received_at']);
                                                               echo $begin->format("F d, Y");
                                                            ?>
                                                           
                                                            </td>
                                                            <td class="text-right d-none d-sm-table-cell font-size-sm">
                                                            <?= $assist['assistedBy'] ?>
                                                            </td>

                                                          
                                                            <td class="text-center font-size-sm">
                                                                <?php
                                                                if (!$assist['received_at']) {
                                                                ?>
                                                                    <a class="btn btn-sm btn-primary" href="/admin/assist/received/<?= $assist['id']?>/<?=$citizen_slugs?>" >
                                                                        <i class="fa fa-fw fa-check"></i> Receive
                                                                    </a>
                                                                <?php
                                                                }
                                                                ?>

                                                                <a href="/admin/assist/delete/<?= $assist['id']?>/<?=$citizen_slugs?>" class="btn btn-sm btn-alt-secondary">
                                                                    <i class="fa fa-fw fa-times text-danger"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>

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

    <?php echo view('modals/addAssist') ?>
    <!-- Vendor JS -->

    <script src="/js/dashmix.core.min.js"></script>
    <script src="/js/dashmix.app.min.js"></script>
    <!-- <script src="/assets/vendor_c/bootstrap.min.js"></script> -->
    <script src="/js/vendors.min.js"></script>
    <script src="/assets/icons/feather-icons/feather.min.js"></script>
    <!-- <script src="/assets/vendor_components/easypiechart/dist/jquery.easypiechart.js"></script>
                <script src="/assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
                <script src="/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script> -->
    <script src="/assets/vendor_components/datatable/datatables.min.js"></script>
    <script src="/js/pages/data-table.js"></script>
    <script src="/js/template.js"></script>
    <script src="/js/pages/dashboard.js"></script>
    <script>
        // select text in select type
        $(document).ready(function() {
            $('#impormasyonNgNakalibing').hide();
            $('#assistance_type').change(function() {
                $(this).find("option:selected").each(function() {
                    var optionValue = $(this).attr("value");
                    if (optionValue == "Burial") {
                        $('#impormasyonNgNakalibing').show();
                        $("#relationship").prop('required', true);
                        $("#barangay").prop('required', true);
                        $("#distrito").prop('required', true);
                        $("#cemeteryAddress").prop('required', true);
                        $("#dateOfDeath").prop('required', true);
                        $("#lastName").prop('required', true);
                        $("#firstName").prop('required', true);
                    } else {
                        $('#impormasyonNgNakalibing').hide();
                        $("#relationship").prop('required', false);
                        $("#barangay").prop('required', false);
                        $("#distrito").prop('required', false);
                        $("#cemeteryAddress").prop('required', false);
                        $("#dateOfDeath").prop('required', false);
                        $("#lastName").prop('required', false);
                        $("#firstName").prop('required', false);
                    }
                });
            }).change();
        });
    </script>