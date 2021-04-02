<?php
// Salamat Diasporana Design by: Daniel Adasho  08039575760
//include header section
include('../includes/connection.php');
include('../includes/session.php');
 if(!isset($_GET['id'])){
  header("Location:../includes/logout.php");
  }else {
  $pageid = $_GET['id'];
  $logid=$_SESSION['id'];
}
//header 
include('header.php');

//include left-sidebar
// Left Sidebar 

include('left-side-bar.php');

//include right sidebar 
//Right Sidebar 

?>
<!-- Main Content -->
<section class="content home">
    <div class="block-header"><br><br>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i>Diasporana</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Properties</a></li>
                    <li class="breadcrumb-item active">Land Details</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body">
                    <div id="demo2" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#demo2" data-slide-to="0" class="active"></li>
                            <li data-target="#demo2" data-slide-to="1" class=""></li>
                            <li data-target="#demo2" data-slide-to="2" class=""></li>
                            <li data-target="#demo2" data-slide-to="3" class=""></li>
                            <li data-target="#demo2" data-slide-to="4" class=""></li>
                        </ul>
                        <div class="carousel-inner">
<?php
    require_once('../includes/connection.php');
    $sql = "SELECT * FROM freshland WHERE id ='$pageid' ORDER BY id ASC ";
    $result = mysqli_query($conn, $sql);
    $count=mysqli_num_rows($result);
    if ($count==0) {
      echo '<div align="center" class="alert-danger"><h3 class="font-weight-bold text-danger text-center" >You have not owend any Land yet!</h3>
      <a href="/properties.php" class="btn btn-danger btn-md">Buy now</a>
      </div>';
          }
          else{
    while ($row = mysqli_fetch_array($result)) {
       $id  =  $row['id']; 
       $landSize = $row['landSize'];
       $title = $row['title'];
       $purpose = $row['purpose'];
       $location = $row['location'];
       $price = $row['price'];
       $description = $row['description'];
       $landImage = $row['landImage'];
       $image1 = $row['image1'];
       $image2 = $row['image2'];
       $image3 = $row['image3'];
       $image4 = $row['image4'];

      if ($row['status'] == 'Sold') {
  echo '                            <div class="carousel-item active">
<img src="../uploads/fresland/'.$row['landImage'].'" class="img-fluid" alt="Property image">
                            </div>
                            <div class="carousel-item">
<img src="'.$row['image1'].'" class="img-fluid" alt="Property image">
                            </div>
                            <div class="carousel-item">
<img src="../uploads/'.$row['image2'].'" class="img-fluid" alt="Property image">
                            </div>
                            <div class="carousel-item">
<img src="../uploads/'.$row['image3'].'" class="img-fluid" alt="Property image">
                            </div>
                            <div class="carousel-item">
<img src="../uploads/'.$row['image4'].'" class="img-fluid" alt="Property image">
                            </div>                          
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo2" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                        <a class="carousel-control-next" href="#demo2" data-slide="next"><span class="carousel-control-next-icon"></span></a>
                    </div>
                <div class="card property_list">
                    <div class="body">
                        <div class="property-content">
                            <div class="detail">
                                <h5 class="text-success m-t-0 m-b-0">&#8358; '.$row['price'].'</h5>
                            <h4 class="m-t-0"><a href="#" class="col-blue-grey">'.$row['title'].'</a></h4>
                <p class="text-muted"><i class="zmdi zmdi-pin m-r-5"></i>'.$row['location'].'</p>
                                <p class="text-muted m-b-0">'.$row['description'].'</p>
                            </div>
                            <div class="property-action m-t-15">
<a href="#" title="purpose "><i class="zmdi zmdi-home"></i><span>'.$row['purpose'].'Purpose: &nbsp;</span></a>
<a href="#" title="Land Size"><i class="zmdi zmdi-view-dashboard"></i><span>'.$row['landSize'].'Land Size: &nbsp;</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                 <div>

<a href="#" class="btn btn-round btn-default " disabled="yes"><span class="zmdi zmdi-lock"></span>&nbsp;&nbsp;This Land has been sold out</a>

<a href="properties.php" class="btn btn-round btn-primary "><span class="zmdi zmdi-arrow-left"></span>&nbsp;&nbsp; Click to go back to properties &nbsp;</a>
                </div>';
  }else{

echo '
                            <div class="carousel-item active">
<img src="../uploads/'.$row['landImage'].'" class="img-fluid" alt="Property image">
                            </div>
                            <div class="carousel-item">
<img src="../uploads/'.$row['image1'].'" class="img-fluid" alt="Property image">
                            </div>
                            <div class="carousel-item">
<img src="../uploads/'.$row['image2'].'" class="img-fluid" alt="Property image">
                            </div>
                            <div class="carousel-item">
<img src="../uploads/'.$row['image3'].'" class="img-fluid" alt="Property image">
                            </div>
                            <div class="carousel-item">
<img src="../uploads/'.$row['image4'].'" class="img-fluid" alt="Property image">
                            </div>                          
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo2" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                        <a class="carousel-control-next" href="#demo2" data-slide="next"><span class="carousel-control-next-icon"></span></a>
                    </div>

                <div class="card property_list">
                    <div class="body">
                        <div class="property-content">
                            <div class="detail">
                                <h5 class="text-success m-t-0 m-b-0">&#8358; '.$row['price'].'</h5>
                            <h4 class="m-t-0"><a href="#" class="col-blue-grey">'.$row['title'].'</a></h4>
                <p class="text-muted"><i class="zmdi zmdi-pin m-r-5"></i>'.$row['location'].'</p>
                                <p class="text-muted m-b-0">'.$row['description'].'</p>
                            </div>
                            <div class="property-action m-t-15">
<a href="#" title="Square Feet"><i class="zmdi zmdi-view-dashboard"></i><span>'.$row['purpose'].'&nbsp;</span></a>
<a href="#" title="Landsize"><i class="zmdi zmdi-dashboard"></i><span>'.$row['landSize'].'&nbsp;</span></a>
                         </div>
                        </div>
                    </div>
                </div>

                <div class="card weather2">
                    <div class="city-selected body l-parpl"><center><h2>
       <span class="zmdi zmdi-account-circle"></span>&nbsp;&nbsp; You are the owner of this Land</h2></center>
<a href="request-propManagment.php?id='.$id.'" class="btn btn-primary btn-lg  btn-block"><span class="zmdi zmdi-dashboard"></span>&nbsp;&nbsp; Request Property Managment &nbsp;</a>

      <center>OR </center>
<a href="properties.php" class="btn btn-primary btn-lg btn-block"><span class="zmdi zmdi-cart"></span>&nbsp;&nbsp; Buy more &nbsp;</a>
                        </div>
                    </div>                   
                </div>

  ';}}}?>
             </div>
            </div>
        </div>
    </div>
</section>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<?php
// include footer 
// Jquery Core Js 

include('footer.php');