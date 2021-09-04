<?php
function cUser()
{
// the array
$arrX = array("Welcome to the Quantimizer", "Aboard the Mothership","Particles loaded", "Atoms atomized");
 
// get 2 random indexes from array $arrX
$randIndex = array_rand($arrX, 2);
 
/*
* output the value for the first random index
* you can access the first index with $randIndex[0]
* (may be a bit confusing for programming beginners)
*/
echo  nl2br($arrX[$randIndex[0]]);
/*
* output the value for the secondrandom index
*/
$link = mysqli_connect("localhost", "root", "", "phplogin");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$stmt = $link->prepare("INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $password, $email);
//$stmt = $link->prepare("SELECT username FROM accounts WHERE username=?(username, password, email) VALUES (?, ?, ?)");
//https://phpdelusions.net/pdo_examples/select
//$stmt->bind_param("sss", $username, $password, $email);
// set parameters and execute
$username = $_POST['user'];
$password =$_POST['pass'];
$email = "john@example.com";
$stmt->execute();










echo "New records created successfully";

$stmt->close();
$link->close();
}
cUser();
?>