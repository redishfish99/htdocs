<?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

//////CONNECT
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}
//GET DATA FROM FORM/LOGIN
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.  x {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
	
	//////////WHAT I WAS WONDERING, HOW TO CHECK POST IN SQL DATABASE      MUST STORE RESULTS
}
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	
	/// IF WATEVER FROM FORM IS == THE PASSWORD FROM ID PASSWORD WHERE USERNAME == ?
	if ($_POST['password'] === $password) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		
		//LOOK FURTHER WHERE TO START THE SESSIONS
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		header('Location: home.php');
	} else {
		echo 'Incorrect password!';
	}
} else {
	echo 'Incorrect username!';
}

$stmt->close();
?>
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
//use for something like inventory and editing SELECT amount FROM invetory where item 
// Attempt insert query execution
$sql = "INSERT INTO ip (ip) VALUE ('$ip')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
echo $ip;
//logger

?>
<?php
//email example must config xamppp
$namer = $_POST['username'];
$ip = $_SERVER['REMOTE_ADDR'];
$sub = "AUTH ACCESSED";
$msg = "ip == $ip username == $namer";
$rec = "redishfish99@gmail.com";
mail($rec,$sub,$msg);
?>
