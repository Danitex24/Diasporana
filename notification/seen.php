<?php

 include("connect.php");
 //insert.php

 if (isset($_POST['seen'])) {
   $comment_id=$_POST['seen'];
   $update_query = "UPDATE comments SET status = 1 WHERE status=0 AND id=$comment_id";
   mysqli_query($con, $update_query);
}

?>