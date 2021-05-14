<?php 
session_start(); 
$conn = mysqli_connect('localhost','root','','metro');

	$uname = $_POST['uname'];
	$pass = $_POST['password'];
	if (empty($uname)) {
		header("Location: update.php?error=OLD Train name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: update.php?error=New Train name  is required");
	    exit();
	}

	if($uname==$pass){
		header("Location: update.php?error=Invalid Input");
	}
	else{
		header("Location: update.php?success=Updated Successfully");
	}