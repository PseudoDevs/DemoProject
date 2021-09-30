<?php echo view('templates/header') ?>

<?php
	$session = \Config\Services::session();

	echo $session->getFlashdata('user_not_exist');
	if ($session->getFlashdata('user_not_exist')) { ?>
	<script>
		alert(<?=$session->getFlashdata('user_not_exist')?>);
	</script>

	<?php } ?>

<body class="hold-transition theme-primary">
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-6 col-md-12 col-12">
						<div class="content-top-agile p-8">
							<h2 class="text-primary">Assistance Management System</h2>
							<h4 class="text-primary">Tulong Manilenyo</h4>
							<p class="text-primary-50">Lingkod Bayan</p>		
							<p class="text-primary-50">Sign in to your Account</p>							
						</div>
						<div class="p-30 rounded5 box-shadowed">
							<form action="/signin" method="post">
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-primary"><i class="ti-user"></i></span>
										</div>
										<input type="text" name="username" class="form-control bg-transparent plc-white" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-primary"><i class="ti-lock"></i></span>
										</div>
										<input type="password" name="password" class="form-control bg-transparent plc-white" placeholder="Password">
									</div>
								</div>
								  <div class="row">
									<div class="col-12 text-center">
									  
									  <input type="submit" class="btn btn-primary btn-block mt-10" value="SIGN IN">
									</div>
						
								  </div>
							</form>														
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <script src="<?=base_url("public/js/vendors.min.js")?>"></script> -->
	<!-- <script src="<?=base_url("public/assets/icons/feather-icons/feather.min.js")?>"></script> -->
	<!-- Vendor JS -->
	<script src="/js/vendors.min.js"></script>
	<script src="/assets/icons/feather-icons/feather.min.js"></script>

</body>
</html>