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
    $venueID1 = ["venueID"];
    $review = $GET["review"];
    $approved = $GET["approved"];
    $description = $GET["description"];
    $un = $GET["username"];
 
    //$conn->query("INSERT INTO review (venueID,review,description,approved,username) VALUES ($venueID1,$review,$description,$approved,$description,$un)");
    // ask nick if any form of verification is needed.
    echo "<p> The review was placed and is wating for approval from the administrator. <a href='index.html'>Back to main page</a></p>";
?>

</body>
</html>
<?php
}
?>
