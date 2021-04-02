<?php
include('../includes/connection.php');
include('../includes/session.php');
$userID=$_SESSION['id'];
//$query= mysqli_query($conn,"SELECT * FROM users WHERE id='$userID' ")or die(mysqli_error($conn));
//$usrow = mysqli_fetch_array($query, MYSQLI_ASSOC);

$query= mysqli_query($conn,"SELECT * FROM users WHERE uID='$userID' ")or die(mysqli_error($conn));
$usrow = mysqli_fetch_array($query, MYSQLI_ASSOC);
//if ($usrow['updateStatus']=="Completed") {
 //   header('Location: ./properties.php');
//}else{

//}
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
?><br><br><br>
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>My Profile
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-account-circle"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index-2.html"><i class="zmdi zmdi-home"></i> Diasporana</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Profile Details</a></li>
                </ul>                
            </div>
        </div>
    </div>    
    <div class="container-fluid">       
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card member-card" >
                    <div style="background-color: #ce2e30 !important; padding-top: 20px; padding-bottom: 40px; margin-bottom: 15px;">

                        <h4 class="m-t-10"><?php echo $usrow['firstName']." ".$usrow['lastName']; ?></h4>
                    </div>
                    <div class="member-img">
                       <?php $image = $usrow['profilePix'];
                        if (empty($image)){?>
                <!-- display default avatar and upload form if user has upupload his profile pix-->
                    <div class="col-sm-12">
            <form action="upload.php" id="frmFileUpload"  method="POST" enctype="multipart/form-data">
                    <div class="dz-message">
                    <div class="member-image"> <img class="rounded-circle" src='assets/images/diasporana-avatar.png' class='rounded-circle'width='150' height='150' alt='profile image'></div>
                    </div>
                <div class="fallback">
                <input type="file" name="profilePix" class="form-control">
                    </div>
                        <button name="upload" class="btn btn-danger">Upload Image</button>
                    </form>
                    </div>
<?php }elseif(!empty($image)){?>
    <!-- display user image if user has upuploaded his profile pix-->
    <div class="member-image">
<?php echo '<img class="square"src="' . $usrow['profilePix']. '" width="180" height="170">'; ?>
    </div>
                   <?php }?>
                    </div>
                    <div class="body">
                        <div class="col-12">
                            <ul class="social-links list-unstyled">
                                <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                            <p class="text-muted"><?php echo $usrow['address'] ?></p>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <h5>5</h5>
                                <small>Requested Properties</small>
                            </div>
                            <div class="col-4">
                                <h5>10</h5>
                                <small>Managed Properties</small>
                            </div>
                            <div class="col-4">
                                <h5>2</h5>
                                <small>Paid Properties</small>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#friends">Products</a></li>                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane body active" id="about">
                            <hr>
                            <small class="text-muted">Unique ID: </small>
                            <p><?php echo $usrow['userID']; ?></p>
                            <hr>
                            <small class="text-muted">Package: </small>
                            <p><?php echo $usrow['package']; ?></p>
                            <hr>
                            <small class="text-muted">Email address: </small>
                            <p><?php echo $usrow['email']; ?></p>
                            <hr>
                            <small class="text-muted">Phone: </small>
                            <p><?php echo $usrow['phone']; ?></p>                            
                            <hr>
                            <small class="text-muted">Address: </small>
                            <p><?php echo $usrow['address']; ?></p>                            
                            <hr>
                        </div><?php $conn->close(); ?>
                        <div class="tab-pane body" id="friends">
                            <ul class="new_friend_list list-unstyled row">
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="#">
                                        <img src="assets/images/properties/1.jpg" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Jabi Housing Estate</h6>
                                        <small class="join_date">Today</small>
                                    </a>
                                </li>
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="#">
                                        <img src="assets/images/properties/2.jpg" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Aluwa House, Gwarinpa</h6>
                                        <small class="join_date">Lastweek</small>
                                    </a>
                                </li>
                                <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                                    <a href="#">
                                        <img src="assets/images/properties/3.jpg" class="img-thumbnail" alt="User Image">
                                        <h6 class="users_name">Kabusa Main Estate</h6>
                                        <small class="join_date">08 June, 2019.</small>
                                    </a>
                                </li>                         
                            </ul>
                        </div>                        
                    </div>
                </div>
            </div>
