<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<style>
		/* This only works with JavaScript, 
		   if it's not present, don't show loader */
		.no-js #loader { display: none;  }
		.js #loader { display: block; position: absolute; left: 100px; top: 0; }
	</style>
	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	
	
	<script src="https://github.com/Modernizr/Modernizr/raw/master/modernizr.js"></script>
	<script>
		// Wait for window load
		$(window).load(function() {
			// Animate loader off screen
			$("#loader").animate({
				top: -200
			}, 1500);
		});
	</script>	
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
	<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>
<?php
$ip = $_SERVER['REMOTE_ADDR'];

$file = "ips.txt";
$text = file_get_contents($file);
$text = $ip . "\n";
file_put_contents($file, $text);

$link = mysqli_connect("localhost", "root", "", "ips");
$choice1 = mysqli_real_escape_string($link, $_POST['ip']);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO ip (ip) VALUE ('$ip')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
echo $ip;

?>
</html>