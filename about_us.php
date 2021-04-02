<?php 
session_start();
$pagename="About Us";
include('./includes/connection.php');
include('./inc/header_home.php');

include('./inc/menu.php');
?>
<!-- ========================== Page Title Start================================ -->
			<div class="badge bg-red page-title ">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 mt-5">
							
							<h2 class="ipt-title mt-5">About Us</h2>
							<span class="ipn-subtitle text-white">Who we are & our mission</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ==================================Daniel airtel 09015027257-->
			
			<!-- ============================ Our Story Start ================================== -->
			<section>
			
				<div class="container">
				
					<!-- row Start -->
					<div class="row align-items-center">

						<div class="col-lg-6 col-md-6">
							<img src="assets/img/Salamat-properties.jpg" class="img-fluid" alt="" />
						</div>

						<div class="col-lg-6 col-md-6">
							<div class="story-wrap explore-content">
								
								<h2>Who We Are</h2>
								<p>Diasporana is powered by <a href="https://www.salamat.ng">Salamat Groups Ltd.</a>&nbsp; This is to provide available properties to people who are residing abraod and willing to own properties at home.</p>
								<p>We help you buy the property and mange it for you. You dont need to be home, all the updates are show to you right in your dashboard</p>
								
							</div>
						</div>
						
					</div>
					<!-- /row -->					
					
				</div>
						
			</section>
			<!-- ============================ Our Story End ================================== -->

			
			<!-- ================= Our Mission ================= -->
			<section>
				<div class="container">
				
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<h2>Our Mission & Values</h2>
								<p>We re the property people</p>
							</div>
						</div>
					</div>
					
					<div class="row align-items-center">
						
						<div class="col-lg-6 col-md-6">
							
							<div class="icon-mi-left">
								<i class="ti-home theme-cl"></i>
								<div class="icon-mi-left-content">
									<h4>Our Mission</h4>
									<p>Our major aim is to provide a platform that will enable the people living outside the country to own properties even though they are not physically at home. </p>
								</div>
							</div>
							
							<div class="icon-mi-left">
								<i class="ti-book theme-cl"></i>
								<div class="icon-mi-left-content">
									<h4>Values</h4>
									<p>We value you so much and think is the best time for you to own your property even though you not in the country (NIgeria). We update you with each step we take on your property.</p>
								</div>
							</div>
							
							<div class="icon-mi-left">
								<i class="ti-user theme-cl"></i>
								<span class="icon-mi-left-content"></span>
									<h4>Read to own a propert now?</h4>&nbsp;&nbsp;
									<a href="./listings.php" class="btn btn-danger btn-sm btn-rounded">Buy now</a>
								
							</div>
							
						</div>
						
						<div class="col-lg-6 col-md-6">
							<img src="assets/img/home-abt.JPG" class="img-fluid" alt="" />
						</div>
						
					</div>
				</div>
			</section>
		<?php 
			 include('./inc/footer_home.php');
//============================ Footer End ================================== 
			
		//Log In and register Modal 

  include('./inc/login_signup_modal.php');	 

		//============================================================== 
		//All Jquery -->
		//============================================================== 
	 include('./inc/jq.php');
