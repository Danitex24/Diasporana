<?php
include('../includes/connection.php');
include('../includes/session.php');
//include('../includes/mailer.php');
// Salamat Diasporana Design by: Daniel Adasho  08039575760
//include header section
//header
$session_id=$_SESSION['id'];
 if(!isset($_GET['id'])){
  //header("Location:../includes/logout.php");
  }else {
  $pageid = $_GET['id'];
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$query= mysqli_query($conn,"SELECT * FROM users  WHERE uID='$session_id' ")or die(mysqli_error($conn));
$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
//fect from package
$pk= mysqli_query($conn,"SELECT * FROM package  ORDER BY id ASC ")or die(mysqli_error($conn));
$pkrow = mysqli_fetch_array($query, MYSQLI_ASSOC);
//fetch from freshland
$query= mysqli_query($conn,"SELECT * FROM freshland  WHERE id='$pageid' ")or die(mysqli_error($conn));
$urow = mysqli_fetch_array($query, MYSQLI_ASSOC);
if (isset($_POST['req'])) {
    $userID = test_input($row['userID']);
    $landID = test_input($urow['id']);
    $name = test_input($row['firstName']);
    $contactNo = test_input($row['phone']);
    $contactEmail = test_input($row['email']);
    $propName = test_input($urow['title']);
    $purpose = test_input("Pending");
    $CurrentTime = time();
$requestDate=strftime("%B/%d/%Y %H: %M: %S:", $CurrentTime);
$activities=$row['firstName']." ".$row['lastName']." "."has requested to buy a freshland"." ".$urow['title'];
$stmt = "INSERT INTO package (propID, userID, email, phone, name, propName, subscribed, subscribeDate) VALUES (?, ?, ?, ?, ?,?, ?, ?)";
$stmt = $conn->prepare($stmt);
$stmt->bind_param("ssssssss", $landID, $userID, $contactEmail, $contactNo, $name, $propName,  $purpose,$requestDate);
$stmt->execute();

if ($stmt) {
        echo"<script>alert('Request sent successfull')
        location='my-properties.php';
        </script>";
}else{
    echo"<script>alert('There was an error try again')
        location='my-properties.php';
        </script>";
}
$stmt->close();
}
//send mail function
include('header.php');
//include left-sidebar
include('left-side-bar.php');
//include right sidebar 
include('right-side-bar.php');
//include chat scripts
include('chat.php');
// include main content 
?>

<section class="content invoice">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12"><br><br>
               <!-- <h2>Property Reports
                <small class="text-muted">Request Report</small>
                </h2>-->
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Diasporona</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Property</a></li>
                    <li class="breadcrumb-item active">management</li>
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
                                <div class="col-md-1">      
                                </div>
                                <div class="mt-40"></div>
                                    <div class="col-lg-10">
                                       <center><h6>Request management on this property</h6></center>
                                        <div class="form-group">
                                            <form  method="POST" action="">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control" value="<?php echo $row['firstName']." ".$row['lastName'] ?>" readonly="yes">

                                                <label for="email">Email</label>
                                                <input type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>"readonly="yes">

                                                <label for="phone">Phone </label>
                                                <input type="text" name="phone" class="form-control" value="<?php echo $row['phone'] ?>"readonly="yes">

                                                <label for="propName">Title </label>
                                                <input type="text" name="propName" class="form-control" value="<?php echo $urow['title'] ?>"readonly="yes">

                                                <label for="date">Date</label>
                                                <input type="date" name="date" class="form-control"value="<?php echo date('Y-m-d'); ?>">
                                                <br>
                    <?php if ($pkrow['propID']!=='') {
                        echo '<center><button class="btn btn-default btn-lg" disabled="yes"> You have sent a request already kindly wait for approval!</button></center>';
                    }else{echo '
                                                <button class="btn btn-danger btn-round btn-block" name="req">Submit request</button>';} ?> 
                                            </form>
                                        </div>
                                    </div>
                                <div class="col-md-1">        
                                </div>
                            </div>
                        </div>
                    </div> 
    <?php include('copyright.php');?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// include footer 
// Jquery Core Js 

include('footer.php');
