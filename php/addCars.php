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
	
  <form method="post" action="addCars.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Car Name</label>
  	  <input type="text" name="carName" value="<?php echo $carName; ?>" >
  	</div>
    <div class="input-group">
  	  <label>Car photo url</label>
  	  <input type="text" name="carPhotoURL" value="<?php echo $carPhotoURL; ?>" >
  	</div>
  	<div class="input-group">
  	  <label>Car info</label>
  	  <input type="text" name="carInfo" value="<?php echo $carInfo; ?>" >
  	</div>
    <div class="input-group">
  	  <label>Car Stock</label>
  	  <input type="text" name="carStock" value="<?php echo $carStock; ?>" >
  	</div>
    <div class="input-group">
  	  <label>Car Rate</label>
  	  <input type="text" name="carRate" value="<?php echo $carRate; ?>" >
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="add_car">Add Car</button>
  	</div>
  </form>
</body>
</html>