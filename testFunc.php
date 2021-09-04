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
 
// Attempt insert query execution
$sql = "INSERT INTO accounts (id, username, password, email) VALUES (6, 'user14', 'opop8282', 'testing@test.com')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
//Sleep for five seconds.
sleep(5);

//Redirect using the Location header.
header('Location: http://localhost/home.php');

//exit to prevent the rest of the script from executing
exit;
}
cUser();
?>