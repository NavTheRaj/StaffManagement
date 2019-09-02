<?php include '../engine/engine.php';
include '../dbconnect/dbconnect.php';
?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">

  <title>SEARCH-STAFF</title>
  <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet">
  <link href="../assets/fonts/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/css/Login-Form-Dark.css" rel="stylesheet">
  <link href="../assets/css/Pretty-Registration-Form.css" rel="stylesheet">
  <link href="../assets/css/Pretty-Search-Form.css" rel="stylesheet">
  <link href="../assets/css/Table-With-Search-1-1.css" rel="stylesheet">
  <link href="../assets/css/Table-With-Search-1.css" rel="stylesheet">
  <style type="text/css">
           /* The Modal (background) */
  .modal {
   display: none; /* Hidden by default */
   position:fixed; /* Stay in place */
   z-index: 1; /* Sit on top */
   padding-top:250px; /* Location of the box */
   left: 0;
   top: 0;
   width: 100%; /* Full width */
   height:100%; /* Full height */
   overflow: auto; /* Enable scroll if needed */
   background-color: rgb(0,0,0); /* Fallback color */
   background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
   position: relative;
   background-color: #fefefe;
   margin: auto;
   padding: 0;
   border: 1px solid #888;
   width: 80%;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
   -webkit-animation-name: animatetop;
   -webkit-animation-duration: 0.4s;
   animation-name: animatetop;
   animation-duration: 0.4s
  }

  /* Add Animation */
  @-webkit-keyframes animatetop {
   from {top:-300px; opacity:0} 
   to {top:0; opacity:1}
  }

  @keyframes animatetop {
   from {top:-300px; opacity:0}
   to {top:0; opacity:1}
  }

  /* The Close Button */
  .close {
   color: white;
   float: right;
   font-size: 28px;
   font-weight: bold;

  }

  .details{
   color: white;
   float: center;
   font-size: 28px;
   font-weight: bold;
  }

  .close:hover,
  .close:focus {
   color: #000;
   text-decoration: none;
   cursor: pointer;
  }

  .modal-header {
   padding: 2px 8px;
   background-color:#343a40;
   color: white;

  }

  .modal-body {padding: 2px 16px;}

  .modal-footer {
   padding: 2px 16px;
   background-color:#343a40;
   color: white;
  }
  </style>
</head>

<body id="page-top">



  <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">Managerio</a><button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" data-toggle="collapse" data-toogle="collapse" type="button"><i class="fa fa-bars"></i></button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav ml-auto text-uppercase">
          <li class="nav-item" role="presentation">
            <a class="nav-link js-scroll-trigger" href="index.php">MAIN MENU</a>
          </li>


          <li class="nav-item" role="presentation">
            <a class="nav-link js-scroll-trigger" href="searchmystaff.php?signout='1'">SIGN OUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <center>
    <form action="" class="search-form" method="post" style="width:50%; margin-top: 10%;">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" style="background-color: rgb(254,209,54);"><i class="fa fa-search"></i></span>
        </div>
        <input class="form-control" name="search_staff" placeholder="Search for..." type="text">

        <div class="input-group-append">
          <button class="btn btn-light" name="search_user" style="background-color: rgb(254,209,54);" type="submit">Search</button>
        </div>
      </div>
    </form>
  </center>
  <?php
      if(isset($_POST['search_staff'])){
      global $db,$search;
      $id=$_SESSION['id'];
      $search=$_POST['search_staff'];
      $sql="SELECT * FROM record_staff WHERE concat(staff_id,name,email,address,position,salary) LIKE '%$search%' AND user_id='$id'";
  if($db->query($sql)==TRUE){
      $data = $db->query($sql);
      $s_data = $data->fetch_assoc();
      $_SESSION['data'] = $s_data;
      $query=mysqli_query($db,$sql);
      $row=mysqli_fetch_assoc($query);
      $sid=$row['staff_id'];

      if(!empty($row)){
        ?>

  <center>
    <p>RESULT FOUND</p>
  </center>


  <center>
    <button class="btn btn-light" id="myBtn" style="background-color: rgb(254,209,54);">Show Details</button>
  </center>
  <?php


      }

  else
  {

      echo "<script>";
      echo "alert('Result is not in the database');";
      echo "window.location.replace('searchmystaff.php');";
      echo "</script>";


       }
  }
  }

  ?><!-- The Modal -->


  <div class="modal" id="myModal">
    <!-- Modal content -->


    <div class="modal-content">
      <div class="modal-header">
        <h2>USER INFO</h2>
        <span class="close">&times;</span>
      </div>


      <center>
        <div class="modal-body">
          <div class="modal-content">
            <div class="modal-header">
              <h4>STAFFID</h4>
              <span class="details"><?php echo $row['staff_id'];?></span>
            </div>
          </div>


          <div class="modal-content">
            <div class="modal-header">
              <h4>NAME</h4>
              <span class="details"><?php echo $row['name'];?></span>
            </div>
          </div>


          <div class="modal-content">
            <div class="modal-header">
              <h4>EMAIL</h4>
              <span class="details"><?php echo $row['email'];?></span>
            </div>
          </div>


          <div class="modal-content">
            <div class="modal-header">
              <h4>ADDRESS</h4>
              <span class="details"><?php echo $row['address'];?></span>
            </div>
          </div>


          <div class="modal-content">
            <div class="modal-header">
              <h4>PHONE NO</h4>
              <span class="details"><?php echo $row['num'];?></span>
            </div>
          </div>


          <div class="modal-content">
            <div class="modal-header">
              <h4>POSITION</h4>
              <span class="details"><?php echo $row['position'];?></span>
            </div>
          </div>


          <div class="modal-content">
            <div class="modal-header">
              <h4>SALARY</h4>
              <span class="details"><?php echo $row['salary'];?></span>
            </div>
          </div>
          <a href="../pdf/pdf.php?staff_id=<?php echo $sid;?>"><button class="btn btn-light" name="pdf" style="background-color: rgb(254,209,54);" type>Download as PDF</button></a>
        </div>
      </center>


      <div class="modal-footer">
        <h3>
        </h3>
      </div>
    </div>
  </div>
  <script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function() {
   modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
   modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
   if (event.target == modal) {
     modal.style.display = "none";
   }
  }
  </script> 
  <script src="../assets/js/jquery.min.js">
  </script> 
  <script src="assets/bootstrap/js/bootstrap.min.js">
  </script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js">
  </script> 
  <script src="../assets/js/agency.js">
  </script> 
  <script src="../assets/js/Table-With-Search-1.js">
  </script>
</body>
</html>