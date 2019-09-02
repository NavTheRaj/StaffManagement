<?
include "../dbconnect/dbconnect.php";

//FOR UI/UX
$result1 = mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff WHERE user_id=7");
$row1 = mysqli_fetch_assoc($result1);
$count1 = $row1['count'];
echo $count1;

//FOR R&D
$result2 = mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff WHERE user_id=1");
$row2 = mysqli_fetch_assoc($result2);
$count2 = $row2['count'];
echo $count2;

//FOR FINANCE
$result3 = mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff WHERE user_id=2");
$row3 = mysqli_fetch_assoc($result3);
$count3 = $row3['count'];
echo $count3;

//FOR MARKETING
$result4 = mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff WHERE staff_id=4");
$row4 = mysqli_fetch_assoc($result4);
$count4 = $row4['count'];
echo $count4;

//FOR RESOURCES
$result5= mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff WHERE staff_id=6");
$row5 = mysqli_fetch_assoc($result5);
$count5 = $row5['count'];
echo $count5;

//FOR DEVELOPERS
$result6= mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff WHERE staff_id=5");
$row6 = mysqli_fetch_assoc($result5);
$count6 = $row6['count'];
echo $count6;

//FOR DATA ANALYSIS
$result7= mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff WHERE staff_id=3");
$row7 = mysqli_fetch_assoc($result5);
$count7 = $row7['count'];
echo $count7;

 
?>

<!DOCTYPE html>
<html>
<head>
    <title>GRAPHS</title>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>
<body>
<center><div id="tester" style="width:50%;height:auto;">
    <script>
    TESTER = document.getElementById('tester');
    Plotly.plot( TESTER, [{
    x: ['UI /UX','R & D','FINANCE','MARKETING','RESOURCES','DEVELOPERS','DATA ANALYSIS'],
    y: [<?php echo $count1;?>,<?php echo $count2;?>,<?php echo $count3;?>,<?php echo $count4;?>,<?php echo $count5;?>,<?php echo $count6;?>,<?php echo $count7;?>] }], {
    margin: { t: 0 } } );
</script>
</div></center>
</body>
</html>

 