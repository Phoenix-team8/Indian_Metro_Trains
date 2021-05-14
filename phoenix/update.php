<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="update1.php" method="post">
     	<h2>DATA UPDATION</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          
     	<p>OLD TRAIN NAME</p>
     	<input type="text" name="uname" placeholder="Train Name"><br>

     	<p>NEW TRAIN NAME</p>
     	<input type="text" name="password" placeholder="Train Name"><br>

     	<button type="submit">UPDATE</button><br>
     </form>
</body>
</html>