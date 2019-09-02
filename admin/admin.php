<?php include 'engine.php';?>
<?php include 'dbconnect.php';?>
<?php
session_start();
if(!isset($_SESSION['name'])){
    header('location:.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ADMIN-PAGE</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>

<body id="page-top">
	 
	 <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="admin.php?warn_admin='1'">Managerio</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                     <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="search.php">SEARCH</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="admin.php?logout='1'">LOG OUT</a></li>
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
                        <th id="trs-hd-id" class="col-lg-1" style="width: 20px;">&nbsp;ID</th>
                        <th id="trs-hd-name" class="col-lg-2" style="width: 300px;">NAME</th>
                        <th id="trs-hd-mail" class="col-lg-3" style="width: 150px;">EMAIL</th>
                        <th id="trs-hd" class="col-lg-2">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                	<?php
                	$sql="SELECT * FROM reg_user";
	 
	$query=mysqli_query($db,$sql);
	 
	if(mysqli_num_rows($query)>0){
		while($rows=mysqli_fetch_assoc($query))
		{
		            $id = $rows['id'];
                	echo "<tr class='warning no-result'>";
                     echo "<td colspan='12'><i class='fa fa-warning'></i>&nbsp; No Result !!!</td>";
                   echo "</tr>";
                	echo "<tr>";
                	echo "<td>".$rows['id']."</td>";
                	echo "<td>".$rows['name']."</td>";
                	echo"<td>".$rows['email']."</td>";
                	echo "<td><button class='btn btn-success' type='submit' style='margin-left: 5px;'><a href='edit.php?id=$id' style='text-decoration-line:none;'><i class='fa fa-check' style='font-size: 15px;'></i></a></button><button class='btn btn-danger' type='submit' style='margin-left: 5px;'><a href='delete.php?id=$id'><i class='fa fa-trash' style='font-size: 15px;'></i></a></button></td>";
                	echo "</tr>";
                }
            }

                	?>
                </tbody>
                	
              
               
            </table>
        </div>
    </div>

   
    <!-- <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Team Anveshak</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks"></ul>
                </div>
            </div>
        </div>
    </footer> -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/Table-With-Search-1.js"></script>
</body>
</html>
