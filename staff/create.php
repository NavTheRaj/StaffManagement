<?php include '../engine/engine.php';
include '../dbconnect/dbconnect.php';
?><?php
$id=$_GET['id'];
$sql="SELECT * FROM reg_user WHERE id='$id'";
$query=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($query);

 ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">

    <title>Staff-Add</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet">
    <link href="../assets/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/sigin.css" rel="stylesheet">
    <link href="../assets/css/untitled.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js">
    </script>
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php">Managerio</a><button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" data-toggle="collapse" data-toogle="collapse" type="button"><i class="fa fa-bars"></i></button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link js-scroll-trigger" href="create.php?signout='1'">SIGN OUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form action="../engine/engine.php" class="custom-form" method="post" style="margin-top:10%;" name="myForm" onsubmit="return verify()">
                <br>


                <h1>Add Staff</h1>


                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="name-input-field">Staff Name</label>
                    </div>


                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="staff_name" type="text" id="name"></div>
                         <div class="col-sm-4 label-column"></div>
                          <div class="col-sm-6 input-column" style="text-align: center;"><span id="nameErr" style="color:red; display: block;"></span></div>
                    
                </div>


                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="email-input-field">Address</label>
                    </div>


                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="staff_address" type="text" id="address"></div>
                         <div class="col-sm-4 label-column"></div>
                          <div class="col-sm-6 input-column" style="text-align: center;"><span id="addressErr" style="color:red; display: block;"></span></div>
                </div>


                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="email-input-field">Contact</label>
                    </div>


                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="staff_num" type="text" id="staff_num"></div>
                         <div class="col-sm-4 label-column"></div>
                          <div class="col-sm-6 input-column" style="text-align: center;"><span id="snumErr" style="color:red; display: block;"></span></div>
                       
           
                </div>


                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="email-input-field">Email</label>
                    </div>


                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="staff_email" type="email" id="email">
                       
                    </div>
                     <div class="col-sm-4 label-column"></div>
                          <div class="col-sm-6 input-column" style="text-align: center;"><span id="emailErr" style="color:red; display: block;"></span></div>
                </div>


                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="email-input-field">Salary</label>
                    </div>


                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="staff_salary" type="text" id="salary"></div>
                          <div class="col-sm-4 label-column"></div>
                          <div class="col-sm-6 input-column" style="text-align: center;"><span id="salaryErr" style="color:red; display: block;"></span></div>
                </div>


                <div class="form-row form-group">
                    <div class="col-sm-4 label-column">
                        <label class="col-form-label" for="email-input-field">Post</label>
                    </div>


                    <div class="col-sm-6 input-column">
                        <input class="form-control" name="staff_position" type="text" id="position">
                 
                    </div>
                      <div class="col-sm-4 label-column"></div>
                          <div class="col-sm-6 input-column" style="text-align: center;"><span id="positionErr" style="color:red; display: block;"></span></div>
                </div>



                
                <button class="btn btn-light submit-button" name="create_record" style="background-color: #fed136;" type="submit">Add staff</button> <input name="<?php echo $row['department'];?>" type="hidden">
            </form>
        </div>

            <?php handle_errors();?>
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
  var email = document.forms["myForm"]["email"].value; 
    var address = document.forms["myForm"]["address"].value; 
    var salary = document.forms["myForm"]["salary"].value;
    var position = document.forms["myForm"]["position"].value;
    var staff_num = document.forms["myForm"]["staff_num"].value;
 
    if(name==""){
        document.getElementById("nameErr").innerHTML = "**Name field cannot be empty**"; 
         document.getElementById("name").focus();
         return false;
    }

     else if(address==""){
        document.getElementById("addressErr").innerHTML = "**Address field cannot be empty**"; 
          document.getElementById("address").focus();
          return false;
    }


       else if(staff_num=""){
        document.getElementById("snumErr").innerHTML = "**Position field cannot be empty**"; 
                  document.getElementById("staff_num").focus();
          return false;
    }


    else if(email==""){
        document.getElementById("emailErr").innerHTML = "**Email field cannot be empty**"; 
          document.getElementById("email").focus();
          return false;
    }

 else if(salary==""){
        document.getElementById("salaryErr").innerHTML = "**Salary field cannot be empty**"; 
          document.getElementById("salary").focus();
          return false;
    }

      else if(position=""){
        document.getElementById("positionErr").innerHTML = "**Position field cannot be empty**"; 
                  document.getElementById("position").focus();
          return false;
    }


else
 return true;


}

</script>



</html>