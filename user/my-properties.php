<?php
error_reporting('E_ALL');
include('../includes/connection.php');
include('../includes/session.php');
// Salamat Diasporana Design by: Daniel Adasho  08039575760
//include header section
//header 
$userID=$_SESSION['userID'];
$query= mysqli_query($conn,"SELECT * FROM users WHERE uID='$userID' ")or die(mysqli_error($conn));
$urow = mysqli_fetch_array($query, MYSQLI_ASSOC);


include('header.php');

// Left Sidebar
include('left-side-bar.php');
// Main Content 
?>
<!-- Main Content -->
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <br><br><br>
                <!--<h2>Property
                <small class="text-muted">My Properties</small>
                </h2>-->
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button" onClick="document.location.href='my-profile.php'">
                    <i class="zmdi zmdi-account-circle"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Diasporona</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Properties</a></li>
                    <li class="breadcrumb-item active">My Properties</li>
                </ul>                
            </div>
        </div>
    </div>

            <?php
    require_once('../includes/connection.php');

$query= mysqli_query($conn,"SELECT * FROM propertyrequest ")or die(mysqli_error($conn));
$frow = mysqli_fetch_array($query, MYSQLI_ASSOC);

//check if the person has purchsased properties the display
       if ($frow >0 && $frow['uID'] == $userID) {

       echo '
            <div class="col-lg-12">
                <div class="card property_list">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="property_image">
                 <a href="myPropDetails.php?id='.$id.'">
                       <img class="img-thumbnail img-fluid" src="../user/assets/images/diasporana-home.png" alt="Property">

<a href="myPropDetails.php?id='.$id.'">
'.($frow['status'] == 'Approved' ? '<span class="badge bg-blue">Property Owner': ($frow['status'] == 'Pending' ? '<span class="badge bg-grey">Processing payment</span>' :"")).'</a>

 <a href="request-propMgnt.php?id='.$id.'" class="btn btn-danger btn-block"><span class="zmdi zmdi-dashboard"></span>&nbsp;&nbsp; Request Property Managment &nbsp;</a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <div class="property-content">
                                    <div class="detail">
                                        <h5 class="text-success m-t-0 m-b-0"><a href="myPropDetails.php?id='.$id.'">Price: &nbsp; &#8358; '.$frow['price'].'</a></h5>
                                        <h4 class="m-t-0"><a href="myPropDetails.php?id='.$id.'" class="col-blue-grey">Property Name: &nbsp;'.$frow['propName'].' </a></h4>
                                        <p class="text-muted"><i class="zmdi zmdi-book m-r-5"></i>Purchase Date: &nbsp;'.$frow['requestDate'].'</p>
                                        <p class="text-muted m-b-0"><i class="zmdi zmdi-time m-r-5"></i>Approved Date: &nbsp;'.$frow['approvedDate'].'</p>
                                    </div>
                                    <br> 
                                    <p class="text-muted m-b-0">Congratulation, You are the owner of this property now. How ever we can help you <a href="#">manage</a>  the property, develope it for you.</p>
                                    <div class="property-action m-t-15">

                                        <a href="#" title="Approved"><i class="zmdi zmdi-city"></i>Approved:

'.($frow['status'] == 'Approved' ? '<span class="badge bg-green">YES': ($frow['status'] == 'Pending' ? '<span class="badge bg-red">NOT YET</span>' :"")).'</a>


                                        <a href="#" title="Property Owner"><i class="zmdi zmdi-view-dashboard"></i><span>Status: '.($frow['status'] == 'Approved' ? '<span class="badge bg-blue">PROPERTY OWNER': ($frow['status'] == 'Pending' ? '<span class="badge bg-grey">PROCESSING PAYMENT</span>' :"")).'</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        '; }else{
echo '
<div class="alert alert-danger col-lg-12"><center><p>You have not purchased any property, Click <a href="./properties.php" class="btn btn-sm btn-info btn-rounded">Here</a> to buy now.</p></center></div>

';} ?>

<?php
    require_once('../includes/connection.php');
//fetch from freshland request
$query1= mysqli_query($conn,"SELECT * FROM landrequest ")or die(mysqli_error($conn));
$lrow = mysqli_fetch_array($query1, MYSQLI_ASSOC);
    //check if user purchase any fresh land
if ($lrow >0 && $lrow['uID'] == $userID) {
   echo '
            <div class="col-lg-12">
                <div class="card property_list">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="property_image">
                 <a href="landOwner.php?id='.$id.'">
                       <img class="img-thumbnail img-fluid" src="../user/assets/images/diasporana-land.jpg" alt="Fresh Land">

<a href="landOwner.php?id='.$id.'">
'.($lrow['status'] == 'Approved' ? '<span class="badge bg-purple">Land Owner': ($lrow['status'] == 'Pending' ? '<span class="badge bg-gold">Processing payment</span>' :"")).'</a>

 <a href="rquestFreshLand.php?id='.$id.'" class="btn btn-danger btn-block"><span class="zmdi zmdi-dashboard"></span>&nbsp;&nbsp; Request Property Managment &nbsp;</a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <div class="property-content">
                                    <div class="detail">
                                        <h5 class="text-success m-t-0 m-b-0"><a href="landOwner.php?id='.$id.'">Price: &nbsp; &#8358; '.$lrow['price'].'</a></h5>
                                        <h4 class="m-t-0"><a href="landOwner.php?id='.$id.'" class="col-blue-grey">Title: &nbsp;'.$lrow['title'].' </a></h4>
                                        <p class="text-muted"><i class="zmdi zmdi-book m-r-5"></i>Purchase Date: &nbsp;'.$lrow['requestDate'].'</p>
                                        <p class="text-muted m-b-0"><i class="zmdi zmdi-time m-r-5"></i>Approved Date: &nbsp;'.$lrow['approvedDate'].'</p>
                                    </div>

                                   <br> 
                                    <p class="text-muted m-b-0">Congratulation, You are the owner of this property now. How ever we can help you <a href="#">manage</a>  the property, develope it for you.</p>
                                    <div class="property-action m-t-15">
                                        <a href="#" title="Approved"><i class="zmdi zmdi-city"></i>Approved:

'.($lrow['status'] == 'Approved' ? '<span class="badge bg-green">YES': ($lrow['status'] == 'Pending' ? '<span class="badge bg-red">NOT YET</span>' :"")).'</a>


                                        <a href="#" title="Property Owner"><i class="zmdi zmdi-view-dashboard"></i><span>Status: '.($lrow['status'] == 'Approved' ? '<span class="badge bg-blue">PROPERTY OWNER': ($lrow['status'] == 'Pending' ? '<span class="badge bg-grey">PROCESSING PAYMENT</span>' :"")).'</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            '; }?>
    </div>
</section>
<?php
// include footer 
// Jquery Core Js 

include('footer.php');