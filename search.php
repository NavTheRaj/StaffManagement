 <?php include 'engine.php';?>
<?php include 'dbconnect.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Search</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body id="page-top">
    <header class="masthead" style="background-image:url('assets/img/header-bg.jpg');"></header>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="search.php?warn_admin='1'">Managerio</a><button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarResponsive" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="admin.php">ADMIN-PAGE</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="admin.php?logout='1'">LOG OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <center>
    
    <form action="" method="POST" class="search-form" style="width:50%; margin-top: 10%;">
        <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text" style="background-color: rgb(254,209,54);"><i class="fa fa-search"></i></span>
            </div>
            <input class="form-control" type="text" name="search" placeholder="Search for...">
            <div class="input-group-append">
    <button class="btn btn-light" name="search_user" type="submit" style="background-color: rgb(254,209,54);">Search</button>
            </div>
        </div>
    </form>
    </center>
<?php
    if(isset($_POST['search_user'])){

    global $db,$search;
    $search=$_POST['search'];
    $sql="SELECT * FROM reg_user WHERE concat(id,name,email) LIKE '%$search%'";
if($db->query($sql)==TRUE){
    $data = $db->query($sql);
    $s_data = $data->fetch_assoc();
    $_SESSION['data'] = $s_data;
    $query=mysqli_query($db,$sql);
    $row=mysqli_fetch_assoc($query);
    $id=$row['id'];

    if(!empty($row)){
                   echo "<div class='table-responsive table-bordered table table-hover table-bordered results'>";
           echo "<table class='table table-bordered table-hover'>";
              echo   "<thead class='bill-header cs'>";
                  echo  "<tr>";
                        echo "<th id='trs-hd-id' class='col-lg-1' style='width: 20px;'>ID</th>";
                        echo "<th id='trs-hd-name' class='col-lg-2' style='width: 300px;'>NAME</th>";
                       echo "<th id='trs-hd-mail' class='col-lg-3' style='width: 150px;'>EMAIL</th>";
                        echo "<th id='trs-hd' class='col-lg-2'>ACTION</th>";

                         
                   echo "</tr>";
                echo "</thead>";
               echo "<tbody>";
                    
                    echo "<tr class='warning no-result'>";
                     echo "<td colspan='12'><i class='fa fa-warning'></i>&nbsp; No Result !!!</td>";
                   echo "</tr>";
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo"<td>".$row['email']."</td>";
                    echo "<td><button class='btn btn-success' type='submit' style='margin-left: 5px;'><a href='edit.php?id=$id' style='text-decoration-line:none;'><i class='fa fa-check' style='font-size: 15px;'></i></a></button><button class='btn btn-danger' type='submit' style='margin-left: 5px;'><a href='delete.php?id=$id'><i class='fa fa-trash' style='font-size: 15px;'></i></a></button></td>";
                    echo "</tr>";
                
            

                    
                echo "</tbody>";
                    
              
               
            echo "</table>";
       echo "</div>";
   echo "</div>";
}

else{

     echo "<script>";
    echo "alert('Result is not in the database');";
    echo "window.location.replace('search.php');";
    echo "</script>";


     }
}
}
?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/Table-With-Search-1.js"></script>
</body>

</html>