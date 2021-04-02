<?php 
session_start();
$pagename="Contact Us";
include('./includes/connection.php');
include('./inc/header_home.php');

include('./inc/menu.php');

?>
<!-- ============================ Page Title Start================================== -->
			<div class="badge bg-red page-title">
				<div class="container mt-5">
					<div class="row">
						<div class="col-lg-12 col-md-12 mt-5">
							
							<h2 class="ipt-title">Contact Us</h2>
							<span class="ipn-subtitle text-white">Ready to talk to us?</span>
							
						</div>
					</div>
				</div>
			</div>
<!-- ============================ Page Title End ================================== -->
<!-- ======================= contact section Start ============================== -->
			<section>
			
				<div class="container ">
				
					<!-- row Start -->
					<div class="row" >
					
						<div class="col-lg-7 col-md-7">
							
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control simple">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control simple">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label>Subject</label>
								<input type="text" class="form-control simple">
							</div>
							
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control simple"></textarea>
							</div>
							
							<div class="form-group">
								<button class="btn btn-theme-light-2 rounded" type="submit">Submit Now</button>
							</div>
											
						</div>
						
						<div class="col-lg-5 col-md-5 mt-4">
							<div class="contact-info">
								
								<h2>Get In Touch</h2>
								<p>You can call or send us message should incase you have any issues our Customer support is her 24/7 </p>
								
								<div class="cn-info-detail">
									<div class="cn-info-icon">
										<i class="ti-home"></i>
									</div>
									<div class="cn-info-content mt-3">
										<h4 class="cn-info-title">ADDRESS</h4>
										5th Floo, Merit House, Plot 22 Aguiyi Ironsi Street, Maitama, Abuja.
									</div>
								</div>
								
								<div class="cn-info-content">
									<div class="cn-info-icon">
										<i class="ti-email"></i>
									</div>
									<div class="cn-info-content">
										<h4 class="cn-info-title">CONTACT MAIL</h4>
										info@diasporana.ng
									</div>
								</div>
								
								<div class="cn-info-content mt-3">
									<div class="cn-info-icon">
										<i class="ti-mobile"></i>
									</div>
									<div class="cn-info-content">
										<h4 class="cn-info-title">CONTACT NUMBER</h4>
										+234 7025 0047 95
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
					<!-- /row -->		
	<!--================== include brows by location ================================ -->
					<?php //include('../resido/inc/by_location.php'); ?>
				</div>
						
			</section>
<!-- ========================= contact section end End ============================= -->

<?php 
			 include('./inc/footer_home.php');
//============================ Footer End ================================== 
			
		//Log In and register Modal 

  include('./inc/login_signup_modal.php');	 

		//============================================================== 
		//All Jquery -->
		//============================================================== 
	 include('./inc/jq.php');