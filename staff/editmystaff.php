<?php include '../engine/engine.php';
include '../dbconnect/dbconnect.php';


$sid=$_GET['staff_id'];
$sql="SELECT * FROM record_staff WHERE staff_id='$sid'";
$query=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($query);

?>
 
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>User-Create</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/sigin.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
   
 

</head>

<body id="page-top">
   
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php">Managerio</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="create.php?signout='1'">SIGN OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
     
      <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" action="../engine/engine.php" method="POST" style="margin-top: 10%;">
             <br>
               <h1>Update Staff</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Staff Name</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="staff_name" value="<?php echo $row['name'];?>"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Address</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="staff_address" value="<?php echo $row['address'];?>">
                     </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Contact</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="staff_num" value="<?php echo $row['num'];?>">
                     </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" name="staff_email" value="<?php echo $row['email'];?>">
                     </div>
                </div>
                 <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Salary</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="staff_salary" value="<?php echo $row['salary'];?>">
                     </div>
                </div>
                 <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Post</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="staff_position" value="<?php echo $row['position'];?>">
                     </div>
                </div>
                <button class="btn btn-light submit-button" type="submit" name="edit_staff" style="background-color: #fed136;">Update</button>
                <input type="hidden" name="staff_id" value="<?php echo $row['staff_id'];?>">
            </form>
            <?php handle_errors();?>
        </div>
    </div>
                



    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../assets/js/agency.js"></script>
</body>

</html>