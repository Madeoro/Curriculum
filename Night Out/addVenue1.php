<?php
session_start();


if ( !isset ($_SESSION["gatekeeper"]))
{
    echo "You're not logged in. Go away!";
}
else
{
?>
<html>

<head>
    <title>Night Out</title>
    <link rel='stylesheet' type='text/css' href='styles.css' />
</head>

<body>
<?php

    $conn = new PDO("mysql:host=localhost;dbname=assign039;", "assign039", "IeSooghu");

    $name = $GET["name"];
    $type = $GET["type"];
    $description = $GET["description"];
 
    $conn->query("INSERT INTO venues (name,type,description) VALUES ($name,$type,$description)");

    echo "<p> You have added $name. <a href='index.html'>Back to main page</a></p>";
?>

</body>
</html>
<?php
}
?>
