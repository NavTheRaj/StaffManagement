<?php include '../engine/engine.php';?>
 <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Login</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="../assets/css/sigin.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
</head>

<body id="page-top">

    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.html">Managerio</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                 <!--    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="adminlogin.php">ADMIN</a></li> -->
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="../index.html">HOME</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="register.php">SIGN UP</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row register-form" style="margin-top:5%;">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" action="../engine/engine.php" method="POST">
                <h1>&nbsp;LOGIN FORM</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">E-mail</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="email"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" name="password"></div>
                </div><button class="btn btn-light submit-button" type="submit" name="login_user" style="background-color: #fed136;">Log In</button></form>
                <?php handle_errors();?>
        </div>
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="/assets/js/agency.js"></script>
</body>

</html>