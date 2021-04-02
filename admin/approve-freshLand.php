<?php
error_reporting(1);
ini_set('display_errors', 1);

if (isset($_GET['id']) && is_numeric($_GET['id'])){
     // get id value
  $id = $_GET['id'];
  $results = $id;}
  $st = "Approved";
  $tt = "Approved";
$CurrentTime=time();
$aDate=strftime("%B/%d/%Y %H: %M: %S:", $CurrentTime);
   require_once('../includes/connection.php');
   //update landrequest table= 
   $statement = $conn->prepare("UPDATE landrequest SET status = ?, approveDate = ? WHERE landID = ?");
   $statement->bind_param("ssi", $st, $aDate, $id);

   $statement->execute();
   //update freshland table 
   $stmt = $conn->prepare("UPDATE freshland SET status = ?, approveDate = ? WHERE id = ?");
   $stmt->bind_param("ssi", $st, $aDate, $id);
   $stmt->execute();

     	//update invoice table
  	$stmtd = $conn->prepare("UPDATE invoice SET status = ?, approved = ? WHERE landID = ?");
  	$stmtd->bind_param("ssi", $st, $tt, $id);
  	$stmtd->execute();

   //update transation table

    //$stmtc = $conn->prepare("UPDATE transations SET status = ?, approved = ? WHERE landID = ?");
  	//$stmtc->bind_param("ssi", $st, $tt, $id);
  	//$stmtc->execute();


    if($statement->execute()){
       echo"<script>alert('Request Approved successfull')
		location='landRequest.php';
		</script>";
    }else{
        die('Error : ('. $mysqli->errno .') '. $mysqli->error);
    }
    $statement->close();

?>
