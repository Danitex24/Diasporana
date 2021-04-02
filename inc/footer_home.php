<section class="image-cover" style="background:url(assets/img/salamat-footer.png) no-repeat;" data-overlay="5">
				<div class="container">
					<div class="row justify-content-center">
						
						<div class="col-lg-8 col-md-8">
							
							<div class="caption-wrap-content text-center">
								<h2>Search Perfect Place in your City</h2>
								<p class="mb-5">We post regulary base on cities to ease the work of our users</p>
								<a href="./listings.php" class="btn btn-light btn-md rounded">Explore More Property</a>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Smart Testimonials End ================================== -->
			
			<!-- ================================= Blog Grid ================================== -->
			<!-- =================
			<section>
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>News By Resido</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
					
					<div class="row">
						

						<div class="col-lg-4 col-md-6">
							<div class="blog-wrap-grid">
								
								<div class="blog-thumb">
									<a href="blog-detail.html"><img src="assets/img/p-11.jpg" class="img-fluid" alt="" /></a>
								</div>
								
								<div class="blog-info">
									<span class="post-date"><i class="ti-calendar"></i>30 july 2018</span>
								</div>
								
								<div class="blog-body">
									<h4 class="bl-title"><a href="blog-detail.html">Why people choose listio for own properties</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
									<a href="blo-detail.html" class="bl-continue">Continue</a>
								</div>
								
							</div>
						</div>
						
					
						<div class="col-lg-4 col-md-6">
							<div class="blog-wrap-grid">
								
								<div class="blog-thumb">
									<a href="blog-detail.html"><img src="assets/img/p-8.jpg" class="img-fluid" alt="" /></a>
								</div>
								
								<div class="blog-info">
									<span class="post-date"><i class="ti-calendar"></i>10 August 2018</span>
								</div>
								
								<div class="blog-body">
									<h4 class="bl-title"><a href="blog-detail.html">List of benifits and impressive listeo services</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
									<a href="blo-detail.html" class="bl-continue">Continue</a>
								</div>
								
							</div>
						</div>
						
			
						<div class="col-lg-4 col-md-6">
							<div class="blog-wrap-grid">
								
								<div class="blog-thumb">
									<a href="blog-detail.html"><img src="assets/img/p-10.jpg" class="img-fluid" alt="" /></a>
								</div>
								
								<div class="blog-info">
									<span class="post-date"><i class="ti-calendar"></i>30 Sep 2018</span>
								</div>
								
								<div class="blog-body">
									<h4 class="bl-title"><a href="blog-detail.html">What people says about listio properties</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
									<a href="blo-detail.html" class="bl-continue">Continue</a>
								</div>
								
							</div>
						</div>
						
					</div>
					
				</div>		
			</section>
			 Blog Grid End ================= -->
						
			<!-- ============================ Call To Action ================================== -->
			<section class="bg-red call-to-act-wrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							
							<div class="call-to-act">
								<div class="call-to-act-head">
									<h3>Want to submit your property for managment?</h3>
									<span>We'll help you to sale your property faster</span>
								</div>
								<?php
								//echo button base on user session
									if (!empty($_SESSION['id'])) {
										echo '<a href="./submit_property.php" class="btn btn-call-to-act">Submit Property</a>';
									}else{
										echo '<a href="./sign-up.php" class="btn btn-call-to-act">SignUp Today</a>';
									}
								?>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Call To Action End ================================== -->
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

			<footer class="dark-footer skin-dark-footer">
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-4 col-md-8"></div>
							<div class="col-lg-6 col-md-6">
								<p class="mb-0">Copyright ©  Diasporana 2021 All rights reserved.<a href="https://salamat.ng">Salamat Groups Ltd.</a> </p>
							<!--</div>
							
							<div class="col-lg-6 col-md-6 text-right">
								<ul class="footer-bottom-social">
									<li><a href="#"><i class="ti-facebook"></i></a></li>
									<li><a href="#"><i class="ti-twitter"></i></a></li>
									<li><a href="#"><i class="ti-instagram"></i></a></li>
									<li><a href="#"><i class="ti-linkedin"></i></a></li>
								</ul>
							</div>-->
							</div>
						</div>
					</div>
				</div>
			</footer>
			