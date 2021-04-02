<?php include('./controllers/authController.php'); ?>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Log In</h4>
							<div class="login-form">
					<?php if (count($errors) > 0): ?>
  					<div class="alert alert-danger">
    				<?php foreach ($errors as $error): ?>
    				<li>
      				<?php echo $error; ?>
    				</li>
    				<?php endforeach;?>
  					</div>
					<?php endif;?>
								<form method="POST" action="./controllers/authController.php'">
						
									<div class="form-group">
										<label>User Name</label>
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Username">
											<i class="ti-user"></i>
										</div>
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<div class="input-with-icon">
											<input type="password" class="form-control" placeholder="*******">
											<i class="ti-unlock"></i>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" name="login-btn" class="btn btn-md full-width btn-theme-light-2 rounded">Login</button>
									</div>
								
								</form>
							</div>

							<div class="text-center">
								<p class="mt-5"><a href="#" class="link">Forgot password?</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
		
			<!-- Sign Up Modal -->
			<div class="modal fade signup" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="sign-up">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Sign Up</h4>
					<?php if (count($errors) > 0): ?>
  					<div class="alert alert-danger">
    				<?php foreach ($errors as $error): ?>
    				<li>
      				<?php echo $error; ?>
    				</li>
    				<?php endforeach;?>
  					</div>
					<?php endif;?>
							<div class="login-form">
								<form method="POST" action="./controllers/authController.php">
									
									<div class="row">
										
										<!-- <div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Full Name">
													<i class="ti-user"></i>
												</div>
											</div>
										</div> -->
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Email Address</label>
												<div class="input-with-icon">
													<input type="email" name="email" class="form-control" placeholder="example@mail.com">
													<i class="ti-email"></i>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>User Password</label>
												<div class="input-with-icon">
													<input type="password" name="password" class="form-control" placeholder="enter password">
													<i class="ti-user"></i>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Confirm Password</label>
												<div class="input-with-icon">
													<input type="password" class="form-control" placeholder="confirm password">
													<i class="ti-unlock"></i>
												</div>
											</div>
										</div>

										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>User Role</label>
												<div class="input-with-icon">
													<select class="form-control">
														<option>As a Customer</option>
														<option>As a LandLord</option>
														<option>As a Agent</option>
													</select>
													<i class="ti-briefcase"></i>
												</div>
											</div>
										</div>
										
									</div>
									
									<div class="form-group">
										<button type="submit" name="signup-btn" class="btn btn-md full-width btn-theme-light-2 rounded">Sign Up</button>
									</div>
								
								</form>
							</div>
							<div class="text-center">
								<p class="mt-5"><i class="ti-user mr-1"></i>Already Have An Account? <a href="#" class="link">LogIn Here</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>