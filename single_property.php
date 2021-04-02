<?php 
session_start();
$pagename="Property Details";
include('./includes/connection.php');
include('./inc/header_home.php');

include('./inc/menu.php');

$session_id=$_SESSION['id'];
 if(!isset($_GET['id'])){
  header("Location:../includes/logout.php");
  }else {
  $pageid = $_GET['id'];
}

$query= mysqli_query($conn,"SELECT * FROM users  WHERE uID='$session_id' ")or die(mysqli_error($conn));
$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>

<!-- ========================== Page Title Start============================= -->
			<div class="badge bg-red page-title">
				<div class="container mt-5">
					<div class="row">
						<div class="col-lg-12 col-md-12 ">
							
							<h2 class="ipt-title">Property Details</h2>
							<span class="ipn-subtitle text-white">Find all the details about this property below</span>
							
						</div>
					</div>
				</div>
			</div>
<!-- ============================ Page Title End ================================ -->
<!-- ========================== Hero Banner  Start================================ -->
<?php

	$sqls=mysqli_query($conn, "SELECT * FROM property WHERE id='$pageid'")
	or die(mysqli_error($conn));
	$view=mysqli_fetch_array($sqls,MYSQLI_ASSOC);
	$id = $view['id'];
?>
			<div class="featured_slick_gallery gray ">
				<div class="featured_slick_gallery-slide ">

					<div class="featured_slick_padd">
<?php echo '<img class="img-fluid mx-auto" src="./uploads/'.$view['propImage'].'">'; ?>
					</div>

					<div class="featured_slick_padd">
<?php echo '<img class="img-fluid mx-auto" src="./uploads/'.$view['image1'].'">'; ?>
					</div>

					<div class="featured_slick_padd">
<?php echo '<img class="img-fluid mx-auto" src="./uploads/'.$view['image2'].'">'; ?>
					</div>

					<div class="featured_slick_padd">
<?php echo '<img class="img-fluid mx-auto" src="./uploads/'.$view['image3'].'">'; ?>
					</div>

					<div class="featured_slick_padd">
<?php echo '<img class="img-fluid mx-auto" src="./uploads/'.$view['image4'].'">'; ?>
					</div>
				</div>
<?php echo '<a href="./user/request-property.php?id='.$id.'" class="btn-view-pic">Request to buy this property</a>'; ?>

			</div>
<!-- ========================== Hero Banner End ================================ -->
<!-- ======================== Property Detail Start ============================== -->
			<section class="gray-simple">
				<div class="container">
					<div class="row">
						
						<!-- property main detail -->
						<div class="col-lg-8 col-md-12 col-sm-12">
						
							<div class="property_block_wrap style-2 p-4">
								<div class="prt-detail-title-desc">
									<!-- check status of viewed property -->
					<?php 
					
					if ($view['status'] == 'Sold') {
						echo '<span class="badge bg-red">Sold Out!</span>';
					}elseif ($view['frent'] =='Yes') {
						echo '<span class="badge bg-blue">For Rent</span>';
					}elseif ($view['fsale'] =='Yes') {
						echo '<a href="./single_property.php?id='.$view['id'].'">';
						echo '<span class="badge bg-green">For Sale</span> </a>';
					}?>
									<h3><?php echo $view['name']; ?></h3>
									<span><i class="lni-map-marker"></i> 
										<?php echo $view['propLocation']; ?></span>
									<h3 class="prt-price-fix">&#8358;<?php echo $view['price']; ?></h3>
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt=""></div><?php echo $view['bedroom']; ?> Beds
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt=""></div><?php echo $view['bathroom']; ?> Bath
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt=""></div><?php echo $view['sqf']; ?> sqft
										</div>

									</div>
							<div class="listing-card-info mt-4">
