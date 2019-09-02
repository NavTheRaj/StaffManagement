<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ADMIN-PAGE</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>
<body id="page-top">
   
  
    
  <center>
  <div style="height:25%; width: 50%;">
  <form enctype="multipart/form-data" action="uploads.php" method="POST">
   <!--  <p>Upload your file</p> -->
    <div class="input-group">
    <input type="text" name="name"></input><br />
  </div>
    <div class="input-group">
    <input type="file" name="uploaded_file"></input><br />
  </div>
   <div class="input-group">
    <input type="submit" value="Upload" name="submit"></input>
  </div>
  </form>
  <img src="uploads/<?php?>">
 </div> 
</center>


<!-- <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" enctype="multipart/form-data" action="uploads.php" method="POST">
             <br>
               <h1>FILE UPLOADS</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="name"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Image</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="file" name="uploaded_file"></div>
                </div>
                 </div><button class="btn btn-light submit-button" type="submit" name="upload" style="background-color: #fed136;">Uploads</button>
                  <img src="uploads/<?php?>">
                </div>
              </form>
            </div>
          </div> -->

            




<?php
if(isset($_POST['submit'])){
$img="";
$username="";
$img="../uploads/".$_FILES['uploaded_file']['name'];
echo $_FILES['uploaded_file']['name']."<br>";

// print_r($_FILES);
// die();

  if(!empty($_FILES['uploaded_file'])) //$_FILES : to get the file type data.
  {
    $path = 'uploads/';
    echo $path;
    $path = $path . basename( $_FILES['uploaded_file']['name']); //gives path and filename source
    echo $path;
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) { //Destination filename
      // echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      // " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }

    echo '<img src='.$img.' height="300" width="500"/>';
  }
}
?>



<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>
</html>