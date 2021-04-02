
 <body class="blue-skin">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
        
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-transparent change-logo">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand static-logo" href="./index.php"><img src="assets/img/salamat_logo.jpg " class="logo" alt="" /></a>
							<a class="nav-brand fixed-logo" href="./index.php"><img src="assets/img/salamat_logo.jpg" class="logo" alt="" /></a>
							
						</div>
						<div class="nav-toggle"></div>
					<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
								<li class="active"><a href="./index.php">Home<span class="submenu-indicator"></span></a>
								</li>

								<li><a href="./about_us.php">About<span class="submenu-indicator"></span></a>
								</li>

								<li><a href="./listings.php">Properties<span class="submenu-indicator"></span></a>
								</li>
								
								<li><a href="./contact_us.php">Contact Us<span class="submenu-indicator"></span></a>
								</li>
								
								<li>
									<?php
										if (empty($_SESSION['id'])) {
										echo '<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#signup">Sign Up</a>';
										}
									 ?>
								</li>
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								
								<li>
									<?php
									if (!empty($_SESSION['id'])) {
										echo '<a href="./submit_property.php" class="text-light"><img src="assets/img/submit.svg" width="20" alt="submit Property" class="mr-2" />Submit Property</a>';
										}
									?>
								</li>
								<li>
									<?php
									if (!empty($_SESSION['id'])) {

									echo '<a href="./user/properties.php">Dashbord<span class="submenu-indicator"></span></a>';
									}
									?>
								</li>

								<li class="add-listing light">
								<?php 
									if (!empty($_SESSION['id'])) {
										echo '<a href="./includes/logout.php" width="12" alt="" class="mr-2" /><i class="ti-power-off"></i>&nbsp;Log Out</a>';
									}else{
										echo '<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><img src="assets/img/user.svg" width="12" alt="" class="mr-2" />Sign In</a>';
									}
								?>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
			<!-- End Navigation -->

<div class="topnav" id="myTopnav">
  <a href="./index.php" class="active">Home</a>
  <a href="./about_us.php">About</a>
  <a href="./listings.php">Properties</a>
  <a href="./contact_us.php">Contact Us</a>
  <?php if (empty($_SESSION['id'])) {echo '<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#signup">Sign Up</a>';}?> 
<?php if (!empty($_SESSION['id'])) {echo '<a href="./submit_property.php" class="text-light"><img src="assets/img/submit.svg" width="20" alt="submit Property" class="mr-2" />Submit Property</a>';}
?>
  <?php if (!empty($_SESSION['id'])) { echo '<a href="./includes/logout.php" width="12" alt="" class="mr-2" /><span class="ti-power-off"></span></a>';
}else{
echo '<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><img src="assets/img/user.svg" width="12" alt="" class="mr-2" />Sign In</a>';
}
?>
  <a href="javascript:void(0);"  class="icon" onclick="myFunction()">
    <i class="fa fa-bars" style="font-size: 25px !important;width: initial !important; padding: 0px !important;"></i>
  </a>
</div>
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->

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
<!-- ====================== Hero Banner  Start============================ -->
	<div class="image-cover hero-banner" style="background:url(assets/img/Salamat-bg.png) no-repeat;" data-overlay="6">
				<div class="container">

					<h1 class="big-header-capt mb-0">Find Your Property</h1>
					<p class="text-center mb-5">Residing abroad? We like to bring you close to your motherland without stress!</p>
					
					<div class="full-search-2 eclip-search italian-search hero-search-radius shadow">
						<div class="hero-search-content">
							<form>
							<div class="row">
							
								<div class="col-lg-4 col-md-4 col-sm-12 b-r">
									<div class="form-group borders">
										<div class="input-with-icon">
		<input type="search" id="search" class="form-control" autocomplete="off" placeholder=" Search Neighborhood">
							<i class="ti-search"></i>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-12">
					<div class="form-group borders">
					<div class="input-with-icon">
							<select id="ptypes" class="form-control">
								<option >Select Property Type</option>
								<option value="1">Any Type</option>
								<option value="2">Apartment</option>
								<option value="3">Villas</option>
								<option value="4">Commercial</option>
								<option value="5">Offices</option>
							</select>
							<i class="ti-briefcase"></i>
						</div>
					</div>
				</div>

				
				<div class="col-lg-3 col-md-3 col-sm-12">
					<div class="form-group borders">
						<div class="input-with-icon b-l">
							<select id="location" class="form-control">
								<option>Select City</option>
								<option value="1">Abuja</option>
								<option value="2">Lagos</option>
								<option value="3">Port H.</option>
								<option value="4">Abia</option>
								<option value="5">Kano</option>
								<option value="6">Benue</option>
							</select>
							<i class="ti-location-pin"></i>
						</div>
					</div>
				</div>
				
				<div class="col-lg-2 col-md-2 col-sm-12">
					<div class="form-group">
			<a href="#" class="btn search-btn" style="background-color: #FF3636; color: #ffffff;">Search</a>
					</div>
				</div>
				<div id="output"></div>
			</div>
			</form>
							
			</div>
		</div>
	</div>
</div>

