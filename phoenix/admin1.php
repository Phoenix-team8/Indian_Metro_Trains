<?php 
session_start(); 
$conn = mysqli_connect('localhost','root','','admin');

	$uname = $_POST['uname'];
	$pass = $_POST['password'];

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{

        
		$sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
      
            	header("Location: update.php");
		        exit();
            }else{
				header("Location: admin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: admin.php?error=Incorect User name or password");
	        exit();
		}
	}
	