<?php
		if ($view['status'] == 'Sold') {
			echo '<a href="#" class="btn btn-rounded btn-primary mt-2" disabled="yes"><span class="zmdi zmdi-lock"></span>&nbsp;&nbsp;This property has been sold out</a>&nbsp;';

	echo '<a href="./listings.php" class="btn btn-rounded btn-info mt-2"><span class="arrow arrow-left"></span>&nbsp;&nbsp; Click to go back to properties &nbsp;</a>';
		}else{


 echo '<a href="./user/request-property.php?id='.$id.'" class="btn btn-danger  btn rounded">Request to buy this property</a>'; 
 }?>

										</div>
								</div>
							</div>
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clOne" aria-controls="clOne" href="javascript:void(0);" aria-expanded="false"><h4 class="property_block_title">Detail & Features</h4></a>
								</div>
								<div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne">
									<div class="block-body">
										<ul class="deatil_features">
									<li><strong>Bedrooms:</strong><?php echo $view['bedroom']; ?>  Beds</li>
									<li><strong>Bathrooms:</strong><?php echo $view['bathroom']; ?>  Bath</li>
									<li><strong>Areas:</strong><?php echo $view['sqf']; ?>  sq ft</li>
									<li><strong>Garage</strong><?php echo $view['garages']; ?> </li>
									<li><strong>Property Type:</strong><?php echo $view['propType']; ?> </li>
									<li><strong>Status:</strong>
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
									</li>	
										</ul>
									</div>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#dsrp" data-bs-target="#clTwo" aria-controls="clTwo" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Description</h4></a>
								</div>
								<div id="clTwo" class="collapse show">
									<div class="block-body">
										<p><?php echo $view['description']; ?></p>
									</div>
								</div>
							</div>
							

							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#loca"  data-bs-target="#clSix" aria-controls="clSix" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Location</h4></a>
								</div>
								
								<div id="clSix" class="collapse show">
									<div class="block-body">
										<div class="map-container">
											<div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Our Location"><?php echo $view['propLocation']; ?></div>
										</div>

									</div>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#clSev"  data-bs-target="#clSev" aria-controls="clOne" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Gallery</h4></a>
								</div>
								
								<div id="clSev" class="collapse show">
									<div class="block-body">
										<ul class="list-gallery-inline">
											<li>
<?php echo '<img class="img-fluid mx-auto" src="./uploads/'.$view['propImage'].'"  alt="">'; ?>
											</li>
											<li>
<?php echo '<img class="img-fluid mx-auto"src="./uploads/'.$view['image1'].'"  alt="">'; ?>
											</li>
											<li>
<?php echo '<img class="img-fluid mx-auto" src="./uploads/'.$view['image2'].'"  alt="">'; ?>
											</li>
											<li>
<?php echo '<img class="img-fluid mx-auto" src="./uploads/'.$view['image3'].'" alt="">'; ?>
											</li>
											<li>
<?php echo '<img class="img-fluid mx-auto" src="./uploads/'.$view['image4'].'" alt="" >'; ?>
											</li>
											<li>
												<a href="assets/img/p-6.jpg" class="mfp-gallery"><img src="assets/img/p-6.jpg" class="img-fluid mx-auto" alt="" /></a>
											</li>
										</ul>
									</div>
								</div>
								
							</div>
				
						</div>			
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							
							<!-- Like And Share -->
							<div class="like_share_wrap b-0">
								<h4 class="text-center">Share on:</h4>
								<hr>
								<ul class="like_share_list">
									<li>
										<a class="fa fa-facebook" href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"></a>
									</li>
									<li>
									<a class="fa fa-twitter" href="https://twitter.com/intent/tweet?" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=%20Check%20up%20this%20awesome%20content' + encodeURIComponent(document.title) + ':%20 ' + encodeURIComponent(document.URL)); return false;"></a>	
									</li>
									
								</ul>
								<ul  class="like_share_list mt-2">
									<li>
									<a class="fa fa-whatsapp" href="https://wa.me/?text=Buy%20Properties%20on%20Diaspora%20with%20low%20amount%20and%20allow%20us%20manage%20it%20for%20you./share?url=" target="_blank" title="Share on Whatsapp" onclick="window.open('https://wa.me/?text=Buy%20Properties%20on%20Diaspora%20with%20low%20amount%20and%20allow%20us%20manage%20it%20for%20you./share?url=' + encodeURIComponent(document.URL)); return false;"></a>
									</li>
									<li>
										<a href="JavaScript:Void(0);" class="btn btn-block btn-likes" data-toggle="tooltip" data-original-title="Save"><i class="fas fa-heart"></i>Save</a>
									</li>
								</ul>
							</div>
							
							<div class="details-sidebar">
								<!-- Featured Property -->
								<div class="sidebar-widgets">
									
									<h4>Recent Properties</h4>
									
									<div class="sidebar_featured_property">
<?php
//session_start();
require_once('./includes/connection.php');

    $fsql = "SELECT * FROM property  ORDER BY id DESC LIMIT 3";
    $result = mysqli_query($conn, $fsql);
    $count=mysqli_num_rows($result);

