<?php
if (isset($_GET['id']) && is_numeric($_GET['id']))
     // get id value
  $id = $_GET['id'];
  $results = $id;
   require_once('../includes/connection.php');

$stmt = $conn->prepare("DELETE FROM landrequest WHERE landID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();


    if($stmt->execute()){
       echo"<script>alert('Request deleted successfull')
		location='landRequest.php';
		</script>";
    }else{
        die('Error : ('. $mysqli->errno .') '. $mysqli->error);
        	echo"<script>alert('Request not deleted You are not athurise to perform this function pls contact the admin')
				location='landRequest.php';
				</script>";
    }
    $stmt->close();
?>
