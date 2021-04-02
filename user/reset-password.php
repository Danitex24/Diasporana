<?php
include('../includes/connection.php');
include('../includes/session.php');
// Salamat Diasporana Design by: Daniel Adasho  08039575760
//include header section
//header 
include('header.php');

//include left-sidebar
// Left Sidebar 

include('left-side-bar.php');

//include right sidebar 
//Right Sidebar 

include('right-side-bar.php');

//include chat scripts
// Chat-launcher 

include('chat.php');

// include main content 
// Main Content 
?>
<div class="page-header">
<div class="page-header-image" style="background-image:url(assets/images/login.jpg)"></div>
    <div class="container">
    	<div class="col-lg-12"><br></div>
        <div class="col-md-12 content-center">
        	<div class="col-lg-10 col-md-4 col-lg-12">
            <div class="card-plain">
                <form class="form" method="" action="#">
                    <div class="header">
                        <h5>Forgot Password?</h5>
                        <span>Enter your e-mail address below to reset your password.</span>
                    </div>
                    <div class="content">
                        <div class="input-group input-lg">
                            <input type="text" class="form-control" placeholder="Enter Email">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <a href="#" class="btn btn-danger btn-round btn-lg btn-block waves-effect waves-light">SUBMIT</a>
                        <h6 class="m-t-20"><a href="#" class="link">Need Help?</a></h6>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
 <?php
// include footer 
// Jquery Core Js 

include('footer.php');


