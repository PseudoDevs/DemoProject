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
                        <p class="page-title"><a href="/admin/users"><i class="fa fa-arrow-left"></i> Back to User's List</a></p>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Admin</li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit User</li>
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
                            <h4 class="box-title">Edit User Information</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                <form method="post" action="/admin/users/update">
                                        <!-- THIS IS THE START FORM  -->
                                        <input type="hidden" name="user_id" value="<?=$users['id']?>">
                                        <div class="row">
                                            <div class="col-12">
                                            <div class="form-group">
                                                    <h5> User Type <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="type" id="type" required class="form-control">
                                                            <option value="" selected disabled hidden>Select User Type</option>
                                                            <?php  if ($users['type'] == 1) {?>
                                                                <option value="<?=$users['type']?>" selected >Admin</option>
                                                                <option value="2">User</option>
                                                            <?php }
                                                                else{?>
                                                                <option value="<?=$users['type']?>" selected >User</option>
                                                                <option value="1">Admin</option>
                                                            <?php }?>
                                                          
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">   

                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> First Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" value="<?=$users['firstname']?>" name="firstname" class="form-control" required data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> Last Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" value="<?=$users['lastname']?>" name="lastname" class="form-control" required    data-validation-required-message="This field is required">
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
                                                        <?php  if ($users['gender'] == "Male") {?>
                                                            <option value="<?=$users['gender']?>" selected ><?=$users['gender']?></option>
                                                            <option value="Female">Female</option>
                                                    
                                                            <?php }
                                                                else{?>
                                                             <option value="<?=$users['gender']?>" selected ><?=$users['gender']?></option>
                                                            <option value="Male">Male</option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                    </div> 
                                                    <div class="col">
                                                    <div class="form-group">
                                                    <h5> Birthday <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="date" value="<?=$users['birthday']?>" name="birthday" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                             </div>

                                            </div>

                                               <div class="form-group">
                                                    <h5> Mobile Number: <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" value="<?=$users['contactNumber']?>" name="mobile" maxlength="11" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                            <h5>Unit/Building/House Number, Street Number or Street Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" value="<?=$users['address']?>" name="address" class="form-control" required     data-validation-required-message="This field is required">
                                                            </div>
                                                </div>

                                                <div class="form-row">   
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> Email <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="email" value="<?=$users['email']?>" name="email" class="form-control" required    data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5>Username<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" value="<?=$users['username']?>" name="username" class="form-control" required data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                  <div class="form-row">   
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> Password </h5>
                                                            <div class="controls">
                                                                <input type="password" value="" name="password" class="form-control"  data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> Confirm Password </h5>
                                                            <div class="controls">
                                                                <input type="password" name="confirm_password" class="form-control"     data-validation-required-message="This field is required">
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

                <script src="/js/dashmix.core.min.js"></script>
        		<script src="/js/dashmix.app.min.js"></script>

                <script src="/js/vendors.min.js"></script>
                <script src="/assets/icons/feather-icons/feather.min.js"></script>
                <script src="/assets/vendor_components/datatable/datatables.min.js"></script>
                <script src="/js/pages/data-table.js"></script>
                <script src="/js/template.js"></script>
                <script src="/js/Validation.js"></script>
                <!-- <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.0.js"></script> -->
            