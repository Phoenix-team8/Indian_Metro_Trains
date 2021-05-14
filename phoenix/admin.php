<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="admin1.php" method="post">
     	<h2>ADMIN LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
          
     	<p>Admin Name</p>
     	<input type="text" name="uname" placeholder="Admin Name"><br>

     	<p>Password</p>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button><br>
     </form>
</body>
</html>