<?php include('../dbconnect/dbconnect.php');
require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
require '/usr/share/php/libphp-phpmailer/class.smtp.php';
require '/usr/share/php/libphp-phpmailer/PHPMailerAutoload.php';
?>
<?php 

session_start();
  
$errors = array();

 if(isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views']+1; 
}
else{
    $_SESSION['views']=1; 
    
// echo"views = ".$_SESSION['views']; 
}

if(isset($_POST['reg_user'])){
	user_registration();
}

if(isset($_POST['login_user'])){
	user_login();
}

if(isset($_POST['update_user'])){
	user_update();
}

if(isset($_POST['delete_user'])){
	user_delete();
}

if(isset($_POST['show_data'])){

	header('location:show.php');
}


if(isset($_POST['login_admin'])){
	admin_login();

}

if(isset($_POST['create_record'])){
	 
	record_create();
	
}

if(isset($_POST['edit_staff'])){
	staff_edit();
}

if(isset($_POST['send_mail_heads'])){
	mailToHeads();
}

if(isset($_GET['logout'])){
  
     // Redirects user to given location.
	unset($_SESSION['name']);
	session_destroy();

	echo "<script>";
    echo "alert('Logged out!!');";
    echo "window.location.replace('../admin/index.php');";
    echo "</script>";

	
}


if(isset($_GET['signout'])){
    setcookie($_SESSION['id'],"",time()-3600);
     
     
	unset($_SESSION['email']);
	session_destroy();
	echo "<script>";
    echo "alert('Logged out!!');";
    echo "window.location.replace('../index.html');";
    echo "</script>";

	
}


// if(isset($_GET['warn_admin'])){
	 
// 	echo "<script>";
//     echo "alert('Please Log out to go back to the home menu!!');";
//     echo "window.location.replace('admin.php');";
//     echo "</script>";

	
// }

// if(isset($_GET['warn_users'])){
	 
// 	echo "<script>";
//     echo "alert('Please Sign out to go back to the home menu!!');";
//     echo "window.location.replace('index.php');";
//     echo "</script>";

	
// }

function user_login(){
	 
	global $id,$name,$email,$errors,$db;
	$email = validate($_POST['email']);
	$password= validate($_POST['password']);
	 

	if(empty($email)){
		array_push($errors, "username cannot be empty");
	}
	if(empty($password)){
		array_push($errors, "password cannot be empty");
	}
	
	if(count($errors)==0){
		$password = md5($password);
		
		$sql = "SELECT * FROM  reg_user WHERE email='$email' AND  password='$password' LIMIT 1";
		 
		$result = $db->query($sql);
		
		$data=$result->fetch_assoc();

        $_SESSION['email'] = $data['email'];
        $_SESSION['id']=$data['id'];
		
		   
	if($db->query($sql)!=FALSE && $name=$_SESSION['email']){
			

	echo "<script>";
    echo "alert('Login Successful');";
    echo "window.location.replace('../staff/index.php');";
    echo "</script>";

    setcookie($_SESSION['id'],$_SESSION['email'],time()+(86400*30),"/");
  
			
		                           
		}

		else{

	echo "<script>";
    echo "alert('Login Unsuccessful');";
    echo "window.location.replace('../staff/login.php');";
    echo "</script>";
		}
	}

	}

	function user_update(){

	global $name,$email,$errors,$db,$department;
	$id=$_POST['id'];
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$department = validate($_POST['department']);
	$password_1 = validate($_POST['password_1']);
	$password_2 = validate($_POST['password_2']);

	if(empty($name)){
		array_push($errors, "username cannot be empty");
	}
	if(empty($email)){
		array_push($errors, "email cannot be empty");
	}
	if(empty($password_1)){
		array_push($errors, "password cannot be empty");
	}
	if($password_1 != $password_2){
		array_push($errors, "password do not match");
	}

	if(count($errors)==0){
		$password = md5($password_1);
		$sql = "UPDATE `reg_user` SET `name` = '$name', `email` = '$email', `password` = '$password',`department`='$department' WHERE `id` = '$id'";
		//echo $sql;
		if($db->query($sql)===TRUE){
			 echo "<script>";
    echo "alert('Updated Successfully');";
    echo "window.location.replace('../admin/dashboard.php');";
    echo "</script>";
		 
		}
	}


	}

