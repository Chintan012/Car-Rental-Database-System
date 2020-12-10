<?php include('userServer.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>GHC Car Rental Agency</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
  <div class="header">
  	<h2>Add details of the car you want to remove:</h2>
  </div>
	
  <form method="post" action="removeCar.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Car Name</label>
  	  <input type="text" name="carName" value="<?php echo $carName; ?>" >
  	</div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="remove_car">Remove Car</button>
  	</div>
  </form>
</body>
</html>