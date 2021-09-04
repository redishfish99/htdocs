<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
	 <script src="widget.js"></script>
	  <script>
        var botmanWidget = {
            frameEndpoint: 'chat.html',
            introMessage: 'Hello',
            chatServer : 'botman.php', 
            title: 'BotMan'
        }; 
    </script>
		<nav class="navtop">
			<div>
				<h1>Website Title</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="vertical-menu">
<nav>
    <ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="http://192.168.1.189:9999">Botnet</a></li>
	<li><a href="http://192.168.1.42/temp03/codoforum.v.4.7.0/index.php?u=">Forum</a></li>
	<li><a href=".admin.php">Admin Tools</a></li>
	<li><a href="https://www.stressthem.to/dashboard">Stresser</a></li>
	<li><a href="ind.php">Upload</a></li>
	<li><a href="http://192.168.1.42/temp03/phpfreechat-2.1.0/phpfreechat-2.1.0/examples">Chat</a></li>
	<li><a href="http://192.168.1.42/temp03/blog.php">Blog</a></li>
	<li><a href="http://192.168.1.42/temp03/randchoice.php">RandomChoiceTest</a></li>
	<li><a href="http://192.168.2.8/YouPHPTube/">PHPTube</a></li>
	</ul>
</nav>
</div>
		<div class="content">
		<?php
		$arrX = array("Welcome to the Quantimizer", "Aboard the Mothership","Particles loaded", "Atoms atomized");
 
// get 2 random indexes from array $arrX
$randIndex = array_rand($arrX, 2);
 
/*
* output the value for the first random index
* you can access the first index with $randIndex[0]
* (may be a bit confusing for programming beginners)
*/
echo  nl2br($arrX[$randIndex[0]]);
?>
			<h2>Home Page</h2>
			<p>Welcome back, <?php $_SESSION['name']?></p>
			<p><?php 
			$mes = "welcome back";
			echo $mes;?></p>
			<p><?php echo $_SERVER['REMOTE_PORT']; ?></p>
			<p><?php echo $_SERVER['HTTP_USER_AGENT'];?></p>
		</div>
	</body>
</html>