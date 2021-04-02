<?php
if (isset($_GET['id']) && is_numeric($_GET['id']))
     // get id value
  $id = $_GET['id'];
  $results = $id;
   require_once('../includes/connection.php');

$stmt = $conn->prepare("DELETE FROM package WHERE propID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
//$stmt->close();

    if($stmt->execute()){
       echo"<script>alert('Request Cancel successfull')
		location='packageRequest.php';
		</script>";
    }else{
        die('Error : ('. $mysqli->errno .') '. $mysqli->error);
        	echo"<script>alert('Request not Canceled! You are not athurise to perform this function pls contact the admin')
				location='packageRequest.php';
				</script>";
    }
    $stmt->close();
?>
