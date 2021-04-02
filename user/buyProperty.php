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

$query= mysqli_query($conn,"SELECT * FROM users  WHERE uID='$session_id' ")or die(mysqli_error($conn));
$row = mysqli_fetch_array($query, MYSQLI_ASSOC);

$query= mysqli_query($conn,"SELECT * FROM property  WHERE id='$pageid' ")or die(mysqli_error($conn));
$urow = mysqli_fetch_array($query, MYSQLI_ASSOC);

if (isset($_POST['request'])) {
require_once('../includes/connection.php');
$stmt = $conn->prepare("INSERT INTO 
  propertyrequest(userID, propID, propName, price, contactNo, contactEmail, requestDate)
   VALUES (?, ?, ?, ?, ?, ?, ?, )");

if($stmt !=='FALSE'){
$stmt->bind_param("sisisss", $userID,  $propID, $propName, $price, $contactNo, $contactEmail,  $requestDate);
// set parameters and execute
    $userID = $row['userID'];
    $propID = $urow['id'];
    $propName = $urow['name'];
    $price = $urow['price'];
    $contactNo = $row['phone'];
    $contactEmail = $row['email'];
    $CurrentTime=time();
$requestDate=strftime("%B-%d-%Y %H: %M: %S:", $CurrentTime);
$stmt->execute();
if ($stmt>0) {
    //echo "<meta http-equiv='Refresh' content='1; URL=properties.php'>";
   echo "<br><br><br><br><br><br><br><p class='btn btn-block btn-success'>Request sent thank you.</p>";
}else{
    echo "<p class='btn btn-danger'>There was an error!</p>";
   //header('Location: property-details.php');
}
$stmt->close();
}
}

//include header
include('header.php');
// Left Sidebar 
include('left-side-bar.php');
?>