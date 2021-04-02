
			<section>
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Explore Good places</h2>
								<p>Get genuie and affordable properties in good position, buy and develope with no stress. We help you manage all at your demand. </p>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- Single Property -->
<?php
//session_start();
require_once('./includes/connection.php');

    $sql = "SELECT * FROM property  ORDER BY id ASC LIMIT 6";
    $result = mysqli_query($conn, $sql);
    $count=mysqli_num_rows($result);

if ($count==0) {
      echo '<div align="center" class="col-12 text-center alert alert-danger"><h3 class="font-weight-bold text-danger text-center" >No Property available now</h3></div>';
          }
          else{
    while ($fetch = mysqli_fetch_array($result)) {?>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
							<div>
<?php 
	echo '<a href="./single_property.php?id='.$fetch['id'].'">';
	echo '<img class="square"src="./uploads/' . $fetch['propImage']. '">'; ?>
											</a></div>
										</div>
									</div>
								</div>
								
								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
					<?php 
					//check the status of the property
					if ($fetch['status'] == 'Sold') {
						echo '<span class="badge bg-red">Sold Out!</span>';
					}elseif ($fetch['frent'] =='Yes') {
						echo '<span class="badge bg-blue">For Rent</span>';
					}elseif ($fetch['fsale'] =='Yes') {
						echo '<a href="./single_property.php?id='.$fetch['id'].'">';
						echo '<span class="badge bg-green">For Sale</span> </a>';
					}
					?>

					<h4 class="listing-name verified">
					<?php echo '<a href="./single_property.php?id='.$fetch['id'].'">';
						  echo $fetch['name'];
					?></a></h4>
										</div>
										<div class="listing-short-detail-flex">
							<h6 class="listing-card-info-price">&#8358;
					<?php echo '<a href="./single_property.php?id='.$fetch['id'].'">';
						  echo $fetch['price'];
					?></h6>
										</div>
									</div>
								</div>
								
								<div class="price-features-wrapper">
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div><?php echo $fetch['bedroom']; ?>&nbsp;Bedroom
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div><?php echo $fetch['bathroom']; ?>&nbsp;Bathroom
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div><?php echo $fetch['sqf']; ?>&nbsp;Sqf.
										</div>
									</div>
								</div>
								
								<div class="listing-detail-footer">
									<div class="footer-first">
										<div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="" /><?php echo $fetch['propLocation']; ?></div>
									</div>
									<div class="footer-flex">
									&nbsp;
			<?php echo '<a href="./single_property.php?id='.$fetch['id'].'"class="prt-view">View</a>';?>
									</div>
								</div>
								
							</div>
						</div>
						<!-- End Single Property -->
					<?php }}?>
					<!-- End  of while loop-->		
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<a href="./listings.php" class="btn btn-theme-light-2 rounded">Browse More Properties</a>
						</div>
					</div>
					
				</div>	
			</section>
			
<!-- =========================== Explore Property =========================== -->