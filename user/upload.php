
<?php

include('../includes/connection.php');
include('../includes/session.php');
$user=$_SESSION['id'];
$query= mysqli_query($conn,"SELECT * FROM users WHERE uID = '$user'")or die(mysqli_error($conn));
    $row = mysqli_fetch_array($query, MYSQLI_ASSOC);

$userID=$row['userID'];
$activities=$row['firstName']." ".'upload profile picture recently';
$date = date('Y-m-d H:i:s');
$target_dir = "assets/images/userprofile/";
$target_file = $target_dir . basename($_FILES["profilePix"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["upload"])) {
  $check = getimagesize($_FILES["profilePix"]["tmp_name"]);
  if($check !== false) {
   // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

 //**echo "<img src='assets/images/diasporana-avatar.png' class='rounded-circle' alt='profile image'>
  //                          <br>
  //                          <button class='btn btn-sm'>Upload Image</button>";
   //                         }else{
   //                            echo "<img src='assets/images/'.$image'' class='rounded-circle' alt='No image'>"; 

// Check file size
if ($_FILES["profilePix"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["profilePix"]["tmp_name"], $target_file)) {
    

$update=mysqli_query($conn,"UPDATE users SET profilePix='$target_file' WHERE uID ='$user'") or die(mysqli_error($conn));

    if ($update >0) {

    $sql1= mysqli_query($conn,"INSERT INTO user_log (userID, activitiesOnSite,login_time)VALUES('$userID','$activities', '$date')")or die(mysqli_error($conn));

    echo "<script>alert('Profile image has been uploaded')</script>";
    header('Location: ./my-profile.php');
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
  }
}
?>
