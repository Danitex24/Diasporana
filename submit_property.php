<?php 
session_start();
$pagename="Submit Property";
include('./includes/connection.php');
include('./inc/header_home.php');

include('./inc/menu.php');

$user=$_SESSION['id'];

$sqls=mysqli_query($conn, "SELECT * FROM users WHERE uID='$user'")
or die(mysqli_error($conn));
$ufetch=mysqli_fetch_array($sqls,MYSQLI_ASSOC);
?>
<!-- ========================== Page Title Start============================= -->
			<div class="badge bg-red page-title">
				<div class="container mt-5">
					<div class="row">
						<div class="col-lg-12 col-md-12 mt-5">
							
							<h2 class="ipt-title">Submit Property</h2>
							<span class="ipn-subtitle text-white">Submit Your Property</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Submit Property Start ================================== -->
			<section class="gray-simple">
			
				<div class="container">
					<div class="row">
						<!-- Submit Form -->
						<div class="col-lg-12 col-md-12">

							<div class="submit-page">

						<div class="col-lg-12 col-md-12">
							<div class="alert alert-primary alert-dismissible fade show" role="alert" role="alert">
							<?php 
							if (!empty($_SESSION['id'])) {
							echo "<h2>Welcome!</h2>".$ufetch['firstName']." ".$ufetch['lastName']." "."<p>Please <strong>Note: </strong>Property 	submited will have to undergo review befor it 	can go live.</p>";
							}
							?>
							</div>
						
						</div>
				<!-- Begin property submission form  -->	
<form method="POST" action="./check_submited_property.php" enctype="multipart/form-data">
								<!-- Basic Information -->
								<div class="form-submit">	
									<h3>Basic Information <span class="tip-topdata" data-tip="Note, all the information submited will be review by our staff befor your property can be approve to go live."><i class="ti-help"></i></span></h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-12">
												<label>Property Name</label>
												<input type="text" name="name" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>VATS</label>
												<input type="text" name="vat" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>Property Type</label>
												<select name="propType" id="ptypes" class="form-control">
													<option value="">&nbsp;</option>
													<option value="freshLand">Flesh Land</option>
													<option value="Houses">Houses</option>
													<option value="Apartment">Apartment</option>
													<option value="Commercial">Commercial</option>
													<option value="Offices">Offices</option>
												</select>
											</div>
											
											<div class="form-group col-md-6">
												<label>Price</label>
												<input type="text" name="price" class="form-control" placeholder="&#8358;">
											</div>
											
											<div class="form-group col-md-6">
												<label>Area (sqf)</label>
												<input type="text" name="sqf" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>Bedrooms</label>
												<select id="bedrooms" name="bedroom" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</div>
											
											<div class="form-group col-md-6">
												<label>Bathrooms</label>
												<select id="bathrooms" name="bathroom" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</div>
											
										</div>
									</div>
								</div>
								
								<!-- Gallery -->
								<div class="form-submit">	
									<h3>Gallery</h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-12">
												<label>Property Image* (Required)</label>
						<input type="file" name="userImage[]" class="form-control">
											</div>

											<div class="form-group col-md-4">
												<label>Image 1* (Required)</label>
						<input type="file" name="userImage[]" class="form-control">
											</div>		
											
											<div class="form-group col-md-4">
												<label>Image 2* (Required)</label>
						<input type="file" name="userImage[]" class="form-control">
											</div>
											
											<div class="form-group col-md-4">
												<label>Image 3* (Required)</label>
						<input type="file" name="userImage[]" class="form-control">
											</div>

											<div class="form-group col-md-4">
												<label>Image 4* (Required)</label>
						<input type="file" name="userImage[]" class="form-control">
											</div>
											
											<div class="form-group col-md-4">
												<label>Image 5 (Optional)</label>
						<input type="file" name="userImage[]" class="form-control">
											</div>
											
											<div class="form-group col-md-4">
												<label>Image 6 (Optional)</label>
						<input type="file" name="userImage[]" class="form-control">
											</div>
											
										</div>
									</div>
								</div>
								
								<!-- Location -->
								<div class="form-submit">	
									<h3>Property Location</h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-6">
												<label>Address</label>
												<input type="text" name="propLocation" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>City</label>
												<input type="text" name="City" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>State</label>
												<input type="text" name="State" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>Zip Code</label>
												<input type="text" name="ZipCode" class="form-control">
											</div>

											<div class="form-group col-md-12">
												<label>Closet Land Mark</label>
												<input type="text" name="CloseLandMark" class="form-control">
											</div>
											 
										</div>
									</div>
								</div>
								
								<!-- Detailed Information -->
								<div class="form-submit">	
									<h3>Detailed Information</h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-12">
												<label>Description</label>
												<textarea name="description" class="form-control h-100"></textarea>
											</div>
											
											<div class="form-group col-md-12 mt-2">
												<label>Other Information</label>
												<textarea name="otherInfo" class="form-control h-50"></textarea>
											</div>

											<div class="form-group col-md-4 mt-3">
												<label>Parking Space (optional)</label>
												<select id="bage" name="pspace" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
											
											<div class="form-group col-md-4 mt-3">
												<label>Garage (optional)</label>
												<select id="garage" name="garages" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
											
											<div class="form-group col-md-4 mt-3">
												<label>Rooms (optional)</label>
												<select id="rooms" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
												</select>
											</div>




											<div class="form-group col-md-4">
												<label>For Sale* (Required)</label>
												<select id="bage" name="fsale" class="form-control">
													<option value="">&nbsp;</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
											
											<div class="form-group col-md-8">
												<label>For Rent* (Required)</label>
												<select id="garage" name="frent" class="form-control">
													<option value="">&nbsp;</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Contact Information -->
								<div class="form-submit">	
									<h3>Your Contact Information</h3>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-4">
												<label>Your Name</label>