<?php
include('../includes/connection.php'); 
$user=$_SESSION['id'];
$select=mysqli_query($conn, "SELECT * FROM users WHERE uID='$user'")or die(mysqli_error($conn));
    $fetch=mysqli_fetch_array($select,MYSQLI_ASSOC);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if (isset($_POST['update'])) {
    $user=$_SESSION['id'];
    
    $fname = test_input($_POST['firstName']);
    $lname = test_input($_POST['lastName']);
    $dob = test_input($_POST['dob']);
    $gender= test_input($_POST['gender']);
    $country = test_input($_POST['country']);
    $city = test_input($_POST['city']);
    $phone = test_input($_POST['phone']);
    $address = test_input($_POST['address']);
    $date = date('Y-m-d H:i:s');
    $progress='Completed';
    $userID = test_input($fetch['userID']);
    $activities=$fetch['firstName']." ".'update profile recently';
    

$update=mysqli_query($conn,"UPDATE users SET firstName='$fname', lastName='$lname', dob='$dob', gender='$gender', country='$country', city='$city', phone='$phone', address='$address', updateStatus='$progress' WHERE uID ='$user'") or die(mysqli_error($conn));

    if ($update >0) {

    $sql1= mysqli_query($conn,"INSERT INTO user_log (userID, activitiesOnSite,login_time)VALUES('$userID','$activities', '$date')")or die(mysqli_error($conn));
    }    
}
//check if user has not completed his profile them force him to complete
?><?php if ($_SESSION['id']>0 && $fetch['updateStatus']!=="Completed") {?>

            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs" >
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Profile Details</a></li>
                    </ul>
                </div>
                
                    <div role="tabpanel" class="tab-pane" id="usersettings">

                        <div class="card">
                            <div class="header">
                                <h2><strong>Account</strong> Settings</h2>
                                <h5><span class="zmdi zmdi-alert-triangle bg-red"></span>&nbsp;Please update your profile</h5>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                            <!-- begin form input -->
                                <form method="POST" action="" id="ud">
                                        <div class="form-group">
                                            <label for="fname">First Name<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="firstName" placeholder="Enter First Name" required="yes">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="lname">Last Name<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="lastName" placeholder="Enter Last Name" required="yes">
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" name="dob" required="yes">
                                        </div>
                                    </div>  
                                    <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="gender">Gender<span style="color: red;">*</span></label><br>
                                <div class="radio inlineblock m-r-25">
                                    <input type="radio" class="form-control" name="gender" id="radio1" value="Male" checked="">
                                    <label for="radio1">Male</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" class="form-control" name="gender" id="radio2" value="Female">
                                    <label for="radio2">Female</label>
                                </div>
                                    </div>
                            </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label for="country">Country<span style="color: red;">*</span></label>
                                          <input type="text" class="form-control" name="country" Value="Nigeria" placeholder="Country" readonly="yes">
                                                <?php //include('countries.php'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" name="city" placeholder="Enter Your City">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label for="phone">Mobile Number<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" name="phone" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="address">Address<span style="color: red;">*</span></label>
                                           <input type="text" class="form-control" name="address" placeholder="Enter Your Residential Address">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                            <button name="update" class="btn btn-danger btn-round">Save Changes</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                             <!-- display user infor if user has updated his account-->
                        </div><?php }elseif($fetch['updateStatus']=="Completed"){?>
                           
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Profile Details</a></li>
                    </ul>
                </div>
                
                    <div role="tabpanel" class="tab-pane" id="usersettings">

                        <div class="card">
                            <div class="header">
                                <h2><strong>Profile Completed</strong></h2>
                                <a href="./properties.php" class="btn btn-danger btn-lg m-t-10 btn-block">Buy Properties Now</a>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <form method="POST" action="" id="ud">
                                        <div class="form-group">
                                            <label for="fname">First Name</label>
                                        <input type="text" class="form-control" value="<?php echo $fetch['firstName']; ?>" readonly="yes" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" value="<?php echo $fetch['lastName']; ?>" readonly="yes">
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth</label>
                                            <input type="text" class="form-control" value="<?php echo $fetch['dob']; ?>" readonly="yes" >
                                        </div>
                                    </div>  
                                    <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="gender">Gender</label><br>
                                    <input type="text" class="form-control" value="<?php echo $fetch['gender']; ?>" readonly="yes">
                                </div>
                            </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control" Value="<?php echo $fetch['country']; ?>"  readonly="yes">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                    <input type="text" class="form-control" value="<?php echo $fetch['city']; ?>" readonly="yes">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label for="phone">Mobile Number</label>
                                    <input type="text" class="form-control" value="<?php echo $fetch['phone']; ?>" readonly="yes">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                           <input type="text" class="form-control" value="<?php echo $fetch['address']; ?>" readonly="yes">
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <?php }?>
                            <div class="card">
                            <div class="header">
                                <h2><strong>Security</strong> Settings</h2>
                                <h5><span>Password Update</span></h5>
                            </div><br />
                            <div class="body">
                               
<?php 
$user=$_SESSION['id'];
$select2=mysqli_query($conn, "SELECT * FROM users WHERE uID='$user'")or die(mysqli_error($conn));
    $fetchU=mysqli_fetch_array($select2,MYSQLI_ASSOC);

                                    if (isset($_POST['updatepass'])) {
                                    $date = date('Y-m-d H:i:s');
                                    $userID=$row['userID'];
                                    $activities=$row['firstName']." ".'update password recently';
                                    $pass = $_POST['password'];
                                    $update = password_hash($pass, PASSWORD_DEFAULT);
                            if ($select2->num_rows===1 and $fetchU['password']==$fetchU['password']) {
             $update2=mysqli_query($conn,"UPDATE users SET  password='$update' WHERE uID ='$user'") or die(mysqli_error($conn));
             if ($update2 >0) {
                 $sql1= mysqli_query($conn,"INSERT INTO user_log (userID, activitiesOnSite,login_time)VALUES('$userID','$activities', '$date')")or die(mysqli_error($conn));
                           echo "<script>
                            window.location = '../login.php';
                            </script>";
             }
        }else{echo "There was an error reseting your password try again! ";}
    }
?>
                                <form method="POST" action="">
                               <!-- <div class="form-group">
                                    <input type="text" class="form-control" value="<?php //echo $fetchU['firstName']." ".$row['lastName'] ?>" readonly="yes">
                                </div>-->
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Comfirm Password">
                                </div>
                                <button name="updatepass" class="btn btn-danger btn-round btn-block">Save Changes</button> 
                                </form>                             
                            </div>
                        </div>
                        <div>
                        	<button class="btn btn-primary btn-round btn-lg btn-block">Contact Support</button>
                        </div>
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
