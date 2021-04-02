<?php

 include("connect.php");
 //insert.php

 $subject = mysqli_real_escape_string($con,$_POST["subject"]);
 $comment = mysqli_real_escape_string($con,$_POST["comment"]);
 $query = "INSERT INTO comments(subject, comment, status) VALUES ('$subject', '$comment', 0)";
 $result=mysqli_query($con, $query);
  if($result){
  	echo "Sucessful";	
    echo "<script type='text-javascript'>$('#comment_form')[0].reset()<script>";
    
 } else {
 	echo mysqli_error($result);
 }

?>