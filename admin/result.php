

			<?php
			include_once("../dbconnect/dbconnect.php");

			 
			//define index
			$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "";
			 
			if(!empty($name)){
			    // this part will perform our database query
			    $query = "SELECT * FROM reg_user WHERE concat(id,name,email) LIKE '%$name%'";
	$result=$db->query($query);
			    	$row=mysqli_fetch_assoc($result);

			    if(mysqli_num_rows($result)>0) {
			    
		

			echo "<div id='cards' style='width: 80%; height:30%;margin-left:7%;margin-top: 5%;''>";
			 echo "<div class='card text-center'>";
			  echo "<div class='card-header'>";
			  echo "<i class='fas fa-staffs'></i>";
			  echo "</div>";
			  echo "<div class='card-body'>";
			   echo  "<h5 class='card-title'>STAFF DETAILS</h5>";
			    echo "<p class='card-text'>Name:".$row['name']."</p>";
			     echo "<p class='card-text'>Department:".$row['department']."</p>";
			      echo "<p class='card-text'>Email:".$row['email']."</p>";
			    
			 echo "</div>";
			  echo "<div class='card-footer text-muted'>";
			    
			  echo "</div>";
			echo "</div>";
			echo "</div>";

 
	 }

			    else{
			 
			 echo "<script>";
    echo "alert('Result not found!!');";
  
    echo "</script>";
			    }

			}
			 

			?>