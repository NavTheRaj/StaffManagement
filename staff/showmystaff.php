<?php include '../engine/engine.php';
include '../dbconnect/dbconnect.php';
?>
<?php

if(!isset($_SESSION['id'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>USER-PAGE</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="../assets/css/Table-With-Search-1-1.css">
    <link rel="stylesheet" href="../assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
</head>

<body id="page-top">
	 
	 <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="showmystaff.php">Managerio</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                      <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php">MAIN MENU</a></li>
                     <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="searchmystaff.php">SEARCH STAFF</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="showmystaff.php?signout='1'">SIGN OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="col-md-12 search-table-col">
        <div class="form-group pull-right col-lg-4">

        <!-- <input type="text" placeholder="Search by typing here.." class="search form-control" name="search_user"> -->
    </div>
    <span class="counter pull-right"></span>
        <div class="table-responsive table-bordered table table-hover table-bordered results">
            <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd-id" class="col-lg-1" style="width: 20px;">&nbsp;STAFF ID</th>
                        <th id="trs-hd-name" class="col-lg-2" style="width: 300px;">NAME</th>
                        <th id="trs-hd-name" class="col-lg-2" style="width: 300px;">ADDRESS</th>
                        <th id="trs-hd-mail" class="col-lg-3" style="width: 150px;">EMAIL</th>
                        <th id="trs-hd-name" class="col-lg-2" style="width: 300px;">CONTACT</th>
                        <th id="trs-hd-name" class="col-lg-2" style="width: 300px;">SALARY</th>
                        <th id="trs-hd-name" class="col-lg-2" style="width: 300px;">POSTION</th>
                        <th id="trs-hd" class="col-lg-2">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                	<?php
                    $id=$_SESSION['id'];
                	$sql="SELECT * FROM record_staff WHERE user_id=$id";
	 
	$query=mysqli_query($db,$sql);
	 
	if(mysqli_num_rows($query)>0){
		while($rows=mysqli_fetch_assoc($query))
		{
		 
         $sid=$rows['staff_id'];
                	echo "<tr class='warning no-result'>";
                     echo "<td colspan='12'><i class='fa fa-warning'></i>&nbsp; No Result !!!</td>";
                   echo "</tr>";
                	echo "<tr>";
                	echo "<td>".$rows['staff_id']."</td>";
                	echo "<td>".$rows['name']."</td>";
                    echo"<td>".$rows['address']."</td>";
                	echo"<td>".$rows['email']."</td>";
                    echo"<td>".$rows['num']."</td>";
                    echo"<td>".$rows['salary']."</td>";
                    echo"<td>".$rows['position']."</td>";
                	echo "<td><button class='btn btn-success' type='submit' style='margin-left: 5px;'><a href='editmystaff.php?staff_id=$sid' style='text-decoration-line:none;'><i class='fa fa-check' style='font-size: 15px;'></i></a></button><button class='btn btn-danger' type='submit' style='margin-left: 5px;'><a href='deletemystaff.php?staff_id=$sid'><i class='fa fa-trash' style='font-size: 15px;'></i></a></button><button class='btn btn-info' type='submit' style='margin-left: 5px;'><a href='../pdf/pdf.php?staff_id=$sid'><i class=' fa fa-file-pdf-o' style='font-size: 15px; color:yellow;'></i></a></button></td>";
                	echo "</tr>";
                }
            }
            else{
                ?>
                <script type="text/javascript">
                    alert("Currently no staffs are there under your supervision!!")
                </script>
                <?php
            }

                	?>
                </tbody>
                	
              
               
            </table>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../assets/js/agency.js"></script>
    <script src="../assets/js/Table-With-Search-1.js"></script>
</body>
</html>
