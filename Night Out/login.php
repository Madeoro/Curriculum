<?php
session_start();

$un = $_POST["username"];
$pw = $_POST["password"];
$conn = new PDO("mysql:host=localhost;dbname=ephp011;", "ephp011","caemahah");
$results = $conn->query("select * from users where username = '$un' AND password = '$pw' ");
$row = $results->fetch();


if ($row == false) 
{
  // The wrong password was supplied!
    echo "Invalid";
     
}
else
{
    
	 // Correct password : set up the authentication session variable
    // and store the username in it
    $_SESSION["gatekeeper"] = $un;
    $_SESSION["isadmin"] = $row["admin"];
    // Redirect to the main menu
    header ("Location: index.php");
}
?>