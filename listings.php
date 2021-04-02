<?php
session_start(); 
$pagename="Properties";

include('./includes/connection.php');
include('./inc/header_home.php');
include('./inc/menu.php');

?>

<!-- ============================ Page Title Start================================== -->
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
										<form method="POST" action="listing_search.php">
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
									</form>
									</div>
								</div>
							</div>
							
							<div class="col-lg-6 col-md-5 col-sm-12 p-0 elio">
								<div class="form-group">
									<div class="input-with-icon">
										<form method="POST" action="./listing_search.php">
										<input type="search" id="search" class="form-control" placeholder="Search for a location">
										<img src="assets/img/pin.svg" width="20"></i>
									</div>
								</div>
							</div>
							
							<div class="col-lg-2 col-md-3 col-sm-12">
								<div class="form-group">
									<a href="#" class="btn search-btn black">Search</a>
								</div>

							</div>
						<div id="output" class="col-lg-4 col-md-4 col-sm-12 b-r"></div>
							</form>	
						</div>

					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- ============================ Page Title End ================================== -->

			<!-- ============================ All Property ================================== -->
			<section class="bg-light">
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
										<li><a href="grid.php"><i class="ti-layout-grid2"></i></a></li>
										<li><a href="./listings.php" class="active"><i class="ti-view-list"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
							
					<div class="row">
						
						<div class="col-lg-12 col-sm-12 list-layout">

							<div class="row">

		<?php

			 if (isset($_GET['pageno'])) {
		            $pageno = $_GET['pageno'];
		        } else {
		            $pageno = 1;
		        }
		        $no_of_records_per_page = 2;
		        $offset = ($pageno-1) * $no_of_records_per_page;

		require_once('./includes/connection.php');

			        // Check connection
		        if (mysqli_connect_errno()){
		            echo "Failed to connect to MySQL: " . mysqli_connect_error();
		            die();
		        }

		        $total_pages_sql = "SELECT COUNT(*) FROM property";
		        $result = mysqli_query($conn,$total_pages_sql);
		        $total_rows = mysqli_fetch_array($result)[0];
		        $total_pages = ceil($total_rows / $no_of_records_per_page);

		    $sql = "SELECT * FROM property LIMIT $offset, $no_of_records_per_page ";
		    $result = mysqli_query($conn, $sql);
		    $count=mysqli_num_rows($result);

		if ($count==0) {
		      echo '<div align="center" class="col-12 text-center alert alert-danger"><h3 class="font-weight-bold text-danger text-center" >No Property available now</h3></div>';
		          }
		          else{
    while ($view = mysqli_fetch_array($result)) {?>
								<!-- Single Property Start -->
								<div class="col-lg-6 col-md-12">
									<div class="property-listing property-1">
											
										<div class="listing-img-wrapper">
	<?php
	echo '<a href="./single_property.php?id='.$view['id'].'">';
	echo '<img class="img-fluid mx-auto"src="./uploads/' . $view['propImage']. '">'; ?>
											</a>
										</div>
										
										<div class="listing-content">
										
											<div class="listing-detail-wrapper-box">
												<div class="listing-detail-wrapper">
													<div class="listing-short-detail">
														<h4 class="listing-name">
		<?php
	echo '<a href="./single_property.php?id='.$view['id'].'">';
	echo $view['name']; ?>
					</a>
					</h4>
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
											<div class="list-price">
												<h6 class="listing-card-info-price">&#8358;	<?php
	echo '<a href="./single_property.php?id='.$view['id'].'">';
	echo $view['price']; ?>
					</a>					</h6>
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
					</a>
											</div>
											<div class="listing-card-info-icon">
												<div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>
			<?php
	echo '<a href="./single_property.php?id='.$view['id'].'">';
	echo $view['bathroom']; ?>
					</a>
											</div>
											<div class="listing-card-info-icon">
												<div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>
		<?php
	echo '<a href="./single_property.php?id='.$view['id'].'">';
	echo $view['sqf']; ?>
					</a>
											</div>
										</div>
									</div>
								
									<div class="listing-footer-wrapper">
										<div class="listing-locate">
											<span class="listing-location"><i class="ti-location-pin"></i>
	<?php
	echo '<a href="./single_property.php?id='.$view['id'].'">';
	echo $view['propLocation']; ?>
					</a>
											</span>
										</div>
										<div class="listing-detail-btn">
											<a href="./user/request-property.php" class="more-btn">Buy Now</a>
										</div>
									</div>
									
								</div>
								
							</div>
						</div>
						<!-- Single Property End -->
					<?php  }}?>
											
							</div>


							<!-- Pagination -->
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<ul class="pagination p-center">
					<li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
										  <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" aria-label="Previous">
											<span class="ti-arrow-left"></span>
											<span class="sr-only">Previous</span>
										  </a>
										</li>
					<li class="page-item"><a class="page-link" href="?pageno=1">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item active"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">...</a></li>
										

			<li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
				<a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" aria-label="Next">
											<span class="ti-arrow-right"></span>
											<span class="sr-only">Next</span>
										  </a>
										</li>
					<li class="page-item"><a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
									</ul>
								</div>
							</div>
					
						</div>
						
					</div>
	<!--================== include brows by location ================================ -->
					<?php include('./inc/by_location.php'); ?>
				</div>
			</section>
	<!-- ===============javascript for search form ================== -->
  <script type="text/javascript">
    $(document).ready(function(){
       $("#search").keyup(function(){
          var query = $(this).val();
          if (query != "") {
            $.ajax({
              url: 'home_search.php',
              method: 'POST',
              data: {query:query},
              success: function(data){
 
                $('#output').html(data);
                $('#output').css('display', 'block');
 
                $("#search").focusout(function(){
                    $('#output').css('display', 'none');
                });
                $("#search").focusin(function(){
                    $('#output').css('display', 'block');
                });
              }
            });
          } else {
          $('#output').css('display', 'none');
        }
      });
    });
  </script>

<?php 

			 include('./inc/footer_home.php');
//============================ Footer End ================================== 
			
		//Log In and register Modal 

  include('./inc/login_signup_modal.php');	 

		//============================================================== 
		//All Jquery -->
		//============================================================== 
	 include('./inc/jq.php');