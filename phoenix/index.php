<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
          
     	<p>User Name</p>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<p>Password</p>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button><br>
          <a href="signup.php" class="ca">Create an account</a><br>
          <a href="admin.php" class="ca">Are you Admin?</a>
     </form>
</body>
</html>