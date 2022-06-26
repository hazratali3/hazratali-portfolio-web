<?php session_start();
require 'config.php';

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$query="INSERT INTO `aliresume`(id,name,email,subject,message)VALUES(NULL,'$name','$email','$subject','$message')";

 $con=mysqli_query($conn,$query);


if ($con){
		$_SESSION['status']="Thank you";
		$_SESSION['status_code']="success";
		$_SESSION['text'] = "Your Message Has Been Sent Successfully";

	header('location:index.php');
		  }
else {
		$_SESSION['error']="Something went wrong!";
}
?>