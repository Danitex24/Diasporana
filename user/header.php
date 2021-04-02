<?php
require_once("../notification/count.php");
$userID=$_SESSION['id'];
$query= mysqli_query($conn,"SELECT * FROM users WHERE uID='$userID' ")or die(mysqli_error($conn));
$usrow = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>
<!doctype html>
<html class="no-js " lang="en">
<!-- Design by: Daniel-08039575760 -->
<head>
<meta charset="utf-8">
<meta name="theme-color" content="#ce2e30">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="">
<title>Salamat-Diasporana</title>
<link rel="icon" href="assets/images/salamat_logo.jpg" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
<!--  jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-blue">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-flash" src="assets/images/salamat_logo.jpg" width="150" height="55" alt="Salamat-Diasporona"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="navbar" >
    <div class="col-12"  style="background-color: #ce2e30";
    top: 0;
  color:#ce2e30;
width: 100%;
border-top-width: 4px;
box-shadow: 0 2px 4px 0 rgba(0,0,0,.15);
">        
        <div class="navbar-header" style="background-color: #ce2e30" >
            <a href="javascript:void(0);" class="bars" style="color: #ffffff !important;"></a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>            
        </ul>
        <a class="navbar-brand" href="./index.php"><img src="assets/images/salamat_logo.jpg" width="150" alt="Salamat-Diasporana"><span class="m-l-10"></span></a>
        <ul class="nav navbar-nav navbar-right" >
            <!-- middle menu -->
                <li class="nav-item">
                     <a class="nav-link"href="../">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./properties.php">Propertis</a>
                </li>
                    <li class="nav-item">
                    <a class="zmdi zmdi-city" href="./my-properties.php"></a>
                </li>
                <li class="nav-item">
                    <a class="zmdi zmdi-phone" title="contact us" href="../contact_us.php">
                    </a>
                </li>
                <!-- End middle menu -->
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" ><i class="zmdi zmdi-notifications"></i>&nbsp;<?php  echo $count; ?>
                <div class="notify" id="notif" id="count"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu dropdown-menu-right slideDown">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-blue"><i class="zmdi zmdi-account"></i></div>
                                <div class="menu-info">
                                    <h4>8 New Members joined</h4>
                                    <p><i class="zmdi zmdi-time"></i> 14 mins ago </p>
                                </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                <div class="icon-circle bg-amber"><i class="zmdi zmdi-shopping-cart"></i></div>
                                <div class="menu-info">
                                    <h4>4 Sales made</h4>
                                    <p> <i class="zmdi zmdi-time"></i> 22 mins ago </p>
                                </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="notificationDetails.php">View All Notifications</a> </li>
                </ul>
            </li>
            <li><a href="../includes/logout.php" class="mega-menu" data-close="true"><i class="zmdi zmdi-power">&nbsp;</i></a></li>
        </ul>
    </div>
</nav>
<!-- notification functions -->
<script >
     $(document).ready(function(){
         $("#count").load("../notification/count.php");

         setInterval(function(){
             $("#count").load('../notification/count.php')
             }, 10000);
      });
 </script>
