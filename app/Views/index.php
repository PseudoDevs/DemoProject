<?php echo view('templates/header') ?>


<body class="hold-transition theme-primary">
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-6 col-md-12 col-12">
						<div class="content-top-agile p-8">
							<h2 class="text-primary">Assistance Management System</h2>
							<p class="text-primary-50">Sign in to your Account</p>							
						</div>
						<div class="p-30 rounded5 box-shadowed">
							<form action="" method="post">
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-primary"><i class="ti-user"></i></span>
										</div>
										<input type="text" class="form-control pl-5 bg-transparent plc-white" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-primary"><i class="ti-lock"></i></span>
										</div>
										<input type="password" class="form-control pl-15 bg-transparent plc-white" placeholder="Password">
									</div>
								</div>
								  <div class="row">
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-primary btn-block mt-10">SIGN IN</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>														
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<?= script_tag('js/vendors.min.js'); ?>
    <?= script_tag('assets/icons/feather-icons/feather.min.js'); ?>

</body>
</html>