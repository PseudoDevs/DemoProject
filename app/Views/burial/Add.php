<?php echo view('templates/header') ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
<script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>

<body class="hold-transition light-skin sidebar-mini theme-primary">

    <?php echo view('templates/sidenav') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <p class="page-title"><a href="/admin/citizen"><i class="fa fa-arrow-left"></i> Back to Burial List</a></p>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Admin</li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Burial</li>
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
                            <h4 class="box-title">Add Burial</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- <form id="frmAddCitizen"> -->
                                    <form action="/admin/burial/add" method="post">
                                        <!-- THIS IS THE START FORM  -->
                                        <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <p class="text-muted"> Pangalan <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <input type="text" id="firstName" name="firstName" class="form-control" data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p class="text-muted"> Apilyedo <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <input type="text" id="lastName" name="lastName" class="form-control" data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p class="text-muted"> Kailan Napuntahan <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <input type="date" value="<?= date('Y-m-d') ?>" id="dateOfDeath" name="dateOfDeath" class="form-control" data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="hidden" name="relationship" value="N/A">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p class="text-muted"> Saan inilibing o binurol <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <input type="text" id="cemeteryAddress" name="cemeteryAddress" class="form-control" data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p class="text-muted"> Distrito <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <input type="text" id="distrito" name="distrito" class="form-control" data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p class="text-muted"> Barangay <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <input type="text" id="barangay" name="barangay" class="form-control" data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p class="text-muted"> Walk In <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <div class="form-row">
                                                                <div class="col">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="walkIn" id="walkIn1" value="1" checked>
                                                                        <label class="form-check-label" for="walkIn1">
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="walkIn" id="walkIn2" value="0">
                                                                        <label class="form-check-label" for="walkIn2">
                                                                            No
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p class="text-muted"> Reported by <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <input type="text" id="reportedBy" name="reportedBy" class="form-control" data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="text-xs-right">
                                                    <input type="submit" class="btn btn-block btn-primary" value="Submit">

                                                </div>
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

    <script>
        $(document).ready(function() {

            $('#barangay').ph_locations({
                'location_type': 'barangays'
            });
            $('#my-city-dropdown').ph_locations({
                'location_type': 'cities'
            });

            $('#my-city-dropdown').ph_locations('fetch_list', [{
                "province_code": "1339"
            }]);
            $('#barangay').ph_locations('fetch_list', [{
                "city_code": "133902"
            }]);

            $('#my-city-dropdown').on('change', function() {
                $('#barangay').ph_locations('fetch_list', [{
                    "city_code": this.value
                }]);
            });

            $('#frmAddCitizen').submit(function(e) {
                e.preventDefault();
                var str = $('#frmAddCitizen').serialize();

                const precintNumber = $("input[name='precintNumber']").val();
                const firstname = $("input[name='firstname']").val();
                const lastname = $("input[name='lastname']").val();
                const gender = $("#gender").val();
                const birthday = $("input[name='birthday']").val();
                const nickname = $("input[name='nickName']").val();
                const contactNumber = $("input[name='mobile']").val();
                const address = $("input[name='address']").val();
                const city = $('#my-city-dropdown').find('option:selected').text();
                const brgy = $('#barangay').find('option:selected').text();
                const slugs = precintNumber + "-" + firstname + "-" + lastname;

                alert("/admin/citizen/add");
                $.post("/admin/citizen/add", {
                        precintNumber: precintNumber,
                        firstname: firstname,
                        lastname: lastname,
                        gender: gender,
                        birthday: birthday,
                        nickname: nickname,
                        contactNumber: contactNumber,
                        address: address,
                        district: city,
                        barangay: brgy,
                        slugs: slugs
                    },
                    function(data) {
                        alert(data);
                    }).done(function() {
                    alert("Done");
                });
                // $.ajax({
                //     url:,
                //     method:"POST",
                //     data:str,
                //     dataType:"JSON"
                // });

            });

        });
    </script>