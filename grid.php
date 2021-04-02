<?php
session_start();
$pagename="Properties";

include('./includes/connection.php'); 
include('./inc/header_home.php');

include('./inc/menu.php');

?>

<!-- ========================== Page Title Start================================ -->
			<div class="badge bg-red page-title">
				<div class="container mt-5">
					<div class="row justify-content-center mt-5">
						<div class="col-lg-10 col-md-12">
							
							<div class="full-search-2 eclip-search italian-search hero-search-radius shadow-hard">
								<div class="hero-search-content">
									<div class="row">
									
										<div class="col-lg-4 col-md-4 col-sm-12 b-r">
											<div class="form-group">
												<div class="choose-propert-type">
													<ul>
														<li>
															<input id="cp-1" class="checkbox-custom" name="cpt" type="radio" checked>
															<label for="cp-1" class="checkbox-custom-label">Buy</label>
														</li>
														<li>
															<input id="cp-2" class="checkbox-custom" name="cpt" type="radio">
															<label for="cp-2" class="checkbox-custom-label">Rent</label>
														</li>
														<!--<li>
															<input id="cp-3" class="checkbox-custom" name="cpt" type="radio">
															<label for="cp-3" class="checkbox-custom-label">Sold</label>
														</li>-->
													</ul>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-5 col-sm-12 p-0 elio">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Search for a location">
													<img src="assets/img/pin.svg" width="20"></i>
												</div>
											</div>
										</div>
										
										<div class="col-lg-2 col-md-3 col-sm-12">
											<div class="form-group">
												<a href="#" class="btn search-btn black">Search</a>
											</div>
										</div>
												
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- =========================== All Property =============================== -->	
			<section>
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-12 col-md-12">
							<div class="item-shorting-box">
								<div class="item-shorting clearfix">
									<div class="left-column pull-left"><h4 class="m-0">Property Listing</h4></div>
								</div>
								<div class="item-shorting-box-right">
									<div class="shorting-by">
										<select id="shorty" class="form-control">
											<option value="">Filtter</option>
											<option value="1">Low Price</option>
											<option value="2">High Price</option>
										</select>
									</div>
									<ul class="shorting-list">
										<li><a href="grid.php" class="active"><i class="ti-layout-grid2"></i></a></li>
										<li><a href="./listings.php"><i class="ti-view-list"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				
					<div class="row">
<?php
require_once('./includes/connection.php');

    $sql = "SELECT * FROM property  ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);
    $count=mysqli_num_rows($result);

if ($count==0) {
      echo '<div align="center" class="col-12 text-center alert alert-danger"><h3 class="font-weight-bold text-danger text-center" >No Property available now</h3></div>';
          }
          else{
    while ($view = mysqli_fetch_array($result)) {?>	
						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div>
								<?php
								echo '<a href="./single_property.php?id='.$view['id'].'">';
								echo '<img class="img-fluid mx-auto"src="./uploads/' . $view['propImage']. '">'; ?>
											</a>
											</div>
										</div>
									</div>
								</div>
																			<div class="property-status">
					<?php 
					//check the status of the property
					if ($view['status'] == 'Sold') {
						echo '<span class="badge bg-red">Sold Out!</span>';
					}elseif ($view['frent'] =='Yes') {
						echo '<span class="badge bg-blue">For Rent</span>';
					}elseif ($view['fsale'] =='Yes') {
						echo '<a href="./single_property.php?id='.$view['id'].'">';
						echo '<span class="badge bg-green">For Sale</span> </a>';
					}
					?>
											</div>
								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<h4 class="listing-name verified">
								<?php
								echo '<a href="./single_property.php?id='.$view['id'].'">';
								echo $view['name']; ?>
												</a>
											</h4>
										</div>
										<div class="listing-short-detail-flex">
											<h6 class="listing-card-info-price">&#8358;
								<?php
								echo '<a href="./single_property.php?id='.$view['id'].'">';
								echo $view['price']; ?>
								</a>
											</h6>
										</div>
									</div>
								</div>
								
								<div class="price-features-wrapper">
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>
								<?php
								echo '<a href="./single_property.php?id='.$view['id'].'">';
								echo $view['bedroom']; ?>
								</a> Beds
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>
								<?php
								echo '<a href="./single_property.php?id='.$view['id'].'">';
								echo $view['bathroom']; ?>
								</a>
											 Bath
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>
								<?php
								echo '<a href="./single_property.php?id='.$view['id'].'">';
								echo $view['sqf']; ?>
								</a>
											 sqft
										</div>
									</div>
								</div>
								
								<div class="listing-detail-footer">
									<div class="footer-first">
										<div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="" />
								<?php
								echo '<a href="./single_property.php?id='.$view['id'].'">';
								echo $view['propLocation']; ?>
								</a>
										</div>
									</div>
									<div class="footer-flex">
										<a href="./single_property.php" class="prt-view">Buy Now</a>
									</div>
								</div>
							</div>
						</div>
						<?php }} ?><!-- End Single Property -->
					</div>
					
					<!-- Pagination -->
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<ul class="pagination p-center">
								<li class="page-item">
								  <a class="page-link" href="#" aria-label="Previous">
									<span class="ti-arrow-left"></span>
									<span class="sr-only">Previous</span>
								  </a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item active"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">...</a></li>
								<li class="page-item"><a class="page-link" href="#">18</a></li>
								<li class="page-item">
								  <a class="page-link" href="#" aria-label="Next">
									<span class="ti-arrow-right"></span>
									<span class="sr-only">Next</span>
								  </a>
								</li>
							</ul>
						</div>
					</div>
<!--================== include brows by location ================================ -->
					<?php include('./inc/by_location.php'); ?>
				</div>		
			</section>
			<!-- =========================== All Property =============================== -->

			<?php 

			 include('./inc/footer_home.php');
//============================ Footer End ================================== 
			
		//Log In and register Modal 

  include('./inc/login_signup_modal.php');	 

		//============================================================== 
		//All Jquery -->
		//============================================================== 
	 include('./inc/jq.php');