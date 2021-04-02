<?php
// Salamat Diasporana Design by: Daniel Adasho  08039575760
include('../includes/connection.php');
include('../includes/session.php');

$userID=$_SESSION['id'];
$query= mysqli_query($conn,"SELECT * FROM users WHERE uID='$userID' ")or die(mysqli_error($conn));
$urow = mysqli_fetch_array($query, MYSQLI_ASSOC);

//include header section
// search result form query to fetch all properties

//header 
include('header.php');

//include left-sidebar
// Left Sidebar 

include('left-side-bar.php');

//include right sidebar 
//Right Sidebar 

// include main content 
// Main Content 
?>
<!-- Main Content -->
<section class="content home"><br> <br>
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-account-circle"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="dashboard.php"><i class="zmdi zmdi-home"></i> Diasporana</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Properties</a></li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                            <!-- search form -->              
                            <form method="POST" id="search" action="">
                            <div class="hidden-sm-down">
                            <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                            <a href="" name="search" class="btn btn-round btn-sm btn-primary waves-effect"><i class="zmdi zmdi-search"></i></a>
                            </span>
                            </div>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
<?php
    require_once('../includes/connection.php');
    $sql = "SELECT * FROM property  ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);
    $count=mysqli_num_rows($result);
    if ($count==0) {
      echo '<div align="center" class="col-12 text-center alert alert-danger"><h3 class="font-weight-bold text-danger text-center" >No Land available now</h3></div>';
          }
          else{
    while ($row = mysqli_fetch_array($result)) {
       $id    =  $row['id']; 
       $name = $row['name'];
       $vat = $row['vat'];
       $sqf = $row['sqf'];
       $bedroom = $row['bedroom'];
       $pspace = $row['pspace'];
       $garages = $row['garages'];
       $fsale = $row['frent'];
       $frent = $row['frent'];
       $verified = $row['verified'];
       $description = $row['description'];
       $otherInfo = $row['otherInfo'];
       $status = $row['status'];
       $price = $row['price'];
       $propLocation = $row['propLocation'];
       $propImage = $row['propImage'];
       $image1 = $row['image1'];
       $image2 = $row['image2'];
       $image3 = $row['image3'];
       $image4 = $row['image4'];
       $image5 = $row['image5'];
       $image6 = $row['image6'];
       if ($row['status']== 'Sold') {
echo '
            <div class="col-lg-4 col-md-12">
                <div class="card property_list">
                    <div class="property_image">
                    <a href="property-details.php?id='.$id.'">
                       <img class="img-thumbnail img-fluid" src="../uploads/'.$row['propImage'].'" alt="img">
                       </a>
<a href="property-details.php?id='.$id.'">
'.($row['status'] == 'Sold' ? '<span class="badge bg-red">Property Sold': "").'</a>

                    </div>
                    <div class="body">
                        <div class="property-content">
                            <div class="detail">
                                <h5 class="text-success m-t-0 m-b-0"><a href="property-details.php?id='.$id.'">&#8358; '.$row['price'].'</a></h5>
                        <h4 class="m-t-0"><a href="property-details.php?id='.$id.'" class="col-blue-grey">'.$row['name'].' </a></h4>
                                <p class="text-muted"><i class="zmdi zmdi-pin m-r-5"></i>'.$row['propLocation'].'</p>
                                <p class="text-muted m-b-0">'.$row['description'].'</p>
                            </div>
                            <div class="property-action m-t-15">
                                <a href="#" title="Square Feet"><i class="zmdi zmdi-view-dashboard"></i><span>'.$row['sqf'].'&nbsp;Sqf.</span></a>
                                <a href="#" title="Bedroom"><i class="zmdi zmdi-hotel"></i><span>'.$row['bedroom'].'&nbsp;Bedroom</span></a>
                                <a href="#" title="Parking space"><i class="zmdi zmdi-car-taxi"></i><span>'.$row['pspace'].'&nbsp;Parking Sp.</span></a>
                                <a href="#" title="Garages"><i class="zmdi zmdi-home"></i><span> '.$row['garages'].'&nbsp;Garage</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      '; 
       }else{
       echo '
            <div class="col-lg-4 col-md-12">
                <div class="card property_list">
                    <div class="property_image">
                    <a href="property-details.php?id='.$id.'">
                       <img class="img-thumbnail img-fluid" src="../uploads/'.$row['propImage'].'" alt="img">
                       </a>
<a href="property-details.php?id='.$id.'">
'.($row['frent'] == 'Yes' ? '<span class="badge bg-blue">For Rent': ($row['frent'] == 'No' ? '<span class="badge bg-green">For Sale</span>' :"")).'</a>
                    </div>
                    <div class="body">
                        <div class="property-content">
                            <div class="detail">
                                <h5 class="text-success m-t-0 m-b-0"><a href="property-details.php?id='.$id.'">&#8358; '.$row['price'].'</a></h5>
                        <h4 class="m-t-0"><a href="property-details.php?id='.$id.'" class="col-blue-grey">'.$row['name'].' </a></h4>
                                <p class="text-muted"><i class="zmdi zmdi-pin m-r-5"></i>'.$row['propLocation'].'</p>
                                <p class="text-muted m-b-0">'.$row['description'].'</p>
                            </div>
                            <div class="property-action m-t-15">
                                <a href="#" title="Square Feet"><i class="zmdi zmdi-view-dashboard"></i><span>'.$row['sqf'].'&nbsp;Sqf.</span></a>
                                <a href="#" title="Bedroom"><i class="zmdi zmdi-hotel"></i><span>'.$row['bedroom'].'&nbsp;Bedroom</span></a>
                                <a href="#" title="Parking space"><i class="zmdi zmdi-car-taxi"></i><span>'.$row['pspace'].'&nbsp;Parking Sp.</span></a>
                                <a href="#" title="Garages"><i class="zmdi zmdi-home"></i><span> '.$row['garages'].'&nbsp;Garage</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      '; }}}?>
    </div>
</section>

<section class="content home">
<?php
    require_once('../includes/connection.php');
    $sql = "SELECT * FROM freshland ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);
    $count=mysqli_num_rows($result);
    //LEFT JOIN orders ON `orders`.`propertID` = `property`.`id`
    if ($count==0) {
      echo '<div align="center" class="col-12 text-center alert alert-danger"><h3 class="font-weight-bold text-danger text-center" >You have no property, Please buy or rent</h3></div>';
          }
          else{
    while ($frow = mysqli_fetch_array($result)) {
       $id  =  $frow['id']; 
       $landSize = $frow['landSize'];
       $title = $frow['title'];
       $purpose = $frow['purpose'];
       $location = $frow['location'];
       $price = $frow['price'];
       $description = $frow['description'];
       $landImage = $frow['landImage'];
       $image1 = $frow['image1'];
       $image2 = $frow['image2'];
       $image3 = $frow['image3'];
       $image4 = $frow['image4'];
       echo '
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card property_list">
                    <div class="body">
                                <center style="background-color:#ce2e30; color:#ffffff">
<small><marquee>Suscribe to get you property manage by us to day, relax as we do everything for you! </marquee></small>
            <h3>Fresh Land</h3></center><hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="property_image">
                 <a href="freshLand-details.php?id='.$id.'">
                       <img class="img-thumbnail img-fluid" src="../uploads/fresland/'.$frow['landImage'].'" alt="img">

<a href="freshLand-details.php?id='.$id.'">
'.($frow['status'] == 'Approved' ? '<span class="badge bg-red">Sold out!': ($frow['status'] == 'Pending' ? '<span class="badge bg-red">Processing Payment</span>' : ($frow['status'] == '' ? '<span class="badge bg-green">Available</span>' :""))).'</a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <div class="property-content">
                                    <div class="detail">
                                        <h5 class="text-success m-t-0 m-b-0"><a href="freshLand-details.php?id='.$id.'">Price: &nbsp; &#8358; '.$frow['price'].'</a></h5>
                                        <h4 class="m-t-0"><a href="freshLand-details.php?id='.$id.'" class="col-blue-grey">Title: &nbsp;'.$frow['title'].' </a></h4>
                                        <p class="text-muted"><i class="zmdi zmdi-pin m-r-5"></i>Location: &nbsp;'.$frow['location'].'</p>
                                        <p class="text-muted m-b-0">Description: &nbsp;'.$frow['description'].'</p>
                                    </div>
                                    <div class="property-action m-t-15">
                                        <a href="#" title="Purpose"><i class="zmdi zmdi-home"></i><span>Purpose: &nbsp;'.$frow['purpose'].'</span></a>
                                        <a href="#" title="Land Size"><i class="zmdi zmdi-view-dashboard"></i><span>Land Size: &nbsp;'.$frow['landSize'].'</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                '; }}?>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
// include footer 
// Jquery Core Js 

include('footer.php');