function user_registration(){
	global $name,$email,$errors,$db,$vkey,$department;
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$department = validate($_POST['department']);
	$password_1 = validate($_POST['password_1']);
	$password_2 = validate($_POST['password_2']);
	$vkey=md5(time().$name);

	if(empty($name)){
		array_push($errors, "username cannot be empty");
	}
	if(empty($email)){
		array_push($errors, "email cannot be empty");
	}
	if(empty($password_1)){
		array_push($errors, "password cannot be empty");
	}
	if($password_1 != $password_2){
		array_push($errors, "password do not match");
	}

	if(count($errors)==0){
		$password = md5($password_1);
		$sql = "INSERT INTO `reg_user` (`name`, `email`,`department`, `password`,`vkey`) VALUES ('$name', '$email','$department','$password','$vkey')";
		//echo $sql;
		if($db->query($sql)===TRUE){

$mail = new PHPMailer;
$mail->headers = "MIME-Version: 1.0" . "\r\n";
$mail->headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
$mail->setFrom('admin@example.com');
$mail->addAddress($email);
$mail->Subject = 'Account Registration.DEPARTMENT OF '.$department;

$link='<a href="http://localhost/managerio/engine/verify.php?vkey='.$vkey.'">Confirm Your Account</a>';
$mail->Body = '<h2 style="color:red">Hello '.$name.' Click on the link for registration!</h2><a href="http://localhost/managerio/verify.php?vkey='.$vkey.'">Confirm Your Account</a>';
$mail->isHtml(true);
$mail->AltBody =$link;
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;// Always set content-type when sending HTML email


//Set your existing gmail address as user name
$mail->Username ='your@email.com';

//Set the password of your gmail address here
$mail->Password = 'Password';
if(!$mail->send()) {
  $msg="Email is not sent.";

	echo "<script>";
    echo "alert('<? echo $msg; ?>');";
    
    echo "window.location.replace('../staff/register.php');";
  echo "</script>";	
} 

else {
  


	echo "<script>";
    echo "alert('Check Your Mail For confirmation');";
    echo "window.location.replace('../staff/login.php');";
    echo "</script>";	 
    
}


		}
	}
}

 


function user_delete(){

global $db;
$id=$_POST['id'];
$sql="DELETE FROM `reg_user` WHERE id ='$id'";
// echo $sql;
if($db->query($sql)==TRUE){

    echo "<script>";
    echo "alert('Deleted Successfully');";
    echo "window.location.replace('../admin/dashboard.php');";
    echo "</script>";
	//header("location:admin.php");
}

else{
	die("Error occured");
}


}


