<?php include '../engine/engine.php';?>
<?php
if(!isset($_SESSION['id'])){
    
    header('location:login.php');
}?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>USERPAGE</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/sigin.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php">Managerio</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#services">SERVICES</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="login.php">SIGN IN</a></li> -->
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php?signout='1'">SIGN OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('../assets/img/header-bg.jpg');">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><span>Welcome!</span></div>
                <div class="intro-heading text-uppercase"><span>&nbsp;to record manager</span></div><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="#services">Use the System</a></div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Choose Your Option</h2>
                    <h3 class="text-muted section-subheading">Please choose accordingly</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4"><a href="create.php?id= <?php echo $_SESSION['id'];?> "><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i></span></a>
                    <h4 class="section-heading"><h4>ADD STAFF</h4>
                    <p class="text-muted">&nbsp;Add a new staff to the record</p>
                </div>
                <div class="col-md-4"><a href="showmystaff.php?id= <?php echo $_SESSION['id'];?> "><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-laptop fa-stack-1x fa-inverse"></i></span></a>
                    <h4 class="section-heading">&nbsp;SHOW STAFF</h4>
                    <p class="text-muted">&nbsp;Show the staff record</p>
                </div>
                <div class="col-md-4"><a href="searchmystaff.php?id=<?php echo $_SESSION['id'];?> "><span class="fa-stack fa-4x"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-lock fa-stack-1x fa-inverse"></i></span></a>
                    <h4 class="section-heading">&nbsp;SEARCH STAFF&nbsp;</h4>
                    <p class="text-muted">&nbsp;Update and delete the staff</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
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
                
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../assets/js/agency.js"></script>
</body>

</html>