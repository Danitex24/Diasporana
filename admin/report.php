<?php
include('../includes/connection.php');
$query= mysqli_query($conn,"SELECT * FROM package ORDER BY id ASC")or die(mysqli_error($conn));
$qrow = mysqli_fetch_array($query, MYSQLI_ASSOC);
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if (isset($_POST['send'])) {

 $userID = test_input($qrow['userID']);
 $propID = test_input($qrow['propID']);
 $subject = $_POST["subject"];
 $content = $_POST["content"];
 $status = 'unread';
 $CurrentTime = time();
$requestDate=strftime("%B/%d/%Y %H: %M: %S:", $CurrentTime); //$image,  $image1, $image2, $image3, $image4, 

$result= mysqli_query($conn,"INSERT INTO report (userID, propID, subject, content, status, image, image1, image2, image3, image4, addDate)VALUES('$userID', '$propID', '$subject', '$content', '$status', '$image', '$image1', '$image2', '$image3', '$image4','$requestDate')")or die(mysqli_error($conn));

if ($result) {
        echo"<script>alert('Report sent successfull')
        location='manageProperties.php';
        </script>";
}else{
	echo"<script>alert('There was an error sending report! try again')
     location='manageProperties.php';
     </script>";
}
$result->close();
}
 ?>