<input type="text" value="<?php echo $ufetch['firstName']." ".$ufetch['lastName']; ?>" class="form-control" readonly="Yes">
											</div>
											
											<div class="form-group col-md-4">
												<label>Email Address</label>
<input type="text" value="<?php echo $ufetch['email']; ?>" class="form-control" readonly="Yes">
											</div>
											
											<div class="form-group col-md-4">
												<label>Phone Number</label>
<input type="text" value="<?php echo $ufetch['phone']; ?>" class="form-control" readonly="Yes" >
											</div>
											
										</div>
									</div>
								</div>
								
								<div class="form-group col-lg-12 col-md-12">
									<label>GDPR Agreement *</label>
									<ul class="no-ul-list">
										<li>
											<input id="aj-1" value="Yes" class="checkbox-custom" name="Agreement" type="checkbox">
											<label for="aj-1" class="checkbox-custom-label">I consent to having this website store my submitted information so they can respond to my inquiry.</label>
										</li>
									</ul>
								</div>
								
								<div class="form-group col-lg-12 col-md-12">
									<?php 
									if (!empty($_SESSION['id'])) {
										echo '<button name="addprop" class="btn btn-theme-light-2 rounded" type="submit">Submit For Review</button>';
									}else{
										echo '<a href="./sign-up.php"class="btn btn-theme-light-2 rounded" type="submit"> You Need To Register To Submit Property</a>	';
									}
									?>
									
								</div>
								<!-- End property submit form -->
							</form>		
							</div>
						</div>
						
					</div>
				</div>
						
			</section>

<!-- ========================= Submit Property End =============================== -->

<?php 

	include('./inc/footer_home.php');
		//========================= Footer End ========================= 
			
		//Log In and register Modal 

  	include('./inc/login_signup_modal.php');	 

		//============================================================== 
		//All Jquery -->
		//============================================================== 
	 include('./inc/jq.php');

