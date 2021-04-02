 <?php 

 include('../includes/connection.php');
include('../includes/session.php');
require_once("../print/vendor/autoload.php"); 
//require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$name="Diasporana";
//form.setAttribute("action", "'._MPDF_URI.'includes/out.php/'.$name.'");

   
// Select data from MySQL database
$select = "SELECT * FROM `invoice`";
$result = $conn->query($select);
$data = array();
while($row = $result->fetch_object()){
    $data .= '<tr>'
          .'<td>'.$row->propName.'</td>'
          .'<td>'.$row->propL.'</td>'
          .'<td>'.$row->qty.'</td>'
          .'<td>'.$row->description.'</td>'
          .'<td>'.$row->date.'</td>'
          .'<td>'.$row->amount.'</td></tr>';
}

// Take PDF contents in a variable
$pdfcontent = '<strong>Salamat Group Ltd.
        <p>5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.</p><hr>
        <table autosize="1">
        <tr>
        <td style="width: 33%"><strong>PROPERTY NAME</strong></td>
        <td style="width: 36%"><strong>PROPERTY LOCATION</strong></td>
        <td style="width: 30%"><strong>QTY</strong></td>
        <td style="width: 36%"><strong>DESCRIPTION</strong></td>
        <td style="width: 30%"><strong>DATE</strong></td>
        <td style="width: 30%"><strong>AMOUNT</strong></td>
        </tr>
        '.$data.'
        </table>
<div><hr>
<h2>Payment Instructions:<small>Make Payment using the below bank details</small><br></h2>
<h3>Account Name:<small>Diasporana</small></h3>
<h3>Account Number:<small>2222222222</small></h3>
<h3>Bank Name:<small>UBA</small></h3>
 </div>
        ';
$mpdf->WriteHTML($pdfcontent);

$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0; 

//call watermark content and image
$mpdf->SetWatermarkText('Diasporana');
$mpdf->showWatermarkText = true;
$mpdf->watermarkTextAlpha = 0.1;
//output in browser
$file_name = 'Diasporana.pdf';
$mpdf->Output($file_name, 'D');
//$mpdf->Output(); 
//}elseif (isset($_GET['exp'])) {

$filename = "Diasporona.csv";
$fp = fopen('php://output', 'w');

$header[] = $row[6];
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);

$query = "SELECT * FROM invoice";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_row($result)) {
    fputcsv($fp, $row);
}
exit;

//}       
?>
   
