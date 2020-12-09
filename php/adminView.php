<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['email'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['email']; ?></strong> !!! </p>
        <p><a href= "addCars.php"> Add Car </a> </p>
        <p><a href= "removeCar.php"> Remove Car </a> </p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>