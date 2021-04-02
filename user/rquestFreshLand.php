<?php
// Salamat Diasporana Design by: Daniel Adasho  08039575760
//include header section
include('../includes/connection.php');
include('../includes/session.php');
$session_id=$_SESSION['id'];
 if(!isset($_GET['id'])){
  header("Location:../includes/logout.php");
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

//fetch from freshland
$query= mysqli_query($conn,"SELECT * FROM freshland  WHERE id='$pageid' ")or die(mysqli_error($conn));
$frow = mysqli_fetch_array($query, MYSQLI_ASSOC);

if (isset($_POST['request'])) {
  // set parameters and execute
    $userID = test_input($session_id);
    $landID = test_input($urow['id']);
    $propName = test_input($urow['title']);
    $price = test_input($urow['price']);
    $purpose= test_input($urow['purpose']);
    $contactNo = test_input($row['phone']);
    $contactEmail = test_input($row['email']);
    $CurrentTime=time();
$requestDate=strftime("%B/%d/%Y %H: %M: %S:", $CurrentTime);
$activities=$row['firstName']." ".$row['lastName']." "."has requested to buy a freshland"." ".$urow['title'];
//values to insert into invoice and transaction table
$compAddress= test_input("5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.");
$compName = test_input("Salamat Group Ltd.");
$CcontactNo=  test_input("07025004795");
$description= test_input("Sent for approval");
$indescription = test_input("Invoice Created");
$location = test_input($urow['location']);
$orderID = mt_rand();
$invoiceID="#".mt_rand();
//fucntion for increamenting qty no.
function repeat() {
      $qty = $_SESSION[1];
      $qty++;
     $_SESSION[1] = $qty;
     return $qty;
 }
 $qty =1;
 $st = "Pending";
$stmt= mysqli_query($conn,"INSERT INTO landrequest (userID, landID, title,  price, purpose, contactNo, email, requestDate )VALUES('$userID',  '$landID', '$propName', '$price', '$purpose', '$contactNo', '$contactEmail',  '$requestDate')")or die(mysqli_error($conn));
//check if stmt is true the insert the records into the db
if ($stmt>0) {
  $sql1= mysqli_query($conn,"INSERT INTO invoice 
    (userID, landID, orderID, invoiceID, qty, landTitle,
    landLocation, description, landPrice, compName, compAddress, contact, `date`)
    VALUES('$userID',  '$landID', '$orderID', '$invoiceID', '$qty', '$propName', 
    '$location', '$description', '$price', '$compName', 
    '$compAddress', '$CcontactNo', '$requestDate')")or die(mysqli_error($conn));
//insert data into transaction tb
$sql1= mysqli_query($conn,"INSERT INTO transactions (userID, landID, orderID, invoiceID, description, compName, compAddress, contact, tDate)VALUES('$userID',  '$landID', '$orderID', '$invoiceID','$description','$compName', '$compAddress', '$CcontactNo', '$requestDate')")or die(mysqli_error($conn));
//insert into user_log
   $sql3= mysqli_query($conn,"INSERT INTO user_log (userID, activitiesOnSite,login_time)VALUES('$userID','$activities', '$requestDate')")or die(mysqli_error($conn));
   
//if everything is successfull then update land status
   $updt= mysqli_query($conn,"update freshland set status ='$st' where id ='$pageid'")or die(mysql_error());

   echo "<script>alert('Request sent thank you');
    window.location.href='properties.php';
    </script>";
}else{
  echo "<meta http-equiv='Refresh' content='1; URL=requestFreshLand.php'>";
    echo "<p class='btn btn-danger'>There was an error!</p>";
   //header('Location: property-details.php');
}
}
//include header
include('header.php');
// Left Sidebar 
include('left-side-bar.php');
?>
<!-- main content -->
<section class="content"><br>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="tab-content"><br><br>
                    <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                        <div class="card" id="details">
                            <div class="body">                                
                              <div class="mt-40"></div>
                                <div class="row clearfix">
                                  <div class="col-lg-6 col-md-12">
                                      <form method="POST" action="" id="ud">
                                      <!-- grab all the hidden values from the form -->
                                        <input type="text" name="userID" value="<?php $row['userID'] ?>" hidden="yes" >
                                        <input type="text" name="propID" value="<?php $row['id'] ?>" hidden="yes">
                                        <div class="form-group">
                                            <label for="fname">User Name</label>
                                            <input type="text" class="form-control" value="<?php echo $row['firstName']." ".$row['lastName'] ?>" readonly="yes">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="phone">Mobile Number</label>
                                            <input type="text" class="form-control" name="contactNo" value="<?php echo $row['phone'] ?>" readonly="yes">
                                        </div>
                                    </div>
                                  <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="contactEmail">Email</label>
                                            <input type="text" class="form-control" name="contactEmail" value="<?php echo $row['email']?>" readonly="yes">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="price">Land Title</label>
                                            <input type="text" name="title" class="form-control" value="<?php echo $frow['title'] ?>" readonly="yes">
                                        </div>
                                    </div>
                                      <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="fname">Price</label>
                                            <input type="text" class="form-control" value="<?php echo $frow['price'] ?>" name="landPrice" readonly="yes">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">

                                   <?php if ($frow['status']=='Pending') {
                                    //check if property has been purchase
                                      echo "<button class='btn btn-primary  btn-round' disabled='yes'>Ongoing Payment</button>

                                        <a href='properties.php' class='btn btn-danger btn-round'>Request another</a>
                                      ";
                                    }else{
                                      echo '
                                            <label for="price"><input type="checkbox" name="" required="yes">&nbsp;I agree with the terms & conditios on <a href="#">Diasporana</a> </label><br>
                                            <button name="request" class="btn btn-info">Submit</button>
                                            <a href="properties.php" class="btn btn-danger">Cancel</a>
                                            ';}?>
                                        </div>
                                       </div>
                                    	</form>
                                    </div>
                                </div>
                            </div>
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
$conn->close();