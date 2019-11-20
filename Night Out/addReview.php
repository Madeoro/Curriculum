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
  //  $venueID1 = $_GET["venueID"];
    echo "<form method='post' action='ApproveReviews.php'>";
    echo "Review: <input name='review' />";
    echo "Approved: <input name='approved'/>";
    echo "<input type='submit' value='Submit!' />";
    echo "<input type='hidden' value='venueID'/>"
    echo "</form>";

      echo "<p> The review was placed and is wating for approval from the administrator. <a href='index.html'>Back to main page</a></p>";
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