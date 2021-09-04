<?php


//$ip = $_SERVER['REMOTE_ADDR'];
$username = $_POST['user'];
//$file = "ips.txt";
//$text = file_get_contents($file);
//$text = $ip . "\n";
//file_put_contents($file, $text);

$link = mysqli_connect("localhost", "root", "", "phplogin");
$choice1 = mysqli_real_escape_string($link, $_POST['user']);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//use for something like inventory and editing SELECT amount FROM invetory where item 
// Attempt insert query execution
//LOGIN EXAMPLE
//Select pass from account where user = user 
//if $pass = $_POST['pass'] 
$sql = "SELECT * FROM accounts WHERE ('$username') = username";
$result = mysqli_query($link, $sql);
//printf($result);
//print_r($result);
$user = mysqli_fetch_assoc($result);
print_r($user); 

//printf(mysqli_query($sql));
//echo $result;
//$result = mysqli_query($sql);
//echo [$result];
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
