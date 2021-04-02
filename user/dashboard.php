<?php
include('../includes/connection.php');
include('../includes/session.php');
include('../notification/count.php'); 
// Salamat Diasporona Design by: Daniel Adasho  08039575760
//the dashboard has about 4 sections and most be included following :
// header, left-sidebar, right-sidebar, chat, "sub-header or header-below," main-content, footer 
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

include('sub-header.php');

// include footer 
// Jquery Core Js 

include('footer.php');
