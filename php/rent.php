<?php 
  include('userServer.php') 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Car Details</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>

<div class="header">
	<h2>Car Details</h2>
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
    	<p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
		<form method="post" action="confirmation.php">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<p><strong><?php echo $_SESSION['car_name']; ?></strong></p>
			</div>
			<div class="input-group">
				<img src = "<?php $_SESSION['car_pic']; ?>" style="height: 160px;"/>
				<p><?php echo $_SESSION['car_info']; ?></p>
			</div>
			<div class="input-group">
				<p><strong><?php echo $_SESSION['car_stock']; ?></strong></p>
				<p><?php echo $_SESSION['car_rate']; ?></p>
			</div>
			<div class="input-group">
				<label>Select Return Date</label>
				<input type="date" id="return_date"  value="<?php echo $return_date; ?>">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="confirm_rent">Confirm</button>
			</div>
	  </form>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>