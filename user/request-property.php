

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

$query= mysqli_query($conn,"SELECT * FROM property  WHERE id='$pageid' ")or die(mysqli_error($conn));
$urow = mysqli_fetch_array($query, MYSQLI_ASSOC);

if (isset($_POST['request'])) {
  // set parameters and execute
    $uID = test_input($row['id']);  
    $userID = test_input($row['userID']);
    $propID = test_input($urow['id']);
    $propName = test_input($urow['name']);
    $price = test_input($urow['price']);
    $contactNo = test_input($row['phone']);
    $contactEmail = test_input($row['email']);
    $CurrentTime=time();
$requestDate=strftime("%B/%d/%Y %H: %M: %S:", $CurrentTime);
$activities=$row['firstName']." ".$row['lastName']." "."has requested to buy property"." ".$urow['name'];
//values to insert into invoice and transaction table
$compAddress= test_input("5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.");
$compName = test_input("Salamat Group Ltd.");
$CcontactNo= test_input("07025004795");
$description= test_input("Sent for approval");
$indescription = test_input("Invoice Created");
$propL = test_input($urow['propLocation']);
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
$discount = test_input($urow['discount']);
//check vat, discount and output the totalprice
$p=100;
$amount = test_input($urow['price']);
$vat = test_input($urow['vat']);
//$vat_value = (((int)$amount * (int)$vat) / 100);
//$balamce = $amount - $vat_value;
$subTotal = ((int)$amount - (int)$discount);

$total = $subTotal;

//insert into property management table
$stmt= mysqli_query($conn,"INSERT INTO propertyrequest (uID, userID, propID, propName, price, contactNo, contactEmail, requestDate)VALUES('$uID','$userID',  '$propID', '$propName', '$price', '$contactNo', '$contactEmail',  '$requestDate')")or die(mysqli_error($conn));

if ($stmt>0) {

  //insert into invoice now
  $sql1= mysqli_query($conn,"INSERT INTO invoice 
    (userID, propID, orderID, invoiceID, qty, propName, 
    propL, description, amount, discount, vat, 
    subTotal, total, compName, compAddress, contact, `date`)
    VALUES('$userID',  '$propID', '$orderID', '$invoiceID', '$qty', '$propName', 
    '$propL', '$description', '$amount', '$discount', 
    '$vat', '$subTotal', '$total', '$compName', 
    '$compAddress', '$CcontactNo', '$requestDate')")or die(mysqli_error($conn));

//insert into transaction table now
$sql1= mysqli_query($conn,"INSERT INTO transactions (userID, propID, orderID, invoiceID, description, compName, compAddress, contact, tDate)VALUES('$userID',  '$propID', '$orderID', '$invoiceID','$description','$compName', '$compAddress', '$CcontactNo', '$requestDate')")or die(mysqli_error($conn));


//insert into user log table
   $sql3= mysqli_query($conn,"INSERT INTO user_log (userID, activitiesOnSite,login_time)VALUES('$userID','$activities', '$requestDate')")or die(mysqli_error($conn));

    echo "<meta http-equiv='Refresh' content='1; URL=properties.php'>";
   echo "<br><br><br><p class='btn btn-block btn-success'>Request sent thank you.</p>";
}else{
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
                            <h2>Details</h2>                                
                              <div class="mt-40"></div>
                                <div class="row clearfix">
                                  <div class="col-lg-6 col-md-12">
                                      <form method="POST" action="" id="ud">
                                    <!-- grab all the hidden values from the form -->
                                        <input type="text" name="userID" value="<?php $row['userID'] ?>" hidden="yes" >

                                        <input type="text" name="uID" value="<?php $row['uID'] ?>" hidden="yes" >

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
                                            <label for="price">Property Name</label>
                                            <input type="text" name="propName" class="form-control" value="<?php echo $urow['name'] ?>" readonly="yes">
                                        </div>
                                    </div>
                                      <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="fname">Price</label>
                                            <input type="text" class="form-control" value="<?php echo $urow['price'] ?>" name="price" readonly="yes">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="price"><input type="checkbox" name="" required="yes">&nbsp;I agree with the terms & conditios on <a href="#">Diasporana</a> </label><br>
                                            <button name="request" class="btn btn-info">Submit</button>
                                            <button name="request" onClick="document.location.href='properties.php'" class="btn btn-danger">Cancel</button>
                                        </div>
                                    </div>
                                    	</form><!--end form -->
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