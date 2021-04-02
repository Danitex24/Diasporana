<?php
include('../includes/connection.php');
include('../includes/session.php');
include('../notification/count.php'); 
// Salamat Diasporona Design by: Daniel Adasho  08039575760
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

<!-- Main Content --><br><br>
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Dashboard
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-account-circle"> </i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="#index-2.html"><i class="zmdi zmdi-home"></i> Diasporana</a></li>
                    <li class="breadcrumb-item active">User Dashboard</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3 class="number count-to" data-from="0" data-to="128" data-speed="2000" data-fresh-interval="700" >10</h3>                        
                        <p class="text-muted">My Projects</p>
                        <div class="progress">
                            <div class="progress-bar l-blue" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>Process stage 27%</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3 class="number count-to" data-from="0" data-to="758" data-speed="2000" data-fresh-interval="700" >3</h3>
                        <p class="text-muted">Requested Properties</p>
                        <div class="progress">
                            <div class="progress-bar l-green" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>Processing 9%</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3 class="number count-to" data-from="0" data-to="2521" data-speed="2000" data-fresh-interval="700" >20</h3>
                        <p class="text-muted">Diasporona Plus</p>
                        <div class="progress">
                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>Loading products 17%</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3>₦ 24,500,000</h3>
                        <p class="text-muted">Total Expenses</p>
                        <div class="progress">
                            <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>Total transactions</small>
                    </div>
                </div>
            </div>            
        </div>
        <div class="row clearfix">
            <div class="col-lg-5 col-md-12">
                <div class="card weather2">
                    <div class="city-selected body l-parpl">
                        <div class="row">
                            <div class="info col-7">
                                <div class="city"><span>City:</span> New York</div>
                                <div class="night">Day - 12:07 PM</div>
                                <div class="temp"><h2>34°</h2></div>									
                            </div>
                            <div class="icon col-5">
                                <img src="assets/images/weather/summer.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped m-b-0">
                        <tbody>
                            <tr>
                            <td>Wind</td>
                            <td class="font-medium">ESE 17 mph</td>
                        </tr>
                        <tr>
                            <td>Humidity</td>
                            <td class="font-medium">72%</td>
                        </tr>
                        <tr>
                            <td>Pressure</td>
                            <td class="font-medium">25.56 in</td>
                        </tr>
                        <tr>
                            <td>Cloud Cover</td>
                            <td class="font-medium">80%</td>
                        </tr>
                        <tr>
                            <td>Ceiling</td>
                            <td class="font-medium">25280 ft</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item text-center active">
                                <div class="col-12">
                                    <ul class="row days-list list-unstyled">
                                        <li class="day col-4">
                                            <p>Monday</p>
                                            <img src="assets/images/weather/rain.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Tuesday</p>
                                            <img src="assets/images/weather/cloudy.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Wednesday</p>
                                            <img src="assets/images/weather/wind.svg" alt="">
                                        </li>
                                    </ul>
                                </div>                                
                            </div>
                            <div class="carousel-item text-center">
                                <div class="col-12">
                                    <ul class="row days-list list-unstyled">
                                        <li class="day col-4">
                                            <p>Thursday</p>
                                            <img src="assets/images/weather/sky.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Friday</p>
                                            <img src="assets/images/weather/cloudy.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Saturday</p>
                                            <img src="assets/images/weather/summer.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>							
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="col-lg-7 col-md-12">                
                <div class="card">
                    <ul class="row profile_state list-unstyled">
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-shopping-cart"></i>
                                <h4>21</h4>
                                <span>Products</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-file-text"></i>
                                <h4>18</h4>
                                <span>Reports</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-notifications"></i>
                                <h4>5</h4>
                                <span>Notifications</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-delicious"></i>
                                <h4>23</h4>
                                <span>Paid Properties</span>
                            </div>
                        </li>                      
                    </ul>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Properties</strong> Overview</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                    <li><a href="javascript:void(0);">Progressive Report</a></li>
                                    <li><a href="javascript:void(0);">Request Report</a></li>
                                    <li><a href="javascript:void(0);">Contact Support</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="m_area_chart2" style="height: 290px"></div>
                    </div>
                </div>
            </div>
        </div> 
        </div>
       <div>
           <button class="btn btn-danger btn-lg btn-block" title="Contact us some any suggestion of feedback">NEED SOMETHING DIFFERENT?</button>
       </div>
    </div>
</div>        
</div>
</section>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->
<script src="assets/bundles/countTo.bundle.js"></script> <!-- Jquery CountTo Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>

<!-- Designe by:Daniel-08039575760 -->
</html>