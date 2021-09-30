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
                            <h4 class="box-title">Edit Citizen Information</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col">
                                    <form action="/admin/citizen/update" method="post">
             
                                        <!-- THIS IS THE START FORM  -->
                                        <input type="hidden" value="<?=$citizen['id']?>" name="citizen_id">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <h5> Precint Number <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" value="<?=$citizen['precintNumber']?>" name="precintNumber" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>

                                                <div class="form-row">   
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> First Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" value="<?=$citizen['firstname']?>" name="firstname" class="form-control" required data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> Last Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" value="<?=$citizen['lastname']?>" name="lastname" class="form-control" required    data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <h5> Gender <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="gender" id="gender" required class="form-control">
                                                            
                                                            <?php  if ($citizen['gender'] == "Male") {?>
                                                            <option value="<?=$citizen['gender']?>" selected ><?=$citizen['gender']?></option>
                                                            <option value="Female">Female</option>
                                                            <?php }
                                                                else{?>
                                                            <option value="<?=$citizen['gender']?>" selected ><?=$citizen['gender']?></option>
                                                            <option value="Male">Male</option>

                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5> Birthday <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="date" value="<?=$citizen['birthday']?>" name="birthday" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                                <div class="form-row">   
                                                   
                                                   <div class="col">
                                                   <div class="form-group">
                                                    <h5> Nickname</h5>
                                                    <div class="controls">
                                                        <input type="text" value="<?=$citizen['nickname']?>"  name="nickName" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                                   </div>
                                                   <div class="col">
                                                   <div class="form-group">
                                                    <h5> Mobile Number: <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text"  value="<?=$citizen['contactNumber']?>" name="mobile" maxlength="11" class="form-control" required data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                                   </div>
                                               </div>
                                               
                                                <div class="form-group">
                                                            <h5>Unit/Building/House Number, Street Number or Street Name <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input  value="<?=$citizen['address']?>" type="text" name="address" class="form-control" required     data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                <!-- <div class="form-row">   
                                                   
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> District: <span class="text-danger">*</span></h5>'
                                                            <div class="controls">
                                                                <input type="text" value="<?=$citizen['district']?>" name="city" class="form-control" required    data-validation-required-message="This field is required">
                                                            </div>
                                                            </div>
                                                        </div>
                                                  
                                                    <div class="col">
                                                    <div class="form-group">
                                                            <h5> Barangay: <span class="text-danger">*</span></h5>
                                   
                                                            <div class="controls">
                                                                <input type="text" value="<?=$citizen['district']?>" name="barangay" class="form-control" required    data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="form-row">   
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> District:<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" value="<?=$citizen['district']?>" name="district" class="form-control" required data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="form-group">
                                                            <h5> Barangay: <span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" value="<?=$citizen['barangay']?>" name="barangay" class="form-control" required    data-validation-required-message="This field is required">
                                                            </div>
                                                        </div>
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
            