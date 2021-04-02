<?php 
session_start();
$pagename="Home";
include('./includes/connection.php');
include('./inc/header_home.php');
//include header_section with navbar
include('./inc/header_section.php'); 
   //============================ Hero Banner End ================================== 

//================= Explore Property =================
 include('./inc/property_section.php');
//====================== Property Location Start ================================= 
			
  include('./inc/by_location.php');

//========================= Property Location End ================================ 
			
//========================== Step How To Use Start =============================== 

  include('./inc/howTo.php');

//============================ Step How To Use End ====================== 
			
//============= Smart Testimonials  and footer section============================ 
 include('./inc/footer_home.php');
//============================ Footer End ================================== 
			
		//Log In Modal 

  include('./inc/login_signup_modal.php');	
		//============================================================== 
		//End Wrapper
		//============================================================== 

		//============================================================== 
		//All Jquery -->
		//============================================================== 
	 include('./inc/jq.php');?>

	</body>
</html>