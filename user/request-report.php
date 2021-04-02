<?php
include('../includes/connection.php');
include('../includes/session.php');
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

<section class="content invoice">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Property Reports
                <small class="text-muted">Request Report</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Diasporona</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Property</a></li>
                    <li class="breadcrumb-item active">report</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">

                    <div role="tabpanel" class="tab-pane" id="history" aria-expanded="false">
                        <div class="card" id="details">
                            <div class="body">                                
                                <div class="row">
                                <div class="col-md-6 col-sm-6">  
                                       
                                </div>
                                <div class="mt-40"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                       <h2>Request report</h2>
                                       <h4>Fill in the below form and we will get right back to you</h4>
                                        <div class="form-group">
                                            <form class="form-control">
                                                <label for="fname">Name</label>
                                                <input type="text" name="fname" class="form-control">
                                                <label for="lname">Last Name</label>
                                                <input type="text" name="lname" class="form-control">
                                                <label for="propName">Property Nmae</label>
                                                <input type="text" name="propName" class="form-control">
                                                <label for="date">Date</label>
                                                <input type="date" name="date" class="form-control">
                                                <br>
                                                <button class="btn btn-danger btn-round btn-block">Submit request</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
    <?php
    include('copyright.php');
    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// include footer 
// Jquery Core Js 

include('footer.php');
