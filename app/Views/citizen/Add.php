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
                    <p class="page-title"><a href="/admin/citizen"><i class="fa fa-arrow-left"></i> Bumalik sa Listahan ng mga Kalingkod</a></p>
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
                            <h4 class="box-title">Magdagdag ng Bagong Kalingkod</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    <!--<form id="frmAddCitizen"> -->
                                     <form action="/admin/citizen/add" method="post">
             
                                        <!-- THIS IS THE START FORM  -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h5> Precint Number <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="precintNumber" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>

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

                                                <div class="form-group">
                                                    <h5> Birthday <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="date" value="<?=(date('Y') - 18)."-".date('m-d')?>" name="birthday" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>

                                                <div class="form-row">   
                                                   
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> Civil Status: <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="civilstatus" id="civilstatus" required class="form-control">
                                                                    <option value="" selected disabled hidden>Select Civil Status</option>
                                                                    <option value="Single">Single</option>
                                                                    <option value="Married">Married</option>
                                                                    <option value="Widowed">Widowed</option>
                                                                    <option value="Divorced">Divorced</option>
                                                                    <option value="Separated">Separated</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                    <div class="form-group">
                                                            <h5> Occupation: <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="occupation" id="occupation" required class="form-control">
                                                                    <option value="" selected disabled hidden>Select Occupation</option>
                                                                    <option value="Employed">Employed</option>
                                                                    <option value="Self-Employed">Self-Employed</option>
                                                                    <option value="Unemployed">Unemployed</option>
                                                                    <option value="Student">Student</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">   
                                                   
                                                   <div class="col">
                                                   <div class="form-group">
                                                    <h5> Nickname</h5>
                                                    <div class="controls">
                                                        <input type="text" name="nickname" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                                   </div>
                                                   <div class="col">
                                                   <div class="form-group">
                                                    <h5> Mobile Number: <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="contactNumber" maxlength="11" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                                   </div>
                                               </div>

                                                <div class="form-group">
                                                            <h5>Unit/Building/House Number, Street Number or Street Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="address" class="form-control" required     data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                             <!--    <div class="form-row">   
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
                                                            <h5> Barangay: <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                            <!-- <select id="barangay"></select> -->
                                                                <input type="text" placeholder="Barangay" name="barangay" class="form-control" required    data-validation-required-message="This field is required">
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
	</div>
				</div>
			</section>
                <!-- Vendor JS -->
                <script src="/js/vendors.min.js"></script>
                <script src="/assets/icons/feather-icons/feather.min.js"></script>
                <script src="/assets/vendor_components/datatable/datatables.min.js"></script>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
                <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>

                <script src="/js/pages/data-table.js"></script>
                <script src="/js/template.js"></script>
                <script src="/js/Validation.js"></script>
                <script src="/js/pages/dashboard.js"></script>
              
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
                            const gender = $("#gender").val();
                            const civilstatus =$("#civilstatus").val();
                            const occupation = $("#occupation").val();
                            const birthday = $("input[name='birthday']").val();
                            const nickname =  $("input[name='nickName']").val();
                            const contactNumber = $("input[name='mobile']").val();
                            const address = $("input[name='address']").val();
                            const city = $('#my-city-dropdown').find('option:selected').text();
                            const brgy = $('#barangay').find('option:selected').text();
                            const slugs = precintNumber+"-"+firstname+"-"+lastname;
                            
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
                                slugs:slugs,
                                civilstatus:civilstatus,
                                occupation:occupation
                            },
                            function(data) {
                                alert(data);
                            }).done(function(){
                                location.href='/admin/citizen';
                            });
                        });
                    });
                </script>