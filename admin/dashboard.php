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

// FOR SALARY VS STAFFS

// BETWEEN 10K -25K
$query1=mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff
WHERE salary BETWEEN 10000 AND 25000;");
$val1=mysqli_fetch_assoc($query1);
$sal1=$val1['count'];

// BETWEEN 25K -35K
$query2=mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff
WHERE salary BETWEEN 25000 AND 35000;");
$val2=mysqli_fetch_assoc($query2);
$sal2=$val2['count'];


// BETWEEN 35K -50K
$query3=mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff
WHERE salary BETWEEN 35000 AND 50000;");
$val3=mysqli_fetch_assoc($query3);
$sal3=$val3['count'];


// BETWEEN 35K -50K
$query4=mysqli_query($db,"SELECT COUNT(*) AS count FROM record_staff
WHERE salary >50000;");
$val4=mysqli_fetch_assoc($query4);
$sal4=$val4['count'];
 

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
 <!--  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport"> -->
  
<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 

  <title>ADMIN-DASHBOARD</title>
  <link href="../assets/fonts/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--   <link href="../assets/css/Dashboard-layout-v11-1.css" rel="stylesheet"> -->
 <!--  <link href="../assets/css/Dashboard-layout-v11-2.css" rel="stylesheet">
  <link href="../assets/css/Dashboard-layout-v11.css" rel="stylesheet"> -->
  <link href="../assets/css/styles.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/sidebar.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
  <link href="../assets/css/Pretty-Registration-Form.css" rel="stylesheet">
  <link href="../assets/css/Table-With-Search-1-1.css" rel="stylesheet">
  <link href="../assets/css/Table-With-Search-1.css" rel="stylesheet">
  <link href="../assets/css/gpl.css" rel="stylesheet">
  <link href="../assets/css/Bold-BS4-Cards-with-Hover-Effect-74.css" rel="stylesheet">
  <link href="../assets/css/cardscss.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/btncss.css">
<!--   <link rel="stylesheet" type="text/css" href="Dashboard-layout-v11-1.css"> -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  </script>
  <script src="jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
  </script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js">
  </script>


<!-- SEARCH FORM -->
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




.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  width:100%;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;

}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}

.active {
  background-color: green;
  color: white;
}

#btn{
  display: block;
}

#icon{
  float:right;
  width: 5%;
 
}

  </style>


<!-- SEARCH FORM  -->

</head>
<body>
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
  <div class="wrapper">
    <div class="sidebar" style="height: 0%;">
      <div class="sidebar-wrapper">
     <div class="sidebar" style="margin-block:4%; height: 100%;">




  <div class="sidebar-btns">
  <a id="btn" onclick="myFunctionDash();">Dashboard<i id="icon" class="fas fa-tachometer-alt" aria-hidden="true"></i>
</a>

 <a id="btn" class="dropbtn" onclick="myFunctionDrop();">Pages<i id="icon" class="fas fa-chevron-circle-down"></i></a>
<!-- DROPDWON CONTENT -->
    <div class="dropdown-content" id="myDropdown">
    <a href="../index.html">HOME</a>
    <a href="../staff/index.php">STAFF-HOME</a>
    <a href="../staff/login.php">SIGN-IN</a>
    <a href="../staff/register.php">REGISTER</a>
    <a href="index.php">ADMIN-LOGIN</a>
  </div>





<!-- DROPDOWN CONTENTS -->


  <a id="btn" onclick="myFunctionStaff();">Staffs<i id="icon" class="fas fa-address-card"></i></a>
  <a id="btn" onclick="myFunctionSearch();">Search<i id="icon" class="fas fa-search-plus"></i></a>
  <a id="btn" onclick="myFunctionDeparts();">Departments<i id="icon" class="fas fa-network-wired"></i></a>
  <a id="btn" onclick="myFunctionGraph();">Curve<i id="icon"class="fas fa-bezier-curve"></i></a>
  <a id="btn" onclick="myFunctionBars();">Bar<i id="icon" class="fas fa-chart-bar" ></i></a>
