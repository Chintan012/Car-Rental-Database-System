<?php 
	if(session_status() == PHP_SESSION_NONE) {
		session_start(); 
	}
  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  } else {
	  include('userServer.php');
	  refreshStock();
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
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>

<div class="header" style="width:70%;">
	<h2>Home Page</h2>
</div>
<div class="content" style="width:70%;">
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
		<p><strong>Please select the cars from below-</strong></p>
		</br>
		<div class="row">
			<?php $cars = $_SESSION['cars']; ?>
			<?php foreach ($cars as $car) { ?>
				<div>
					<div>
						<div>
							<h4><?=  $car[1] ?></h4>
							<img src="../images/<?= $car[2] ?>" class="img-responsive" style="height: 160px;"/>
							
							<?php
							$stock = $car[4];
							?>

							<?= "<h5 >Stock : $stock </h5>"; ?>
							</br>
							<?php if ($stock == 0) $disable = "disabled"; else $disable = ""; ?>

							<a href="./rent.php/<?= $car[0] ?>" class="btn btn-<?= $disable?>" style="margin-left: 10px;">Rent</a>
							</br>
							</br>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>