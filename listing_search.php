<?php
 require_once('./includes/connection.php'); 
 
  if (isset($_POST['query'])) {
    //beging query entry input
    $query = "SELECT * FROM property WHERE propLocation LIKE '%{$_POST['query']}%' LIMIT 50";
    $result = mysqli_query($conn, $query);
 
  if (mysqli_num_rows($result) > 0) {
     while ($propertName = mysqli_fetch_array($result)) {
     	$id= $propertName['id'];
   echo '<a href="./single_property.php?id='.$id.'" class="" style="font-size:16px;">'.$propertName['propLocation'].' </a>';
    }
  } else {
    echo "<p class='btn btn-sm btn-primary'>property not found!...</p>";
  }
 
}
?>
