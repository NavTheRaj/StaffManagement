<?php include '../engine/engine.php';?><?php include '../dbconnect/dbconnect.php';

//FOR UI/UX
$result1 = mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff WHERE user_id=7");
$row1 = mysqli_fetch_assoc($result1);
$count1 = $row1['count'];
// echo $count1;

//FOR R&D
$result2 = mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff WHERE user_id=1");
$row2 = mysqli_fetch_assoc($result2);
$count2 = $row2['count'];
// echo $count2;

//FOR FINANCE
$result3 = mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff WHERE user_id=2");
$row3 = mysqli_fetch_assoc($result3);
$count3 = $row3['count'];
// echo $count3;

//FOR MARKETING
$result4 = mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff WHERE staff_id=4");
$row4 = mysqli_fetch_assoc($result4);
$count4 = $row4['count'];
// echo $count4;

//FOR RESOURCES
$result5= mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff WHERE staff_id=6");
$row5 = mysqli_fetch_assoc($result5);
$count5 = $row5['count'];
// echo $count5;

//FOR DEVELOPERS
$result6= mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff WHERE staff_id=5");
$row6 = mysqli_fetch_assoc($result5);
$count6 = $row6['count'];
// echo $count6;

//FOR DATA ANALYSIS
$result7= mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff WHERE staff_id=3");
$row7 = mysqli_fetch_assoc($result5);
$count7 = $row7['count'];
// echo $count7;
?><?php

if(!isset($_SESSION['name'])){
    header('location:index.php');
}
?>






<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../assets/css/sidebar.css">
<link href="../assets/fonts/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--   <link href="../assets/css/Dashboard-layout-v11-1.css" rel="stylesheet"> -->
  <link href="../assets/css/Bold-BS4-Cards-with-Hover-Effect-74.css" rel="stylesheet">
 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/css/Pretty-Registration-Form.css" rel="stylesheet">
  <link href="../assets/css/Table-With-Search-1-1.css" rel="stylesheet">
  <link href="../assets/css/Table-With-Search-1.css" rel="stylesheet">
 
 
 
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
  </script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js">
  </script>

</head>
<body>
<!-- NAVIGATION BAR -->
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="height:10%;">
    <div class="container">
      <a class="navbar-brand" href="#page-top">Managerio</a><button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" data-toggle="collapse" data-toogle="collapse" type="button"><i class="fa fa-bars"></i></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav ml-auto text-uppercase">
          <li class="nav-item" role="presentation">
            <a class="nav-link js-scroll-trigger" href="dashboard.php?logout='1'">LOG OUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- NAVIGATION STOPS -->


<!-- SIDE PANEL DIVISION -->
<div class="sidebar">
  <div class="sidebar-btns">
  <a id="btn" onclick="myFunctionDash();">Dashboard<i id="icon" class="fa fa-tachometer" aria-hidden="true"></i>
</a>
  <a id="btn" onclick="myFunctionPages();">Pages<i id="icon" class="fa fa-tachometer" aria-hidden="true"></i></a>
  <a id="btn" onclick="myFunctionStaff();">Staffs<i id="icon" class="fa fa-tachometer" aria-hidden="true"></i></a>
  <a id="btn" onclick="myFunctionSearch();">Search<i id="icon" class="fa fa-tachometer" aria-hidden="true"></i></a>
  <a id="btn" onclick="myFunctionAction();">Action<i id="icon" class="fa fa-tachometer" aria-hidden="true"></i></a>
  <a id="btn" onclick="myFunctionGraph();">Curve<i id="icon" class="fa fa-tachometer" aria-hidden="true"></i></a>
  <a id="btn" onclick="myFunctionBar();">Bar<i id="icon" class="fa fa-tachometer" aria-hidden="true"></i></a>
</div>
</div>
<!-- SIDE PANEL DIVISION STOPS -->

