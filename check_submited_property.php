<?php
session_start();
require_once('./includes/connection.php');
//include('./includes/session.php');

$user=$_SESSION['id'];

$sqls=mysqli_query($conn, "SELECT * FROM users WHERE uID='$user'")
or die(mysqli_error($conn));
$submitfetch=mysqli_fetch_array($sqls,MYSQLI_ASSOC);

//sanitaize data input
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//begin input data
$uploadOk = 1;
$pname = test_input($_POST['name']);   
$price = test_input($_POST['price']); 
$vat = test_input($_POST['vat']); 
$currency = "&#8358;";
$addBy = $submitfetch['firstName']; 
$propLocation = test_input($_POST['propLocation']);   
$sqf = test_input($_POST['sqf']);   
$bedroom = test_input($_POST['bedroom']);
$bathroom= test_input($_POST['bathroom']);
$pspace = test_input($_POST['pspace']);
$garages = test_input($_POST['garages']);
$fsale = test_input($_POST['fsale']);
$frent  = test_input($_POST['frent']);
$propType = test_input($_POST['propType']);
$verified = "Processing";
$City = test_input($_POST['City']);
$State = test_input($_POST['State']);
$ZipCode = test_input($_POST['ZipCode']);
$CloseLandMark = test_input($_POST['CloseLandMark']);
$Agreement = test_input($_POST['Agreement']);
$description = test_input($_POST['description']); 
$otherInfo = test_input($_POST['otherInfo']);
$status = "Available";
$CurrentTime=time();
$addDate=strftime("%B-%d-%Y %H: %M: %S:", $CurrentTime);
$uploads_dir = './uploads/';
 $propImage =  $_FILES['userImage']['name'][0];
 $image1 =  $_FILES['userImage']['name'][1];
 $image2 =  $_FILES['userImage']['name'][2];
 $image3 =  $_FILES['userImage']['name'][3];
 $image4 =  $_FILES['userImage']['name'][4];
 $image5 =  $_FILES['userImage']['name'][5];
 $image6 =  $_FILES['userImage']['name'][6];

//force users to add property name, price and location
if ($pname=='' or $price=='' or $propLocation=='') {
  echo "<div class='alert alert-danger'> Sorry, you need to include property name, price and location</div>";
   exit();
} else {

//begin image array
if(is_array($_FILES)) {

foreach ($_FILES['userImage']['name'] as $name => $value){

if(is_uploaded_file($_FILES['userImage']['tmp_name'][$name])) {

$sourcePath = $_FILES['userImage']['tmp_name'][$name];
$targetPath = "./uploads/".$_FILES['userImage']['name'][$name];
$imageFileType = strtolower(pathinfo($_FILES['userImage']['name'][$name],PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($targetPath)) {
  echo "<div class='alert alert-danger'>Sorry, file <b>".$_FILES['userImage']['name'][$name]."</b> already exists.</div>";
  exit();
}
// Check file size
//print json_encode($_FILES["userImage"]["size"]);
if (($_FILES["userImage"]["size"][0] OR $_FILES["userImage"]["size"][1] OR $_FILES["userImage"]["size"][2] OR $_FILES["userImage"]["size"][3] OR $_FILES["userImage"]["size"][4] OR $_FILES["userImage"]["size"][5] OR $_FILES["userImage"]["size"][6]) > 50000 ) {
  echo "Sorry, file is too large to upload.";
 exit();
}

//check file type to be uploaded
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//if no image uploaded unset all images to zero
  $uploadOk = 0;
  unlink("images/".$propImage);
    unlink("images/".$image1);
    unlink("images/".$image2);
    unlink("images/".$image3);
    unlink("images/".$image4);
    unlink("images/".$image5);
    unlink("images/".$image6);

  exit();
}

//check if the file faild to move to upload path
if (move_uploaded_file($sourcePath,$targetPath)===false) {
echo "ERROR: File not uploaded. Try again.";
    exit();
}}}}


//begin property upload
$addprop="INSERT INTO `property` (`name`, `price`, `vat`, `currency`, `addDate`, `addBy`, `propLocation`, `sqf`, `bedroom`, `bathroom`, `pspace`, `garages`, `fsale`, `frent`,`propType`, `verified`,`City`,`State`,`ZipCode`,`CloseLandMark`, `description`, `otherInfo`, `propImage`,  `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `status`,`Agreement`)

 VALUES ('$pname', '$price', '$vat', '$currency', '$addDate', '$addBy', '$propLocation', '$sqf', '$bedroom', '$bathroom', '$pspace', '$garages', '$fsale','$frent','$propType', '$verified','$City','$State', '$ZipCode', '$description','$CloseLandMark', '$otherInfo', '$propImage', '$image1', '$image2', '$image3', '$image4', '$image5', '$image6', '$status','$Agreement')";

    if (mysqli_query($conn,$addprop) ){
      echo "<meta http-equiv='Refresh' content='1; URL=properties.php'>";
     echo"Property has been successfully submited for review check your dashboard for more information";
    //header('Location: ./submit_property.php');
  } else {

    die(mysqli_error($conn));
    echo "<div class='alert alert-danger'> Sorry, there was an error adding property</div>";
    unlink("images/".$propImage);
    unlink("images/".$image1);
    unlink("images/".$image2);
    unlink("images/".$image3);
    unlink("images/".$image4);
    unlink("images/".$image5);
    unlink("images/".$image6);

}
}
?>