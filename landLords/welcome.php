<?php 
$pagename="Dashboard";
include('../includes/connection.php');
include ('../controllers/authController.php');

// redirect user to login page if they're not logged in
if (empty($_SESSION['id'])) {
    //header('location: ../index.php');
}

include('./header_home.php');

include('./menu.php');
?>
<!-- ========================= Page Title Start=============================== -->
      <div class="badge bg-red page-title">
        <div class="container mt-5">
          <div class="row">
            <div class="col-lg-12 col-md-12 mt-5">
              
<h2 class="ipt-title">Welcome! &nbsp; <?php  //echo $_SESSION['username']; ?></h2>
              <span class="ipn-subtitle text-white">Welcome To Your Dashboard. Here, your will find informations about your submited properties and your entire transactions.</span>
              
            </div>
          </div>
        </div>
      </div>
<!-- ========================= Page Title End =============================== -->
<!-- ========================== User Dashboard =============================== -->
<div class="container mt-5">
    <div class="row">
      <div class="col-md-12 offset-md-12 home-wrapper ">

        <!-- Display messages -->
        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert <?php echo $_SESSION['type'] ?>">
          <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            unset($_SESSION['type']);
          ?>
        </div>
        <?php endif;?>

        <?php if (!$_SESSION['verified']): ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            You need to verify your email address!
            Sign into your email account and click
            on the verification link we just emailed to you.
    
            <strong><?php //echo $_SESSION['email']; ?></strong>
          </div>
        <?php else: ?>
          <button class="btn btn-lg btn-primary btn-block">I'm verified!!!</button>
        <?php endif;?>
      </div>
    </div>
  </div>
  <div class="col-lg-12 mt-5"></div>
  <div class="col-lg-12 mt-5"></div>
  <div class="col-lg-12 mt-5"></div>
  <!-- ======================= User Dashboard End ============================== -->
    <?php 
       include('./footer_home.php');
//============================ Footer End ================================== 
      
    //Log In and register Modal 

  //include('./inc/login_signup_modal.php');   

    //============================================================== 
    //All Jquery -->
    //============================================================== 
   include('./jq.php');

   ?>