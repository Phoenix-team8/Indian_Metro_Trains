<!DOCTYPE html>
<html>
<head>
	<title>Enquiry Page</title>
	<link rel="stylesheet" type="text/css" href="enq.css">
<body>
	<div class="enqbox">
       <h1>Enquiry Here</h1>
       <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
       <form action="enquiry.php" method="POST">
       	    <p>Source</p>
       	    <input type="text" name="Source" placeholder="Enter Your Source Station"><br>
       	    <p>Destination</p>
       	    <input type="text" name="Destination" placeholder="Enter Your Destination Station"><br>
       	    <p>Date</p>
       	    <div class="custom-select" style="width:200px;" name="Date">
  <select>
    <option value="0">Select Day:</option>
    <option value="1">Monday</option>
    <option value="2">Tuesday</option>
    <option value="3">Wenesday</option>
    <option value="4">Friday</option>
    <option value="5">Saturday</option>
    <option value="6">Sunday</option>
  </select>
  <span class="custom-arrow"></span>
</div>
       	    <p>From</p>
       	    <input type="text" name="start_time" placeholder="Enter start_time">
       	    <p>To</p>
       	    <input type="text" name="end_time" placeholder="Enter end_time">
       	    <button type="Submit" name="go" >search</button> 
       </form>
    
</body>
</head>