</div>
</div>

      </div>
    </div>
  
    <div class="main-panel" style="margin-top: 7.2%;">
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
                    <p class="description">Search the managerial staffs in no time with complex yet simple algorithm</p><a class="read" href="#">Read more<i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="box">
                  <img alt="John-John" src="../assets/img/pagesweb.png">
                  <div class="box-heading">
                    <h4 class="title">MONITOR</h4><span class="post">Pages and manitenance</span>
                  </div>
                  <div class="boxContent">
                    <p class="description">Monitor and maintain the pages throughout the sites</p><a class="read" href="#">Read more<i class="fa fa-angle-right"></i></a>
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
                    <h4 class="title">BAR GRAPHS</h4><span class="post">Data analysis</span>
                  </div>
                  <div class="boxContent">
                    <p class="description">Analyse the data of staffs versus salary ranges via bar graphs </p><a class="read" href="#">Read more<i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="box">
                  <img alt="Lee-Ann" src="../assets/img/pie.png">
                  <div class="box-heading">
                    <h4 class="title">CURVE GRAPHS</h4><span class="post">Data analysis</span>
                  </div>
                  <div class="boxContent">
                    <p class="description">Analyse another curve for department versus their number of staffs.</p><a class="read" href="#">Read more<i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="box">
                  <img alt="John-John" src="../assets/img/mail.png">
                  <div class="box-heading">
                    <h4 class="title">MAILS</h4><span class="post">Instant mail and messaging</span>
                  </div>
                  <div class="boxContent">
                    <p class="description">Send an admin message to the managerial staffs instantly.</p><a class="read" href="#">Read more<i class="fa fa-angle-right"></i></a>
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
          <div class="col-md-12 search-table-col">
            <div class="form-group pull-right col-lg-4">
             <!--  <input type="text" placeholder="Search by typing here.." class="search form-control" name="search_user"> -->
            </div><span class="counter pull-right"></span>
            <div class="table-responsive table-bordered table table-hover table-bordered results" style="border:none;">
              <table class="table table-bordered table-hover" style="width:70%; margin-left: 15%;">
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
                                      echo "<td><a href='update.php?id=$id' style='text-decoration-line:none;'><button class='btn btn-success' type='submit' style='margin-left: 5px;'><i class='fa fa-check' style='font-size: 15px; color:#fed136;'></i></button></a><a href='mailtoheads.php?id=$id'><button class='btn btn-info' type='submit' style='margin-left: 5px;'><i class='fa fa-paper-plane' style='font-size: 15px; color:#fed136;'></i></button></a></td>";
                                      echo "</tr>";
                                  }
                              }

                                      ?>
                </tbody>
              </table>
            </div>
          </div>
        </div><!-- STAFFS PANEL STOPS -->

        <!-- SEARCH PANEL STARTS -->
        <div class="container-fluid" id="search" style="display: none;">
         
  <center>
    <form name="form" class="search-form" method="post" style="width:50%; margin-top: 10%;" >
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" style="background-color: rgb(254,209,54);"><i class="fa fa-search"></i></span>
        </div>
        <input class="form-control" name="name" placeholder="Search for..." type="text">

        <div class="input-group-append">
          <button id="searchbtn" class="btn btn-light"  style="background-color: rgb(254,209,54);" type="submit">Search</button>
        </div>
      </div>
    </form>
  
  <div id="result">
   </div>
 </center>
</div><!-- SEARCH PANEL STOPS -->
 
<script>
  
  $(document).ready(function(){
    //load the current contents of search result
    //which is "Please enter a name!"
    $('#result').load('result.php').show();
 
 
    $('#searchbtn').click(function(){
        showValues();
    });
 
    $(function() {
        $('form').bind('submit',function(){
            showValues();
            return false;
        });
    });
 
    function showValues() {
        //loader will be show until result from
        //search_results.php is shown
        $('#result').html('<p></p>');
 
        //this will pass the form input
        $.post('result.php', { name: form.name.value },
 
        //then print the result
        function(result){
            $('#result').html(result).show();
        });
    }
 
});

</script>

 <!-- PAGE PANEL STARTS -->
        <div class="container-fluid" id="departs" style="display: none;">
          <!-- UI/UX -->
  <div id="cards" style="width: 80%; height:30%;margin-left:12%;">
  <div class="card text-center">
  <div class="card-header">
  <i class="fas fa-laptop"></i>
  </div>
  <div class="card-body">
    <h5 class="card-title">UI/UX</h5>
    <p class="card-text">Currently <?php echo $count1;?> staffs working here.</p>
     
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>
</div>
<!-- DEVELOPERS -->
 <div id="cards" style="width: 80%; height:30%;margin-left:12%;">
  <div class="card text-center">
  <div class="card-header">
  <b>{ }</b>
  </div>
  <div class="card-body">
    <h5 class="card-title">DEVELOPERS</h5>
    <p class="card-text">Currently <?php echo $count6;?> developers working here.</p>
    
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>
</div>



<!-- FINANCE -->
 <div id="cards" style="width: 80%; height:30%;margin-left:12%;">
  <div class="card text-center">
  <div class="card-header">
  <i class="fas fa-donate"></i>
  </div>
  <div class="card-body">
    <h5 class="card-title">FINANCE</h5>
    <p class="card-text">Currently <?php echo $count3;?> staffs working here.</p>
    
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>
</div>


<!-- MARKETING -->
 <div id="cards" style="width: 80%; height:30%;margin-left:12%;">
  <div class="card text-center">
  <div class="card-header">
  <i class="fas fa-icons"></i>
  </div>
  <div class="card-body">
    <h5 class="card-title">MARKETING</h5>
    <p class="card-text">Currently <?php echo $count4;?> staffs working here.</p>
    
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>
</div>


<!-- RESOURCES-->
 <div id="cards" style="width: 80%; height:30%;margin-left:12%;">
  <div class="card text-center">
  <div class="card-header">
