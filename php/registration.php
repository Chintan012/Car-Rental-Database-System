<?php include('userServer.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>GHC Car Rental Agency</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
  <div class="header">
  	<h2>Registration</h2>
  </div>
	
  <form method="post" action="registration.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="firstName" value="<?php echo $firstName; ?>
  	</div>
    <div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="lastName" value="<?php echo $lastName; ?>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>
  	</div>
    <div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="text" name="phoneNumber" value="<?php echo $phoneNumber; ?>
  	</div>
    <div class="input-group">
  	  <label>State</label>
  	  <input type="text" name="state" value="<?php echo $state; ?>
  	</div>
    <div class="input-group">
  	  <label>City</label>
  	  <input type="text" name="city" value="<?php echo $city; ?>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>