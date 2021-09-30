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
                    <p class="page-title"><a href="/admin/citizen"><i class="fa fa-arrow-left"></i> Bumalik sa Listahan ng mga Letra ng Garantiya</a></p>
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
                            <h4 class="box-title">I-edit ang Letra ng Garantiya</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    <!-- <form id="frmAddCitizen"> -->
                                    <form action="/admin/guarantee-letter/update" method="post">
                                    <input type="hidden" name="guarantee_id" value="<?= $guarantee_id?>">
                                       <!-- THIS IS THE START FORM  -->
                                       <div class="row">
                                            <div class="col-12">
                                              
                                                <div class="form-row">   
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> First Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="firstname" class="form-control" required data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> Last Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="lastname" class="form-control" required    data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">   
                                                    <div class="col">
                                                        <div class="form-group">
                                                        <h5> Gender <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="gender" id="gender" required class="form-control">
                                                                    <option value="" selected disabled hidden>Select Gender</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                   <div class="col">
                                                    <div class="form-group">
                                                        <h5> Birthday <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="date" value="<?=(date('Y') - 18)."-".date('m-d')?>" name="birthday"    class="form-control" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                   </div>

                                               </div>

                                               <div class="form-group">
                                                    <h5> Mobile Number: <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="contactNumber" maxlength="11" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                                <div class="form-row">   
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> District:<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" placeholder="District"   name="district" class="form-control" required data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> Taga Barangay: <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" placeholder="Barangay" name="barangay" class="form-control" required    data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5> Amount <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="amount" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                         

                                                <div class="form-group">
                                                        <h5>Diagnosis <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <!-- <input type="text" name="diagnosis" class="form-control" required    data-validation-required-message="This field is required"> -->
                                                            <select name="diagnosis" id="diagnosis" required class="form-control">
                                                                <option value="" selected disabled hidden>Select Diagnosis</option>
                                                                <option value="Pneumonia">Cancer</option>
                                                                <option value="Tuberculosis">Heart A    ilment</option>
                                                                <option value="Malaria">Blood Related</option>
                                                            </select>
                                                        </div>
                                                </div>
                                             
                                                <div class="form-group">
                                                    <h5>Hospital <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <!-- <input type="text" name="address" class="form-control" required     data-validation-required-message="This field is required"> -->
                                                        <select name="hospital" id="hospital" required class="form-control">
                                                            <option value="" selected disabled hidden>Select Hospital</option>
                                                                <option value="NKTI">NKTI</option>
                                                                <option value="Lung Center">Lung Center</option>
                                                                <option value="San Lazaro Hospital">San Lazaro Hospital</option>
                                                                <option value="Heart Center of the Phil">Heart Center of the Phil</option>
                                                                <option value="Dr. Jose Reyes Hospital">Dr. Jose Reyes Hospital</option>
                                                                <option value="Dr. Jose Fabella Hospital">Dr. Jose Fabella Hospital</option>
                                                                <option value="East Avenue Medical Center">East Avenue Medical Center</option>
                                                                <option value="UST">UST</option>
                                                                <option value="Chinese General Hospital">Chinese General Hospital</option>
                                                                <option value="Manila Doctors Hospital">Manila Doctors Hospital</option>
                                                                <option value="Mary Chilles Hospital">Mary Chilles Hospital</option>
                                                                <option value="Philippine Children Memorial Center">Philippine Children Memorial Center</option>
                                                                <option value="Orthopedics">Orthopedics</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5>Educational <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <!-- <input type="text" name="address" class="form-control" required     data-validation-required-message="This field is required"> -->
                                                        <select name="educational" id="educational" required class="form-control">
                                                            <option value="" selected disabled hidden>Select Year Level</option>
                                                                <option value="Gradeschool">Gradeschool</option>
                                                                <option value="Highschool">Highschool</option>
                                                                <option value="Senior HS">Senior HS</option>
                                                                <option value="College">College</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5>School <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <!-- <input type="text" name="address" class="form-control" required     data-validation-required-message="This field is required"> -->
                                                        <select name="school" id="school" required class="form-control">
                                                            <option value="" selected disabled hidden>Select Type of School</option>
                                                                <option value="Private">Private</option>
                                                                <option value="Public">Public</option>  
                                                        </select>
                                                    </div>
                                                </div>
                                              
                                              <!-- 
                                                  <div class="form-row">   
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> District: <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="city" id="my-city-dropdown" required class="form-control">
                                                                    <option value="" selected disabled hidden>Select Disctrict</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    <div class="form-group">
                                                            <h5> Barangay: <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="barangay" id="barangay" required class="form-control">
                                                                    <option value="" selected disabled hidden>Select Barangay</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            -->

                                              

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
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
                <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
                <script>
                    $(document).ready(function() {

                        $('#barangay').ph_locations({'location_type': 'barangays'});
                        $('#my-city-dropdown').ph_locations({'location_type': 'cities'});

                        $('#my-city-dropdown').ph_locations( 'fetch_list', [{"province_code": "1339"}]);
                        $('#barangay').ph_locations( 'fetch_list', [{"city_code": "133902"}]);

                        $('#my-city-dropdown').on('change', function(){
                            $('#barangay').ph_locations( 'fetch_list', [{"city_code": this.value}]);
                        });

                        $('#frmAddCitizen').submit(function(e){
                            e.preventDefault();
                            var str = $( '#frmAddCitizen').serialize();
                        
                            const precintNumber =  $("input[name='precintNumber']").val();
                            const firstname =  $("input[name='firstname']").val();
                            const lastname = $("input[name='lastname']").val();
                            const gender =$("#gender").val();
                            const birthday = $("input[name='birthday']").val();
                            const nickname =  $("input[name='nickName']").val();
                            const contactNumber = $("input[name='mobile']").val();
                            const address = $("input[name='address']").val();
                            const city = $('#my-city-dropdown').find('option:selected').text();
                            const brgy = $('#barangay').find('option:selected').text();
                            const slugs = precintNumber+"-"+firstname+"-"+lastname;

                            alert("/admin/citizen/add");
                            $.post("/admin/citizen/add", { 
                                precintNumber:  precintNumber,
                                firstname:  firstname,
                                lastname:lastname,
                                gender:gender, 
                                birthday: birthday,
                                nickname:  nickname,
                                contactNumber:contactNumber,
                                address: address,
                                district:city,
                                barangay:brgy,
                                slugs:slugs
                            },
                            function(data) {
                                alert(data);
                            }).done(function(){
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