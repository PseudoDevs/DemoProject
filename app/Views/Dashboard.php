<?php echo view('templates/header') ?>


<body class="hold-transition light-skin sidebar-mini theme-primary">

    <?php echo view('templates/sidenav') ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-3 col">
                        <div class="box overflow-hidden pull-up hov-rs">
                            <div class="box-body text-center">
                                <div class="icon bg-primary-light rounded w-60 h-60 mx-auto">
                                    <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Total Recepient</p>
                                    <h3 class="text-dark mb-0 font-weight-500"><?php echo number_format($TotalCitizen); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col">
                        <div class="box overflow-hidden pull-up hov-rs">
                            <div class="box-body text-center">
                                <div class="icon bg-warning-light rounded w-60 h-60 mx-auto">
                                    <i class="text-warning mr-0 font-size-24 mdi mdi-account-box"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">New Recepient</p>
                                    <h3 class="text-dark mb-0 font-weight-500"><?php echo number_format($NewCitizen); ?> </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col">
                        <div class="box overflow-hidden pull-up hov-rs">
                            <div class="box-body text-center">
                                <div class="icon bg-info-light rounded w-60 h-60 mx-auto">
                                    <i class="text-info mr-0 font-size-24 mdi mdi-assistant"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Newly Assist</p>
                                    <h3 class="text-dark mb-0 font-weight-500"><?php echo number_format($NewAssist); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col">
                        <div class="box overflow-hidden pull-up hov-rs">
                            <div class="box-body text-center">
                                <div class="icon bg-danger-light rounded w-60 h-60 mx-auto">
                                    <i class="text-danger mr-0 font-size-24 mdi mdi-account-settings-variant"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Admins</p>
                                    <h3 class="text-dark mb-0 font-weight-500"><?php echo number_format($Admins); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col">
                        <div class="box overflow-hidden pull-up hov-rs">
                            <div class="box-body text-center">
                                <div class="icon bg-warning-light rounded w-60 h-60 mx-auto">
                                    <i class="text-warning mr-0 font-size-24 mdi mdi-account-settings-variant"></i>
                                </div>
                                <div>

                                    <p class="text-mute mt-20 mb-0 font-size-16">Users</p>
                                    <h3 class="text-dark mb-0 font-weight-500"><?php echo number_format($Users); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>


                    <section class="content">
                        <div class="row">
                            <!-- col -->
                            <div class="col-md-10 col-lg-6 col-sm-10">
                                <div class="box">
                                    <div class="box-body">
                                        <h4 class="box-title">Assist Chart</h4>
                                        <div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p> Petsa mula: <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <input type="date" value="<?= date('Y-m-d', strtotime("-6 months", strtotime(date('Y-m-d')))) ?>" id="dateFrom" name="dateFrom" class="form-control" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p> Petsa sa: <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <input type="date" value="<?= date('Y-m-d') ?>" name="dateTo" id="dateTo" class="form-control" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md">
                                                    <div class="form-group">
                                                        <p> Uri ng Pagtulong: <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <select name="assistance_type" id="assistance_type" required class="form-control">
                                                                <option value="" selected disabled hidden>Pumili ng Uri ng Pagtulong</option>
                                                                <option value="Medical">Medical</option>
                                                                <option value="Legal">Legal</option>
                                                                <option value="Burial">Burial</option>
                                                                <option value="Financial">Financial</option>
                                                                <option value="Educational">Educational</option>
                                                                <option value="Wheelchair">Wheelchair</option>
                                                                <option value="Oxygen tank">Oxygen tank</option>
                                                                <option value="Quadcane">Quadcane</option>
                                                                <option value="Single cane">Single cane</option>
                                                                <option value="Walker">Walker</option>
                                                                <option value="Hearing aid">Hearing aid</option>
                                                                <option value="Saklay">Saklay</option>
                                                                <option value="Nebulizer">Nebulizer</option>
                                                                <option value="Manual Blood pressure kit">Manual Blood pressure kit</option>
                                                                <option value="Oxymeter">Oxymeter</option>
                                                                <option value="Thermal scanner">Thermal scanner</option>
                                                                <option value="Reading glass">Reading glass</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <canvas id="assist-bar-chart" height="250"></canvas>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            
                            <div class="col-md-8 col-lg-6 col-sm-8">
                                <div class="box">
                                    <div class="box-body">
                                        <h4 class="box-title">Assist Pie Chart</h4>
                                        <div>
                                            <canvas id="assist-pie-chart" height="250"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-10 col-lg-6 col-sm-10">
                                <div class="box">
                                    <div class="box-body">
                                        <h4 class="box-title">Educational Chart</h4>
                                        <div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p> Petsa mula: <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <input type="date" value="<?= date('Y-m-d', strtotime("-6 months", strtotime(date('Y-m-d')))) ?>" id="edateFrom" name="edateFrom" class="form-control" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p> Petsa sa: <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <input type="date" value="<?= date('Y-m-d', strtotime("+1 day", strtotime(date('Y-m-d')))) ?>" name="dateTo" id="edateTo" class="form-control" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                         
                                            </div>
                                            <canvas id="educational-bar-chart" height="250"></canvas>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-10 col-lg-6 col-sm-10">
                                <div class="box">
                                    <div class="box-body">
                                        <h4 class="box-title">Guarantee Chart</h4>
                                        <div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p> Petsa mula: <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <input type="date" value="<?= date('Y-m-d', strtotime("-6 months", strtotime(date('Y-m-d')))) ?>" id="gdateFrom" name="gdateFrom" class="form-control" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <p> Petsa sa: <span class="text-danger">*</span></p>
                                                        <div class="controls">
                                                            <input type="date" value="<?= date('Y-m-d', strtotime("+1 day", strtotime(date('Y-m-d')))) ?>" name="dateTo" id="gdateTo" class="form-control" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                           
                                            </div>
                                            <canvas id="guarantee-bar-chart" height="250"></canvas>
                                        </div>
                                    </div>
                                </div>


                            </div>

                           
                        </div>

                    </section>

            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->

    <!-- Vendor JS -->


    <script src="/js/vendors.min.js"></script>
    <script src="/assets/icons/feather-icons/feather.min.js"></script>
    <script src="/assets/vendor_components/chart.js-master/Chart.min.js"></script>
    <script src="/js/pages/widget-charts2.js"></script>
    <script src="/js/template.js"></script>
    <script src="/js/pages/dashboard.js"></script>

    <script>
        $(document).ready(function() {

            var barchat = new Chart(document.getElementById("assist-bar-chart"), {
                type: 'bar',
                data: {
                    labels: <?= json_encode($assistance_label) ?>,
                    datasets: [{
                        label: "Data",
                        backgroundColor: <?= json_encode($assistance_color) ?>,
                        data: <?= json_encode($assistance_data) ?>
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Assistance Data'
                    }
                }
            });

            var educationalchat = new Chart(document.getElementById("educational-bar-chart"), {
                type: 'bar',
                data: {
                    labels: <?= json_encode($monthEducational) ?>,
                    datasets: [{
                        label: "Data",
                        backgroundColor: <?= json_encode($assistance_color) ?>,
                        data: <?= json_encode($dataEducational) ?>
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Educational Data'
                    }
                }
            });

            var guaranteechat = new Chart(document.getElementById("guarantee-bar-chart"), {
                type: 'bar',
                data: {
                    labels: <?= json_encode($monthGuarantee) ?>,
                    datasets: [{
                        label: "Data",
                        backgroundColor: <?= json_encode($assistance_color) ?>,
                        data: <?= json_encode($dataGuarantee) ?>
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Guarantee Letter Data'
                    }
                }
            });

            //Educational
            $('#edateTo').change(function() {
                const dateFrom = $('#edateFrom').val();
                const dateTo = $(this).val();

                    $.get("/dashboard/educationalBarChart", {
                        dateFrom: dateFrom,
                        dateTo: dateTo
                    }, function(data) {
                        var date = JSON.parse(data);

                        var chartdata = {
                            labels: date.month,
                            datasets: [{
                                label: "Educational",
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: date.data_assistance
                            }]
                        };

                        educationalchat.destroy();
                        educationalchat = new Chart(document.getElementById("educational-bar-chart"), {
                            type: 'bar',
                            data: chartdata,
                            options: {
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: "Educational"
                                }
                            }
                        });
                    });
            });

            $('#edateFrom').change(function() {
                const dateFrom = $(this).val();
                const dateTo = $('#edateTo').val();

                    $.get("/dashboard/educationalBarChart", {
                        dateFrom: dateFrom,
                        dateTo: dateTo
                    }, function(data) {
  
                        var date = JSON.parse(data);
                        var chartdata = {
                            labels: date.month,
                            datasets: [{
                                label: "Educational",
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: date.data_assistance
                            }]
                        };

                        educationalchat.destroy();
                        educationalchat = new Chart(document.getElementById("educational-bar-chart"), {
                            type: 'bar',
                            data: chartdata,
                            options: {
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: "Educational"
                                }
                            }
                        });
                    });
            
            });
//Educational End Chart
            //Educational
            $('#gdateTo').change(function() {
                const dateFrom = $('#edateFrom').val();
                const dateTo = $(this).val();

                    $.get("/dashboard/guaranteeBarChart", {
                        dateFrom: dateFrom,
                        dateTo: dateTo
                    }, function(data) {

                        var date = JSON.parse(data);
                        var chartdata = {
                            labels: date.month,
                            datasets: [{
                                label: "Educational",
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: date.data_assistance
                            }]
                        };

                        guaranteechat.destroy();
                        guaranteechat = new Chart(document.getElementById("guarantee-bar-chart"), {
                            type: 'bar',
                            data: chartdata,
                            options: {
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: "Guarantee Letter"
                                }
                            }
                        });
                    });
                
            });


            $('#gdateFrom').change(function() {
                const dateFrom = $(this).val();
                const dateTo = $('#gdateTo').val();

                    $.get("/dashboard/guaranteeBarChart", {
                        dateFrom: dateFrom,
                        dateTo: dateTo,
                        
                    }, function(data) {

                        var date = JSON.parse(data);
                   
                        var chartdata = {
                            labels: date.month,
                            datasets: [{
                                label: "Educational",
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: date.data_assistance
                            }]
                        };

                        guaranteechat.destroy();
                        guaranteechat = new Chart(document.getElementById("guarantee-bar-chart"), {
                            type: 'bar',
                            data: chartdata,
                            options: {
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: "Guarantee Letter"
                                }
                            }
                        });
                    });
         
            });
//Educational End Chart

            //Assistance
            $('#dateFrom').change(function() {
                var dateFrom = $(this).val();
                var dateTo = $('#dateTo').val();
                var assistance_type = $('#assistance_type').val();

                if (assistance_type != null) {
                    $.get("/dashboard/assistanceBarChart", {
                        dateFrom: dateFrom,
                        dateTo: dateTo,
                        assistance_type: assistance_type
                    }, function(data) {

                        var date = JSON.parse(data);
                        var chartdata = {
                            labels: date.month,
                            datasets: [{
                                label: assistance_type,
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: date.data_assistance
                            }]
                        };

                        barchat.destroy();
                        barchat = new Chart(document.getElementById("assist-bar-chart"), {
                            type: 'bar',
                            data: chartdata,
                            options: {
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: assistance_type
                                }
                            }
                        });
                    });
                }
            });

            $('#dateTo').change(function() {
                var dateFrom = $('#dateFrom').val();
                var dateTo = $(this).val();
                var assistance_type = $('#assistance_type').val();
                if (assistance_type != null) {
                    $.get("/dashboard/assistanceBarChart", {
                        dateFrom: dateFrom,
                        dateTo: dateTo,
                        assistance_type: assistance_type
                    }, function(data) {

                        var date = JSON.parse(data);
                        var chartdata = {
                            labels: date.month,
                            datasets: [{
                                label: assistance_type,
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: date.data_assistance
                            }]
                        };

                        barchat.destroy();
                        barchat = new Chart(document.getElementById("assist-bar-chart"), {
                            type: 'bar',
                            data: chartdata,
                            options: {
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: assistance_type
                                }
                            }
                        });
                    });
                }

            });

            $('#assistance_type').change(function() {
                var assistance_type = $(this).val();
                var dateFrom = $('#dateFrom').val();
                var dateTo = $('#dateTo').val();
                if (assistance_type != null) {
                    $.get("/dashboard/assistanceBarChart", {
                        dateFrom: dateFrom,
                        dateTo: dateTo,
                        assistance_type: assistance_type
                    }, function(data) {

                        var date = JSON.parse(data);
                        var chartdata = {
                            labels: date.month,
                            datasets: [{
                                label: assistance_type,
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: date.data_assistance
                            }]
                        };

                        barchat.destroy();
                        barchat = new Chart(document.getElementById("assist-bar-chart"), {
                            type: 'bar',
                            data: chartdata,
                            options: {
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: assistance_type
                                }
                            }
                        });
                    });
                }

            });


            //Asistance End

            // JSON
            if ($('#assist-pie-chart').length > 0) {
                var ctx6 = document.getElementById("assist-pie-chart").getContext("2d");
                var data6 = <?= json_encode($assistance_pie) ?>;
                var pieChart = new Chart(ctx6, {
                    type: 'pie',
                    data: data6,
                    options: {
                        animation: {
                            duration: 3000
                        },
                        responsive: true,
                        legend: {
                            labels: {
                                fontFamily: "Nunito Sans",
                                fontColor: "#878787"
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(33,33,33,1)',
                            cornerRadius: 0,
                            footerFontFamily: "'Nunito Sans'"
                        },
                        elements: {
                            arc: {
                                borderWidth: 0
                            }
                        }
                    }
                });
            }
        });
    </script>