<i class="fa fa-briefcase"></i>
  </div>
  <div class="card-body">
    <h5 class="card-title">RESOURCES</h5>
    <p class="card-text">Currently <?php echo $count5;?> staffs working here.</p>
    
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>
</div>


<!-- R & D-->
 <div id="cards" style="width: 80%; height:30%;margin-left:12%;">
  <div class="card text-center">
  <div class="card-header">
   <b><-R&D-></b>
  </div>
  <div class="card-body">
    <h5 class="card-title">R & D</h5>
    <p class="card-text">Currently <?php echo $count2;?> developers working here.</p>
    
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>
</div>

<!-- DATA ANALYSIS-->
 <div id="cards" style="width: 80%; height:30%;margin-left:12%;">
  <div class="card text-center">
  <div class="card-header">
<i class="fas fa-line-chart"></i>
   </div>
  <div class="card-body">
    <h5 class="card-title">DATA ANALYSIS</h5>
    <p class="card-text">Currently <?php echo $count7;?> developers working here.</p>
    
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>
</div>
        </div><!-- PAGE PANEL STOPS           -->


 

        <!-- GRAPH PANEL STARTS -->
        <div class="container-fluid" id="graph" style="display:none;">
          <div id="tester" style="width:auto;height:auto;margin:auto;padding-top:10%;margin-left:25%;">
            <script>
                      TESTER = document.getElementById('tester');
                    Plotly.plot( TESTER, [{
            x: ['UI /UX','R & D','FINANCE','MARKETING','RESOURCES','DEVELOPERS','DATA ANALYSIS'],
            y: [<?php echo $count1;?>,<?php echo $count2;?>,<?php echo $count3;?>,<?php echo $count4;?>,<?php echo $count5;?>,<?php echo $count6;?>,<?php echo $count7;?>] }], {
            margin: { t: 0 } } ); 
            </script>
                           <div style="margin-left:25%; font-weight: 5%; color:gray;">Staff-Departments Curve</div>
          </div>


         
        </div>
<!-- GRAPH PANEL STOPS -->
    <!-- BAR PANEL STARTS -->

    <div class="container-fluid" id="bars" style="display: none;">
     <div id="myDiv" style="width:auto;height:auto;margin:auto;padding-top:10%;margin-left:25%;">
      <script>
  
  var trace1 = {
    type: 'bar',
    x: ['10K-25K','25K-35K','35K-50K','ABOVE 50K'],
    y: [<?php echo $sal1;?>,<?php echo $sal2;?>,<?php echo $sal3;?>,<?php echo $sal4;?>],
    marker: {
       color: '#4780a1',
       
        line: {
            width: 3
        }
    }
};

var data = [ trace1 ];

var layout = {
 
  font: {size: 18}
};

Plotly.newPlot('myDiv', data, layout, {responsive: true});

</script>
   <div style="margin-left:25%; font-weight: 5%; color:gray;">Staff-Salary Curve</div>
</div>

    </div><!-- BAR PANEL STOPS     -->
  </div>
</div>
</div>

  <script>
  


  function myFunctionDash() {
   var x = document.getElementById("main");
   if (x.style.display === "none") {
     x.style.display = "block";
     $("#page").hide();
     $("#search").hide();
     $("#graph").hide();
     $("#bars").hide();
      $("#staff").hide();
      $("#departs").hide();
    
   } else {
     x.style.display = "none";
   }

   
  }



  function myFunctionDeparts() {
   var x = document.getElementById("departs");
   if (x.style.display === "none") {
     x.style.display = "block";
    $("#page").hide();
     $("#search").hide();
     $("#graph").hide();
     $("#bars").hide();
     $("#main").hide();
     $("#staff").hide();

    
   } else {
     x.style.display = "none";
   }

   
  }


  function myFunctionStaff() {
   var x = document.getElementById("staff");
   if (x.style.display === "none") {
     x.style.display = "block";
     $("#page").hide();
     $("#search").hide();
     $("#graph").hide();
     $("#bars").hide();
     $("#main").hide();
      $("#departs").hide();
     // $("#staff").hide();
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
        $("#bars").hide();
           $("#main").hide();
            $("#departs").hide();
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
     $("#bars").hide();
        $("#main").hide();
         $("#departs").hide();
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
     $("#bars").hide();
     $("#main").hide();
      $("#departs").hide();
   } else {
     x.style.display = "none";
   }
  }

   function myFunctionBars() {
   var x = document.getElementById("bars");
   if (x.style.display === "none") {
     x.style.display = "block";
     $("#staff").hide();
     $("#search").hide();
     $("#page").hide();
     $("#graph").hide();
     $("#main").hide();
      $("#departs").hide();
   } else {
     x.style.display = "none";
   }
  }

 


  // FOR DROPDOWN


/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunctionDrop() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

 







 </script>

  <script src="../assets/js/jquery.min.js">
  </script> 
  <script src="../assets/bootstrap/js/bootstrap.min.js">
  </script> 
  <script src="../assets/js/Dashboard-layout-v11.js">
  </script>
</body>
</html>

