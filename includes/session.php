<?php
include('../includes/connection.php');
 session_start(); 
 //Check whether the session variable SESS_MEMBER_ID is present or not
 if (!isset($_SESSION['id'])){
 	header('Location: ./login.php');
 }
 $session_id=$_SESSION['id'];
$query= mysqli_query($conn,"SELECT * FROM users WHERE id = '$session_id'")or die(mysqli_error($conn));

	$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
	$userID = $row['userID'];
	$email = $row['email'];
	$user= $row['firstName']." ". $row['lastName'];
?>