<?php

require_once '../dompdf/autoload.inc.php';
include '../engine/engine.php';
include '../dbconnect/dbconnect.php';
?>

<?php
$staff_id=$_GET['staff_id'];

echo $staff_id;

$sql="SELECT * FROM record_staff WHERE staff_id='$staff_id'";

$query=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($query);
use Dompdf\Dompdf;
?>

<?php
$dompdf = new Dompdf();

$data=' ';
$data.='<center><h1 style="color:#3581de;"><u>STAFF MANAGER SYSTEM</u></h1></center>';
$data.='<center><h3 style="color:#343a40;"><u>USER INFO</u></h3></center>';
$data.='<center><hr></center>';
$data.='<p><strong style="color:#343a40;">Staff ID :</strong>&nbsp;'.$row['staff_id'].'</p>';
$data.='<center><hr></center>';
$data.='<p><strong style="color:#343a40;">Name&nbsp;:</strong>&nbsp;'.$row['name'].'</p>';
$data.='<center><hr></center>';
$data.='<p><strong style="color:#343a40;">Email&nbsp;:</strong>&nbsp;'.$row['email'].'</p>';
$data.='<center><hr></center>';
$data.='<p><strong style="color:#343a40;">Phone    :</strong>&nbsp;'.$row['num'].'</p>';
$data.='<center><hr></center>';
$data.='<p><strong style="color:#343a40;">Address  :</strong>&nbsp;'.$row['address'].'</p>';
$data.='<center><hr></center>';
$data.='<p><strong style="color:#343a40;">Position :</strong>&nbsp;'.$row['position'].'</p>';
$data.='<center><hr></center>';
$data.='<p><strong style="color:#343a40;">Salary &nbsp;:</strong>&nbsp;'.$row['salary'].'</p>';
$data.='<center><hr></center>';
 $data.='<br>';
  $data.='<br>';
   $data.='<br>';
     $data.='<br>';
   $data.='<br>';
     $data.='<br>';
   $data.='<br>';
$data.='<p><b>Regards,</b></p>';
$data.='<p style="color:#3581de;"><b>Team Managerio</b></p>';
$data.='<p style="color:#3581de;"><b>Townhall,Kathmandu</b></p>';
$data.='<p style="color:#3581de;"><b>www.managerio.com</b></p>';
 

$dompdf->loadHtml($data);

// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'portrait'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF to Browser 
$dompdf->stream();


?>
 