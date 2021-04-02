<?php
include('../includes/connection.php');
include('../includes/session.php');
//include('header.php');
//require_once('left-side-bar.php');
$user=$_SESSION['id'];
$sqls=mysqli_query($conn, "SELECT * FROM users WHERE id='$user'")or die(mysqli_error($conn));
$sqfetch=mysqli_fetch_array($sqls,MYSQLI_ASSOC);
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}  
$title = test_input($_POST['title']);   
$price = test_input($_POST['price']); 
$addBy = $sqfetch['firstName']; 
$landSize = test_input($_POST['landSize']);   
$title = test_input($_POST['title']);   
$purpose = test_input($_POST['purpose']);
$location = test_input($_POST['location']);
$description = test_input($_POST['description']);
$CurrentTime=time();
$addedDate=strftime("%B-%d-%Y %H: %M: %S:", $CurrentTime);
$uploads_dir = '../uploads/fresland/';
 $landImage =  $_FILES['userImage']['name'][0];
 $image1 =  $_FILES['userImage']['name'][1];
 $image2 =  $_FILES['userImage']['name'][2];
 $image3 =  $_FILES['userImage']['name'][3];
 $image4 =  $_FILES['userImage']['name'][4];
if ($title=='' or $price=='' or $location=='') {
  echo "<div class='alert alert-danger'> Sorry, you need to include property name, price and location</div>";
   exit();
} else {

if(is_array($_FILES)) {
foreach ($_FILES['userImage']['name'] as $name => $value){

if(is_uploaded_file($_FILES['userImage']['tmp_name'][$name])) {
$sourcePath = $_FILES['userImage']['tmp_name'][$name];
$targetPath = "../uploads/fresland/".$_FILES['userImage']['name'][$name];
$imageFileType = strtolower(pathinfo($_FILES['userImage']['name'][$name],PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($targetPath)) {
  echo "<div class='alert alert-danger'>Sorry, file <b>".$_FILES['userImage']['name'][$name]."</b> already exists.</div>";
  exit();
}
// Check file size
//print json_encode($_FILES["userImage"]["size"]);
if (($_FILES["userImage"]["size"][0] OR $_FILES["userImage"]["size"][1] OR $_FILES["userImage"]["size"][2] OR $_FILES["userImage"]["size"][3] OR $_FILES["userImage"]["size"][4]) > 50000 ) {
  echo "Sorry, your file is too large.";
 exit();
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
  unlink("images/".$landImage);
    unlink("images/".$image1);
    unlink("images/".$image2);
    unlink("images/".$image3);
    unlink("images/".$image4);

  exit();
}

if (move_uploaded_file($sourcePath,$targetPath)===false) {
echo "ERROR: File not uploaded. Try again.";
    exit();
}}}}

$addprop="INSERT INTO `freshland` (`title`, `price`, `landSize`, `purpose`, `location`, `addBy`, `description`, `landImage`,  `image1`, `image2`, `image3`, `image4`, `addedDate`) VALUES ('$title', '$price', '$landSize', '$purpose', '$location', '$addBy', '$description','$landImage', '$image1', '$image2', '$image3', '$image4', '$addedDate')";
    if (mysqli_query($conn,$addprop) ){

echo"<script>alert('Property added successfully')
        location='..admin/freshLand';
        </script>";
    //echo "<div class='alert alert-success'> Property added successfully</div>";
    //header('..admin/freshLand.php');
  } else {

    die(mysqli_error($conn));
    echo "<div class='alert alert-danger'> Sorry, there was an error adding property</div>";
    unlink("images/".$landImage);
    unlink("images/".$image1);
    unlink("images/".$image2);
    unlink("images/".$image3);
    unlink("images/".$image4);
    unlink("images/".$image5);
    unlink("images/".$image6);

}
}
?>
