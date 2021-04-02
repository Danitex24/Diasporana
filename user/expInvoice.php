<?php

 include('../includes/connection.php');
include('../includes/session.php');

$filename = "Diasporona.csv";
$fp = fopen('php://output', 'w');

$query = "SELECT * FROM invoice ";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_row($result)) {
	$header[] = $row[0];
}	

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);

$query = "SELECT * FROM invoice";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_row($result)) {
	fputcsv($fp, $row);
}
exit;
?>