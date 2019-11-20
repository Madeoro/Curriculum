<?php
session_start();

if ( !isset ($_SESSION["gatekeeper"]))
{
    echo "You're not logged in. Go away!";
}
else
{
    ?>
         <!DOCTYPE html>
<html>

<head>
    <title>Night Out</title>
    <link rel='stylesheet' type='text/css' href='styles.css' />
</head>
<body>
<?php

    echo "<form method='post' action='addVenue1.php'>";
    echo "Venue Name: <input name='name' />";
    echo "Venue Type: <input name='type'";
    echo "Venue Description: <input name='description' />";
    echo "<input type='submit' value='Go!' />";
    echo "</form>";

    echo "<p> <a href='index.php'>Back to main page</a></p>";
else
{
    echo"Go away!";
}
    ?>


</body>
</html>
    <?php
}
?>