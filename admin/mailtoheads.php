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
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">

    <title>ADMIN-MAIL</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet">
    <link href="../assets/css/sigin.css" rel="stylesheet">
    <link href="../assets/css/untitled.css" rel="stylesheet">
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.html">Managerio</a><button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" data-toggle="collapse" data-toogle="collapse" type="button"><i class="fa fa-bars"></i></button>

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
            <form action="../engine/engine.php" class="custom-form" method="post">
                <h1>&nbsp;SEND AN EMAIL</h1>


                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="name-input-field">E-mail</label>
                    </div>


                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="email" readonly type="text" value="<?php echo $row['email'];?>">
                    </div>
                </div>


                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="pawssword-input-field">Message</label>
                    </div>


                    <div class="col-sm-6 input-column">
                        <textarea class="form-control" cols="60" name="message" rows="5" type="text"></textarea>
                    </div>
                </div>
                <button class="btn btn-light submit-button" name="send_mail_heads" style="background-color: #fed136;" type="submit">SEND MAIL TO STAFF</button> <input name="user_id" type="hidden" value="<?php echo $row['id'];?>">
            </form>
            <?php handle_errors();?>
        </div>
    </div>
    <script src="assets/js/jquery.min.js">
    </script> 
    <script src="assets/bootstrap/js/bootstrap.min.js">
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js">
    </script> 
    <script src="assets/js/agency.js">
    </script>
</body>
</html>