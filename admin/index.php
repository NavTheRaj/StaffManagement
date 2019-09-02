<?php include '../engine/engine.php';?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">

    <title>Admin-Login</title>
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
            <a class="navbar-brand" href="../index.html">Managerio</a><button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" data-toggle="collapse" data-toogle="collapse" type="button"><i class="fa fa-bars"></i></button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                   <!--  <li class="nav-item" role="presentation">
                        <a class="nav-link js-scroll-trigger" href="adminlogin.php?logout='1'">LOG OUT</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>


    <div class="row register-form" style="margin-top:5%;">
        <div class="col-md-8 offset-md-2">
            <form action="../engine/engine.php" class="custom-form" method="post" name="myForm" onsubmit="return verify();">
                <h1>&nbsp;ADMIN LOGIN FORM</h1>


                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="name-input-field">Name</label>
                    </div>


                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="name" type="text" id="name">
                    </div>
                      <div class="col-sm-4 label-column"></div>
                          <div class="col-sm-6 input-column" style="text-align: center;"><span id="nameErr" style="color:red; display: block;"></span></div>
                </div>


                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="pawssword-input-field">Password</label>
                    </div>


                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="password" type="password" id="password">
                    </div>
                      <div class="col-sm-4 label-column"></div>
                          <div class="col-sm-6 input-column" style="text-align: center;"><span id="passwordErr" style="color:red; display: block;"></span></div>
                </div>
                <button class="btn btn-light submit-button" name="login_admin" style="background-color: #fed136;" type="submit">Log In</button>
            </form>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js">
    </script> 
    <script src="../assets/bootstrap/js/bootstrap.min.js">
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js">
    </script> 
    <script src="../assets/js/agency.js">
    </script>
</body>

<script>
function verify(){
  var name = document.forms["myForm"]["name"].value;
  var password = document.forms["myForm"]["password"].value; 
 
 
    if(name==""){
        document.getElementById("nameErr").innerHTML = "**Name field cannot be empty**"; 
         document.getElementById("name").focus();
         return false;
    }

     else if(password==""){
        document.getElementById("passwordErr").innerHTML = "**Password field cannot be empty**"; 
          document.getElementById("password").focus();
          return false;
    }


else
 return true;


}

</script>



</html>