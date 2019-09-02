<?php include '../engine/engine.php';
include '../dbconnect/dbconnect.php';

$id=$_GET['id'];
$sql="SELECT * FROM reg_user WHERE id='$id'";
$query=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($query);
?>
 <?php
 if(!isset($_SESSION['name'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Update</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/sigin.css">
    
</head>

<body id="page-top">
   
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.html">Managerio</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                     <li class="nav-item" role="presentation">
                        <a class="nav-link js-scroll-trigger" href="dashboard.php">DASHBOARD</a>
                    </li>


                    <li class="nav-item" role="presentation">
                        <a class="nav-link js-scroll-trigger" href="mailtoheads.php?logout.php='1'">LOG OUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
     
     <div class="row register-form" style="margin-top: 8%;">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" action="../engine/engine.php" method="POST">
             <br>
               <h1>Update Form</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="name" value="<?php echo $row['name'];?>"></div>
                    
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email" value="<?php echo $row['email'];?>"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Department</label></div>
                    <div class="col-sm-6 input-column"><select class="form-control" type="text" name="department">
                       
                          <option value="UI/UX">UI/UX</option>
                          <option value="R&D">R&D</option>
                          <option value="FINANCE">FINANCE</option>
                          <option value="MARKETING">MAREKTING</option>
                          <option value="FINANCE">DEVELOPERS</option>
                          <option value="MARKETING">RESOURCE</option> 
                          <option value="MARKETING">RELATIONS</option>  
                          </select>
 
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" name="password_1"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Repeat Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" name="password_2"></div>
                </div><button class="btn btn-light submit-button" type="submit" name="update_user" style="background-color: #fed136;">Submit</button>
                 <input type="hidden" name="id" value="<?php echo $row['id'];?>">
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>
 