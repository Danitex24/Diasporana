<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['id']) && is_numeric($_GET['id'])){
     // get id value
  $id = $_GET['id'];
  $results = $id;}
  $st = "Approved";
$CurrentTime=time();
$aDate=strftime("%B/%d/%Y %H: %M: %S:", $CurrentTime);
   require_once('../includes/connection.php');

   $statement = $conn->prepare("UPDATE package SET subscribed = ?, approveDate = ? WHERE propId = ?");
   $statement->bind_param("ssi", $st, $aDate, $id);

   $statement->execute();

    if($statement->execute()){
       echo"<script>alert('Request Approved successfull')
		location='packageRequest.php';
		</script>";
    }else{
        die('Error : ('. $mysqli->errno .') '. $mysqli->error);
    }
    $statement->close();

?>
