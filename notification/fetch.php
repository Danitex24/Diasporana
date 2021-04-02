<?php
include('connect.php');

if(isset($_POST['view'])){

$query = "SELECT * FROM comments WHERE status=0 ORDER BY id DESC LIMIT 5";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   $output .= '
   <li class="seenbtn" onclick=seen_notif('.$row["id"].') data-id="'.$row["id"].'" style="border-bottom:1px solid">
   <a href="#">
   <strong>'.$row["subject"].'</strong><br />
   <small><em>'.$row["comment"].'</em></small>
   </a>
   </li>
   ';

 }
}
else{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No Notifications</a></li>';
}



$status_query = "SELECT * FROM comments WHERE status=0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);

}

?>