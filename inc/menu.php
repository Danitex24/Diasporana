
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
<!-- End Navigation -->

	<!-- begin mobile menue -->
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
			<div class="clearfix "></div>

			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->