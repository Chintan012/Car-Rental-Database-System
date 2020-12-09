<?php 
  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirmation</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>

<div class="header">
	<h2>Confirmation</h2>
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
				<label>Total</label>
				<p><?php $_SESSION['number_of_days']; ?> * <?php $_SESSION['car_rate']; ?> = <?php $_SESSION['total_amount']; ?></p>
			</div>
			<div class="header">
				<label>Enter Card Details</label>
			</div>
			<div class="input-group">
				<label>Card Number</label>
				<input type="text" name="card_number" value="<?php echo $card_number; ?>">
			</div>
			<div class="input-group">
				<label>Card Expiry</label>
				<input type="text" placeholder="MM/yy" name="card_expiry" value="<?php echo $card_expiry; ?>">
			</div>
			<div class="input-group">
				<label>CVV</label>
				<input type="text" name="card_cvv"value="<?php echo $card_cvv; ?>">
			</div>
			<div class="input-group">
				<label>Name on the Card</label>
				<input type="text" name="card_name" value="<?php echo $card_name; ?>">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="confirm">Confirm Payment</button>
			</div>
	  </form>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>