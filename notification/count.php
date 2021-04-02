<?php 
include('../includes/connection.php');
$sqll = "SELECT * from report where status = 'unread'";
$result = $conn->query($sqll);
$rerow = $result->fetch_assoc();
$count = $result->num_rows;
?>
