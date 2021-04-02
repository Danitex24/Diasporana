<?php 
//session_start();
include('./includes/connection.php');
include('includes/session.php');

$session_id=$_SESSION['id'];

 if(!isset($_GET['id'])){
  //header("Location:./includes/logout.php");
  }else {
  $pageid = $_GET['id'];
}
//clean input before submiting the data in the form
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$query = mysqli_query($conn,"SELECT * FROM users  WHERE uID='$session_id' ")or die(mysqli_error($conn));
$row = mysqli_fetch_array($query, MYSQLI_ASSOC);

	$sqls=mysqli_query($conn, "SELECT * FROM property WHERE id='$pageid'")
	or die(mysqli_error($conn));
	$view=mysqli_fetch_array($sqls,MYSQLI_ASSOC);


if (isset($_POST['review'])) {
	$propID = test_input($pageid);
	$uID = test_input($row['uID']);
	$review = test_input($_POST['review']);
	$propName = test_input($view['name']);
	$userName = $row['firstName']." ".$row['lastName'];
	$userEmail = test_input($row['email']);
	$CurrentTime = time();
	$reviewDate=strftime("%B/%d/%Y %H: %M: %S:", $CurrentTime);


		$stmt = "INSERT INTO review (propID, uID, review, propName, userName,userEmail	reviewDate) VALUES (?, ?, ?, ?, ?,?, ?)";
		$stmt = $conn->prepare($stmt);
		$stmt->bind_param("iisssss", $propID, $uID, $review, $propName, $userName, $userEmail, $reviewDate);
		$stmt->execute();

		var_dump($row);
		exit();

		if ($stmt) {
			echo"<script>alert('Review Submited successfull')
					location='./single_property.php';
				 </script>";
		}

	}

  ?>