if ($count==0) {
      echo '<div align="center" class="col-12 text-center alert alert-danger"><h3 class="font-weight-bold text-danger text-center" >No Property available now</h3></div>';
          }
          else{
    while ($fview = mysqli_fetch_array($result)) {?>
										<!-- List Sibar Property -->
										<div class="sides_list_property">
											<div class="sides_list_property_thumb">
<?php 
	echo '<a href="./single_property.php?id='.$fview['id'].'">';
	echo '<img class="square"src="./uploads/' . $fview['propImage']. '">'; ?>
											</a>										
											</div>
											<div class="sides_list_property_detail">
												<h4>
										<?php 
											echo '<a href="./single_property.php?id='.$fview['id'].'">';
											echo $fview['name']; ?></a>
												</h4>
												<span><i class="ti-location-pin"></i>
										<?php 
											echo '<a href="./single_property.php?id='.$fview['id'].'">';
											echo $fview['propLocation']; ?></a>
												</span>
												<div class="lists_property_price">
													<div class="lists_property_types">
													<div class="">
					<?php 
					//check the status of the property
					if ($fview['status'] == 'Sold') {
						echo '<span class="badge bg-red">Sold Out!</span>';
					}elseif ($fview['frent'] =='Yes') {
						echo '<span class="badge bg-blue">For Rent</span>';
					}elseif ($fview['fsale'] =='Yes') {
						echo '<a href="./single_property.php?id='.$view['id'].'">';
						echo '<span class="badge bg-green">For Sale</span> </a>';
					}
					?>
													</div>
													</div>
												<div class="lists_property_price_value">
														<h4>&#8358;
											<?php 
											echo '<a href="./single_property.php?id='.$fview['id'].'">';
											echo $fview['price']; ?></a>
														</h4>
													</div>
												</div>
											</div>
										</div>

							<?php }} ?>
										<!-- end of feautured properties -->

								</div>	
								</div>
							
								<!-- Agent Detail -->
								<div class="sides-widget">
									<div class="sides-widget-header">
										<div class="agent-photo"><img src="assets/img/diasporana-home.png" height="60" alt=""></div>
										<div class="sides-widget-details">
											<h4><a href="#">Sales Support</a></h4>
											<span><i class="lni-phone-handset"></i><a href="tell:234 8039575760" class="text-white">234 8039575760</a></span>
										</div>
										<div class="clearfix"></div>
									</div>
									
									<div class="sides-widget-body simple-form">
						<form method="POST" action="./buy_property.php" enctype="">
										<div class="form-group">
											<label>Your Email</label>
											<input type="text" name="email"class="form-control" value="<?php echo $row['email'];?>" readonly="Yes">
										</div>
										<div class="form-group">
											<label>Your Phone No.</label>
											<input type="text" name="phone" class="form-control" value="<?php echo $row['phone'];?>" readonly="Yes">
										</div>
										<div class="form-group">
											<label>Description</label>
											<textarea class="form-control h-50">I'm interested in this property.</textarea>
										</div>
										<button class="btn btn-black btn-md rounded full-width">Send Message</button>
									</form>
									</div>
								</div>
								
								<!-- Mortgage Calculator 
								<div class="sides-widget">

									<div class="sides-widget-header">
										<div class="sides-widget-details">
											<h4><a href="#">Shivangi Preet</a></h4>
											<span>View your Interest Rate</span>
										</div>
										<div class="clearfix"></div>
									</div>
									
									<div class="sides-widget-body simple-form">
										<div class="form-group">
											<div class="input-with-icon">
												<input type="text" class="form-control" placeholder="Sale Price">
												<i class="">&#8358;</i>
											</div>
										</div>
										
										<div class="form-group">
											<div class="input-with-icon">
												<input type="text" class="form-control" placeholder="Down Payment">
												<i class="">&#8358;</i>
											</div>
										</div>
										
										<div class="form-group">
											<div class="input-with-icon">
												<input type="text" class="form-control" placeholder="Loan Term (Years)">
												<i class="ti-calendar"></i>
											</div>
										</div>
										
										<div class="form-group">
											<div class="input-with-icon">
												<input type="text" class="form-control" placeholder="Interest Rate">
												<i class="fa fa-percent"></i>
											</div>
										</div>
										
										<button class="btn btn-black btn-md rounded full-width">Calculate</button>
									
									</div>
								</div> -->
								
<!-- feauture property removed here -->
							
							</div>
						</div>
<?php //================== Property Location Start ============================ 
			
  include('./inc/by_location.php');?>	
					</div>
				</div>
			</section>
<!-- ========================= Property Detail End =============================== -->
<!-- ========================= Submit Property End =============================== -->

<?php 

			 include('./inc/footer_home.php');
//============================ Footer End ================================== 
			
		//Log In and register Modal 

  include('./inc/login_signup_modal.php');	 

		//============================================================== 
		//All Jquery -->
		//============================================================== 
	 include('./inc/jq.php');

