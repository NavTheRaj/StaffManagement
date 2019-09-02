<?php include '../engine/engine.php';
include '../dbconnect/dbconnect.php';
?>

<?php
global $db;
$staff_id=$_GET['staff_id'];
$sql="DELETE FROM `record_staff` WHERE staff_id ='$staff_id'";

if($db->query($sql)==TRUE){

	 header('location:showmystaff.php');
}

else{
	 echo "<script>";
    echo "alert('Delete Operation Aborted');";
    echo "window.location.replace('showmystaff.php');";
    echo "</script>";
}
?>