function admin_login(){
	global $db,$name,$password;
	$name=validate($_POST['name']);
	$password=validate($_POST['password']);



	 
		
	$sql = "SELECT * FROM  admin_user WHERE name='$name' AND  password='$password' LIMIT 1";
	$result=$db->query($sql);

 
	$data=$result->fetch_assoc();

	$_SESSION['name']=$data['name'];
	$_SESSION['password']=$data['password'];

 
if($db->query($sql)!=FALSE && $name=$_SESSION['name']){
			

	echo "<script>";
    
    echo "window.location.replace('../admin/dashboard.php');";
    echo "</script>";

    setcookie($_SESSION['id'],$_SESSION['name'],time()+(86400*30),"/");
  
			
		                           
		}

		else{

	echo "<script>";
    echo "alert('Incorrect Username and Password!!');";
    echo "window.location.replace('../admin/index.php');";
    echo "</script>";
		}
	
		 
      

 

}


 function record_create(){
 global $errors,$db,$staff_name,$staff_address,$staff_num,$staff_salary,$staff_email,$staff_position,$department;
    $id=$_SESSION['id'];
 	$staff_name=validate($_POST['staff_name']);
 	$staff_address=validate($_POST['staff_address']);
 	$staff_num=validate($_POST['staff_num']);
 	$staff_salary=validate($_POST['staff_salary']);
 	$staff_email=validate($_POST['staff_email']);
 	$staff_position=validate($_POST['staff_position']);
 	// $department=$_POST['department'];


if(empty($staff_name)){
		array_push($errors, "Staff name cannot be empty");
	}
	if(empty($staff_address)){
		array_push($errors, "Address cannot be empty");
	}

	if(empty($staff_num)){
		array_push($errors, "Phone number cannot be empty");
	}

	if(empty($staff_salary)){
		array_push($errors, "Salary cannot be empty");
	}

	if(empty($staff_email)){
		array_push($errors, "Email cannot be empty");
	}
	if(empty($staff_position)){
		array_push($errors, "Postion cannot be empty");
	}

	if(count($errors)==0){

	
$sql1="SELECT * from department WHERE dept_name='$department'";
$result=$db->query($sql1);
$data=$result->fetch_assoc();
 
$dept_id=$data['dept_id'];

$sql = "INSERT INTO `record_staff` (`user_id`, `name`, `email`, `address`, `num`, `salary`, `position`,`dept_id`) VALUES ('$id', '$staff_name', '$staff_email', '$staff_address', '$staff_num', '$staff_salary', '$staff_position','$dept_id')";

		if($db->query($sql)==TRUE){

	echo "<script>";
    echo "alert('Staff Added');";
    echo "</script>";	


$mail = new PHPMailer;
$mail->headers = "MIME-Version: 1.0" . "\r\n";
$mail->headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
$mail->setFrom('admin@example.com');
$mail->addAddress($staff_email);
$mail->Subject = 'DEPARTMENT OF '.$department;

 
$mail->Body = '<h2 style="color:red">Hello '.$staff_name.'Welcome to Department of '.$department.'!</h2>';
$mail->isHtml(true);
 
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;// Always set content-type when sending HTML email


//Set your existing gmail address as user name
$mail->Username ='replynot1234@gmail.com';

//Set the password of your gmail address here
$mail->Password = 'Noreply@1234';
if(!$mail->send()) {
  $msg="Email is not sent.";

	echo "<script>";
    echo "alert('Message couldnt be send');";
    echo "</script>";	
} 

else {
  

 
        
    echo "<script>";
    echo "alert('Staff added Successfully');";
    echo "window.location.replace('../staff/index.php');";
    echo "</script>";

}
}
	
		
		else{

			 echo "<script>";
    echo "alert('There might be some error.Please try again');";
    echo "window.location.replace('../staff/create.php');";
    echo "</script>";
		}
	}
 	 
 }



 function staff_edit(){
  global $name,$email,$errors,$db,$address,$num,$post,$salary;
	$sid=$_POST['staff_id'];
	$name = validate($_POST['staff_name']);
	$email = validate($_POST['staff_email']);
	$address = validate($_POST['staff_address']);
	$num = validate($_POST['staff_num']); 
    $post = validate($_POST['staff_position']);
	$salary = validate($_POST['staff_salary']);
	if(empty($name)){
		array_push($errors, "Staff name cannot be empty");
	}
	if(empty($email)){
		array_push($errors, "email cannot be empty");
	}
	if(empty($address)){
		array_push($errors, "Address cannot be empty");
	}
	if(empty($num)){
		array_push($errors, "Contact number cannot be empty");
	}
	if(empty($post)){
		array_push($errors, "Position cannot be empty");
	}
	if(empty($salary)){
		array_push($errors, "Salary cannot be empty");
	}
	 

	if(count($errors)==0){
		 
		$sql = "UPDATE `record_staff` SET `name` = '$name', `email` = '$email', `address` = '$address', `num`='$num',`salary`='$salary',`position`='$post' WHERE `staff_id` = '$sid'";
		//echo $sql;
		if($db->query($sql)===TRUE){
	echo "<script>";
    echo "alert('Updated Successfully');";
    echo "window.location.replace('../staff/showmystaff.php');";
    echo "</script>";
		 
		}

		else{
			 echo "<script>";
    echo "alert('Update Operation Aborted');";
    echo "window.location.replace('../staff/editmystaff.php');";
    echo "</script>";
		}
	}


	}


	function mailToHeads(){
	global $email,$message,$db,$user_id,$errors;
	$user_id=$_POST['user_id'];
	$email = validate($_POST['email']);
	$message = validate($_POST['message']);
	 
	 
 
	if(empty($message)){
		array_push($errors, "Message cannot be empty");
	}
	 

	if(count($errors)==0){
		 
		$sql = "INSERT INTO `mail_heads` (`email`,`message`,`user_id`) VALUES ('$email','message','$user_id')";
		//echo $sql;
		if($db->query($sql)===TRUE){

$mail = new PHPMailer;
$mail->setFrom('admin@example.com');
$mail->addAddress($email);
$mail->Subject = 'ADMIN MESSAGE';
$mail->headers = "MIME-Version: 1.0" . "\r\n";
$mail->headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
// $link='<a href="http://localhost/managerio/verify.php?vkey='.$vkey.'">Confirm Your Account</a>';
$mail->Body=$message;
$mail->isHtml(true);
 
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;// Always set content-type when sending HTML email


//Set your existing gmail address as user name
$mail->Username ='replynot1234@gmail.com';

//Set the password of your gmail address here
$mail->Password = 'Noreply@1234';
if(!$mail->send()) {
  $msg="Email is not sent.";

	echo "<script>";
    echo "alert('<? echo $msg; ?>');";
    
    echo "window.location.replace('../admin/mailtoheads.php');";
  echo "</script>";	
} 

else {
  


	echo "<script>";
    echo "alert('Message has been sent');";
    echo "window.location.replace('../admin/dashboard.php');";
    echo "</script>";	 
    
}


		}
	}
	}

function validate($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function handle_errors(){
	global $errors;
	if(count($errors)>0){
		echo "<p style='color:red'>Correct the following errors:</p>";

		
		echo "<ul>";
		foreach ($errors as $error) {
			echo "<li style='color:red'>$error</li>";
		}
		echo "</ul>";

	}
}




 ?>
