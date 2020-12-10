<?php 
	include('userServer.php');
	if (!isset($_SESSION['email'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	  }
	  if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		header("location: login.php");
	 }
	
	$basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
    $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
    if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
    $uri = '/' . trim($uri, '/');
	$routes = explode('/', $uri);
        foreach($routes as $route) {
            if(!empty(trim($route)))
                array_push($routes, $route);
        }	
	
	$car_id = $routes[2];
	echo carDetails($car_id);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Car Details</title>
	<link rel="stylesheet" type="text/css" href="../../css/styles.css">
</head>
<body>

<div class="header" style="width:70%;">
	<h2>Car Details</h2>
</div>
<div class="details">
  	 <!-- logged in user information -->
    <?php  if (isset($_SESSION['email'])) : ?>
  	

		<form method="post" action="confirmation.php" style="width:70%;">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<p><strong><?php echo $_SESSION['car_name']; ?></strong></p>
			</div>
			<div class="input-group">
				<img src = "../../images/<?php echo $_SESSION['car_pic']; ?>" style="height: 160px;"/>
				<p><?php echo $_SESSION['car_info']; ?></p>
			</div>
			<div class="input-group">
				<p><strong><?php echo $_SESSION['car_stock']; ?></strong></p>
				<p><?php echo $_SESSION['car_rate']; ?></p>
			</div>
			<div class="input-group">
				<label>Select Return Date</label>
				<input type="date" name="return_date"  value="<?php echo $return_date; ?>">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="confirm_rent">Confirm</button>
			</div>
	  </form>
    	<p> <a href="../index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>