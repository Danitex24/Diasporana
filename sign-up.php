<?php 
$pagename="sign-up";
include('./includes/connection.php');
include('./inc/verify_email.php');
include ('./controllers/authController.php');
//query= mysqli_query($conn,"SELECT * FROM user_meta ORDER BY id ASC")or die(mysqli_error($conn));
//$qrow = mysqli_fetch_array($query, MYSQLI_ASSOC);


include('./inc/header_home.php');

include('./inc/menu.php');
?>
<!-- ========================= Page Title Start=============================== -->
      <div class="page-title" style="background-color: #e21137; color: #fff;">
        <div class="container mt-5">
          <div class="row">
            <div class="col-lg-12 col-md-12 mt-5">
         
              <center>
              <p class="text-white">Welcome to Diasporana <?php echo $pagename."page,"; ?> kindly register below to proceed.</p>
              </center>

            </div>
          </div>
        </div>
      </div>
<!-- ========================= Page Title End =============================== -->
<!-- ========================== User Dashboard =============================== -->
			<!-- Sign Up Modal -->
			<div class="container" id="" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-md-8" id="sign-up">
						<div class="modal-body">
							<h4 class="modal-header-title">Sign Up</h4>
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
								<span class="error"><?php echo $emailErr; ?></span>
													<input type="email" name="email" class="form-control" placeholder="example@mail.com">
													<i class="ti-email"></i>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>User Password</label>
												<div class="input-with-icon">
								<span class="error"><?php echo $passwordErr; ?></span>
													<input type="password" name="password" class="form-control" placeholder="enter password">
													<i class="ti-user"></i>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Confirm Password</label>
												<div class="input-with-icon">
								<span class="error"><?php echo $cpasswordErr; ?></span>
													<input type="password" name="passwordConf" class="form-control" placeholder="confirm password">
													<i class="ti-unlock"></i>
												</div>
											</div>
										</div>

										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>User Role</label>
												<div class="input-with-icon">
													<select class="form-control" name="role">
														<option value="Customer">As a Customer</option>
														<option value="LandLord">As a LandLord</option>
														<option value="Agent">As a Agent</option>
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
								<p class="mt-5"><i class="ti-user mr-1"></i>Already Have An Account? <a href="./login.php" class="link">LogIn Here</a></p>
							</div>
						</div>
					</div>
				<div class="col-lg-2"></div>
			</div>
		</div>
		<!-- End Modal -->

  <?php 
       include('./inc/footer_home.php');
//============================ Footer End ================================== 


    //============================================================== 
    //All Jquery -->
    //============================================================== 
   include('./inc/jq.php');

   ?>
