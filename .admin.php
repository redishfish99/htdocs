<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
$message = "TEST";
echo $message;
?>
<html>
<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<header>
 <center><img src="horse.jpg" alt="Snow" width="420" height="360 class="center"></center>
</header>
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
	<li><a href="http://192.168.1.29/YouPHPTube/">PHPTube</a></li>
	</ul>
</nav>
</div>
<style>
a:hover {
  background-color: yellow;
}
</style>
<title></title>
<header>
</header>
<body>
			<h1>BACKUP SCRIPT</h1>
			<form action="backup.php" method="post">
			<input type="text" name="command" placeholder="command" id="command" required>
			<input type="submit" value="SUBMIT">
			</form>
			</body>
			<footer>
			</footer>
			