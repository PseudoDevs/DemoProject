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
                    <p class="page-title"><a href="/admin/users"><i class="fa fa-arrow-left"></i> Back to Users List</a></p>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Admin</li>
                                    <li class="breadcrumb-item active" aria-current="page">Add User</li>
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
                            <h4 class="box-title">Add New User</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    
                                    <form method="post" action="/admin/users/add">
                                        <!-- THIS IS THE START FORM  -->
                                        <div class="row">
                                            <div class="col-12">
                                            <div class="form-group">
                                                    <h5> User Type <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="type" id="type" required class="form-control">
                                                            <option value="" selected disabled hidden>Select User Type</option>
                                                            <option value="1">Admin</option>
                                                            <option value="2">User</option>
                                                        </select>
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
                                                        <input type="date" value="<?=(date('Y') - 18)."-".date('m-d')?>" name="birthday" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                             </div>

                                            </div>

                                               <div class="form-group">
                                                    <h5> Mobile Number: <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="mobile" maxlength="11" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                            <h5>Unit/Building/House Number, Street Number or Street Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="address" class="form-control" required     data-validation-required-message="This field is required">
                                                            </div>
                                                </div>

                                                <div class="form-row">   
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> Email <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="email" name="email" class="form-control" required    data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5>Username<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="username" class="form-control" required data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                  <div class="form-row">   
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> Password <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> Confirm Password <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="password" name="confirm_password" class="form-control" required    data-validation-required-message="This field is required">
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

                <script src="/js/dashmix.core.min.js"></script>
        		<script src="/js/dashmix.app.min.js"></script>

                <script src="/js/vendors.min.js"></script>
                <script src="/assets/icons/feather-icons/feather.min.js"></script>
                <script src="/assets/vendor_components/datatable/datatables.min.js"></script>
                <script src="/js/pages/data-table.js"></script>
                <script src="/js/template.js"></script>
                <script src="/js/Validation.js"></script>
                
                <script>
                    $(document).ready(function() {
                        $('#frmAddUser').submit(function(e){

                            const password =  $("input[name='password']").val();
                            const confirm_password = $("input[name='confirm_password']").val();
                            alert(password +"==="+ confirm_password)
                            if (password == confirm_password) {
                                e.preventDefault();
                                alert("Password and Confirm password is not match.");
                            }
                           
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

                         

                        });

                    });
                </script>