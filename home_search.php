<?php
 require_once('./includes/connection.php'); 
 
  if (isset($_POST['query'])) {
    
    $query = "SELECT * FROM property WHERE name LIKE '%{$_POST['query']}%' OR propLocation LIKE '%{$_POST['query']}%' OR City LIKE '%{$_POST['query']}%' OR State LIKE '%{$_POST['query']}%' LIMIT 100";
    $result = mysqli_query($conn, $query);
 
  if (mysqli_num_rows($result) > 0) {
     while ($propertName = mysqli_fetch_array($result)) {
     	$id= $propertName['id'];

   echo '<a href="./single_property.php?id='.$id.'" class="" style="color:blue;">'.$propertName['name'].' </a>';
   echo '<a href="./single_property.php?id='.$id.'" class="">'.$propertName['propLocation'].' </a>';
    }
  } else {
    echo "<p class='btn btn-sm btn-primary'>property not found!...</p>";
  }
 
}
?>