<!-- MAIN CONTENT PANEL STARTS -->
<div class="content">
  <!-- MAIN PANEL -->
        <div class="container-fluid" id="main">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="box">
                  <img alt="Desmond" src="../assets/img/mngstf.png">
                  <div class="box-heading">
                    <h4 class="title">MANAGE STAFFS</h4><span class="post">Mailings and Updation</span>
                  </div>
                  <div class="boxContent">
                    <p class="description">Manage all the staffs as admin priviledge,sent them the message via mail whenever necessary,update and assign the role to others as per the requirements</p><a class="read" href="#">Read more<i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="box">
                  <img alt="Lee-Ann" src="../assets/img/search.png">
                  <div class="box-heading">
                    <h4 class="title">SEARCH STAFFS</h4><span class="post">Instant Search</span>
                  </div>
                  <div class="boxContent">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae libero orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed vestibulum.</p><a class="read" href="#">Read more<i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="box">
                  <img alt="John-John" src="../assets/img/pagesweb.png">
                  <div class="box-heading">
                    <h4 class="title">John-John</h4><span class="post">web developer</span>
                  </div>
                  <div class="boxContent">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae libero orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed vestibulum.</p><a class="read" href="#">Read more<i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="box">
                  <img alt="Desmond" src="../assets/img/barnew.png">
                  <div class="box-heading">
                    <h4 class="title">Desmond</h4><span class="post">web designer</span>
                  </div>
                  <div class="boxContent">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae libero orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed vestibulum.</p><a class="read" href="#">Read more<i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="box">
                  <img alt="Lee-Ann" src="../assets/img/pie.png">
                  <div class="box-heading">
                    <h4 class="title">Lee-Ann</h4><span class="post">Sales Manager</span>
                  </div>
                  <div class="boxContent">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae libero orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed vestibulum.</p><a class="read" href="#">Read more<i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="box">
                  <img alt="John-John" src="../assets/img/mail.png">
                  <div class="box-heading">
                    <h4 class="title">John-John</h4><span class="post">web developer</span>
                  </div>
                  <div class="boxContent">
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae libero orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed vestibulum.</p><a class="read" href="#">Read more<i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- MAIN PANEL STOPS -->
       



        <!-- PAGE PANEL STARTS -->
        <div class="container-fluid" id="page" style="display: none;">
          This is pages panel
        </div><!-- PAGE PANEL STOPS           -->
        



        <!-- STAFF PANEL STARTS -->
        <div class="container-fluid" id="staff" style="display: none;">
          <!-- <div class="col-md-12 search-table-col">
            <div class="form-group pull-right col-lg-4">
            </div><span class="counter pull-right"></span> -->
            <div class="table-responsive table-bordered table table-hover table-bordered results">
              <table class="table table-bordered table-hover">
                <thead class="bill-header cs">
                  <tr>
                    <th class="col-lg-1" id="trs-hd-id" style="width: 20px;">&nbsp;ID</th>
                    <th class="col-lg-2" id="trs-hd-name" style="width: 300px;">NAME</th>
                    <th class="col-lg-3" id="trs-hd-mail" style="width: 150px;">EMAIL</th>
                    <th class="col-lg-3" id="trs-hd-mail" style="width: 150px;">DEPARTMENT</th>
                    <th class="col-lg-2" id="trs-hd">ACTION</th>
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
                                      echo"<td>".$rows['department']."</td>";
                                      echo "<td><a href='edit.php?id=$id' style='text-decoration-line:none;'><button class='btn btn-success' type='submit' style='margin-left: 5px;'><i class='fa fa-check' style='font-size: 15px; color:#fed136;'></i></button></a><a href='mailtoheads.php?id=$id'><button class='btn btn-info' type='submit' style='margin-left: 5px;'><i class='fa fa-paper-plane' style='font-size: 15px; color:#fed136;'></i></button></a></td>";
                                      echo "</tr>";
                                  }
                              }

                                      ?>
                </tbody>
              </table>
            </div>
          </div>
        
        <!-- STAFFS PANEL STOPS -->




        <!-- SEARCH PANEL STARTS -->
        <div class="container-fluid" id="search" style="display: none;">
          This is search panel
        </div><!-- SEARCH PANEL STOPS -->


        <!-- GRAPH PANEL STARTS -->
        <div class="container-fluid" id="graph" style="display:none;">
          <div id="tester" style="width:1000px;height:500px;margin:auto;padding-top:10%;">
            <script>
                      TESTER = document.getElementById('tester');
                    Plotly.plot( TESTER, [{
            x: ['UI /UX','R & D','FINANCE','MARKETING','RESOURCES','DEVELOPERS','DATA ANALYSIS'],
            y: [<?php echo $count1;?>,<?php echo $count2;?>,<?php echo $count3;?>,<?php echo $count4;?>,<?php echo $count5;?>,<?php echo $count6;?>,<?php echo $count7;?>] }], {
            margin: { t: 0 } } );
            </script>
          </div>
        </div>
      </div>
    </div><!-- GRAPH PANEL STOPS -->




    <!-- BAR PANEL STARTS -->
    <div class="container-fluid" id="bar" style="display: none;">
      This is bar panel
    </div><!-- BAR PANEL STOPS     -->


  </div>
<!-- MAIN CONTENT STOPS HERE -->


<!-- JAVASCRIPT FOR DYANAMIC DIV HIDE AND DISPLAY -->
  <script>



  function myFunctionDash() {
   var x = document.getElementById("main");
   if (x.style.display === "none") {
     x.style.display = "block";
     $("#page").hide();
     $("#search").hide();
     $("#graph").hide();
     $("#bar").hide();
    
   } else {
     x.style.display = "none";
   }

   
  }





  function myFunctionStaff() {

   var x = document.getElementById("staff");

   if (x.style.display === "none") {

     x.style.display = "block";
       // alert("Staff panel");


     $("#page").hide();
     $("#search").hide();
     $("#graph").hide();
     $("#bar").hide();
     $("#main").hide();
      //$("#staff").hide();
   } else {
     x.style.display = "none";
   }

   
  }

  function myFunctionPages() {
   var x = document.getElementById("page");
   if (x.style.display === "none") {
     x.style.display = "block";
      $("#staff").hide();
     $("#search").hide();
     $("#graph").hide();
        $("#bar").hide();
           $("#main").hide();
   } else {
     x.style.display = "none";
   }
  }

  function myFunctionSearch() {
   var x = document.getElementById("search");
   if (x.style.display === "none") {
     x.style.display = "block";
      $("#staff").hide();
     $("#page").hide();
     $("#graph").hide();
     $("#bar").hide();
        $("#main").hide();
   } else {
     x.style.display = "none";
   }
  }

  function myFunctionGraph() {
   var x = document.getElementById("graph");
   if (x.style.display === "none") {
     x.style.display = "block";
     $("#staff").hide();
     $("#search").hide();
     $("#page").hide();
     $("#bar").hide();
     $("#main").hide();
   } else {
     x.style.display = "none";
   }
  }

  function myFunctionBar(){
   var x=document.getElementById("bar");
   if(x.style.display==="none"){
     x.style.display===block;
      $("#staff").hide();
     $("#search").hide();
     $("#page").hide();
     $("#graph").hide();
      $("#main").hide();
   }else{
      x.style.display = "none";
  }
  }


  </script> 
  <script src="../assets/js/jquery.min.js">
  </script> 
  <script src="../assets/bootstrap/js/bootstrap.min.js">
  </script> 
  
  
</body>
</html>
