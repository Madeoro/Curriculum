<?php
$a = $_POST["username"];
$b = $_POST["password"];

$conn = new PDO ("mysql:host=localhost;dbname=ephp011;", "ephp011", "caemahah");
$userDetails = $conn->query("INSERT INTO users (username, password)
VALUES ($a,$b)");

echo "<p>You have signed up with: Username $a</p>";

?>